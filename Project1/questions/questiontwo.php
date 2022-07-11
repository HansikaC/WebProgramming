<!DOCTYPE html PUBLIC>
<html>

<head>
    <title>Question 2</title>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <?php
    $answer = $_POST["answer"];
    if (!($answer == "B")) {
        header("Location: ./wrong.php");
        exit();
    }
    ?>
    <div class="bg"></div>
    <div class="bg bg2"></div>
    <div class="bg bg3"></div>
    <div>
        <h1>Question 2</h1>
    </div>
    <div>
        <form action="./questionthree.php" method="post">
            <fieldset>
                <ul class="centered">
                    <li class="column">
                        <label>What is Africa?</label>
                    </li>
                    <li>
                        <input class="answer" type="radio" name="answer" value="A"> <label class="answertext">A State</label>
                        <input class="answer" type="radio" name="answer" value="B"> <label class="answertext">A County</label>
                        <input class="answer" type="radio" name="answer" value="C"> <label class="answertext">A Planet</label>
                        <input class="answer" type="radio" name="answer" value="D"> <label class="answertext">A Continent</label>
                    </li>
                    <li>
                        <input class="answer" type="radio" name="answer" value="X"> <label class="answertext">Call it for $100</label>
                    </li>
                </ul>
                <ul class="centered">
                    <li class="column">
                        <input class="button" type="submit" value="Submit">
                    </li>
                </ul>
            </fieldset>
        </form>
    </div>
</body>

</html>