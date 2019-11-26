<div class="container">
	<form class="form-group mt-3" method="post" action="home.php?info=payment_search">
		<h3 class="lead">SEARCH PAYMENT AREA</h3>
		<input type="text" name="id" class="form-control" placeholder="ENTER PAYMENT AREA ID">
	</form>

	<div class="container">
		<table class="table table-bordered table-hover">
			<tr>
				<th>PAYMENT AREA ID</th>
				<th>AMOUNT</th>
				<th>GYM ID</th>
			</tr>
			<?php
           require('db.php');

$all="SELECT * FROM payment";
$all_query=mysqli_query($conn,$all);
if (mysqli_num_rows($all_query) > 0) {
    while($row = mysqli_fetch_assoc($all_query)) {
       echo "<tr>";
			echo "<td>".$row['pay_id']."</td>";
			echo "<td>".$row['amount']."</td>";
			echo "<td>".$row['gym_id']."</td>";
		echo "</tr><br>";
    }
} else {
    echo "0 results";
}

?>
			
		</table>
	</div>
</div>
	