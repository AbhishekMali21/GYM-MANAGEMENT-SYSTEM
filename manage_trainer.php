
<div class="container">
	<form class="form-group mt-3" method="post" action="home.php?info=trainer_search">
		<h3 class="lead">SEARCH TRAINER</h3>
		<input type="text" name="name" class="form-control" placeholder="ENTER TRAINER NAME OR TRAINER ID">
	</form>

	<div class="container">
		<table class="table table-bordered table-hover">
			<tr>
				<th>TRAINER ID</th>
				<th>NAME</th>
				<th>TIME</th>
				<th>MOBILE NO</th>

			</tr>
			<?php
           require('db.php');


$all="SELECT * FROM trainer";
$all_query=mysqli_query($conn,$all);
if (mysqli_num_rows($all_query) > 0) {
    while($row = mysqli_fetch_assoc($all_query)) {
       echo "<tr>";
			echo "<td>".$row['trainer_id']."</td>";
		echo "<td>".$row['name']."</td>";
		echo "<td>".$row['time']."</td>";
		echo "<td>".$row['mobileno']."</td>";
		echo "</tr><br>";
    }
} else {
    echo "0 results";
}



?>
			
		</table>
	</div>
</div>
