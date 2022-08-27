<?php
session_start();
class AdminController{

	private $control;
     function __construct(){
        require_once "model/control.php";
        $this->control=new control();
         }
		 function Dashboard(){
			if(isset($_SESSION['aid'])){
				
				$result=$this->control->selectBN();	
			include 'view/admin/dashboard.php';
		}else{
			header('location:Login');
		}
		}
			
	function Login(){
		require_once './view/admin/login.php';
	

	}
	function Update(){
		if(isset($_SESSION['aid'])) {
		require_once './view/admin/updateP.php';
	}else{
		header('location:Login');
	}

	}
			
	function Profile(){
		if(isset($_SESSION['aid'])) {
			$result=$this->control->selectProfile();
			include'./view/admin/profile.php';
		}else{
			header('location:Login');
		}
		 }
	

	
			
	
	

	
	function Logout(){
		require_once './view/admin/logout.php';
	

	}
	function SearchB(){
		if(isset($_SESSION['aid'])) {
		
	}else{
		header('location:Login');
	}
		}
	function RegisterUser(){
		if(isset($_SESSION['aid'])) {
		$result=$this->control->selectRegisterUser();
		require_once './view/admin/reguser.php';
	}else{
		header('location:Login');
	}
	}
	function LoginCheck(){
		//login data will be received here
	
	     if(isset($_POST["submit"])){
		    $username=$_POST["username"];
	      	$password=$_POST["password"];
	      //validation check
		       if(empty($username) || empty($password)){
			         echo  "<script> alert ('Username or Password Empty!'); 
						  location='Login';
						</script>";
		          }
	         else{
			  //set values to address
			    $this->control->username=$username;
			    $this->control->password=$password;
			  
                $result=$this->control->CheckAdmin();
				$row=$result->fetch_assoc();
                $auid=$row['id'];
	            $rowcount=mysqli_num_rows($result);
		       }
	        if($rowcount==0){
		      echo "<script> alert ('Login Failed!'); 
			      location='Login';
			     </script>";
	           }
	             else{
		              echo  "<script> alert (' login sucessful'); 
		              location='Dashboard/Admin';
	                  </script>";
					  session_start();
					  
					  $_SESSION['aid']=$auid;
	                }
	        	}
	      }
		  function Search(){
			if(isset($_POST["submit"])){
				$search=$_POST["search"];
			     
				 
				if(empty($search)){
					echo  "<script> alert ('Enter a Search Value!'); 
						 location='Dashboard';
					   </script>";
				 }
			else{
				$this->control->search=$search;
				$result=$this->control->searchUser();
				$row = mysqli_num_rows($result);
				if($row>0){
					echo  "<script> alert (' Your search result is found'); 
					
					</script>";
					$result=$this->control->searchUser();
	             include 'view/admin/search.php';
					
					
					 }
					   else{
							
							echo "<script> alert ('Search data not Found!'); 
							location='Dashboard';
						   </script>";
						  }
			}
		}
		  }
		  function insertImage(){ 
			if(isset($_POST["submit"])){
				$msg = "";
				  $profileImage = $_FILES['profileImage']['name'];
				  $target ="image/userprofile/".basename($profileImage);
	
				  if (move_uploaded_file($_FILES['profileImage']['tmp_name'], $target)) {
					  $msg = "Image uploaded successfully";
					}else{
					  $msg = "Failed to upload profileImage";
					}
			
			
				$this->control->profileImage=$profileImage;
				$result=$this->control->insertP();
				if($result===TRUE){
					echo "<script> alert ('Inserted Profile Successfully!'); 
					location='Profile';
					</script>";
					 
				}else{
					echo "<script> alert ('Failed to Insert Profile!')
					location='Profile';
					</script>";
					
				}
			
		}	
	}
	function UpdateData(){
			
		
		if(isset($_POST["submit"])){
		$op=$_POST["op"];
		$password=$_POST["password"];
		$rpassword=$_POST["rpassword"];
		//send data to address
		$this->control->op=$op;
		$this->control->password=$password;
		$this->control->rpassword=$rpassword;
		$result=$this->control->CheckP();
		$OP= mysqli_num_rows($result);
		if ($OP>0){
			if ($password===$rpassword) {
		 $this->control->password=$password;
		 $this->control->rpassword=$rpassword;
		 $result=$this->control->updatePassword();
			if($result==TRUE){
			  echo "<script> alert ('Updated Successfully!'); 
				 location='Dashboard';
				 </script>";
			}else{
			  echo "<script> alert ('Failed to Update!'); 
				 location='Update';
				 </script>";
			}
		}else {
			echo"<script>
			alert('password are not matching');
			location='Update';
		 </script>";
		}
	}else {
		echo"<script>
			alert('password are not matching');
			location='Update';
		 </script>";
	}
		}

  }
}
?>