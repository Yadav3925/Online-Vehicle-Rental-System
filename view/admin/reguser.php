<?php
  include 'view/shared/admin dashboard.php';
?>
<base href="/projectMVC/">

<body>

<div class="container">
<div class="page-content p-0 mr-1" id="content">
<center> <h1>Registered User List</h1></center> 
 
  <table class="table table-dark table-striped">
    <thead>
      <tr>
        <th>Customer_id</th>
        <th>Customer_name</th>
        <th>Email</th>
        <th>Customer_address</th>
        <th>MobileNumber</th>
       
       
      </tr>
      <?php  
		
		while($row=$result->fetch_assoc()){ ?>
		<tr>
			
           <td><?php echo $row['Customer_id']; ?></td>
			<td><?php echo $row['Customer_name']; ?></td>
			<td><?php echo $row['Email']; ?></td>
            <td><?php echo $row['Customer_address']; ?></td>
			<td><?php echo $row['MobileNumber']; ?></td>
        
			
		</tr>

    <?php  }
	?>
	

    </thead>
    
  </table>
        </form>
</div>

</body>
</html>


