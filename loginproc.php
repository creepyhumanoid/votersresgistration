<?php
	if(isset($_POST['role']))
	    {
	    $role = $_POST['role'];
		$password = $_POST['password'];
		$con = mysqli_connect("localhost","root","","voters") or die('Error connecting to MySQL server.');
		$all = "SELECT * FROM tbladmin where BINARY uname = '$role' and password = '$password'";
		$result = mysqli_query($con, $all);
		$fetch = mysqli_fetch_array($result);
		if (!$result) {
	    	die('Error: ' . mysqli_error($con));
		}
		
		if ($role == "" || $password == ""){
			$message = "Invalid Username or Password!";
		echo "<script type='text/javascript'>alert('$message'); window.location.href='login.php';</script>";
			exit();
		}
		if (!$fetch){
			$fetch = mysqli_fetch_array($result);
			$message = "Invalid Username or Password!";
			echo "<script type='text/javascript'>alert('$message'); window.location.href='login.php';</script>";
		}
		if (($fetch['role']== 1 )) {
			//echo "Login success!! <br> Welcome" ." " .$fetch['role'];
			session_start();
			$_SESSION['login_role'] = $role;
			if ((isset($_POST['url'])) && ($_POST['url'] != '')) {
				# code...
				$locat = "location:" . $_POST['url'];
				header($locat);
			}else{
				header("location:dashboard.php");
			}
			
		}
		
}else{
	echo "You did not post";
}

?>