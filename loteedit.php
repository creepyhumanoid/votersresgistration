
<?php 

	if(isset($_POST['fname']))

	{

		$id = $_POST['id'];

		$fname = $_POST['fname'];

		$mi = $_POST['mi'];

		$lname = $_POST['lname'];


		$age = $_POST['age'];

		$gndra = $_POST['gndra'];

		
		$address = $_POST['address'];
		

		

		$con = mysqli_connect("localhost","root","","voters");

		$all = "UPDATE `tblvotersinfo` SET `fname`='$fname',`mi`='$mi',`lname`='$lname',`age`='$age',`gender`='$gndra',`address`='$address',`status_id`= 1 WHERE `ID`= '$id'";

		$result = mysqli_query($con, $all);
		$edit= "Member Updated!";
		echo "<script type='text/javascript'> alert('$edit'); window.location.href='puertorivaslote.php';</script>";
		
	} 

?>