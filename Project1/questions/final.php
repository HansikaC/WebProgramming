<!DOCTYPE html PUBLIC>
<html>

<head>
    <title>Finale</title>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="../css/style.css">

</head>

<body>
    <?php
    $answer = $_POST["answer"];
    if(!(isset($_COOKIE['money']))){
        if (!($answer == "A")) {
            header("Location: ./wrong.php");
            exit();
        }
        else {
            setcookie('money', 1000000);
            $money = $_COOKIE['money'];
        }
    }

    //INSERT CODE TO ADD MONEY HERE
    ?>
    <div>
        <div class="bg"></div>
        <div class="bg bg2"></div>
        <div class="bg bg3"></div>
        <h1>Who Wants to Be a Millionaire</h1>

        <img src="../data/logo.png" alt="Logo" class="center">

        <?php 
            echo "<h1>Congratulations! You've made it with $".$_COOKIE['money']."<h2>";
        ?>
            <a class="button" title="Sign up" href="./start.php">TRY AGAIN</a>
            <a class="button" title="Leaderboard" href="../leaderboard.php">LEADERBOARD</a>

    </div>
</body>

</html>