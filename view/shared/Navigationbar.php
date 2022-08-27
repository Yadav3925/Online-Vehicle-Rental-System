<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css">
  <link rel="stylesheet" type="text/css" href="style.css">

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>User Landing Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <base href="/projectMVC/">
 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <link rel="stylesheet" href="/projectMVC/libraries/css/nav.css">


</head>

<body>



<nav  class="navbar navbar-expand-sm bg-dark">

  <div class="container-fluid">
    <div class="navbar-header">
      <ul>
        <li class="pull-sm-left float-lg-left">
        <a class="navbar-brand" href="#">
         
            <!-- Add logo with size of 90*80 -->
            <img src="/projectMVC/image/logo3.jpg"width="150" height="54" alt="">
        </a>
      </li>
    </ul>
    </div>
 
    <ul class="nav navbar-nav">
      <li><a href="">Home</a></li>
     
      <li><a href="Booking/Book">Two Wheeler</a></li>
      <li><a href="Booking/BookF">Four Wheeler</a></li>
      <li class="nav-item dropdown">
         <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          My Booking
        </a>
        <ul class="dropdown-menu">
          <li><a href="Booking/BTable">Two Wheeler</a></li>
          <li><a href="Booking/BTableF">Four Wheeler</a></li>
        
        </ul>
      </li>

       <li class="nav-item dropdown">
         <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          My Account
        </a>
        <ul class="dropdown-menu">
          <li><a href="User/MyProfile">My Profile</a></li>
          <li><a href="User/Update">Update Profile</a></li>
          <li><a href="User/ChangeP">Change Password</a></li>
          <li><a href="User/Logout">Log Out</a></li>
        </ul>
      </li>
        <li><a href="User/AboutUs">About Us</a></li>
        
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="User/Create"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="User/Login"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>

  </div>
</nav>
</body>
</html>