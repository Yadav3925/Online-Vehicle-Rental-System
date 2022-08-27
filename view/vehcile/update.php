<?php
  include 'view/shared/admin dashboard.php';
?>

<base href="/projectMVC/">
<style>
  #button {padding: 12px 28px;
          
}
  h3 {
  
  margin-bottom: 20px;
  color:blue;
  
}
.container{
    border: blue solid;
 
   width:80%;
  }
  
h1 {
  
  color:blue;
  
}
 
  </style>
<div class="page-content p-0 mr-1" id="content">
<center><h1>Update Vehcile Details</h1><center>

 <div class="container" style="border:solid">
 <center><h3>Update Vehcile</h3><center>
   <form method="POST" action="Vehcile/UpdateData">
   <?php  
		$row=$result->fetch_assoc();
     ?>
    <!-- 2 column grid layout with text inputs for the first and last names -->
    <div class="row mb-4">
    <div class="col">
    <div class="form-outline">
            <label for="type" class="col-form-label">Vehcile ID:</label>
            <input type="text" value="<?php echo $row['vid'] ?>" class="form-control" name="vid" />
          </div>
       </div>
      <div class="col">
      <div class="form-outline">
      <label for="brand" class="col-form-label">Brand:</label>
            <select class="form-control" value="<?php echo $row['vbrand'] ?>" name="brand"/>
                                           
                                   <option value="<?php echo $row['vbrand'] ?>"><?php echo $row['vbrand'] ?></option>
                                   
            <select>         
    </div>
  </div>
</div>
  <div class="row mb-4">
    <div class="col">
      <div class="form-outline">
      <label class="form-label" for="vname">Vehcile Name</label>
      <input type="text" value="<?php echo $row['vname'] ?>" class="form-control" name="name" />
        
      </div>
    </div>
    <div class="col">
      <div class="form-outline">
      <label class="form-label" for="vnumber">Vehcile Registreation Number</label>
        <input type="text" value="<?php echo $row['vnumber'] ?>" class="form-control" name="number" />
        
      </div>
    </div>
  </div>
  <div class="row mb-4">
    <div class="col">
      <div class="form-outline">
      <label class="form-label" for="rrent">Rental Price/Day</label>
        <input type="text" value="<?php echo $row['rrent'] ?>" class="form-control"  name="cost"/>
      
      </div>
    </div>
    <div class="col">
      <div class="form-outline">
      <label class="form-label" for="vmodel">Vehcile Model Year</label>
        <input type="text" value="<?php echo $row['vmodel'] ?>" class="form-control" name="model"/>
  
      </div>
    </div>
  </div>
  <div class="row mb-4">
  <div class="mb-3">
            <label for="remarks" class="col-form-label">Remarks:</label>
            <textarea class="form-control" value="<?php echo $row['remarks'] ?>" rows="4" name="remarks"></textarea>
          </div>
    </div>
    
 
  <div class="row mb-4">
    <div class="col">
      <div class="form-outline">
      <label class="form-label" for="seat">Seating Capacity</label>
        <input type="text" value="<?php echo $row['scapacity'] ?>" class="form-control"name="seat" />
        
      </div>
    </div>
    
  </div>
  <div class="row mb-4">
    <div class="col">
      <div class="form-outline">
      <label class="form-label" for="i1">Image1</label>
      <input class="form-control form-control-sm" value="<?php echo $row['image1'] ?>" type="file" name="i1">
        
      </div>
    </div>
    <div class="col">
      <div class="form-outline">
      <label class="form-label" for="i2">Image2</label>
      <input class="form-control form-control-sm" value="<?php echo $row['image2'] ?>" type="file" name="i2">
        </div>
    </div>
    

    <div class="modal-footer">
        
    <button type="submit" id="update"class="btn btn-primary btn-block mb-4"name="update">Update Vehcile</button>
      </div>
  </div>
  <div>