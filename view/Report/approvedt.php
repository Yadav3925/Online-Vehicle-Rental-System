<?php
  include 'view/shared/admin dashboard.php';
?>
<base href="/projectMVC/">

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
  <div class="page-content p-0 mr-1" id="content">
  <center><h1> Two Wheeler Approved Booking Reports</h1><center>
<div class="col-sm-7" style="border:solid">

<div class="mb-7 row">
<center><h3>Approved Booking Count</h3><center>
<form method="POST" action="Report/bookC">
		    <div class="mb-4 row" >
           <label for="from" class="col-sm-2 col-form-label">From Date:-</label>
          <div class="col-sm-8">
               <input type="date"  class="form-control form-control-sm" id="from" name="from">
    </div>
  </div>
  <div class="mb-4 row">
  
  <label for="to" class="col-sm-2 col-form-label">To Date:-</label>
     <div class="col-sm-8">
    <input  class="form-control form-control-sm" id="to" type="date" name="to">
    </div>
</div>

<div class="modal-footer">
        
        <button type="submit" id="submi"class="btn btn-primary btn-block mb-1"name="submit">Submit</button>
          </div>
      </div>    
      </div>
      </form>
</div>
</div>