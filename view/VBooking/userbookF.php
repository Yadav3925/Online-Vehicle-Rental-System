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

<h2 class="text-center">Four Wheelers</h2>
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
              <img src="image/<?php echo $row['image1']; ?>" class="d-block w-100" alt="..." height="530">
              </div>
              
              <div class="carousel-item">
                <img src="image/<?php echo $row['image2']; ?>" class="d-block w-100" alt="..." height="530">
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
        <div class="col-12 col-sm-12 col-md-6 "style=" ">



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

    <tr>
          <th scope="row">Class</th>
          <td><?php echo $row['Class']; ?></td>
      
    </tr>
    <tr>
          <th scope="row">Fuel</th>
          <td><?php echo $row['Fuel']; ?></td>
      
    </tr>

    <tr>
          <th scope="row">Door</th>
          <td><?php echo $row['Doors']; ?></td>
      
    </tr>
    <tr>
          <th scope="row">GearBox</th>
          <td><?php echo $row['GearBox']; ?></td>
      
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