
<?php 

session_start();
include("server.php");

// File upload path
//$targetDir = "uploads/";

if(isset($_POST["post"])){
    $title = $_POST['user_name'];
    $review = $_POST['user_review'];
    $location = $_POST['location'];
    
    
    /*$fileName = basename($_FILES["file"]["name"]);
    $targetFilePath = $targetDir . $fileName;
    $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);*/

    if(isset($_FILES['file_image'])){
        if($title !="" &&$review!=""&&$location!="Select"){
        $uploadOk = 1;
        $file_name =  $_FILES['file_image']['name'];
        $tmp_name =  $_FILES['file_image']['tmp_name'];
        $target_dir = "uploads/";
        $file_type = $_FILES['file_image']['type'];
        $file_size = $_FILES['file_image']['size'];
        $target_file = $target_dir . basename($_FILES['file_image']['name']);
        $check = getimagesize($_FILES['file_image']['tmp_name']);
        $extensions = array("jpeg", "jpg", "png");
        if(file_exists($target_file)) {
            $msg = "Sorry, file already exists.";
            $uploadOk = 0;
        }
        if($check == false) {
            $msg = "File is not an image.";
            $uploadOk = 0;
        }
        if ($_FILES["file_image"]["size"] > 100000000) {
            $msg = "Sorry, your file is too large.";
            $uploadOk = 0;
        }
        if(empty($msg) == true){
        move_uploaded_file($tmp_name,$target_dir.$file_name);
        $url = $_SERVER['HTTP_REFERER'];
	    		$seg = explode('/', $url);
	    		$path = $seg[0].'/'.$seg[1].'/'.$seg[2].'/'.$seg[3];
	    		$full_url = $path.'/'.'uploads'.'/'.$file_name;
            $sql = "INSERT INTO review(barname,text,location,image) VALUES('$title', '$review', '$location','$full_url')";    
            $query = $conn->query($sql);
            $allowTypes = array('jpg', 'png', 'jpeg', 'gif', 'pdf');
           
    
      
        header("location: homepage.php");
        
        }else{
            echo $msg;
        }
    }else{
        header("location: review.php");
    }
}
    
}

 
