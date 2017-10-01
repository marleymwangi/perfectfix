<?php
/* try to connect */
$inbox = imap_open('{imappro.zoho.com:993/imap/ssl/novalidate-cert} /Inbox','trans@perfectfix.co','perfectfix') or die('Cannot connect to perfectfix domain');
/* grab emails */
$emails = imap_search($inbox,'UNSEEN');
/* if emails are returned, cycle through each... */
if($emails) {                
        /* put the newest emails on top */
        rsort($emails);        
        /* for every email... */
        foreach($emails as $email_number) {                
                /* get information specific to this email */
                $overview = imap_fetch_overview($inbox,$email_number,0);
                $message = quoted_printable_decode(imap_fetchbody($inbox, $email_number, 1));      
                /* output the email header information */
                $seens[] = $overview[0]->seen;
                $froms[] = $overview[0]->from;
                
                /* output the email body */
                $messages[] = $message;
                $words = explode(" ", $message);
                $transdetails[]=array($words[0],filter_var($words[7],FILTER_SANITIZE_NUMBER_INT),ltrim($words[4], 'Ksh'));


                /* change the status */
                /* change the status */
                $status = imap_setflag_full($inbox, $overview[0]->msgno, "\Seen \Flagged");
                                
        }



include_once 'dbh.inc.php';
if ($emails) {
foreach ($transdetails as $details) {

        $phoneNo = $details[1];
        $conCode = $details[0];
        $amount = $details[2];
        $sql = "SELECT * FROM confirmation WHERE transcode = '$conCode';";
        $result = mysqli_query ($conn, $sql);
        $resultcheck = mysqli_num_rows ($result);

        if ($resultcheck < 1) {
                $sql = "INSERT INTO confirmation (transcode, phoneNo, amount) VALUES ('$conCode', '$phoneNo', '$amount');";
                $result = mysqli_query ($conn, $sql);
        }


}
}

}

imap_close($inbox);

?>