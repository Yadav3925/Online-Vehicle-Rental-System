<?php
include 'view/shared/Navigationbar.php';
?>
<!DOCTYPE html>   
<html>   
<head>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">  
<base href="/projectMVC/">
<meta name="viewport" content="width=device-width, initial-scale=1">  
<div class="card bg-light">
<article class="card-body mx-auto" style="max-width: 400px;">
    <h4 class="card-title mt-3 text-center">Create Account</h4>
    
    <form action="User/RegisterData" method="POST">
    <div class="form-group input-group">
        <div class="input-group-prepend">
            <span class="input-group-text"> <i class="fa fa-user"></i> </span>
         </div>
        <input name="name" class="form-control" placeholder="Full name" type="text" required>
    </div>


    <div class="form-group input-group">
        <div class="input-group-prepend">
            <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
         </div>
        <input name="email" class="form-control" placeholder="Email address" type="email" required>
    </div> 

    <div class="form-group input-group">
        <div class="input-group-prepend">
            <span class="input-group-text"> <i class="fa fa-home"></i> </span>
         </div>
        <input name="address" class="form-control" placeholder="Address" type="text" required>
    </div> 


    <div class="form-group input-group">
        <div class="input-group-prepend">
            <span class="input-group-text"> <i class="fa fa-phone"></i> </span>
        </div>
        <select class="custom-select" style="max-width: 120px;">
            <option selected="">+971</option>
            <option value="1">+972</option>
            <option value="2">+198</option>
            <option value="3">+701</option>
             <option value="3">+977</option>
        </select>
        <input name="number" class="form-control" placeholder="Phone number" type="text" required>
    </div> 

    
    <div class="form-group input-group">
        <div class="input-group-prepend">
            <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
        </div>
        <input name="password" class="form-control" placeholder="Create password" type="password" required>
    </div> 


    <div class="form-group input-group">
        <div class="input-group-prepend">
            <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
        </div>
        <input name="cpassword" class="form-control" placeholder="Repeat password" type="password" required>
    </div>


    <div class="form-group">
        <button type="submit" name="submit" class="btn btn-primary btn-block"> Create Account  </button>
    </div>      
    <p class="text-center">Have an account? <a href="login.php">Log In</a> </p>                                                                 
   </form>
  </div> 

</body>
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
