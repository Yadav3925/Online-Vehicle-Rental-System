<?php
session_start();
class User{
	public $uid;
	public $profileImage;
	public $name;
	public $email;
	public $address;
	public $number;
	public $op;
   public $pass;
   public $cpass;
	private $conn="";
	
	
	
	

	function __construct(){
		require_once "service/Config.php";
		$this->conn=Config::getConnection();
	}

	
	/*public function setUsername($username){
		$this->username=$username;
	}*/
	function RegisterUser(){
        $sql="INSERT INTO customer (Customer_name,Email,Customer_address,MobileNumber,Password,Re_Passsword)VALUES('$this->name','$this->email','$this->address','$this->number','$this->password','$this->cpassword')";
        $result=$this->conn->query($sql);
        return $result;

 

    }

	
	function CheckUser(){
        //query
        //username or password matched or not.
        //check.
        $sql="SELECT * FROM customer WHERE Email='$this->username' AND Password='$this->password'";
        $result=$this->conn->query($sql);
		
        return $result;
	}
    public function selectById(){
		$sql="SELECT  Password FROM customer ";
		 $result=$this->conn->query($sql);
		 return $result;
	}

	public function updatePassword(){
        $sql="UPDATE customer SET Password='$this->password',Re_Passsword='$this->rpassword' WHERE Customer_id='".$_SESSION['id']."'";
         $result=$this->conn->query($sql);
            return $result;
       }
   
	 
	   public function selectProfile(){
		$sql="SELECT Profile,Name,Email,MobileNumber,Address FROM profile  WHERE cid='".$_SESSION['id']."'";
		 $result=$this->conn->query($sql);
		 return $result;
	}
	public function updateProfile(){
        $sql="UPDATE profile SET Profile='$this->profileImage',Name='$this->name', Email='$this->email', MobileNumber='$this->number', Address='$this->address'WHERE cid='".$_SESSION['id']."'";
         $result=$this->conn->query($sql);
            return $result;
       }
	   
     public function insertP(){
		$sql = "UPDATE  profile SET Profile='$this->profileImage'
		WHERE cid='".$_SESSION['id']."'";
		$result=$this->conn->query($sql);
		return $result;
	 }
	 public function ChecKEP(){
		$sql="SELECT  * FROM customer WHERE Email='$this->email'";
		$result=$this->conn->query($sql);
		return $result;
	 }
     public function CheckP(){
		$sql="SELECT  * FROM customer WHERE Password='$this->op'";
		$result=$this->conn->query($sql);
		return $result;

	 }
}

?>