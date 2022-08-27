<?php
  include 'view/shared/Navigationbar.php';
  
?>
<style>
  p{
    color:blue;
    font_size: medium;
  }
  </style>
<link rel="stylesheet" href="/projectMVC/libraries/boot/css/bootstrap.min.css">
<script src="/projectMVC/libraries/boot/js/bootstrap/.min.js"></script>
  <div class="container">
<center> <h2>Booking Details</h2></center> 
            
  <table class="table table-dark table-striped">
    <thead>
    <?php  
		$Bid=1;
		while($row=$result->fetch_assoc()){ ?>
      <p style="text-decoration: underline; font-weight: bold;"><?php echo $row['Bid']; ?> Booking Details<p>
      <p>Booking #<?php echo $row['Bid']; ?><p>
      <p>Booking Time:-<?php echo $row['Book_Time']; ?><p>
      <p>Booking Staus:-<?php echo $row['Status']; ?><p>
      <tr>

        <th>SN</th>
        <th>Booking ID</th>
        <th>Booking Date</th>
        <th>Booking From</th>
        <th>Booking To</th>
        <th>View Image</th>
        <th>Vehicle Name</th>
        <th>Vehicle Number</th>
        <th>Cost</th>
        <th>TotalCost</th>
        <th>Remarks</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><?php echo $Bid; ?></td>
        <td><?php echo $row['Bid']; ?></td>
        <td><?php echo $row['Book_Time']; ?></td>
        <td><?php echo $row['From_Date']; ?></td>
        <td><?php echo $row['To_Date']; ?></td>
        <td> <img src="/projectMVC/image/<?php echo $row['image1']; ?>"width="200" height="150" alt=""></td>
        <td><?php echo $row['vname']; ?></td>
        <td><?php echo $row['vnumber']; ?></td>
        <td><?php echo $row['rrent']; ?></td>
        <td><?php echo $row['TotalCost']; ?></td>
        <td><?php echo $row['Response']; ?></td>
       
       
      </tr>
      <?php $Bid++; }
	?>
    </tbody>
  </table>
</div>
<button class="btn btn-primary" onClick=window.print()> Print </button>
</body>
</html>
