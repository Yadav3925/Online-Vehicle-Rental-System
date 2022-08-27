<?php
  include 'view/shared/admin dashboard.php';
?>


<base href="/projectMVC/">

<body>
<div class="page-content p-0 mr-1" id="content">
<div class="container">
<center> <h1>No Of Booking Request</h1></center> 
 
  <table class="table table-light table-striped">
    <thead>
      <tr>
        <th>Status</th>
        <th>No of Booking</th>
       
       
      </tr>
      <?php  
		
		while($row=$result->fetch_assoc()){ ?>
		
         <tr>
          <th scope="row"><?php echo $row['Status']; ?></th>
          <td><?php echo $row['Book_Time']; ?></td>
      
         </tr>
         <?php  }
	?>


    </thead>
    
  </table>
        </form>
</div>

</body>
</html>