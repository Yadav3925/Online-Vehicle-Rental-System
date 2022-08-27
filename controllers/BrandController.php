<?php 
session_start();
    class BrandController{
		private $brand;
		function __construct(){
			   require_once "model/brand.php";
		  $this->brand=new brand();
	 }
    	function add(){
			if(isset($_SESSION["aid"])) {
    		require_once './view/VBrand/addBrand.php';
		}else{
			header("Location:../Admin/Login");
			}
    	}
		function Index(){
			if(isset($_SESSION["aid"])) {
			$result=$this->brand->selectAllRecords();
    		require_once './view/VBrand/manage.php';
		}else{
			header("Location:../Admin/Login");
			}
    	}
		function Update(){
			if(isset($_SESSION["aid"])) {
			$result=$this->brand->selectById();
			require_once './view/VBrand/update.php';
		}else{
			header("Location:../Admin/Login");
			}
		}
		public function  insertBrand(){
	          if(isset($_POST["submit"])){
					$name=$_POST["name"];
					$logo=$_POST["logo"];

					
					
					//validation
				  if(empty($name)){ }
		
				  else{
					  //send data to model
					  $this->brand->name=$name;
					  $this->brand->logo=$logo;
					
					  
					  //calling insert function
					  $result=$this->brand-> addBrand();
					  if($result==TRUE){
						  echo "<script> alert ('Inserted Successfully!'); 
						   location='add';
						   </script>";
					  }else{
						  echo "<script> alert ('Failed to Insert!'); 
						   location='add';
						   </script>";
					  }
				  }
		
				}
		   
           
    	
    }
	public function UpdateData(){
		if(isset($_POST["update"])){
			$brand_id=$_POST["brand_id"];
			$name=$_POST["name"];
			$logo=$_POST["logo"];
			

			if(empty($name)){ }

			else{
				//send data to model
				$this->brand->brand_id=$brand_id;
				$this->brand->logo=$logo;
				$this->brand->name=$name;

				$result=$this->brand->updateBrand();
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
	public function Delete(){
		//receive brand_id here
		$brand_id=$_GET["brand_id"];
		//send data to model
		$this->brand->brand_id=$brand_id;
		
		//calling delete function
		$result=$this->brand->deleteRecord();
		if($result==TRUE){
			  echo "<script> alert ('Deleted Successfully!'); 
					location='Index';
					</script>";
		}else{
			echo "<script> alert (' Failed to Deleted!'); 
			location='Index';
			</script>";
		
	   }
	}
}
 ?>