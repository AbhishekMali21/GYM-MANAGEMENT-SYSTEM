<?php
require('db.php');


$name="";



if (isset($_POST['name'])) {
	echo "<div class='container'>";
	echo "<table class='table table-bordered  table-hover mt-3'>";
	echo "<tr>";
	echo "<th>Trainer_Id</th>";
	echo "<th>Name</th>";
	echo "<th>Time</th>";
	echo "<th>Mobile No</th>";
	echo "<th>Update</th>";
	echo "<th>Delete</th>";
	echo "</tr>";
	echo "</div>";


	$name=$_POST['name'];


		$que=mysqli_query($conn,"SELECT * FROM `trainer` WHERE CONCAT(`trainer_id`,`name`,`time`,`mobileno`) LIKE '%".$name."%'");
		if(mysqli_num_rows($que) > 0){
	
	while($row=mysqli_fetch_array($que))
	{
		echo "<tr>";
		echo "<td>".$row['trainer_id']."</td>";
		echo "<td>".$row['name']."</td>";
		echo "<td>".$row['time']."</td>";
		echo "<td>".$row['mobileno']."</td>";
		echo "<td><a href='home.php?id=$row[trainer_id]&info=update_trainer'><i class='fas fa-pencil-alt'></i></a></td>";
		echo  "<td><a href='home.php?id=$row[trainer_id]&info=delete_trainer'><i class='fas fa-trash-alt'></i></a></td>";

	}
}else{
	echo "<div class='alert alert-warning'><b>0 result</b></div>";
}
	
}




	
?>

