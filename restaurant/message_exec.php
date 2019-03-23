<?php 
 require ("dbconn.php");

 if (isset($_POST['submit'])) {
 	$email = $_POST['email'];
 	$firstname = $_POST['firstname'];
 	$lastname = $_POST['lastname'];
 	$phone = $_POST['phone'];

 	$sql = mysqli_query($conn, "INSERT INTO messages(email,firstname,lastname,phone) VALUES('$email','$firstname','$lastname','$phone')") or die(mysqli_error($conn));
 	header('location:index.php?success');
 	exit();
 }
