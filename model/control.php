<?php

class Control{
    public $Bid; 
   public $search; 
   public $aid;
   public $username;
   public $password;
   	private $conn="";
	
    
    
    function __construct(){
		require_once "service/Config.php";
		$this->conn=Config::getConnection();
	}

    function CheckAdmin(){
        
        $sql="SELECT * FROM admin WHERE UserName= '$this->username' AND Password= '$this->password'";
        $result=$this->conn->query($sql);
		return $result;
	}
    function selectRegisterUser(){
        
        $sql="SELECT * FROM customer ";
        $result=$this->conn->query($sql);
		return $result;
	}

    function searchUser(){
       $sql="SELECT  Bid,Customer_name,Email,Customer_address,MobileNumber,From_Date,To_Date,TotalCost,Status,rrent,vbrand,vmodel,vname,vnumber
       From vehicle  INNER JOIN book ON book.vid= vehicle.vid WHERE Bid='$this->search' OR Customer_name LIKE'%$this->search%'";
   
        $result=$this->conn->query($sql);
       
		return $result;
	}
    function selectBN(){
        $sql="SELECT COUNT('Bid') AS Bid FROM vehicle  INNER JOIN book ON book.vid= vehicle.vid  WHERE Status='pending'AND vtype=1";
        $result=$this->conn->query($sql);
        return $result;
        
	}
    function selectBNF(){
        $sql = $this->conn->query("SELECT COUNT('Bid') AS Bid FROM vehicle  INNER JOIN book ON book.vid= vehicle.vid  WHERE Status='pending'AND vtype=2");
        if ($sql) {
            return $sql->fetch_assoc();
        } else {
            return "error...";
        }
    }
      
	
     function selectProfile(){
		$sql="SELECT Profile,Name,Email,MobileNumber,Address FROM admin  WHERE id='".$_SESSION['aid']."'";
		 $result=$this->conn->query($sql);
		 return $result;
	}
    public function insertP(){
		$sql = "UPDATE  admin SET Profile='$this->profileImage'
		WHERE id='".$_SESSION['aid']."'";
		$result=$this->conn->query($sql);
		return $result;
	 }
     public function updatePassword(){
        $sql="UPDATE admin SET Password='$this->password',Re_Passsword='$this->rpassword' WHERE id='".$_SESSION['aid']."'";
         $result=$this->conn->query($sql);
            return $result;
       }
       public function CheckP(){
		$sql="SELECT  * FROM admin WHERE Password='$this->op'";
		$result=$this->conn->query($sql);
		return $result;

	 }
}