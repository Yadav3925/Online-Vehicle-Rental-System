<!DOCTYPE html>
<html>
<head>
<title>navbar</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <base href="/projectMVC/">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<link rel="stylesheet" href="/projectMVC/libraries/css/dashboard.css">
<style>
 
</style>
</head>
<body>

<!-- Vertical navbar -->
<div class="vertical-nav" id="sidebar"  style="background-color:whitesmoke;" >
  <div class="py-4 px-3 mb-4">
    <div class="media d-flex align-items-center">
      <div class="media-body">
        <h4 class="m-0">OVRS</h4>
      </div>
    </div>
  </div>

  <ul class="nav flex-column mb-0" style="background-color:whitesmoke; margin-top: 10px;">
    <li class="nav-item">  
    <a href="Admin/Dashboard" class="nav-link text-black">
    <i class="fa fa-home mr-3 text-dark fa-fw "></i>
      Dashboard</a>
     </li>
     </a>
     </li>


    <li class="nav-item dropdown">  
       <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
   <i class="fa fa-file-o mr-3 text-dark fa-fw "></i>
   Brand
     </a>
      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="Brand/add">Add Brand</a>
          <a class="dropdown-item" href="Brand/Index">Manage Brand</a>
        </div>
     </li>
         

      <li class="nav-item dropdown">  
       <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fa fa-car mr-3 text-dark fa-fw "></i>
      Two Wheeler</a>
      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="Vehcile/addV">Add</a>
          <a class="dropdown-item" href="Vehcile/Index">Manage</a>
        </div>
     </li>
        
    <li class="nav-item dropdown">  
       <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fa fa-car mr-3 text-dark fa-fw "></i>
      Four Wheeler</a>
      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="Fvehicle/addV">Add</a>
          <a class="dropdown-item" href="Fvehicle/Index">Manage</a>
        </div>
     </li>
     <li class="nav-item">  
    <a href="Admin/RegisterUser" class="nav-link text-black">
    <i class="fa fa-registered mr-3 text-dark fa-fw"></i>
      Register User</a>
     </li>
     </a>
     </li>
      <li class="nav-item dropdown">  
       <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class ="fa fa-envelope mr-3 text-dark fa-fw"></i>
       Two Wheeler Booking</a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="Booking/NewBooking">New Booking</a>
          <a class="dropdown-item" href="Booking/ApprovedT">Approved Booking</a>
          <a class="dropdown-item" href="Booking/RejectT">Unpproved Booking</a>
          <a class="dropdown-item" href="Booking/AllBooking">All Booking</a>
        </div>
     </li>
       
        <li class="nav-item dropdown">  
       <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class ="fa fa-envelope mr-3 text-dark fa-fw"></i>
       Four Wheeler Booking</a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
         <a class="dropdown-item" href="Booking/NewBookingF">New Booking</a>
          <a class="dropdown-item" href="Booking/ApprovedF">Approved Booking</a>
          <a class="dropdown-item" href="Booking/RejectF">Unpproved Booking</a>
          <a class="dropdown-item" href="Booking/AllBookingF">All Booking</a>
        </div>
     </li>


     <li class="nav-item dropdown">  
       <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class ="fa fa-registered mr-3 text-dark fa-fw"></i>
       Two Wheeler Report</a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
         <a class="dropdown-item" href="Report/BetweenR"> Between Booking</a>
          <a class="dropdown-item" href="Report/CountApprovedT">Count Approved Booking</a>
          <a class="dropdown-item" href="Report/UnapprovedT">Count Unapproved Booking</a>
          
        </div>
     </li>
      
     
     <li class="nav-item dropdown">  
       <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class ="fa fa-registered mr-3 text-dark fa-fw"></i>
       Four Wheeler Report</a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="Report/AllBooking"> Between Booking</a>
          <a class="dropdown-item" href="Report/ApprovedBooking">Count Approved Booking</a>
          <a class="dropdown-item" href="Report/UnapprovedBooking">Count Unapproved Booking</a>
        </div>
     </li><ul>
</div>
</div>
<!-- End vertical navbar -->



<!-- Page content holder -->
<div class="page-content p-0 mr-1" id="content">
<!-- this is nav -->
      <nav class="navbar navbar-expand-sm bg-light">
        <button id="sidebarCollapse" type="button" class="btn btn-light rounded-pill shadow-sm px-7 mb-2 float-left" style="background-color:whitesmoke;height: 54px;">
    <i class="fa fa-bars mr-8">
    </i><small class="text-uppercase font-weight-bold"></small></button>

            <form class="form-inline" method="POST" action="Admin/Search">
    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="submit">Search</button>
  </form>
  
        <ul class="navbar-nav ml-auto">
        
       
      
            </li>
           
            
            <li class="nav-item dropdown">  
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="fa fa-user-circle">Profile</i>
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="Admin/Profile">My Profile</a>
               <a class="dropdown-item" href="Admin/Update">Update Password</a>
              <a class="dropdown-item" class="btn btn-info btn-lg"  href="Admin/Logout">
              <span class="glyphicon glyphicon-log-out"></span> Logout</a>
         </div>
            </li>
        </ul>
    </nav>
  <!-- Demo content -->
  </div>
  <script>
  $(function() { 
  $('#sidebarCollapse').on('click', function() {
    $('#sidebar, #content').toggleClass('active');
  });
});
</script>





