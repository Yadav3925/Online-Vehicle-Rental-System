
 <?php
include 'view/shared/Navigationbar.php';
?>
<html>
<head>
  


  <meta charset="utf-8">
  <title>Landing page</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  

</head>
 
<body>
  <section >
   <!-- <h1 align="center">Welcome to Online Vehicle Rental System</h1>
    <h2 align="center">Rent a vehicle for your destination</h2>
    <div style="background-image: url('image/11.jpg');
     background-size: cover; height:380px; padding-top:80px;">
  </div> -->
      <!--<div class="container">
       <div class="row">
        <div class="col-sm-40"> 
                  <img src="image/11.jpg" alt="" class="img-fluid">
          </div>
        </div>
      </div> -->
   <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="image/11.jpg" alt="langding-page" width="100%" height="100%">
      <div class="carousel-caption">
        <h1>Welcome</h1>
        <p></p>
      </div>   
    </div>



  </section>
  <br><br><br><br><br>
  <section style="width:100%;background-color: whitesmoke;">
    <center>
    <div class="container">
      <div class="col">
        <div class="col-sm-5">
          <div class="card-block"> 
              <div class="card-title">
                <h1>Two Wheeler Vehicles</h1>  
                  <img src="image/bike1.jpg" width="500" alt="" class="img-fluid">
              </div>
              
              <div class="card-text">
                <h3>You cann see Two Wheeler vehicle from here. </h3></div>
             
              <a  href="Booking/Book" button type="button" class="btn btn-primary">See</a>
              
            </div>
            
          </div>
          
        </div>

        <div class="col-sm-6">
          <div class="card-block"> 
              <div class="card-title">
                <h1>Four Wheeler Vehicles</h1>   
                 <img width="415" src="image/car2.jpg" alt="" class="img-fluid">
              </div>
              
              <div class="card-text">
                <h3>You cann see Four Wheeler vehicle from here.</h3> </div>
             
              <a  href="Booking/BookF" button type="button" class="btn btn-info">See</a>
               </center>
            </div>
          </div>     
        </div>       
      </div>
    </div>
   
</section>
<br><br><br>


  
<section id="backcolor" style="background-color: black;" style="max-width:">
 

    <?php
      include 'view/shared/aboutus.php'

    ?>
     <a href=""><button type="button" class="btn btn-dark active btn-lg btn-block"><h2>Back to top</h2></button></a>
</section>



<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
 </body>
</html>