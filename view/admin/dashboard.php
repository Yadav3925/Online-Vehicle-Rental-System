<?php
  include 'view/shared/admin dashboard.php';
?>
<base href="/projectMVC/">
<!DOCTYPE html>
<html>
<head>
    <title>navbar</title>
  
    

</head>
<body>
 <div class="page-content p-0 mr-1" id="content">

    <div class="separator" style="margin-top: 0px;">
    
   <div class="row" style="height: 30px;">

  <div class="col-sm-6">
    
    <div class="card" style="height: 6rem;">
      <div class="card-body">
        <h6>Total Two Wheeler</h6>
        <a href="Vehcile/Index" class="btn btn-primary">view</a>
      </div>
    </div>
  </div>

    <div class="col-sm-6">
       
    <div class="card" style="height: 6rem;">
      <div class="card-body">
        <h6>Total Four Wheeler</h6>
        <a href="Fvehicle/Index" class="btn btn-primary">View</a>
      </div>
    </div>
  </div>


  <div class="col-sm-6">

    <div class="card" style="height: 6rem;">
      <div class="card-body">
        <h6>New Two Wheeler Booking</h6>
        
        <a href="Booking/NewBooking" class="btn btn-primary">View</a>
       
        <a href="" class="btn" style="float: right;margin-right: 0px;margin-top:0px"> 
           <span class="fa fa-bell"></span>
           <?php  
	        $row=$result->fetch_assoc();
          ?>
		       <span class="badge"><?php echo $row['Bid']; ?></span> 
           
                                
      </a>
      </div>
      
    </div>
  </div>

  <div class="col-sm-6">

    <div class="card" style="height: 6rem;">
      <div class="card-body">
        <h6>New Four Wheeler Booking</h6>
       
        <a href="Booking/NewBookingF" class="btn btn-primary">View</a>
        <a href="" class="btn" style="float: right;margin-right: 0px;margin-top:0px"> 
           <span class="fa fa-bell"></span>
           
		       <span class="badge"><?php echo $this->control->selectBNF()['Bid']; ?></span> 
           
                                
      </a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card" style="height: 6rem;">
      <div class="card-body">
        <h6>Approved Two Wheeler Booking</h6>
     
        <a href="Booking/ApprovedT" class="btn btn-primary">View</a>
      </div>
    </div>
  </div>

  <div class="col-sm-6">
    <div class="card" style="height: 6rem;">
      <div class="card-body">
        <h6>Approved Four Wheeler Booking</h6>
        
        <a href="Booking/ApprovedF" class="btn btn-primary">View</a>
      </div>
    </div>
  </div>

  <div class="col-sm-6">
    <div class="card" style="height: 6rem;">
      <div class="card-body">
        <h6>Unapproved Two Wheeler Booking</h6>
      
        <a href="Booking/RejectT" class="btn btn-primary">View</a>
      </div>
    </div>
  </div>

  <div class="col-sm-6">

    <div class="card" style="height: 6rem;">
      <div class="card-body">
        <h6>Unapproved Four Wheeler Booking</h6>
     
        <a href="Booking/RejectF" class="btn btn-primary">View</a>
      </div>
    </div>
  </div>

   <div class="col-sm-6">

    <div class="card" style="height: 6rem;">
      <div class="card-body">
        <h6>Total Two Wheeler Booking</h6>
     
        <a href="Booking/AllBooking" class="btn btn-primary">View</a>
      </div>
    </div>
  </div>


   <div class="col-sm-6">

    <div class="card" style="height: 6rem;">
      <div class="card-body">
        <h6>Total Four Wheler Booking</h6>
     
        <a href="Booking/AllbookingF" class="btn btn-primary">View</a>
      </div>
    </div>
  </div>

</div>


</div>
      
       
    
    </div>
  </div>
