
<?php
  include 'view/shared/Navigationbar.php';
?>
<head>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.min.css" />
  
<link rel="stylesheet" href="/projectMVC/libraries/css/myprofile.css">
  <script src="/projectMVC/libraries/js/myprofile.js"></script>
  <title>Your Profile</title>
  <!-- Bootstrap CSS -->
 
  
</head>
<body>
    
  <div class="container">
    <div class="row">
      <div class="col-4 offset-md-4 form-div">
        <form action="User/insertImage" method="post" enctype="multipart/form-data">
          <h2 class="text-center mb-3 mt-3">My profile</h2>
          
          <div class="form-group text-center" style="position: relative;" >
            <span class="img-div">
              <div class="text-center img-placeholder"  onClick="triggerClick()">
                <h4>Add image</h4>
                <?php  
		
	           	while($row=$result->fetch_assoc()){ ?>
              </div>
              <img src="image/userprofile/<?php echo $row['Profile']; ?>" onClick="triggerClick()" id="profileDisplay">
            </span>
            <input type="file" name="profileImage" onChange="displayImage(this)" id="profileImage" class="form-control" style="display: none;">
            <label>Profile Image</label>
          </div>
          <div class="form-group">
            <button type="submit" name="submit" class="btn btn-primary btn-block">Add Profile</button>
          </div>
            <div class="container">
         <div class="row">
             <div class="col-12 col-md-14">
     
          <ul class="list-group">
      
            <li class="list-group-item" name="name"  value=""> <i class="fas fa-male text-info mx-2"></i><?php echo $row['Name']; ?></li>
            <li class="list-group-item" name="email"  value=""> <i class="fas fa-venus text-warning mx-2"></i><?php echo $row['Email']; ?></li>
            <li class="list-group-item" name="number"  value=""> <i class="fas fa-venus text-warning mx-2"></i><?php echo $row['MobileNumber']; ?></li>
             <li class="list-group-item" name="address"value=""> <i class="fas fa-gavel text-danger mx-2" ></i> <?php echo $row['Address']; ?></li>
             <?php   }
	?>  
               
            </ul>
           
    </div>
  </div>
</div>
          </div>
        </form>
    </body>         
   
