<?php

   class Report{
    public $from;
    public $to;  
    private $conn="";
   	   
    function __construct(){
      require_once "service/Config.php";
      $this->conn=Config::getConnection();
    }
    public function selectRecord(){
     $sql="SELECT Bid,Customer_name,vname,Book_Time From vehicle  INNER JOIN book ON book.vid= vehicle.vid  
     WHERE Book_Time BETWEEN '$this->from' AND '$this->to' AND vtype=1";
        $result1=$this->conn->query($sql);
        
           return $result1;
      }
      public function selectRecordF(){
        $sql="SELECT *  From vehicle  INNER JOIN book ON book.vid= vehicle.vid 
         WHERE Book_Time BETWEEN '$this->from' AND '$this->to ' AND vtype=2";
          $result=$this->conn->query($sql);
           return $result;
      }
      public function CountB(){
        $sql="SELECT  COUNT(Bid)  Book_Time ,Status From vehicle  INNER JOIN book ON book.vid= vehicle.vid  
        WHERE Book_Time BETWEEN '$this->from' AND '$this->to' AND Status='Approved'  AND vtype=1 ";
         
          $result=$this->conn->query($sql);
          return $result;
      }
      public function CountBF(){
        $sql="SELECT COUNT(Bid)  Book_Time ,Status,Bid From  vehicle  INNER JOIN book ON book.vid= vehicle.vid 
        WHERE Book_Time BETWEEN '$this->from' AND '$this->to' AND Status='Approved' AND vtype=2";
          $result=$this->conn->query($sql);
         
           return $result;
      }
      public function CountBU(){
        $sql="SELECT  COUNT(Bid)  Book_Time ,Status From vehicle  INNER JOIN book ON book.vid= vehicle.vid 
         WHERE Book_Time BETWEEN '$this->from' AND '$this->to' AND Status='Reject'  AND vtype=1 ";
         
          $result=$this->conn->query($sql);
          return $result;
      }
      public function CountBUF(){
        $sql="SELECT COUNT(Bid)  Book_Time ,Status,Bid From  vehicle  INNER JOIN book ON book.vid= vehicle.vid 
        WHERE Book_Time BETWEEN '$this->from' AND '$this->to' AND Status='Reject' AND vtype=2";
          $result=$this->conn->query($sql);
         
           return $result;
      }
  
   }
?>