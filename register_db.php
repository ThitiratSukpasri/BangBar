<?php 
    session_start();
    include('server.php');

    $errors = array();

    if (isset($_POST['submit'])) {
        $username = mysqli_real_escape_string($conn, $_POST['username']);
        $password_1 = mysqli_real_escape_string($conn, $_POST['password_1']);
        $password_2 = mysqli_real_escape_string($conn, $_POST['password_2']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $age = (int)mysqli_real_escape_string($conn,$_POST['age']);
        //settype($age,"int");
        if (empty($username)) {
            array_push($errors, "Username is required");
            $_SESSION['error'] = "Username is required";
        }
        if (empty($age)) {
            array_push($errors, "Age is required");
            $_SESSION['error'] = "Age is required";
        }
        if (empty($email)) {
            array_push($errors, "Email is required");
            $_SESSION['error'] = "Email is required";
        }
        if (empty($password_1)) {
            array_push($errors, "Password is required");
            $_SESSION['error'] = "Password is required";
        }
        if ($password_1 != $password_2) {
            array_push($errors, "The two passwords do not match");
            $_SESSION['error'] = "The two passwords do not match";
        }
        
        if($age<20){
            array_push($errors, "You not allowed to be in this website");
        }
        $user_check_query = "SELECT * FROM users WHERE username = '$username' LIMIT 1";
        $query = mysqli_query($conn, $user_check_query);
        $result = mysqli_fetch_assoc($query);

        if ($result) { // if user exists
            if ($result['username'] === $username) {
                array_push($errors, "Username already exists");
            }
            if ($result['email'] === $email) {
                array_push($errors, "Email already exists");
            }
        }
       
        
    
        if (count($errors) == 0) {
            $password = md5($password_1);

            $sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";
            mysqli_query($conn, $sql);

            $_SESSION['username'] = $username;
            $_SESSION['success'] = "You are now logged in";
            header('location: homepage.php');
        } else {
          
            foreach ($errors as $error){
                echo $error;
                echo "</br>";
            }
        }

        
    }

?>