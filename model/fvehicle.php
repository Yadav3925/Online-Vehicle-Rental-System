<?php

   class Fvehicle{
   	   public $vid;
   	   public $type;
   	   public $brand;
   	   public $name;
       public $cost;
       public $number;
        public $model;
         public $remarks;
          public $seat;
          public $class;
          public $fuel;
          public $door;
          public $gear;
          public $i1;
      public $i2;
      private $conn="";
   	   
      function __construct(){
        require_once "service/Config.php";
        $this->conn=Config::getConnection();
      }


       //function to insert book records
       public function addfvehicle(){
           //query to insert book
          $sql="INSERT INTO vehicle
          (vtype,vname,vbrand,vnumber,rrent,vmodel,remarks,scapacity,Class,Fuel,Doors,GearBox,image1,image2,admin_id) 
          VALUES('$this->type','$this->name','$this->brand','$this->number','$this->cost','$this->model','$this->remarks','$this->seat'
          ,'$this->class','$this->fuel','$this->door','$this->gear','$this->i1','$this->i2','".$_SESSION['aid']."')";
            $result=$this->conn->query($sql);
            return $result;
       }
        
       //function to select all records
       public function selectAllRecords(){
           $sql="SELECT vid,vbrand,vname,vnumber FROM  vehicle WHERE vtype=2
            ORDER BY vid DESC";
           $result=$this->conn->query($sql);
           return $result;
       }

       public function deleteRecord(){
        $sql="DELETE FROM  vehicle
         WHERE vid='$this->vid'";
        $result=$this->conn->query($sql);
        return $result;
       }

       public function selectById(){
        $sql="SELECT  * FROM vehicle  WHERE vid=".$_GET['vid']."";
           $result=$this->conn->query($sql);
           return $result;
       }
      
       public function updatefvehicle(){
        $sql="UPDATE vehicle
         SET vname='$this->name', vbrand='$this->brand', vnumber='$this->number', rrent='$this->cost', vmodel='$this->model', remarks='$this->remarks', scapacity='$this->seat',Class='$this->class',Fuel='$this->fuel'
         ,Doors='$this->door' ,GearBox='$this->gear' ,image1='$this->i1' , image2='$this->i2' WHERE vid='$this->vid'";
       $result=$this->conn->query($sql);
      
            return $result;
       }
       public function selectBrand(){
         $sql="SELECT * FROM vehiclebrand";
         $result=$this->conn->query($sql);
         return $result;
       }

   	  
   }
   

?>