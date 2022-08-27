<?php
 
class UserController{
	private $user;
     function __construct(){
        require_once "model/user.php";
        $this->user=new user();
         }
	 function Landing(){
		 include 'view/user/landing.php';
		 }
		 function AboutUs(){
			include 'view/user/aboutus.php';
			}
		 
     function Login(){
		
         include'./view/user/login form.php';
	     }
		 function Logout(){
		
			include'./view/user/logout.php';
			}
	 function MyProfile(){
		
		if(isset($_SESSION["id"])) {
			$result=$this->user->selectProfile();
			include'./view/user/myprofile.php';
			}else{
			header("Location:Login");
		 }
		}
	 function Create(){
		include'./view/user/create account.php';

	     }
	 public function Update(){
		if(isset($_SESSION["id"])) {
		$result=$this->user->selectProfile();
	     include'./view/user/update profile.php';
		} else{
			header("Location:Login");
		 
		}
	} 
	 function ChangeP(){
		if(isset($_SESSION["id"])) {
	     include'./view/user/change password.php';
        
	    } else{
			header("Location:Login");
		 
		}
	}

		function ForgotP(){
			include'./view/user/forgote.php';

		}
	function RegisterData(){
		
		//registration data will be received here
		if(isset($_POST["submit"])){
            $name=$_POST["name"];
            $email=$_POST["email"];
            $address=$_POST["address"];
            $number=$_POST["number"];
            $password=$_POST["password"];
            $cpassword=$_POST["cpassword"];
          // /$pass = password_hash($password, PASSWORD_BCRYPT);
            // $cpass = password_hash($cpassword, PASSWORD_BCRYPT);
               
			 	//validationr
				 $this->user->password=$password;
				 $this->user->email=$email;
				   $result=$this->user->ChecKEP();
				   $emailcount = mysqli_num_rows($result);
				   if ($emailcount>0) {
					echo "email already exist";
				}else{
				   if ($password===$cpassword) {
   
		      
				$this->user->name=$name;
				$this->user->email=$email;
				$this->user->address=$address;
				$this->user->number=$number;	
			    $this->user->password=$password;
		         $this->user->cpassword=$cpassword;
		 		$result=$this->user->RegisterUser();
			   
		   if($result==TRUE){
			echo "<script> alert ('registration succeed');
			location='Login';
			</script>";
		   }
		    else{
				

			   echo"<script>alert('failed to insert!');
			   location='Create';
			    </script>";
			    }
				 
			}else{
			echo"<script>
			alert('password are not matching');
		 </script>";

		  }
			}
			}
	     }
		
	    function UpdateData(){
			
		
			if(isset($_POST["submit"])){
			$op=$_POST["op"];
			$password=$_POST["password"];
			$rpassword=$_POST["rpassword"];
			//send data to address
			$this->user->op=$op;
			$this->user->password=$password;
			$this->user->rpassword=$rpassword;
			$result=$this->user->CheckP();
			$OP= mysqli_num_rows($result);
			if ($OP>0){
				if ($password===$rpassword) {
			 $this->user->password=$password;
			 $this->user->rpassword=$rpassword;
			 $result=$this->user->updatePassword();
				if($result==TRUE){
				  echo "<script> alert ('Updated Successfully!'); 
					 location='Landing';
					 </script>";
				}else{
				  echo "<script> alert ('Failed to Update!'); 
					 location='ChangeP';
					 </script>";
				}
			}else {
				echo"<script>
				alert('password are not matching');
				location='ChangeP';
			 </script>";
			}
		}else {
			echo"<script>
				alert('password are not matching');
				location='ChangeP';
			 </script>";
		}
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
			    $this->user->username=$username;
			    $this->user->password=$password;
			  
                $result=$this->user->CheckUser();
				$row=$result->fetch_assoc();
                $uid=$row['Customer_id'];
				
	            $rowcount=mysqli_num_rows($result);
		       
	        if($rowcount==0){
		      echo "<script> alert ('Login Failed!'); 
			  location='Login';
			     </script>";
				 
	           }
			      
	             else{
					  echo  "<script> alert ('sucessful'); 
		              location='Landing';
	                  </script>";
					  session_start();
					  $_SESSION['login']=true;
					  $_SESSION['id']=$uid;
					  
	                }
				
			 }	
	        	}
	      }
		function Profile(){
			if(isset($_POST["submit"])){
				$profileImage = $_FILES['profileImage']['name'];
				$target ="image/userprofile/".basename($profileImage);
				if (move_uploaded_file($_FILES['profileImage']['tmp_name'], $target)) {
					$msg = "Image uploaded successfully";
				  }else{
					$msg = "Failed to upload profileImage";
				  }
            	$name=$_POST["name"];
				$email=$_POST["email"];
				$number=$_POST["number"];
				$address=$_POST["address"];
			   	
			
				
				//validation
			  if(empty($name)){
				echo "<script> alert ('First Fill the Data!');
				location='Update';
				</script>";
			   }
		        else{
				  $this->user->profileImage=$profileImage;
				  $this->user->name=$name;
				  $this->user->email=$email;
				  $this->user->number=$number;
				  $this->user->address=$address;
				//calling insert function
				  $result=$this->user->updateProfile();
				  if($result==TRUE){
					echo "<script> alert ('Updated Successfully!'); 
					   location='MyProfile';
					   </script>";
				  }else{
					echo "<script> alert ('Failed to Update!'); 
					   location='Update';
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
		
		
			$this->user->profileImage=$profileImage;
			$result=$this->user->insertP();
			if($result===TRUE){
				echo "<script> alert ('Inserted Profile Successfully!'); 
				location='MyProfile';
				</script>";
				 
			}else{
				echo "<script> alert ('Failed to Insert Profile!')
				location='MyProfile';
				</script>";
				
			}
		
	}	
}
      public function Forgot(){
		if(isset($_POST["submit"])){
            $email=$_POST["email"];

			$result=$this->user->ChecKEP();
				   $emailcount = mysqli_num_rows($result);
				   if ($emailcount>0) {
					echo "email already exist";
				}else{
					echo "<script> alert ('This email doesn't exists!')
				location='ForgotP';
				</script>";
				
				}
	  }	

}
}
	
?>
