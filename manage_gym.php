<div class="container">
	<form class="form-group mt-3" method="post" action="home.php?info=gym_search">
		<h3 class="lead">SEARCH GYM</h3>
		<input type="text" name="name" class="form-control" placeholder="ENTER GYM NAME OR GYM ID">
	</form>

	<div class="container">
		<table class="table table-bordered table-hover">
			<tr>
				<th>GYM ID</th>
				<th>GYM NAME</th>
				<th>GYM ADDRESS</th>
				<th>GYM TYPE</th>
			</tr>
			<?php
           require('db.php');

$all="SELECT * FROM gym";
$all_query=mysqli_query($conn,$all);
if (mysqli_num_rows($all_query) > 0) {
    while($row = mysqli_fetch_assoc($all_query)) {
       echo "<tr>";
		echo "<td>".$row['gym_id']."</td>";
		echo "<td>".$row['gym_name']."</td>";
		echo "<td>".$row['address']."</td>";
		echo "<td>".$row['type']."</td>";
		echo "</tr><br>";
    }
} else {
    echo "0 results";
}

?>
		</table>
	</div>
</div>