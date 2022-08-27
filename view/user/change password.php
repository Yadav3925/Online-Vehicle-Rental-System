<?php
include 'view/shared/Navigationbar.php';
?>
<base href="/projectMVC/">
<link rel="stylesheet" href="/projectMVC/libraries/boot/css/bootstrap.min.css">
<script src="/projectMVC/libraries/boot/js/bootstrap/.min.js"></script>

<style>
   html{
     font-style=Times Romen;
    font-size: medium;
   }
   .form-group {
  width:900px;
  border: 10px solid blue;
  padding: 40px;
  margin: 20px;
}
  </style>
        
 <html>  
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="viewport" content="width=device-width, initial-scale=1">       
<center>
  
<div class="form-group" ">
	
	<form method="POSt" action="User/UpdateData">
		<h2>Change Password</h2>
    Current Password:-<input type="text" name="op"  class="form-control"id="" placeholder="Enter Current password"/><br>
		New Password:-<input type="password" name="password"  class="form-control" placeholder="Enter New password" value=""id="passaword"><br>
		 Confirm Password:-<input type="password" name="rpassword"  class="form-control" placeholder="Confirm password" id="confirm_password"><br>
		<button type="submit" class="btn btn-primary"name="submit" >Change Password</button>
		
	</form>
</center>
</div>
</html>
<script type="text/javascript">
  var password = document.getElementById("password");
   confirm_password = document.getElementById("confirm_password");

function validatePassword(){
  if(password.value != confirm_password.value) {
    confirm_password.setCustomValidity("Passwords Don't Match");
  } else {
    confirm_password.setCustomValidity('');
  }
}

password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;
</script>