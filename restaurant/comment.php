<?php 
 require ("dbconn.php");

 if (isset($_POST['submitcom'])) {
 	$comment = $_POST['comment'];

 	$sql = mysqli_query($conn, "INSERT INTO comments(comment) VALUES('$comment')") or die(mysqli_error($conn));
 	header('location:cont.php?success');
 	exit();
 }