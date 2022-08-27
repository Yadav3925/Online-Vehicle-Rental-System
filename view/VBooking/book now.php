<!DOCTYPE html>
<html>
<head>
    <title>navbar</title>
   
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>


<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="/projectMVC/libraries/css/dashboard.css">
<base href="/projectMVC/">
</head>
<body>
 
<!-- Vertical navbar -->
<div class="vertical-nav" id="sidebar"  style="background-color:#5f27cd;" >
  <div class="py-4 px-3 mb-4" style="background-color:#5f27cd;">
    <div class="media d-flex align-items-center">
      <img loading="lazy" src="/BCAFOURTH/images/hotellogo.png" alt="..." width="80" height="80" class="mr-3 rounded-circle img-thumbnail shadow-sm">
      <div class="media-body">
        <h4 class="m-0">HAMRO</h4>
        <p class="font-weight-normal text-light mb-0">HOTEL.COM</p>
      </div>
    </div>
  </div>

  <p class="text-white font-weight-bold text-uppercase px-3 small pb-4 mb-0">Dashboard</p>

 
  <ul class="nav flex-column mb-0" style="background-color:#5f27cd;">
<li class="nav-item" style="background-color:#599fd9;"> 
    <a href="Admin/Profile" class="nav-link text-dark bg-secondary">
      <i class ="fa fa-th-large mr-3 text-primary fa-fw"></i>
      Home</a>
      </li>

      <li class="nav-item dropdown ">  
    <!-- <a href="/BCAFOURTH/Room/Index" class="nav-link text-white"> -->
    <a class="nav-link dropdown-toggle nav-link text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <i class="fa fa-building-o mr-3 text-light fa-fw"></i>
      ManageRoom</a>
      <div class="dropdown-menu" aria-labelledby="navbarDropdown float-md-right">
          <a class="dropdown-item" href="Vehcile/addV">Add Room</a>
          <a class="dropdown-item" href="/BCAFOURTH/Floor/Index">Add Floor</a>
        </div>
</li>
<li class="nav-item dropdown ">  
    <!-- <a href="/BCAFOURTH/Room/Index" class="nav-link text-white"> -->
    <a class="nav-link dropdown-toggle nav-link text-white" href="/BCAFOURTH/Bookingdetails/bookingdetails" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <i class="fa fa-info mr-3 text-light fa-fw"></i>
      BookingDetails</a>
      <div class="dropdown-menu" aria-labelledby="navbarDropdown float-md-right">
      <a class="dropdown-item" href="/BCAFOURTH/Bookroom/selectNewbroom">new booking</a>
          <a class="dropdown-item" href="/BCAFOURTH/Bookroom/selectAlldetails">Approved Room</a>
          <a class="dropdown-item" href="#">Reject Request</a>
        </div>
</li>




      <!-- <li class="nav-item">  
    <a href="/BCAFOURTH/Bookingdetails/bookingdetails" class="nav-link text-white">
      <i class="fa fa-info mr-3 text-light fa-fw "></i>
      BookingDetails</a>
</li> -->

      <li class="nav-item">  
    <a href="#" class="nav-link text-white">
      <i class ="fa fa-file-o mr-3 text-light fa-fw"></i>
      Report</a>
</li>

      <li class="nav-item">  
    <a href="/BCAFOURTH/Enquiry/Index"class="nav-link text-white">
      <i class ="fa fa-envelope mr-3 text-light fa-fw"></i>
      Enquiry</a>
</li>
<li class="nav-item">  
    <a href="/BCAFOURTH/Page/Index" class="nav-link text-white">
      <i class ="fa fa-file-text-o mr-3 text-light fa-fw"></i>
      Page</a>
</li>
<li class="nav-item">  
    <a href="/BCAFOURTH/Registeruser/Index" class="nav-link text-white">
      <i class ="fa fa-registered mr-3 text-light fa-fw"></i>
      Register User</a>
</li>
<li class="nav-item">  
    <a href="/BCAFOURTH/User/Login" class="nav-link text-white">
      <i class ="fa fa-sign-out mr-3 text-light fa-fw"></i>
      LogOut</a>
</li>
<ul>
</div>
<!-- End vertical navbar -->


<!-- Page content holder -->
<div class="page-content p-0 mr-1" id="content">
  
<!-- this is nav -->
<nav class="navbar navbar-light" style="background-color:#5f27cd;">
  <!-- <a class="navbar-brand" href="#"></a>   -->
  <!-- <div class="search-container">
    -->
  
  
    <!-- <form class="form-inline">
    <input class="form-control sm-w-50" type="search" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
  </form> -->


  <!-- Toggle button -->
  <button id="sidebarCollapse" type="button" class="btn btn-light rounded-pill shadow-sm px-4 mb-2 float-right" style="background-color:#5f27cd;">
    <i class="fa fa-bars fa-lg mr-2 text-light"></i>
    <small class="text-uppercase font-weight-light"></small></button>
     
    <form class="form-inline">
    <input class="form-control sm-w-75" type="search" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
  </form>
</nav>

  <!-- Demo content -->

 
  <script>
  $(function() { 
  $('#sidebarCollapse').on('click', function() {
    $('#sidebar, #content').toggleClass('active');
  });
});
</script>
</div>
</body>
</html>
<!-- End demo content -->