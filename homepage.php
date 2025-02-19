
<!DOCTYPE html>
<html lang="en">
<head>
<title>BANG BAR</title>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="hpstyle.css">
  <link rel="shortcut icon" type="image/x-icon" href=”uploads/bangbar.png” />

<body>

<img src="uploads/hp/top1.jpg" alt="logo" style="width: 100% " >
<nav class="navbar navbar-expand-lg navbar-light sticky-top " ><!-- แก้สีนิดหน่อย-->
  <!--a class="navbar-brand" href="#">BANG BAR-->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  
  <div class="collapse navbar-collapse " id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="homepage.php">HOME <span class="sr-only">(current)</span></a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="review.php">WRITE YOUR REVIEW</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        LOCATION
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          
          <a class="dropdown-item" href="ratchada.php" id ="R">Ratchada - Huaikwang - Dindang</a>
          <a class="dropdown-item" id="s" href="location.php">Sukhumvit - Thonglor - Akkamai</a> <!-- ลอง sukhumvit.php --> 
          <a class="dropdown-item" href="ladprao.php">Ladprao - Jatujak - Bangkhen</a>
          <a class="dropdown-item" href="ladkrabang.php">Ladkrabang</a>
          <a class="dropdown-item" href="bangna.php">Bangna - Srinakharin</a>
          </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">by mipmippip</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="login.php?logout='1'">LOGOUT</a>
      </li>
      </div>
    </ul>

  
  </div>
</nav>


<!--Slide Photo-->

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" >
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="uploads/hp/hpfirst3.jpg" alt="First slide" >
    </div>
    <div class="carousel-item">
       <a href="sukhumvit.php"><img class="d-block w-100" src="uploads/hp/hpthree.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="uploads/hp/hptwo.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<div class="heading" name="hpreview">
  
    <center> <h1 class="mt-3 mb-3" name="hpreview">PICK YOUR INTEREST</h1></center>
</div>

<!--  รูปข้างล่าง -->

<div class="row">
  <div class="column">
  <a href="ratchada.php"><img src="uploads/ratchada.png"  alt= "Ratchada" style="width:100%">
  </div>
  <div class="column">
  <a href="sukhumvit.php"><img src="uploads/sukhumvit.png" alt="Sukhumvit" style="width:100%">
  </div>
  <div class="column">
  <a href="ladprao.php"><img src="uploads/ladprao.png"alt="Ladprao" style="width:100%">
  </div>
  <div class="column">
  <a href="ladkrabang.php"><img src="uploads/ladkrabang.png" alt="Ladkrabang" style="width:100%">
  </div>
  <div class="column">
  <a href="bangna.php"><img src="uploads/bangna.png" alt="Bangna" style="width:100%"></a>
  </div>
</div>



<div class="heading" name="hpreview">
  
      <center> <h1 class="mt-3 mb-3"name="hpreview"> TOP 3 BARS </h1> </center>
   
   </div>
<!--  แนะนำบาร์ -->
<div class="row">
  <div class="column1">
    <div class="card1">
      <img src="uploads/whisgar.png" alt="whisgrs" style="width:100%">
      <div class="container1">
      <br>
        <h2>WHISGARS Sukhumvit 23</h2>
        <p class="title">Sukhumvit</p>
        <p>16 สุขุมวิท ซอย 23 คลองเตยเหนือ, กรุงเทพมหานคร (กทม.) 10110 </p>
     
      </div>
    </div>
  </div>

  <div class="column1">
    <div class="card1">
      <img src="uploads/rabbit.png" alt="rabbit" style="width:100%">
      <div class="container1">
      <br>
        <h2>RABBIT HOLE</h2>
        <p class="title">Thonglor</p>
        <p>125 ซ.สุขุมวิท 55 (ทองหล่อ) แขวงคลองตันเหนือ เขตวัฒนา, กรุงเทพมหานคร (กทม.) 10110 </p>
       
    
      </div>
    </div>
  </div>

  <div class="column1">
    <div class="card1">
      <img src="uploads/plern.png" alt="plernbar" style="width:100%">
      <div class="container1">
        <br>
        <h2>Plernbar</h2>
        <p class="title">Bangna</p>
        <p>817 บางนาเหนือ แขวง บางนา เขตบางนา กรุงเทพมหานคร 10260</p>
      
      </div>
    </div>
  </div>
</div>


</body>
</html>
