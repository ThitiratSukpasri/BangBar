<?php 

    session_start();
    include_once 'server.php';
?>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8" />
    <title>Review & Rating</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="hpstyle.css"> 
</head>
<body>
<img src="uploads/hp/top1.jpg" alt="logo" style="width: 100% " >
<nav class="navbar navbar-expand-lg navbar-light sticky-top " ><!-- แก้สีนิดหน่อย-->
  <!--a class="navbar-brand" href="#">BANG BAR-->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  
  <div class="collapse navbar-collapse " id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item ">
        <a class="nav-link" href="homepage.php">HOME </a>
      </li>

      <li class="nav-item active">
        <a class="nav-link" href="review.php">WRITE YOUR REVIEW<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        LOCATION
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


  <div class="container ">
    	<h1 class="mt-5 mb-4">Bang Bar Review</h1>
    	<div class="card">
    		<div class="card-header ">  ๋ ⸱ Bar's Name</div>
    		<div class="card-body">
    			<div class="row ">
    				<div class="col-12">
    					<h3 class="mt-4 mb-4">Write Review Here</h3></div>
              <div class="col-sm-12">
    					<button type="button" name="add_review" id="add_review" class="btn btn-md">REVIEW</button>
              
    				</div>
    			</div>
    		</div>
    	</div>
    	<div class="mt-5" id="review_content"></div>
  </div><!-- -------------------------------------------------------------------------------------------------------------------------------------------------------------->
    <!-- ส่วนupload รูป-->
</body>
</html>

<div id="review_modal" class="modal" tabindex="-1" role="dialog">
  	<div class="modal-dialog" role="document">
    	<div class="modal-content">
	      	<div class="modal-header">
	        	<h5 class="modal-title">Submit Review</h5>
	        	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          		<span aria-hidden="true">&times;</span>
	        	</button>
	      	</div>
	      	<div class="modal-body">
	      		
	        	<form action = "upload.php" method ="POST" enctype="multipart/form-data"> <!-- form เก็บรีวิว -->
                <div class="form-group">
	        		<input type="text" name="user_name" id="user_name" class="form-control" placeholder="Enter Bar's Name" />
	        	</div>
	        	<div class="form-group">
	        		<textarea name="user_review" id="user_review" class="form-control" placeholder="Type Review Here"></textarea>
	        	</div>
            <div class="form-group ">Location
                <select name = "location" id="location">Location
                    <option>Select</option>
                    <option value ="Rachada">Rachada-HuaiKhwang-Dindang</option>
                    <option value ="Sukhumvit">Sukhumvit-Thonglor-Ekkamai</option>
                    <option value ="Ladkrabang">Ladkrabang</option>
                    <option value ="Bangna">Bangna-Srinakarin</option>
                    <option value ="Ladprao">Ladprao - Jakjujak- Bangkhen</option>
                </select>
                </div>
                <label for = "addimage">add image</label>
                <input type = "file" name = "file_image" placeholder = "image">
                <input type="submit" id="submitb" name="post" value="Submit" class="btn btn-lg mb-3"> 
            </form>
	      	</div>
    	</div>
  	</div>
</div>

<style>
.progress-label-left
{
    float: left;
    margin-right: 0.5em;
    line-height: 1em;
}
.progress-label-right
{
    float: right;
    margin-left: 0.3em;
    line-height: 1em;
}
.star-light
{
	color:#e9ecef;
}
</style>

<script>

$(document).ready(function(){

	var rating_data = 0;

  $('#add_review').click(function(){
        $('#review_modal').modal('show');

    });
    $('#submitb').click(function(){
      var user_name = $('#user_name').val(); //ชือbar
      var user_review = $('#user_review').val(); //review bar text
      var location = $('select').val();
      if(user_name == '' || user_review == ''||location=='Select'){
        alert('Please fill all field ');
      }
    })
    $('.close').click(function(){
      $('#review_modal').modal('hide');
    });
   
   

});


</script>