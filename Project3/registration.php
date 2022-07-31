
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Registration</title>
    <link rel="stylesheet" href="log.css"/>
</head>
<body>
<?php
    // require('database/db.php');
    include_once("config.php");
    // When form submitted, insert values into the database.
    if (isset($_REQUEST['user_name'])) {
        // removes backslashes
        $user_name = stripslashes($_REQUEST['user_name']);
        //escapes special characters in a string
        $user_name = mysqli_real_escape_string($mysqli, $user_name);
        $first_name    = stripslashes($_REQUEST['first_name']);
        $first_name    = mysqli_real_escape_string($mysqli, $first_name);
        $last_name    = stripslashes($_REQUEST['last_name']);
        $last_name    = mysqli_real_escape_string($mysqli, $last_name);
        $email    = stripslashes($_REQUEST['email']);
        $email    = mysqli_real_escape_string($con, $email);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($mysqli, $password);
        $register_date = date("Y-m-d H:i:s");
        
        $query    = "INSERT into `user` (user_name, first_name, last_name, email, password, register_date)
                     VALUES ('$user_name', '$first_name', '$last_name', '$email', '" . md5($password) . "', '$register_date')";
        $result   = mysqli_query($mysqli, $query);
        if ($result) {
            echo "<div class='form'>
                  <h3>You are registered successfully.</h3><br/>
                  <p class='link'>Click here to <a href='login.php'>Login</a></p>
                  </div>";
        } else {
            echo "<div class='form'>
                  <h3>Required fields are missing.</h3><br/>
                  <p class='link'>Click here to <a href='registration.php'>registration</a> again.</p>
                  </div>";
        }
    } else {
?>
    <form class="form" action="" method="post">
        <h1 class="login-title">Registration</h1>
        <input type="text" class="login-input" name="user_name" placeholder="user_name" required />
        <input type="text" class="login-input" name="first_name" placeholder="first_name" required />
        <input type="text" class="login-input" name="last_name" placeholder="last_name" required />
        <input type="text" class="login-input" name="email" placeholder="Email Adress">
        <input type="password" class="login-input" name="password" placeholder="Password">
        <input type="submit" name="submit" value="Register" class="login-button">
        <p class="link"><a href="login.php">Click to Login</a></p>
    </form>
<?php
    }
?>
</body>
</html>