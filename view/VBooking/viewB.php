<?php
  include 'view/shared/admin dashboard.php';
?>
<base href="/projectMVC/">
<style>
  #button {padding: 12px 28px;
          
}
.container{
    border: blue solid;
  
   width:80%;
  }
  }
  .form-outline{
  }
  h3 {
  
  margin-bottom: 20px;
  color:blue;
  
}
h1 {
  
  color:blue;
  
}
</style>
<div class="page-content p-0 mr-1" id="content">
<center><h1>View Vehcile Booking</h1><center>

 <div class="container">
 
   <form method="POST" action="Booking/takeAction">
   <center><h2>user details</h2><center>
    
   <?php
   //code to access data from result
   $row=$result->fetch_assoc();
?>

    <div class="row mb-4">
     <div class="col">
      <div class="form-outline">
      <label class="form-label" for="Customer_name">Full Name</label>  
      <input type="text" value="<?php echo $row['Customer_name'] ?>" class="form-control" />
        
      </div>
     </div>
    
    <div class="col">
      <div class="form-outline">
      <label class="form-label" for="Email">Email</label>
        <input type="text" value="<?php echo $row['Email'] ?>" class="form-control" />
       
      </div>
    </div>
  </div>
  <div class="row mb-4">
    <div class="col">
      <div class="form-outline">
      <label class="form-label" for="MobileNumber">Mobile number</label>
        <input type="text" value="<?php echo $row['MobileNumber'] ?>" class="form-control" />
        
      </div>
    </div>
    <div class="col">
      <div class="form-outline">
      <label class="form-label" for="address">Address</label>
        <input type="text" value="<?php echo $row['Customer_address'] ?>" class="form-control" />
        
      </div>
    </div>
  </div>
  <div class="row mb-4">
    <div class="col">
      <div class="form-outline">
      <label class="form-label" for="From_Date">From Date</label>
        <input type="text" value="<?php echo $row['From_Date'] ?>" class="form-control" />
        
      </div>
    </div>
    <div class="col">
      <div class="form-outline">
      <label class="form-label" for="To_Date">To Date</label>
        <input type="text" value="<?php echo $row['To_Date'] ?>" class="form-control" />
        
      </div>
    </div>
  </div>
  <div class="row mb-4">
    <div class="col">
      <div class="form-outline">
      <label class="form-label" for="rrent">Rental Cost </label>
        <input type="text" value="<?php echo $row['rrent'] ?>" class="form-control" />
        
      </div>
    </div>
    <div class="col">
      <div class="form-outline">
      <label class="form-label" for="cost">Lisens No</label>
        <input type="text" value="<?php echo $row['Lisensno'] ?>" class="form-control" />
      
      </div>
    </div>
  </div>
  <div class="row mb-4">
    <div class="col">
      <div class="form-outline">
      <label class="form-label" for="vbrand">Brand ID</label>
        <input type="text" value="<?php echo $row['vbrand'] ?>" class="form-control" />
      
      </div>
    </div>
    <div class="col">
      <div class="form-outline">
      <label class="form-label" for="vmodel">Brand Model</label>
        <input type="text" value="<?php echo $row['vmodel'] ?>" class="form-control" />
       
      </div>
    </div>
  </div>
  <div class="row mb-4">
    <div class="col">
      <div class="form-outline">
      <label class="form-label" for="vname">Vehcile Name</label>
        <input type="text" value="<?php echo $row['vname'] ?>" class="form-control" />
        
      </div>
    </div>
    <div class="col">
      <div class="form-outline">
      <label class="form-label" for="vnumber">Vehcile no</label>
        <input type="text" value="<?php echo $row['vnumber'] ?>" class="form-control" />
       

        
      </div>
    </div>

    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo"> Take Action</button>


<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="">Take Action</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      
      <input type="hidden" id="vid" name="Bid" value="<?php echo $_GET['Bid']; ?>">
         <div class="mb-3">
           <label for="message-text" class="col-form-label">Remarks:</label>
           <textarea class="form-control" value="message-text" rows="7"name="remark"></textarea>
         </div>
         <div class="mb-3">
           <label for="cost" class="col-form-label">Total Cost:</label>
           <input type="text"class="form-control"name="tcost" value=""/>
         </div>
         <div class="mb-3">
           <label for="status" class="col-form-label">Status:</label>
           <select class="form-control" value="status"/ name="status">
                                  <option selected>select</option>          
                                  <option value="Approved">Approved</option>
                                   <option value="Reject">Reject</option>
</select>         
         </div>
       
     </div>
     <div class="modal-footer">
       <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
       <button type="submit" id="submit"class="btn btn-primary "name="submit">Update</button>
     </div>
     </form>