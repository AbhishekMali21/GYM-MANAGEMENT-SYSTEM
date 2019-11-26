<?php
require('db.php');



if (isset($_REQUEST['member'])) {

  $mem_id = mysqli_real_escape_string($conn, $_REQUEST['id']);
  $name = mysqli_real_escape_string($conn, $_REQUEST['name']);
  $age = mysqli_real_escape_string($conn, $_REQUEST['age']);
  $dob = mysqli_real_escape_string($conn, $_REQUEST['dob']);
   $package = mysqli_real_escape_string($conn, $_REQUEST['package']);
  $mobileno = mysqli_real_escape_string($conn, $_REQUEST['mobileno']);
 
  



  $update_query="update member set mem_id='$mem_id',name='$name',age='$age',dob='$dob',package='$package',mobileno='$mobileno' where mem_id='".$_GET['id']."'";
  $update_sql=mysqli_query($conn,$update_query);
  $err="<div class='alert alert-success'><b>Member Area Details updated</b></div>";
}
$con=mysqli_query($conn,"select * from member where mem_id='".$_GET['id']."'");

$res=mysqli_fetch_assoc($con);  



?>

<div class="container">
	<form class="form-group mt-3" method="post" action="">
		<div><h3>UPDATE MEMBER</h3></div>
		 <?php  
    echo @$err;

    ?>
		<label class="mt-3">MEMBER ID</label>
		<input type="text" name="id" value="<?php echo @$res['mem_id'];?>" class="form-control">
		<label class="mt-3">MEMBER NAME</label>
		<input type="text" name="name" value="<?php echo @$res['name'];?>" class="form-control">
		<label class="mt-3">AGE</label>
		<input type="text" name="age" value="<?php echo @$res['age'];?>" class="form-control">
		<label class="mt-3">DOB</label>
		<input type="text" name="dob" value="<?php echo @$res['dob'];?>" class="form-control">
		<label class="mt-3">PACKAGE</label>
		<input type="text" name="package" value="<?php echo @$res['package'];?>" class="form-control">
		<label class="mt-3">MOBILE NO</label>
		<input type="text" name="mobileno" value="<?php echo @$res['mobileno'];?>" class="form-control">
		<button class="btn btn-dark mt-3" type="submit" name="member">UPDATE</button>
	</form>
</div>