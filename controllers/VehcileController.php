<?php
session_start();
class VehcileController{
    private $vehcile;
  	   function __construct(){
  	   	  require_once "model/vehcile.php";
          $this->vehcile=new vehcile();
  	   }
	    function addV(){
        if(isset($_SESSION["aid"])) {
        $result=$this->vehcile->selectBrand();
		   require_once './view/vehcile/addVehcile.php';
      }else{
        header("Location:../Admin/Login");
      }
   	}
    public function Index(){
      if(isset($_SESSION["aid"])) {
        //call function to select all records
        $result=$this->vehcile->selectAllRecords();
        include "view/vehcile/manage.php";
      }else{
        header("Location:../Admin/Login");
      }
         
    }
        public function  addVehcile(){
        
        
        if(isset($_POST["submit"])){
            $type=$_POST["type"];
            $name=$_POST["name"];
            $brand=$_POST["brand"];
            $cost=$_POST["cost"];
            $number=$_POST["number"];
            $model=$_POST["model"];
            $remarks=$_POST["remarks"];
            $seat=$_POST["seat"];
            $i1=$_POST["i1"];
           
            $i2=$_POST["i2"];
            //validation
          if(empty($name)){ }

          else{
              //send data to model
              $this->vehcile->type=$type;
              $this->vehcile->name=$name;
              $this->vehcile->brand=$brand;
              $this->vehcile->cost=$cost;
              $this->vehcile->number=$number;
              $this->vehcile->model=$model;
              $this->vehcile->remarks=$remarks;
              $this->vehcile->seat=$seat;
              $this->vehcile->i1=$i1;
              $this->vehcile->i2=$i2;
              //calling insert function
              $result=$this->vehcile-> addVehcile();
              if($result==TRUE){
                  echo "<script> alert ('Inserted Successfully!'); 
                   location='Index';
                   </script>";
              }else{
                  echo "<script> alert ('Failed to Insert!'); 
                   location='addV';
                   </script>";
              }
          }

        }
   }
   public function Update(){
    //receive bid here
    
     
    
     $result=$this->vehcile->selectById();
     
     include "view/vehcile/update.php";
  }
  public function Delete(){
    //receive bid here
    $vid=$_GET["vid"];
    //send data to model
    $this->vehcile->vid=$vid;
    
    //calling delete function
    $result=$this->vehcile->deleteRecord();
    if($result==TRUE){
          echo "<script> alert ('Deleted Successfully!'); 
                location='Index';
                </script>";
    }else{
          echo "<script> alert ('Failed to Delete!'); 
                location='Index';
                </script>";
    }
   }
  public function UpdateData(){
    if(isset($_POST["update"])){
        $vid=$_POST["vid"];
        $name=$_POST["name"];
        $brand=$_POST["brand"];
        $cost=$_POST["cost"];
        $number=$_POST["number"];
        $model=$_POST["model"];
        $remarks=$_POST["remarks"];
        $seat=$_POST["seat"];
        $i1=$_POST["i1"];
        $i2=$_POST["i2"];
      //validation
      if(empty($name)){
        echo "<script> alert ('First Fill the Data!');
        location='Update';
        </script>";
       }

      else{
          //send data to model
          $this->vehcile->vid=$vid;
          $this->vehcile->name=$name;
          $this->vehcile->brand=$brand;
          $this->vehcile->cost=$cost;
          $this->vehcile->number=$number;
          $this->vehcile->model=$model;
          $this->vehcile->remarks=$remarks;
          $this->vehcile->seat=$seat;
          $this->vehcile->i1=$i1;
          $this->vehcile->i2=$i2;
          //calling insert function
          $result=$this->vehcile->updateVehcile();
          if($result==TRUE){
            echo "<script> alert ('Updated Successfully!'); 
               location='Index';
               </script>";
          }else{
            echo "<script> alert ('Failed to Update!'); 
               location='Index';
               </script>";
          }
      }

    }
}
    }
?>