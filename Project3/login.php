<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Login</title>
    <link rel="stylesheet" href="log.css"/>
</head>
<body>
<?php
    // require('database/db.php');
    require("config.php");
    session_start();
    // When form submitted, check and create user session.
    if (isset($_POST["submit"])) {

        // Check user if exist in the database
        $query    = "SELECT * FROM Admin WHERE user_name='$_POST[user_name]'
                     AND password='$_POST[password]'";
        $result = mysqli_query($mysqli, $query) ;
    //     $rows = mysqli_num_rows($result);
    //     if ($rows == 1) {
    //         $_SESSION['user_name'] = $_POST['user_name'];
    //         // Redirect to user dashboard page
    //         header("Location: admin.html");
    //     } else {
    //         echo "<div class='form'>
    //               <h3>Incorrect user_name/password.</h3><br/>
    //               <p class='link'>Click here to <a href='login.php'>Login</a> again.</p>
    //               </div>";
    //     }
        $_SESSION['user_name'] = $_POST['user_name'];
            // Redirect to user dashboard page
        header("Location: admin.html");
    } else {
?>
    <form class="form" method="post" name="login">
        <h1 class="login-title">Login</h1>
        <input type="text" class="login-input" name="user_name" placeholder="username" autofocus="true"/>
        <input type="password" class="login-input" name="password" placeholder="Password"/>
        <input type="submit" value="Login" name="submit" class="login-button"/>
        <p class="link"><a href="registration.php">New user? <u>Register here</u></a></p>
        <p class="link"><a href="index.html">Go to Website</a></p>
  </form>
<?php
    }
?>
</body>
</html>