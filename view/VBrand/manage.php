<?php
  include 'view/shared/admin dashboard.php';
?>

<link rel="stylesheet" href="/projectMVC/libraries/boot/css/bootstrap.min.css">
<script src="/projectMVC/libraries/boot/js/bootstrap/.min.js"></script>
<base href="/projectMVC/">
<div class="page-content p-0 mr-1" id="content">
<!DOCTYPE html>
<html lang="en">
<head>
<div class="container">
<center> <h1>Manage Brand</h1></center> 
 
  <table class="table table-dark table-striped">
    <thead>
      <tr>
        <th>SNo</th>
        <th>Brand_ ID</th>
        <th>Brand name</th>
        <th>Creation Date</th>
        <th>Action</th>
       
      </tr>
      <?php  
		$brand_id=1;
		while($row=$result->fetch_assoc()){ ?>
		<tr>
			<td><?php echo $brand_id; ?></td>
			<td><?php echo $row['brand_id']; ?></td>
    	<td><?php echo $row['brand_name']; ?></td>
			<td><?php echo $row['creation_date']; ?></td>
			
			<td>
				<a class="btn btn-primary" href="Brand/Update?brand_id=<?php echo $row['brand_id'] ?>"> Update </a>
				<a class="btn btn-danger" href="Brand/Delete?brand_id=<?php echo $row['brand_id'] ?>" onClick="return confirm('Do you want to Delete? Y/N')"> Delete </a>
			</td>
		</tr>

		<?php $brand_id++; }
	?>

    </thead>
    
  </table>
      
</div>
</body>
</html>
