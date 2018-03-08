<?php 
	if(isset($_POST['id']))
	{
		$id = $_POST['id'];
		

		$con = mysqli_connect("localhost","root","","voters");
		$all = "UPDATE `tblvotersinfo` SET `status_id`= 2 WHERE id ='$id'";
		$result = mysqli_query($con, $all);
		$edit= "Archieved!";
		#session_start();
		#unset($_SESSION['user_id']);
		#session_destroy();
		
#Session::forget($_SESSION['user_id']);
		
		#var_dump($all);		
		echo "<script type='text/javascript'> alert('$edit'); window.location.href='bagongsilang.php';</script>";
	}