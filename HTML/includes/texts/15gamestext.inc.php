<?php
// Be sure to include the file you've just downloaded
require_once('AfricasTalkingGateway.php');
$send = false;
include '15gamesnum.inc.php';
include 'get15games.php';

if ($send == true) {

// Specify your authentication credentials
$username   = "PerfectFix";
$apikey     = "03a98576896b1108b160d70431838ff90b917661dd73372d26ab4c507922a16e";

// Specify the numbers that you want to send to in a comma-separated list
// Please ensure you include the country code (+254 for Kenya in this case)
$recipients = $phoneList;

// And of course we want our recipients to know what we really do
$message    = "Good morning

Package 3: 15 games predictions are as follows.

a. $home[0] $homepred[0]% X $drawpred[0]% $away[0] $awaypred[0]%

b. $home[1] $homepred[1]% X $drawpred[1]% $away[1] $awaypred[1]%

c. $home[2] $homepred[2]% X $drawpred[2]% $away[2] $awaypred[2]%

d. $home[3] $homepred[3]% X $drawpred[3]% $away[3] $awaypred[3]%

e. $home[4] $homepred[4]% X $drawpred[4]% $away[4] $awaypred[4]%

f. $home[5] $homepred[5]% X $drawpred[5]% $away[5] $awaypred[5]%

g. $home[6] $homepred[6]% X $drawpred[6]% $away[6] $awaypred[6]%

h. $home[7] $homepred[7]% X $drawpred[7]% $away[7] $awaypred[7]%

i. $home[8] $homepred[8]% X $drawpred[8]% $away[8] $awaypred[8]%

j. $home[9] $homepred[9]% X $drawpred[9]% $away[9] $awaypred[9]%

k. $home[10] $homepred[10]% X $drawpred[10]% $away[10] $awaypred[10]%

l. $home[11] $homepred[11]% X $drawpred[11]% $away[11] $awaypred[11]%

m. $home[12] $homepred[12]% X $drawpred[12]% $away[12] $awaypred[12]%

n. $home[13] $homepred[13]% X $drawpred[13]% $away[13] $awaypred[13]%

o. $home[14] $homepred[14]% X $drawpred[14]% $away[14] $awaypred[14]%

All the best. Thank you and have a nice day.
#PerfectFix

";

// Create a new instance of our awesome gateway class
$gateway    = new AfricasTalkingGateway($username, $apikey);

/*************************************************************************************
  NOTE: If connecting to the sandbox:
  1. Use "sandbox" as the username
  2. Use the apiKey generated from your sandbox application
     https://account.africastalking.com/apps/sandbox/settings/key
  3. Add the "sandbox" flag to the constructor
  $gateway  = new AfricasTalkingGateway($username, $apiKey, "sandbox");
**************************************************************************************/
// Any gateway error will be captured by our custom Exception class below, 
// so wrap the call in a try-catch block
try 
{ 

  // Thats it, hit send and we'll take care of the rest. 
  $results = $gateway->sendMessage($recipients, $message);
            
  foreach($results as $result) {
    // status is either "Success" or "error message"
    echo " Number: " .$result->number;
    echo " Status: " .$result->status;
    echo " MessageId: " .$result->messageId;
    echo " Cost: "   .$result->cost."\n";

  }

}

catch ( AfricasTalkingGatewayException $e )
{
  echo "Encountered an error while sending: ".$e->getMessage();
}
// DONE!!! 
}else{
  echo"nothing to send";
}