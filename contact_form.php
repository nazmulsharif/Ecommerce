<?php
	
	$con = mysqli_connect('127.0.0.1', 'root', '');
	
	mysqli_select_db($con, 'mydatabase');// connect to Server
	
	
	     $Name = $_POST['Name'];
	    $Email = $_POST['Email'];
	 $TextArea = $_POST['TextArea'];
	
	$sql = "INSERT INTO contact_form(Name, Email, TextArea) VALUES ('$Name','$Email', '$TextArea')";
	
	mysqli_query($con, $sql);
	

    header("refresh:0;  url=contacts.html");
?>