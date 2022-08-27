<?php

  include 'view/shared/Navigationbar.php';
  
?>
<style>
   #submit {padding: 7px 12px;
          
        }
        .container{
            border: blue solid;
          margin-left: auto;
           width:40%;
          }
          }
          .form-outline{
          }
          h3 {
            margin-top: 30px;
          margin-bottom: 30px;
          color:blue;
          
        }
        
        
    </style>
    <html>
      <body>
     <center><h3>Book Your Two Wheeler Vehicle</h3><center>
     
    <div class="container" >

<form method="POST" action="Booking/aBooking">
<input type="hidden" id="vid" name="cid" value="<?php echo $_SESSION['id']; ?>">
       <input type="hidden" id="vid" name="vid" value="<?php echo $_GET['vid']; ?>">
        <div class="row mb-4">
      <div class="col">
        <div class="form-outline">
              <label class="form-label" for="bname">Full Name</label>
            <input type="text" id="bname" name="bname" class="form-control" >
        
                </div>
        </div>
         </div>
        <div class="row mb-4">
      <div class="col">
        <div class="form-outline">
             <label class="form-label" for="email">Email</label>
           <input type="text" id="email" name="email" class="form-control" >
        
                </div>
        </div>
        </div>
      <div class="row mb-4">
      <div class="col">
        <div class="form-outline">
             <label class="form-label" for="address">Address</label>
           <input type="text" id="address"  name="address" class="form-control" />
        
                </div>
        </div>
      </div>
 
    <div class="row mb-4">
       <div class="col">
          <div class="form-outline">
               <label class="form-label" for="number">Mobile number</label>
              <input type="text" id="number" name="number" class="form-control" />
    
            </div>
          </div>

      </div>
   <div class="row mb-4">
       <div class="col">
          <div class="form-outline">
                <label class="form-label" for="from">From Date</label>
              <input type="date" id="from"  name="from"class="form-control" />
    
            </div>
          </div>
    
  <div class="col">
       <div class="form-outline">
           <label class="form-label" for="to">To Date</label>
         <input type="date" id="to"  name="to"class="form-control" />
         </div> 
        </div>
        </div>
  <div class="row mb-4">
     <div class="col">
        <div class="form-outline">
             <label class="form-label" for="lno">  License No</label>
           <input type="text" id="lno"  name="lno"class="form-control" />
    
          </div>
      </div>
    </div>
    <div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
    <button type="submit" id="submit"class="btn btn-primary "name="submit">Book now</button>
  </div>
    
</div>
</form>
</div>
      </body>
<html>