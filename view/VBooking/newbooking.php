<?php
  include 'view/shared/admin dashboard.php';
?>


<base href="/projectMVC/">

<body>

<div class="container">
<div class="page-content p-0 mr-1" id="content">
<center> <h1>New Two Wheeler Booking</h1></center> 
 
  <table class="table table-dark table-striped">
    <thead>
      <tr>
        <th>SNo</th>
        <th>Booking ID</th>
        <th>Full Name</th>
        <th>Booking Date</th>
        <th>Action</th>
       
      </tr>
      <?php  
		$Bid=1;
		while($row=$result->fetch_assoc()){ ?>
		<tr>
			<td><?php echo $Bid; ?></td>
      <td><?php echo $row['Bid']; ?></td>
			<td><?php echo $row['Customer_name']; ?></td>
			<td><?php echo $row['Book_Time']; ?></td>
	
			
        
			<td>	<a class="btn btn-primary" href="Booking/viewDetails?Bid=<?php echo $row['Bid'] ?>"> View </a></td>
		</tr>

    <?php $Bid++; }
	?>
	

    </thead>
    
  </table>
        </form>
</div>

</body>
</html>
