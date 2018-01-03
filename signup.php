<?php
require("./include/membersite_config.php");
include "Bheader.php";
#include "Brequire1.php";
if(isset($_POST["username"]))
{
   if($fgmembersite->RegisterUser())
   {
        $fgmembersite->RedirectToURL("thank-you.html");
   }
}
?>   


<div class="container">    
<form id="register" class="form-horizontal"  role="form" method="post" action='<?php echo $fgmembersite->GetSelfScript(); ?>' accept-charset='UTF-8'>

<legend>Sign Up</legend>



<div class='short_explanation'>*Required: </div>
 
 <input type='hidden' class='spmhidip' name='<?php echo $fgmembersite->GetSpamTrapInputName(); ?>' />

<div><span class='error'><?php echo $fgmembersite->GetErrorMessage(); ?></span></div>

<div class="form-group">
    <label class="control-label col-sm-2" for="name">Full Name:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="name" placeholder="Enter your name" name="name" value="<?php echo $fgmembersite->SafeDisplay('name') ?>" maxlength="50">
      <span id='register_name_errorloc' class='error'></span>
    </div>
  </div>



  
  <div class="form-group">
    <label class="control-label col-sm-2" for="email">Email:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="email" placeholder="Enter email" name="email" value="<?php echo $fgmembersite->SafeDisplay('email') ?>" maxlength="50">
      <span id='register_email_errorloc' class='error'></span>
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-2" for="username">Username: </label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="username" placeholder="Enter your username" name="username" value="<?php echo $fgmembersite->SafeDisplay('username') ?>" maxlength="50">
      <span id='register_username_errorloc' class='error'></span>
    </div>
  </div>
 
  <div class='form-group'>
    <label class="control-label col-sm-2" for='password'>Password*:</label>
    <div class= 'col-sm-10'>
    
    <input type='password' class="form-control" name='password' placeholder="Enter password" id='password' maxlength="50" />
    <div id='register_password_errorloc' class='error' style='clear:both'></div>
    </div>   
    
</div>

<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <div class="checkbox">
        <label><input type="checkbox"> Remember me</label>
      </div>
    </div>
  </div>
  
  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
    <button type="submit" class="btn btn-default">Submit</button>
    </div>
  </div>
 

</form>
</div><br><br>

<!-- client-side Form Validations:
Uses the excellent form validation script from JavaScript-coder.com-->

<script type='text/javascript'>
// <![CDATA[
   
    
    var frmvalidator  = new Validator("register");
    frmvalidator.EnableOnPageErrorDisplay();
    frmvalidator.EnableMsgsTogether();
    frmvalidator.addValidation("name","req","Please provide your fullname");

   

    frmvalidator.addValidation("email","req","Please provide your email address");

    frmvalidator.addValidation("email","email","Please provide a valid email address");

    frmvalidator.addValidation("username","req","Please provide your username");

    /**frmvalidator.addValidation("username","req","Please provide a username"); **/
    
    frmvalidator.addValidation("password","req","Please provide a password");

// ]]>
</script>

<?php 
include "Bfooter.php";
?>
</body>
</html>