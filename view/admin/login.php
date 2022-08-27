
<link rel="stylesheet" href="/projectMVC/libraries/boot/css/bootstrap.min.css">
<script src="/projectMVC/libraries/boot/js/bootstrap/.min.js"></script>
<base href="/projectMVC/">
<style>
   html{
     font-style:Times ;
    font-size: medium;
   }
   .form-group {
   
  width:600px;
  border: 10px solid blue;
  padding: 40px;
  margin: 100px;
  height: 60%;
}
  </style>
        
 <html>   
  <head>
 
</head>      
<center>
  
<div class="form-group" ">
	
	<form method="POSt" action="Admin/LoginCheck">
		<h2>Admin Login Pannel</h2>
        User Name:-<input type="text" name="username"  class="form-control"id="" placeholder="Enter your User Name"/><br>
		 Password:-<input type="password" name="password"  class="form-control" placeholder="Enter Your  password" value=""id ="password"><br>
		 Confirm Password:-<input type="password" name="rpassword"  class="form-control" placeholder="Confirm Your password" id="confirm_password"><br>
		<button type="submit" class="btn btn-primary"name="submit" >Login</button>
		
	</form>

</div>
</html>