<?php
  include 'view/shared/admin dashboard.php';
?>
<base href="/projectMVC/">


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
<div class="page-content p-0 mr-1" id="content">
<div class="form-group" ">
	
	<form method="POSt" action="Admin/UpdateData">
		<h2>Change Password</h2>
    Current Password:-<input type="text" name="op"  class="form-control"id="" placeholder="Enter Current password"/><br>
		New Password:-<input type="password" name="password"  class="form-control" placeholder="Enter New password" value=""id="passaword"><br>
		 Confirm Password:-<input type="password" name="rpassword"  class="form-control" placeholder="Confirm password" id="confirm_password"><br>
		<button type="submit" class="btn btn-primary"name="submit" >Change Password</button>
		
	</form>
</center>
</div>
</html>