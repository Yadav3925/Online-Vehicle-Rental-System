<?php
session_start();
   class DashboardController{
	
   	   function Navigation(){
		include'./view/shared/Navigationbar.php';
	
	 }
   	   
   	   function Admin(){
		if(isset($_SESSION["aid"])) {
			
   	   		include'./view/shared/admin dashboard.php';
		}else{
			header("Location:../Admin/Login");
   	   }
	}
		  function about(){
			include'./view/shared/aboutus.php';
		  }
   }
?>