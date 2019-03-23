<!DOCTYPE html>
<html>
<head>
	<title>Contact Us</title>
<style type="text/css">
	.page-header{
		padding: 0 50px;
		margin: 50px;
		background-color: #585786;
		border-radius:2px;
	}
	h1{
		color: blue;
	}
	.img-circle{
		size: cover;
		cursor: pointer;
		margin:0;
		padding: 2rem;
	}

</style>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" type="text/css" href="https://font.googleapis.com?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i,">
      <link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
      <link rel="stylesheet" type="text/css" href="css/style.css">     
      <script src="js/jquery-1.11.3.min.js"></script>
      <script src="js/bootsrtap.min.js"></script>
</head>
<body>
	<?php include "header.php";?>
	  <?php include "dbconn.php";?>

	<div class="container">
	<div class="page-header">
	<h1 style="text-align: center;"><b>CONTACT US</b></h1></div>

	<section style="text-align:center;">
		<div class="row">
			<div class="col-md-6">
		<p class="jumbotron">PO BOX 2039-01100<br>Nairobi Branch<br>Phone Number:<a href="#">+254 754738437</a><br>Email:<a href="mailto:">georgegithiri002@gmail.com</a></p>
	</div>
	<div class="col-md-6">
		<p class="jumbotron">PO BOX 2039-01100<br>Mombasa Branch<br>Phone Number:<a href="#">+254 754738437</a><br>Email:<a href="mailto:">georgegithiri002@gmail.com</a></p>
	</div></div>
	<img src="img/dinn.jpeg" class="img-circle img-responsive">
	<div class="caption">
		<p class="img-caption">We Are always available when you need us</p></div>


  	<form action="comment.php" role="form" method="POST">
	  	<div class="form-group">
	  		<label class="comment">Comments</label>
	  		<textarea placeholder="Leave a comment..." name="comment" class="form-control" rows="5"></textarea><br>
	  		<button type="success" class="btn btn-primary" name="submitcom" value="submit">Submit</button>
		</div>
	</form>
  <footer class="app-footer">
  <div>
</html>