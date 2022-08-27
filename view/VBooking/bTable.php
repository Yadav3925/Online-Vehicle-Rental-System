<?php
  include 'view/shared/Navigationbar.php';
  
?>
<link rel="stylesheet" href="/projectMVC/libraries/boot/css/bootstrap.min.css">
<script src="/projectMVC/libraries/boot/js/bootstrap/.min.js"></script>
  <div class="container">
<center> <h2>Your Two Wheeler Booking</h2></center> 
            
  <table class="table table-dark table-striped">
    <thead>
      <tr>
        <th>SN</th>
        <th>Booking ID</th>
        <th>Booking By</th>
        <th>Booking Status</th>
        <th>Booking Details</th>
      </tr>
      <?php  
		$Bid=1;
		while($row=$result->fetch_assoc()){ ?>
		<tr>
			<td><?php echo $Bid; ?></td>
      <td><?php echo $row['Bid']; ?></td>
			<td><?php echo $row['Customer_name']; ?></td>
			<td><?php echo $row['Status']; ?></td>
		
			
			<td>	<a class="btn btn-primary" href="Booking/BDetails?Bid=<?php echo $row['Bid'] ?>"> View Booking Details </a></td>
          
		</tr>
    <?php $Bid++; }
	?>
      </tr>
    
    </tbody>
  </table>
</div>

</body>
</html>
