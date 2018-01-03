<?php
require("./include/membersite_config.php");

include "Bheader.php";

if(isset($_POST["username"]))
{
   if($fgmembersite->Login())
   {
        $fgmembersite->RedirectToURL("Social.php");
   }
}

?>


                      
            <div class="container special"> 
            <!--<h2 class="panel panel-heading text-center">Login to your Bloom Account</h2>-->   
<form id="login" class="form-horizontal" role="form" method="post" action="<?php echo $fgmembersite->GetSelfScript();?>" accept-charset="UTF-8">

  <legend>Login</legend>

<div class='short_explanation'>* required fields</div>

<input type='hidden' name='submitted' id='submitted' value='1'/>



<div><span class='error'><?php echo $fgmembersite->GetErrorMessage(); ?></span></div>

            <div class="form-group">
    <label class="control-label col-sm-2" for="username">Username:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="username" placeholder="Enter username" name="username" maxlength="50" value="<?php echo $fgmembersite->SafeDisplay('username') ?>">
      <span id='login_username_errorloc' class='error'></span>
    </div>
    
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="password">Password:</label>
    <div class="col-sm-10"> 
      <input type="password" class="form-control" id="password" placeholder="Enter password" name="password" maxlength="50">
      <span id='login_password_errorloc' class='error'></span>
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
      <button type="submit" class="btn btn-default">Log In</button>
    </div>
  </div>
  
  <div class='short_explanation'><a href='reset-pwd-req.php'>Forgot Password?</a></div>
</form>
</div><br><br>

<script type='text/javascript'>
// <![CDATA[

    var frmvalidator  = new Validator("login");
    frmvalidator.EnableOnPageErrorDisplay();
    frmvalidator.EnableMsgsTogether();

    frmvalidator.addValidation("username","req","Please provide your username");
    
    frmvalidator.addValidation("password","req","Please provide the password");

// ]]>
</script>
  


<?php
include "Bfooter.php";

?>  

</body>
</html>
