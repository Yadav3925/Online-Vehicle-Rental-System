<?php
  include 'view/shared/Navigationbar.php';
  
?>
 <div class="container">
     <h3>Enter Your Valid Email</h3>
     <form method="POST" action="User/Forgot">
 <div class="row mb-4">
          <div class="col">
            <div class="form-outline">
	             <label class="form-label" for="email">Email</label>
               <input type="text" id="email" name="email" class="form-control"placeholder="Enter your Register Email" />
            
			        </div>
            </div>
	        </div>
            <div class="form-group">
            <button type="submit" name="submit" class="btn btn-primary btn-block">Send Mail</button>
          </div>
          <form>
     </div>
     	 