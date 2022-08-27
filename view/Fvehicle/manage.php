<?php
  include 'view/shared/admin dashboard.php';
?>


<base href="/projectMVC/">

<body>
<div class="page-content p-0 mr-1" id="content">
<div class="container">
<center> <h1>Manage Vehcile</h1></center> 
 
  <table class="table table-dark table-striped">
    <thead>
      <tr>
        <th>SNo</th>
        <th>Vehcile ID</th>
        <th>Brand ID</th>
        <th>Vehcile Name</th>
        <th>Vehcile Number</th>
        <th>Action</th>
       
      </tr>
      <?php  
		$vid=1;
		while($row=$result->fetch_assoc()){ ?>
		<tr>
			<td><?php echo $vid; ?></td>
      <td><?php echo $row['vid']; ?></td>
			<td><?php echo $row['vbrand']; ?></td>
			<td><?php echo $row['vname']; ?></td>
			<td><?php echo $row['vnumber']; ?></td>
			
			<td>
				<a class="btn btn-primary" href="Fvehicle/Update?vid=<?php echo $row['vid'] ?>"> Update </a>
				<a class="btn btn-danger" href="Fvehicle/Delete?vid=<?php echo $row['vid'] ?>" onClick="return confirm('Do you want to Delete? Y/N')"> Delete </a>
			</td>
		</tr>

		<?php $vid++; }
	?>

    </thead>
    
  </table>
        </form>
</div>

</body>
</html>
