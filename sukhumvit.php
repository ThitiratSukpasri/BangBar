<!DOCTYPE html>
<html lang="en">
<head>
<title>BANG BAR</title>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="hpstyle.css"> 

<body>

<img src="uploads/hp/top1.jpg" alt="logo" style="width: 100% " >
<nav class="navbar navbar-expand-lg navbar-light sticky-top " ><!-- แก้สีนิดหน่อย-->
  <!--a class="navbar-brand" href="#">BANG BAR-->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  
  <div class="collapse navbar-collapse " id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
      <a class="nav-link" href="homepage.php">HOME </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="review.php">WRITE YOUR REVIEW</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        LOCATION <span class="sr-only">(current)</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="ratchada.php">Ratchada - Huaikwang - Dindang</a>
          <a class="dropdown-item" href="sukhumvit.php">Sukhumvit - Thonglor - Akkamai</a>
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
</nav>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<div class="heading">
<h1 class="mt-3 mb-3">Sukhumvit - Thonglor - Akkamai</h1>
</div>
</body>
</html>


<?php include('server.php');?>
	<?php include('upload.php');?>
	
		<?php
			//Fetching all uploaded posts
            $sql = "SELECT * FROM review WHERE location ='Sukhumvit'"; 
            $query = $conn->query($sql);
			$posts_result= mysqli_query($conn, $sql) or die ('error');
			if (mysqli_num_rows($posts_result) > 0) {
				while($row= mysqli_fetch_assoc($posts_result)) {	 
                    $title = $row['barname'];
                    $review = $row['text'];
                    $feat_image = $row['image'];
                
            
		?>

<div class="container" name="show">
    <div class="row">
      <div class="card" name="showcard">
        <div class="card-header">
        <h1><?php echo $title;?></h1>
        </div>
        <div class="card-body" name="showreview">
			   <h1><?php echo $review?></h1>
         <img src=<?php echo $feat_image;?> style="width: 350px;height: 300px;">
        </div>
      </div>
			<?php

			}	
		}	
?>