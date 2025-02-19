<?php
    session_start();
    include('server.php'); 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" type = "text/css" href="style.css">
    <style>  
    main {
    display: flex;
    align-items: center;
    justify-content: center;
    height: 75vh;
    width: 100%;
    background: url(https://wallpapercave.com/wp/wp3322425.jpg) no-repeat center center;
    background-size: cover;
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

</head>
<body>

    <header>
    <img src="uploads/hp/top1.jpg" alt="logo" style="width: 100% " >
    </header>

<main>
    <form action="login_db.php" method="post" class = "form_class">
        <?php if (isset($_SESSION['error'])) : ?>
            <div class="error">
                <h3>
                    <?php 
                        echo $_SESSION['error'];
                        unset($_SESSION['error']);
                    ?>
                </h3>
            </div>
        <?php endif ?>
        <div class="form_div">
            <label for="username">Username</label>
            <input type="text" name="username" class = "field_class">
            <label for="password">Password</label>
            <input type="password" name="password" class = "field_class">
            <button type="submit" name="login_user" class="btn">Login</button></br>
        </div>
        <p style = "text-align: center;">Not yet a member? <a href="register.php">Sign Up</a></p>
    </form>
    <footer>
    </footer>
</main>
</body>
</html>