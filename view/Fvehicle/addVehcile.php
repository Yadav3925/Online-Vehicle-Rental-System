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
<center><h1>Add Vehcile Details</h1><center>

 <div class="container" >
 <center><h3>Add Vehcile</h3><center>
   <form method="POST" action="Fvehicle/addfvehicle">
    
    <!-- 2 column grid layout with text inputs for the first and last names -->
    <div class="row mb-4">
    <div class="col">
    <div class="form-outline">
            <label for="type" class="col-form-label">Vehcile Catagory:</label>
            <select class="form-control" id="type" name="type"/>
                                   <option selected>select</option>          
                                   <option value="1">Two Wheeler</option>
                                    <option value="2">Four Wheeler</option>
            <select>         
          </div>
       </div>
      <div class="col">
      <div class="form-outline">
      <label for="brand" class="col-form-label">Brand:</label>
    
            <select class="form-control" id="brand" name="brand"/>
                                   <option selected>Select</option> 
                                   <?php 
                                    while($row=$result->fetch_assoc()){?>         
                                   <option value="<?php echo $row['brand_id'] ?>" ><?php echo $row['brand_name']; ?></option>
                                <?php }
                                ?>    
            <select> 
         
    </div>
  </div>
</div>
  <div class="row mb-4">
    <div class="col">
      <div class="form-outline">
      <label class="form-label" for="name">Vehcile Name</label>
      <input type="text" id="name" class="form-control" name="name" />
        
      </div>
    </div>
    <div class="col">
      <div class="form-outline">
      <label class="form-label" for="vnumber">Vehcile Registreation Number</label>
        <input type="text" id="vnumber" class="form-control" name="number" />
        
      </div>
    </div>
  </div>
  <div class="row mb-4">
    <div class="col">
      <div class="form-outline">
      <label class="form-label" for="cost">Rental Price/Day</label>
        <input type="text" id="cost" class="form-control"  name="cost"/>
      
      </div>
    </div>
    <div class="col">
      <div class="form-outline">
      <label class="form-label" for="model">Vehcile Model Year</label>
        <input type="text" id="model" class="form-control" name="model"/>
  
      </div>
    </div>
  </div>
  <div class="row mb-4">
    <div class="form-outline">
  <div class="mb-3">
            <label for="message-text" class="col-form-label">Remarks:</label>
            <textarea class="form-control" id="message-text" rows="4" name="remarks"></textarea>
          </div>
    </div>
    <div>
 
  <div class="row mb-4">
    <div class="col">
      <div class="form-outline">
      <label class="form-label" for="seat">Seating Capacity</label>
        <input type="text" id="seat" class="form-control"name="seat" />
     </div>
      </div>
    </div>
    
  </div>
  <div class="row mb-4">
    <div class="col">
      <div class="form-outline">
      <label class="form-label" for="class">class</label>
      <input type="text" id="class" class="form-control" name="class" />
        
      </div>
    </div>
    <div class="col">
      <div class="form-outline">
      <label class="form-label" for="fuel">Fuel</label>
        <input type="text" id="fuel" class="form-control" name="fuel" />
        
      </div>
    </div>
    <div class="col">
      <div class="form-outline">
      <label class="form-label" for="door">Doors</label>
        <input type="text" id="door" class="form-control" name="door" />
        
      </div>
    </div>
    <div class="col">
      <div class="form-outline">
      <label class="form-label" for="gear">Gear Box</label>
        <input type="text" id="gear" class="form-control" name="gear" />
        
      </div>
    </div>
  </div>
  </div>

  <div class="row mb-4">
    <div class="col">
      <div class="form-outline">
      <label class="form-label" for="vname">Image1</label>
      <input class="form-control form-control-sm" id="addb" type="file" name="i1">
</div>
     
    </div>
    <div class="col">
      <div class="form-outline">
      <label class="form-label" for="vno">Image2</label>
      <input class="form-control form-control-sm" id="addb" type="file" name="i2">
        </div>
    </div>

 </div>
 
    <div class="modal-footer">
        
    <button type="submit" id="submi"class="btn btn-primary btn-block mb-4"name="submit">Add Vehcile</button>
      </div>
  </div>
  <div>
  </div>
  </div>
      