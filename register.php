<?php 

    session_start();
    include('server.php');
    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register Page</title>

    <link rel="stylesheet" href="style.css">

</head>
<body>
<style>  
    main {
    display: flex;
    align-items: center;
    justify-content: center;
    height: 75vh;
    width: 100%;
    }
    .form_class {
    width: 500px;
    padding: 40px;
    border-radius: 8px;
    background-color: white;
    font-family: 'system-ui';
    box-shadow: 5px 5px 10px rgb(0,0,0,0.3);
    }
    .field_class {
    width: 100%;
    border-radius: 6px;
    border-style: solid;
    border-width: 1px;
    padding: 5px 0px;
    text-indent: 6px;
    margin-top: 10px;
    margin-bottom: 20px;
    font-family: 'system-ui';
    font-size: 0.9rem;
    letter-spacing: 2px;
    }
    .btn {
    border-style: none;
    border-radius: 5px;
    background-color: #FFE6D4;
    padding: 8px 20px;
    font-family: 'system-ui';
    text-transform: uppercase;
    letter-spacing: .8px;
    display: block;
    margin: auto;
    margin-top: 10px;
    box-shadow: 2px 2px 5px rgb(0,0,0,0.2);
    cursor: pointer;
    }
    .form_div {
    text-transform: uppercase;
    }
    .form_div > label {
    letter-spacing: 3px;
    font-size: 1rem;
    }
    footer {
    height: 10vh;
    background-color: black;
    color: white;
    display: flex;
    align-items: center;
    justify-content: center;
    box-shadow: -5px -5px 10px rgb(0,0,0,0.3);
}
footer {
    height: 10vh;
    background-color: black;
    color: white;
    display: flex;
    align-items: 
    justify-content: center;
    box-shadow: -5px -5px 10px rgb(0,0,0,0.3);
}

</style>
<header>
    <img src="uploads/hp/top1.jpg" alt="logo" style="width: 100% " >
</header>   
<main>
    <form action="register_db.php" method="post">
        <div class="form_div">
        <label for="username">Username</label>
        <input type="text" name="username" placeholder="Enter your username" class = "field_class" required>
        <br>
        <label for="password_1">Password</label>
        <input type="password" name="password_1" placeholder="Enter your password" class = "field_class" required>
        <br>
        <label for="password_2">Confirm your Password</label>
        <input type="password" name="password_2" placeholder="Enter your password" class = "field_class"required>
        <br>
        <label for= "age">Enter your age</label>
        <input type="text" name="age" placeholder="Enter your age" class = "field_class"required>
        <br>
        <label for= "email">Enter your Email</label>
        <input type="text" name="email" placeholder="Enter your Email" class = "field_class"required>
        <input type="submit" name="submit" value="Submit" class = "btn"> 
       
        <div class="form_div">
    </form>
    <a href="login.php">Go back to login</a>
</main>
  
    
</body>
</html>