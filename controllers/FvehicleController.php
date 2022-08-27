<?php
session_start();
class FvehicleController{
    private $fvehicle;
  	   function __construct(){
  	   	  require_once "model/fvehicle.php";
          $this->fvehicle=new fvehicle();
  	   }
	    function addV(){
        if(isset($_SESSION["aid"])) {
        $result=$this->fvehicle->selectBrand();
		   require_once './view/Fvehicle/addVehcile.php';
      }else{
        header("Location:../Admin/Login");
        }
   	}
    public function Index(){
      if(isset($_SESSION["aid"])) {
        //call function to select all records
        $result=$this->fvehicle->selectAllRecords();
        include "view/Fvehicle/manage.php";
      }else{
        header("Location:../Admin/Login");
        }
    }
        public function  addfvehicle(){
        
        
        if(isset($_POST["submit"])){
            $type=$_POST["type"];
            $name=$_POST["name"];
            $brand=$_POST["brand"];
            $cost=$_POST["cost"];
            $number=$_POST["number"];
            $model=$_POST["model"];
            $remarks=$_POST["remarks"];
            $seat=$_POST["seat"];
            $class=$_POST["class"];
            $fuel=$_POST["fuel"];
            $door=$_POST["door"];
            $gear=$_POST["gear"];
             $i1=$_POST["i1"];
            $i2=$_POST["i2"];
            //validation
          if(empty($name)){ }

          else{
              //send data to model
              $this->fvehicle->type=$type;
              $this->fvehicle->name=$name;
              $this->fvehicle->brand=$brand;
              $this->fvehicle->cost=$cost;
              $this->fvehicle->number=$number;
              $this->fvehicle->model=$model;
              $this->fvehicle->remarks=$remarks;
              $this->fvehicle->seat=$seat;
              $this->fvehicle->class=$class;
              $this->fvehicle->fuel=$fuel;
              $this->fvehicle->door=$door;
              $this->fvehicle->gear=$gear;
              $this->fvehicle->i1=$i1;
              $this->fvehicle->i2=$i2;
              //calling insert function
              $result=$this->fvehicle-> addfvehicle();
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
    if(isset($_SESSION["aid"])) {
     $result=$this->fvehicle->selectById();
     
     include "view/Fvehicle/update.php";
    }else{
      header("Location:../Admin/Login");
      }
  }
  public function Delete(){
    //receive bid here
    $vid=$_GET["vid"];
    //send data to model
    $this->fvehicle->vid=$vid;
    
    //calling delete function
    $result=$this->fvehicle->deleteRecord();
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
        $class=$_POST["class"];
        $fuel=$_POST["fuel"];
        $door=$_POST["door"];
        $gear=$_POST["gear"];
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
          $this->fvehicle->vid=$vid;
          $this->fvehicle->name=$name;
          $this->fvehicle->brand=$brand;
          $this->fvehicle->cost=$cost;
          $this->fvehicle->number=$number;
          $this->fvehicle->model=$model;
          $this->fvehicle->remarks=$remarks;
          $this->fvehicle->seat=$seat;
          $this->fvehicle->class=$class;
          $this->fvehicle->fuel=$fuel;
          $this->fvehicle->door=$door;
          $this->fvehicle->gear=$gear;
          $this->fvehicle->i1=$i1;
          $this->fvehicle->i2=$i2;
          //calling insert function
          $result=$this->fvehicle->updatefvehicle();
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