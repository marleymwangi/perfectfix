<li class="s-header__nav-menu-item "><a class="s-header__nav-menu-link s-header__nav-menu-link-divider <?php if ($page=='predictions') {echo'-is-active'; }?>" href="signup.php">Create an Account</a></li>
<div class="s-header__nav-menu-item ">
	<div class="col-sm-12 col-xs-12">
	<form class="input-group"  action="includes/signin.inc.php" method="POST">	    
	    <div class="g-text-center--xs g-margin-b-5--xs red">
	    	<input type="text" class="form-control s-form-v1__input g-radius--left-50 g-radius--right-50" id="form-menu"  placeholder="UserName/Email" name="userName">
	        <input type="password" class="form-control s-form-v1__input g-radius--left-50 g-radius--right-50" id="form-menu" placeholder="Password" name="passwrd">
	    </div>
	    <div class="g-text-center--xs">
	        <button type="submit" class="text-uppercase s-btn s-btn--xs s-btn--white-bg g-radius--50 g-font-weight--700" id="form-menu" name="submit">Sign In</button>
	    </div>
	</form>
	</div>
</div>