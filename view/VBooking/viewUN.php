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
      <label class="form-label" for="cost">Total Cost</label>
        <input type="text" value="cost" class="form-control" />
      
      </div>
    </div>
  </div>
  <div class="row mb-4">
    <div class="col">
      <div class="form-outline">
      <label class="form-label" for="vbrand">Brand Name</label>
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
    <table class="table">
    <thead>
    <th scope="col" colspan="3"align="center">Response Histroy</th>
</thead>
  <thead>
    <tr>
      <th scope="col">Bid</th>
      <th scope="col">Total Cost</th>
      <th scope="col">Status</th>
      
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">"<?php echo $row['Bid'] ?>"</th>
      <td>"<?php echo $row['TotalCost'] ?>"</td>
      <td>"<?php echo $row['Status'] ?>"</td>
      
    </tr>
    
  </tbody>
</table>
   