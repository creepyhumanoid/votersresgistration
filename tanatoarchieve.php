
<?php 
	if(isset($_POST['id']))
	{
		$id = $_POST['id'];
		$con = mysqli_connect("localhost","root","","voters");
		$all = "UPDATE `tblvotersinfo` SET `status_id`= 2 WHERE id ='$id'";
		$result = mysqli_query($con, $all);
		$edit= "Archieved!";
		echo "<script type='text/javascript'> alert('$edit'); window.location.href='tanato.php';</script>";
	}