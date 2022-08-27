<?php
 
   class Book{
          public $vid;
   	      public $Bid;
          public $bname;
          public $email;
          public $address;
          public $number;
          public $from;
          public $to;
          public $lno;
          public $i1;
         private $conn="";
   	   
      function __construct(){
        require_once "service/Config.php";
        $this->conn=Config::getConnection();
      }
     
      public function selectAllRecords(){
        $sql="SELECT  Bid,Customer_name,Email,Customer_address,MobileNumber,From_Date,To_Date,Lisensno,Status,rrent,vbrand,vmodel,vname,vnumber
             From vehicle  INNER JOIN book ON book.vid= vehicle.vid  WHERE Bid=".$_GET['Bid']."";
        
       $result=$this->conn->query($sql);
       return $result;
    }
    /*
  public function selectVehicle(){
        $sql="SELECT * FROM";
         $result=$this->conn->query($sql);
         return $result;
    }
     */
      public function addBooking(){
        
       $sql="INSERT INTO book (Customer_id,Customer_name,Email,Customer_address,MobileNumber,From_Date,To_Date,Lisensno,vid ) 
       VALUES('$this->cid','$this->bname','$this->email','$this->address','$this->number','$this->from','$this->to','$this->lno','$this->vid') ";
          $result=$this->conn->query($sql);
           return $result;
    }
    
    public function selectVRecords(){
      $sql="SELECT * FROM vehiclebrand  INNER JOIN vehicle ON vehicle.vbrand= vehiclebrand.brand_id WHERE vtype=1 ORDER BY vid ASC";
     $result=$this->conn->query($sql);
     return $result;
  }
  public function selectVRecordsF(){
    $sql="SELECT * FROM vehiclebrand  INNER JOIN vehicle ON vehicle.vbrand= vehiclebrand.brand_id WHERE vtype=2 ORDER BY vid ASC";
   $result=$this->conn->query($sql);
   return $result;
}
  public function selectNewB(){
    $sql="SELECT  Bid,Customer_name,Book_Time
    From vehicle  INNER JOIN book ON book.vid= vehicle.vid  WHERE vtype=1 AND Status='pending'";
      $result=$this->conn->query($sql);
      return $result;
}
public function selectNewBF(){
  $sql="SELECT  Bid,Customer_name,Book_Time
  From vehicle  INNER JOIN book ON book.vid= vehicle.vid  WHERE vtype=2 AND Status='pending'";
    $result=$this->conn->query($sql);
    return $result;
}
/*
public function selectAllNewBooking(){
  $sql="SELECT  Bid,Customer_name,Book_Time
  From vehicle  INNER JOIN book ON book.vid= vehicle.vid  WHERE  Status='pending'";
    $result=$this->conn->query($sql);
    return $result;
}
*/
  public function selectBooking(){
    $sql="SELECT Bid,Customer_name,Book_Time
    From vehicle  INNER JOIN book ON book.vid= vehicle.vid  WHERE vtype=1  ";
   $result=$this->conn->query($sql);
   return $result;
}
public function selectBookingF(){
  $sql="SELECT Bid,Customer_name,Book_Time
  From vehicle  INNER JOIN book ON book.vid= vehicle.vid  WHERE vtype=2  ";
 $result=$this->conn->query($sql);
 return $result;
}
 public function updateAction(){
  $sql="UPDATE book
  SET Response='$this->remark', TotalCost='$this->tcost', Status='$this->status' WHERE Bid='$this->Bid'";
  $result=$this->conn->query($sql);
     return $result;
 }
 public function selectApprovedB(){
  $sql="SELECT Bid,Customer_name,Book_Time
  From vehicle  INNER JOIN book ON book.vid= vehicle.vid  WHERE Status='Approved' AND vtype=1";
  $result=$this->conn->query($sql);
  return $result;
 }
 public function selectApprovedBF(){
  $sql="SELECT Bid,Customer_name,Book_Time
  From vehicle  INNER JOIN book ON book.vid= vehicle.vid  WHERE Status='Approved' AND vtype=2";
  $result=$this->conn->query($sql);
  return $result;
 }
 public function selectUnApprovedB(){
  $sql="SELECT Bid,Customer_name,Book_Time
  From vehicle  INNER JOIN book ON book.vid= vehicle.vid  WHERE Status='Reject' AND vtype=1";
  $result=$this->conn->query($sql);
  return $result;
 }
 public function selectUnApprovedBF(){
  $sql="SELECT Bid,Customer_name,Book_Time
  From vehicle  INNER JOIN book ON book.vid= vehicle.vid  WHERE Status='Reject' AND vtype=2";
  $result=$this->conn->query($sql);
  return $result;
 }

 public function selectBookingUser(){
  $sql="SELECT * FROM vehicle  INNER JOIN book ON book.vid= vehicle.vid WHERE  vtype=1 AND  Customer_id='".$_SESSION['id']."' ";
 $result=$this->conn->query($sql);
 return $result;
}
public function selectBookingUserF(){
  $sql="SELECT * FROM vehicle  INNER JOIN book ON book.vid= vehicle.vid WHERE  vtype=2 AND  Customer_id='".$_SESSION['id']."' ";
 $result=$this->conn->query($sql);
 return $result;
}

public function selectBDetails(){
  $sql="SELECT  Bid,Book_Time,Status,From_Date,To_Date,image1,image2,vname,vnumber,rrent,TotalCost,Response
       From vehicle  INNER JOIN book ON book.vid= vehicle.vid  WHERE Bid=".$_GET['Bid']."";
   $result=$this->conn->query($sql);
 return $result;
}

  }
    ?>