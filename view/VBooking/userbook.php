
<?php
  include 'view/shared/Navigationbar.php';
  
?>
 
<!doctype html>
<html>
<head>
 
  <style>
    
    </style>
<title></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

 <meta charset="utf-8">
 
<link rel="stylesheet" href="/projectMVC/libraries/css/book.css">
</head>
<body> 

<h2 class="text-center">Two Wheelers</h2>
<br><br>
<?php  
	$vid=1;	         
 while($row=$result->fetch_assoc()){ ?>
<div class="outer" style="margin-left: 10%;">
  <div class="center-wrapper">
    <div class="container-fluid content">
      <div class="row">
        <div class="col-12 col-sm-12 col-md-6">
          <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
         
              <li data-target="#carouselExampleIndicators" data-slide-to="1"><img src="image/<?php echo $row['image1']; ?>" class="d-block w-100" alt="..."></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"><img src="image/<?php echo $row['image2']; ?>" class="d-block w-100" alt="..."></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
              <img src="image/<?php echo $row['image1']; ?>" class="d-block w-100" alt="..."height="390">
              </div>
              
              <div class="carousel-item">
                <img src="image/<?php echo $row['image2']; ?>" class="d-block w-100" alt="..."height="390">
              </div> 


              <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a> 
            </div> 
          </div>
        </div>
        <div class="col-12 col-sm-12 col-md-6 ">



          <div id="name">
          <?php echo $row['vname']; ?>
            <div id="price" style="float: right;margin-right: 30%;">
            Rent Price Per/Day <?php echo $row['rrent']; ?>
            </div>
          </div>
          <br>

          <div >
           <p style="margin-right: 30%; text-align: justify;"><?php echo $row['remarks']; ?> </p>
          </div> 
           <br>
          <div class="text4">

           <table class="table table-success table-striped" style="width: 70%; border-color:green ;">
 
        <tbody>
          <tr>
           <th scope="row">Brand</th>
           <td><?php echo $row['brand_name']; ?></td>
    
         </tr>
         <tr>
          <th scope="row">Model</th>
          <td><?php echo $row['vmodel']; ?></td>
      
         </tr>
         <tr>
          <th scope="row">Seat</th>
          <td><?php echo $row['scapacity']; ?></td>
      
         </tr>
   
  </tbody>
</table>



</div>  



<a class="btn btn-primary" href="Booking/BookV?vid=<?php echo $row['vid'] ?>"> Book</a>
</div>  
</div>  
</div>
</div>
</div>
</div> 
<?php $vid++; }
	?>
  <br>
  <br>
  <br>
<!--
  
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="">Book From Here</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

      <form method="POST" action="Booking/aBooking">
        
		    <div class="row mb-4">
          <div class="col">
            <div class="form-outline">
	              <label class="form-label" for="bname">Full Name</label>
                <input type="text" id="bname" name="bname" class="form-control" />
            
			        </div>
            </div>
	         </div>
     	   <div class="row mb-4">
          <div class="col">
            <div class="form-outline">
	             <label class="form-label" for="email">Email</label>
               <input type="text" id="email" name="email" class="form-control" />
            
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
        <button type="submit" id="submit"class="btn btn-primary btn-block mb-4"name="submit">Book now</button>
      </div>
        
  </div>



          


 
          
