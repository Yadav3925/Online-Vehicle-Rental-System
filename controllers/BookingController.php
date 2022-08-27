<?php 
session_start();
    class BookingController{
		  private $book;
  	      function __construct(){
  	   	      require_once "model/book.php";
              $this->book=new book();
  	   }
    	function Book(){
            $result=$this->book->selectVRecords();
    		require_once './view/VBooking/userbook.php';
    	}
        function BookF(){
            $result=$this->book->selectVRecordsF();
    		require_once './view/VBooking/userbookF.php';
    	}
        function BookNow(){
    		require_once './view/VBooking/book now.php';
    	}
        function BookV(){
            if(isset($_SESSION['id'])){
                require_once './view/VBooking/bookv.php';
                }else{
               
                header("Location:../User/Login");
             }
    		
    	}
    	function BTable(){
            if(isset($_SESSION['id'])){
            $result=$this->book->selectBookingUser();
    		require_once './view/VBooking/bTable.php';
        }else{
               
            header("Location:../User/Login");
         }
    	}
    
        function BTableF(){
            if(isset($_SESSION['id'])){
            $result=$this->book->selectBookingUserF();
    		require_once './view/VBooking/bTablef.php';
        }else{
               
            header("Location:../User/Login");
         }
         
    	}
    	function BDetails(){
            if(isset($_SESSION['id'])){
            $result=$this->book->selectBDetails();
    	require_once './view/VBooking/bdetails.php';
    }else{
               
        header("Location:../User/Login");
     }
    }


        function BDetailsF(){
            if(isset($_SESSION['id'])){
            $result=$this->book->selectBDetails();
    	require_once './view/VBooking/bdetailsf.php';
        }else{
               
        header("Location:../User/Login");
     }
        }
	    function viewDetails(){
        if(isset($_SESSION["aid"])) {
		$result=$this->book->selectAllRecords();
		require_once './view/VBooking/viewB.php';
    }else{
        header("Location:../Admin/Login");
      }
	    }
        function viewDetailsUN(){
            if(isset($_SESSION["aid"])) {
            $result=$this->book->selectAllRecords();
            require_once './view/VBooking/viewUN.php';
        }else{
            header("Location:../Admin/Login");
          }
            }
        function NewBooking(){
            if(isset($_SESSION["aid"])) {
            $result=$this->book->selectNewB();
            require_once './view/VBooking/newbooking.php';
        }else{
            header("Location:../Admin/Login");
          }
            }
            /*
            function BookingNotification(){
                if(isset($_SESSION["aid"])) {
                $result=$this->book->selectAllNewBooking();
                require_once './view/VBooking/newbooking.php';
            }else{
                header("Location:../Admin/Login");
              }
                }
                */
            function NewBookingF(){
                if(isset($_SESSION["aid"])) {
                $result=$this->book->selectNewBF();
                require_once './view/VBooking/newbookingF.php';
            }else{
                header("Location:../Admin/Login");
                }
            }
        function AllBooking(){
            if(isset($_SESSION["aid"])) {
            $result=$this->book->selectBooking();
            require_once './view/VBooking/allbooking.php';
        }else{
            header("Location:../Admin/Login");
            }
            }
            function AllBookingF(){
                if(isset($_SESSION["aid"])) {
                $result=$this->book->selectBookingF();
                require_once './view/VBooking/allbookingf.php';
            }else{
                header("Location:../Admin/Login");
                }
            }
            function ApprovedT(){
                if(isset($_SESSION["aid"])) {
                $result=$this->book->selectApprovedB();
                require_once './view/VBooking/approvedt.php';
            }else{
                header("Location:../Admin/Login");
                }
                }
                function ApprovedF(){
                    if(isset($_SESSION["aid"])) {
                    $result=$this->book->selectApprovedBF();
                    require_once './view/VBooking/approvedf.php';
                }else{
                    header("Location:../Admin/Login");
                    }
                    }
                function RejectT(){
                    if(isset($_SESSION["aid"])) {
                    $result=$this->book->selectUnApprovedB();
                    require_once './view/VBooking/rejectt.php';
                }else{
                    header("Location:../Admin/Login");
                    }
                    }
                    function RejectF(){
                        if(isset($_SESSION["aid"])) {
                        $result=$this->book->selectUnApprovedBF();
                        require_once './view/VBooking/rejectf.php';
                    }else{
                        header("Location:../Admin/Login");
                        }
                        }
	    public function  aBooking(){
        
            if(isset($_POST["submit"])){
             $cid=$_POST["cid"];    
            $vid=$_POST["vid"]; 
            $bname=$_POST["bname"];
            $email=$_POST["email"];
            $address=$_POST["address"];
            $number=$_POST["number"];
            $from=date('Y-m-d',strtotime($_POST["from"]));
            $to=date('Y-m-d',strtotime($_POST["to"]));
            $lno=$_POST["lno"];
           
           
            //validation
          if(empty($bname)){ 
              echo "empty";
          }

          
              //send data to model
            else{
                $this->book->cid=$cid;
               $this->book->vid=$vid; 
              $this->book->bname=$bname;
              $this->book->email=$email;
              $this->book->address=$address;
              $this->book->number=$number;
              $this->book->from=$from;
              $this->book->to=$to;
              $this->book->lno=$lno;
             
              //calling insert function
              $result=$this->book->addBooking();
              
              if($result==TRUE){
                  echo "<script> alert ('Your requried vehcile is Booked!'); 
                   location='../User/Landing';
                   </script>";
              }else{
                  echo "<script> alert ('Failed to book!'); 
                   location='Book';
                   </script>";
                  }
              
             }

           }
       }
       function takeAction(){
        if(isset($_POST["submit"])){
            $Bid=$_POST["Bid"];
            $remark=$_POST["remark"];
            $tcost=$_POST["tcost"];
            $status=$_POST["status"];

            if(empty($remark)){ 
                echo "empty";
            }
            else{
                $this->book->Bid=$Bid;
                $this->book->remark=$remark;
                $this->book->tcost=$tcost;
                $this->book->status=$status;

                $result=$this->book->updateAction();

                if($result==TRUE){
                    echo "<script> alert ('Requried Action is Performed!'); 
                     location='../Admin/Dashboard';
                     </script>";
                }else{
                    echo "<script> alert ('Error in Taking Action!'); 
                     location='viewDetails';
                     </script>";
                    }
       }
     

    }
}
    }

 ?>