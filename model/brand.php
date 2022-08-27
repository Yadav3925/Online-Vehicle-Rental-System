<?php

   class Brand{
          public $brand_id;
          public $name;
          public $logo;
          private $conn="";
   	   
      function __construct(){
        require_once "service/Config.php";
        $this->conn=Config::getConnection();
      }
      public function addBrand(){
        
        $sql="INSERT INTO vehiclebrand (brand_name,brand_logo ) 
        VALUES('$this->name','$this->logo')";
           $result=$this->conn->query($sql);
            return $result;
     }
     public function selectAllRecords(){
        $sql="SELECT brand_id,brand_name,creation_date FROM  vehiclebrand ";
        $result=$this->conn->query($sql);
        return $result;
    }
    public function selectById(){
      $sql="SELECT brand_id,brand_name,creation_date FROM  vehiclebrand WHERE brand_id=".$_GET['brand_id']."";
      $result=$this->conn->query($sql);
      return $result;
  }
    public function deleteRecord(){
      $sql="DELETE FROM vehiclebrand WHERE brand_id='$this->brand_id'";
      $result=$this->conn->query($sql);
      return $result;
    }
    public function updateBrand(){
      $sql="UPDATE vehiclebrand SET brand_name='$this->name', brand_logo='$this->logo' WHERE brand_id='$this->brand_id' ";
   
    $result=$this->conn->query($sql);
          return $result;
     }

     
 }
 
     ?>