<?php
   session_start();
   class ReportController{
    private $report;
    function __construct(){
           require_once "model/report.php";
      $this->report=new report();
 }
 function BetweenR(){
    if(isset($_SESSION["aid"])) {
    require_once './view/Report/allcountt.php';
  }else{
    header("Location:../Admin/Login");
  }
    }
    function AllBooking(){
        if(isset($_SESSION["aid"])) {
        require_once './view/Report/allcount.php';
    }else{
        header("Location:../Admin/Login");
      }
        }
        function ApprovedBooking(){
            if(isset($_SESSION["aid"])) {
            require_once './view/Report/approvedcount.php';
        }else{
            header("Location:../Admin/Login");
          }
            }
        
        function UnapprovedBooking(){
            if(isset($_SESSION["aid"])) {
            require_once './view/Report/unapproved.php';
        }else{
            header("Location:../Admin/Login");
          }
            }
   
        
        function CountApprovedT(){
            if(isset($_SESSION["aid"])) {
            require_once './view/Report/approvedt.php';
        }else{
            header("Location:../Admin/Login");
          }
            }
            function UnapprovedT(){
                if(isset($_SESSION["aid"])) {
                require_once './view/Report/unapprovedt.php';
            }else{
                header("Location:../Admin/Login");
              }
                }
            function CountRT(){
                if(isset($_SESSION["aid"])) {
                $result=$this->report->CountB();
                require_once './view/Report/countRT.php';
            }else{
                header("Location:../Admin/Login");
              }
                }
   function ReportC(){
    if(isset($_POST["submit"])){
        $from=$_POST['from'];
        $to=$_POST['to'];

        if(empty($from)||empty($to)){ 
            echo "empty";
        }
        else{
           
            $this->report->from=$from;
            $this->report->to=$to;
            
           
            //calling insert function
            $result1=$this->report->selectRecord();
            $row = mysqli_num_rows($result1);
           
			    	if($row>0)
            {
                echo "<script> alert ('Your wanted report is found');  </script>";
                if(isset($_SESSION["aid"])) {
               
                require_once './view/Report/betweendate.php';
              }else{
                header("Location:../Admin/Login");
              }
            }else{
                echo "<script> alert ('Failed to report!'); 
                 location='betweenR';
                 </script>";
                }
            
           }

         }

  }
  function ReportF(){
    if(isset($_POST["submit"])){
        $from=$_POST["from"];
        $to=$_POST["to"];

        if(empty($from)||empty($to)){ 
            echo "empty";
        }
        else{
           
            $this->report->from=$from;
            $this->report->to=$to;
            
           
            //calling insert function
            $result1=$this->report->selectRecordF();
            $row = mysqli_num_rows($result1);
           
			    	if($row>0)  {
                echo "<script> alert ('Your wanted report is found'); </script>"; 
                require_once './view/Report/betweendate.php';
                
            }else{
                echo "<script> alert ('Failed to report!'); 
                 location='betweenR';
                 </script>";
                }
            
           }

         }

  }
  function bookC(){
    if(isset($_POST["submit"])){
        $from=date('Y-m-d',strtotime($_POST["from"]));
        $to=date('Y-m-d',strtotime($_POST["to"]));

        if(empty($from)||empty($to)){ 
            echo "empty";
        }
        else{
           
            $this->report->from=$from;
            $this->report->to=$to;
            
           
            //calling insert function
            $result=$this->report->CountB();
            $row = mysqli_num_rows($result);
           
			    	if($row>0){
                echo "<script> alert ('Your wanted report is found');   </script>";
                require_once './view/Report/countRT.php';
                
            }else{
                echo "<script> alert ('Failed to report!'); 
                 location=' CountApprovedT';
                 </script>";
                }
            
           }

         }

  }
  function bookCF(){
    if(isset($_POST["submit"])){
        $from=date('Y-m-d',strtotime($_POST["from"]));
        $to=date('Y-m-d',strtotime($_POST["to"]));

        if(empty($from)||empty($to)){ 
            echo "empty";
        }
        else{
           
            $this->report->from=$from;
            $this->report->to=$to;
            
           
            //calling insert function
            $result=$this->report->CountBF();
            $row = mysqli_num_rows($result);
           
			    	if($row>0){
                echo "<script> alert ('Your wanted report is found');   </script>";
                require_once './view/Report/countRT.php';
                
            }else{
                echo "<script> alert ('Failed to report!'); 
                 location=' CountApprovedT';
                 </script>";
                }
            
           }

         }

  }
  function bookCountU(){
    if(isset($_POST["submit"])){
        $from=date('Y-m-d',strtotime($_POST["from"]));
        $to=date('Y-m-d',strtotime($_POST["to"]));

        if(empty($from)||empty($to)){ 
            echo "empty";
        }
        else{
           
            $this->report->from=$from;
            $this->report->to=$to;
            
           
            //calling insert function
            $result=$this->report->CountBU();
            $row = mysqli_num_rows($result);
           
			    	if($row>0){
                echo "<script> alert ('Your wanted report is found');   </script>";
                require_once './view/Report/countRT.php';
                
            }else{
                echo "<script> alert ('Failed to report!'); 
                 location=' CountApprovedT';
                 </script>";
                }
            
           }

         }

  }

  function bookCountUF(){
    if(isset($_POST["submit"])){
        $from=date('Y-m-d',strtotime($_POST["from"]));
        $to=date('Y-m-d',strtotime($_POST["to"]));

        if(empty($from)||empty($to)){ 
            echo "empty";
        }
        else{
           
            $this->report->from=$from;
            $this->report->to=$to;
            
           
            //calling insert function
            $result=$this->report->CountBUF();
            $row = mysqli_num_rows($result);
           
			    	if($row>0){
                echo "<script> alert ('Your wanted report is found');   </script>";
                require_once './view/Report/countRT.php';
                
            }else{
                echo "<script> alert ('Failed to report!'); 
                 location=' CountApprovedT';
                 </script>";
                }
            
           }

         }

  }
}
?>