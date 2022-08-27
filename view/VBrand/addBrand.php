<?php
  include 'view/shared/admin dashboard.php';
?>
<base href="/projectMVC/">
<div class="page-content p-0 mr-1" id="content">
<style>
  .col-sm-7{
    margin-top: 20px;
  }
  h3 {
  margin-top: 10px;
  margin-bottom: 20px;
  color:blue;
  
}
h1 {
  margin-top: 50px;
  color:blue;
  
}
 
  </style>
  <center><h1> Vehcile Brands</h1><center>
<div class="col-sm-7" style="border:solid">

<div class="mb-7 row">
<center><h3>Vehcile Brands</h3><center>
<form method="POST" action="Brand/insertBrand">
		    <div class="mb-4 row" >
           <label for="brand" class="col-sm-2 col-form-label">Brand Name:-</label>
          <div class="col-sm-8">
               <input type="text"  class="form-control form-control-sm" id="name" name="name">
    </div>
  </div>
  <div class="mb-4 row">
  
  <label for="addb" class="col-sm-2 col-form-label">Brand Logo:-</label>
     <div class="col-sm-8">
    <input class="form-control form-control-sm" id="logo" type="file" name="logo">
    </div>
</div>

<div class="modal-footer">
        
        <button type="submit" id="submi"class="btn btn-primary btn-block mb-1"name="submit">Add Brand</button>
          </div>
      </div>    
      </div>
      </form>
</div>


