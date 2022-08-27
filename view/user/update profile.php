<?php
  include 'view/shared/Navigationbar.php';
?>
<html lang="en">
<head>
    <style>
        .form-div {
            width:600px;
             margin-top: 30px;
             
               border: 3px solid #e0e0e0;
               font-size: medium;
             }
#profileDisplay { display: block; height: 210px; width: 60%; margin: 0px auto; border-radius: 50%; }
.img-placeholder {
  width: 60%;
  color: white;
  height: 100%;
  background: black;
  opacity: .7;
  height: 210px;
  border-radius: 50%;
  z-index: 2;
  position: absolute;
  left: 50%;
  transform: translateX(-50%);
  display: none;
}
.img-placeholder h4 {
  margin-top: 40%;
  color: white;
}
.img-div:hover .img-placeholder {
  display: block;
  cursor: pointer;
}
        </style>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Update Profile</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.min.css" />
  <link rel="stylesheet" href="main.css">
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-4 offset-md-4 form-div">
        
        <form action="User/Profile" method="POST" enctype="multipart/form-data">
          <h2 class="text-center mb-3 mt-3">Update profile</h2>
          
          <?php
   //code to access data from result
       $row=$result->fetch_assoc();
        
       ?> 
          <div class="form-group text-center" style="position: relative;" >
            <span class="img-div">
              <div class="text-center img-placeholder"  onClick="triggerClick()">
                <h4>Update image</h4>
              </div>
              <img src="image/userprofile/<?php echo $row['Profile'] ?>" onClick="triggerClick()" id="profileDisplay">
            </span>
            <input type="file" name="profileImage" onChange="displayImage(this)" id="profileImage" class="form-control" style="display: none;">
            <label>Profile Image</label>
          </div>
          
          <div class="row mb-4">
          <div class="col">
            <div class="form-outline">
	              <label class="form-label" for="name">Full Name</label>
                <input type="text" value="<?php echo $row['Name'] ?>" name="name" class="form-control" />
            
			        </div>
            </div>
	         </div>
     	   <div class="row mb-4">
          <div class="col">
            <div class="form-outline">
	             <label class="form-label" for="email">Email</label>
               <input type="text" value="<?php echo $row['Email'] ?>" name="email" class="form-control" />
            
			        </div>
            </div>
	        </div>
     	 
     
        <div class="row mb-4">
           <div class="col">
              <div class="form-outline">
	               <label class="form-label" for="number">Mobile number</label>
                  <input type="text" value="<?php echo $row['MobileNumber'] ?>" name="number" class="form-control" />
                  </div>
                </div>
              </div>
             
          <div class="row mb-4">
          <div class="col">
            <div class="form-outline">
	             <label class="form-label" for="address">Address</label>
               <input type="text" value="<?php echo $row['Address'] ?>" name="address" class="form-control" />
            </div>
            </div>
          </div>
        
          <div class="form-group">
            <button type="submit" name="submit" class="btn btn-primary btn-block">Update</button>
          </div>
     </div>
</div>
</div>
</form >    
</body>
</html>
<script >
    function triggerClick(e) {
  document.querySelector('#profileImage').click();
}
function displayImage(e) {
  if (e.files[0]) {
    var reader = new FileReader();
    reader.onload = function(e){
      document.querySelector('#profileDisplay').setAttribute('src', e.target.result);
    }
    reader.readAsDataURL(e.files[0]);
  }
}
</script>
