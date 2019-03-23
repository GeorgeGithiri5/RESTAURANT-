<!DOCTYPE html>
<html>
<head>
<title>WINGGATE HOTEL</title>
<style type="text/css">
.jumbotron{ 
  text-align: center;
  }
  legend{
    border: 2em;
    border-radius: 3rem;
    text-align: center;
  }
  img{
    size: cover;
  }
</style>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" type="text/css" href="https://font.googleapis.com?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i,">
      <link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
      <link rel="stylesheet" type="text/css" href="css/style.css">     
      <script src="js/jquery-1.11.3.min.js"></script>
      <script src="js/bootsrtap.min.js"></script>
<body>
  
  <?php include "dbconn.php";?>
  <?php include "header.php";?>

  <div class="container">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="img/acc.jpg" alt="Chania">
      <div class="carousel-caption">
        <h3>Chania</h3>
        <p>The atmosphere in Chania has a touch of Florence and Venice.</p>
      </div>
    </div>

    <div class="item">
      <img src="img/accc.jpg" alt="Chania">
      <div class="carousel-caption">
        <h3>Chania</h3>
        <p>The atmosphere in Chania has a touch of Florence and Venice.</p>
      </div>
    </div>

    <div class="item">
      <img src="img/dinin.jpg" alt="Flower">
      <div class="carousel-caption">
        <h3>Flowers</h3>
        <p>Beatiful flowers in Kolymbari, Crete.</p>
      </div>
    </div>

    <div class="item">
      <img src="img/house.jpg" alt="Flower">
      <div class="carousel-caption">
        <h3>Flowers</h3>
        <p>Beatiful flowers in Kolymbari, Crete.</p>
      </div>
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<section id="welcome">
   <h1 style="text-align:center;"><span class="label label-default">WINGGATE HOTEL</span></h1><br>
   <div class="row">
    <div class="col-md-6">
   	<p style="letter-spacing: 0.2em;" class="jumbotron">Situated in the heart of Nairobi's central business district, this iconic landmark hotel offers modern facilities for business and relaxation, and magnificent city views Guest suites are bright and welcoming in a classic style with a touch of modern. The hotel offers a selection of five restaurants, cafes and bars offering innovative cuisine and friendly service. Amenities include a fully equipped health club, spa and heated outdoor pool.</p>
   </div>
   <div class="col-md-6">
    <img src="img/dinn.jpeg" class="img-responsive img-circle">
  </div>
</div>
</section>

<!--booking-->
<form action="message_exec.php" method="POST" id="fileform" role="form">
  <fieldset>
    <legend style="color: blue; text-shadow: 30px; background-color: red;"><b>ADVANCED BOOKING</b></legend>
    <label for="Email">Email:</label>
    <input type="text" name="email" class="form-control" placeholder="Please enter your email" autofocus required>
    <label for="Firstname">Firstname</label>
    <input type="text" name="firstname" class="form-control" placeholder="Please enter your Firstname" autofocus required>
    <label for="Lastname">Lastname:</label>
    <input type="text" name="lastname" class="form-control" placeholder="Please enter your Lastname" autofocus required>
    <label for="Phone">Phone Number:</label>
    <input type="Number" name="phone" class="form-control" placeholder="Please enter your Phone Number" autofocus required>
    <!-- <label><input type="radio" name="FEMALE">FEMALE</label>
    <label><input type="radio" name="MALE">MALE</label><br> -->
    <input type="submit" class="btn btn-primary" name="submit" value="BOOK">
  </fieldset>
</form>
</div>
<div class="container">
    <a href="https://w3school.com">MAINGATE</a>
    <span>&copy; 2019 George.</span>
  <div class="ml-auto">
    <span>Powered by</span>
    <a href="https://coreui.io">MAINGATE</a>
  </div>
</footer>
</form>
 <!-- ... other HTML ... -->

  <!-- Load React. -->
  <!-- Note: when deploying, replace "development.js" with "production.min.js". -->
  <script src="https://unpkg.com/react@16/umd/react.development.js" crossorigin></script>
  <script src="https://unpkg.com/react-dom@16/umd/react-dom.development.js" crossorigin></script>

  <!-- Load our React component. -->
  <script src="like_button.js"></script>

</body>
</body>
</head>