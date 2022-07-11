<!DOCTYPE html PUBLIC>
<html>

<head>
    <title>Question 5</title>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <?php
    $answer = $_POST["answer"];
    if ($answer == "X") {
        setcookie('money', 10000);
       header("Location: final.php");
    } else {
       if($answer !== "C"){
        header("Location: wrong.php"); 
       }
    }
    ?>
    <div class="bg"></div>
    <div class="bg bg2"></div>
    <div class="bg bg3"></div>
    <div>
        <h1>Question 5</h1>
    </div>
    <div>
        <form action="./final.php" method="post">
            <fieldset>
                <ul class="centered">
                    <li class="column">
                        <label>What is the debt, rounded to the nearest trillion, of the United States of America?</label>
                    </li>
                    <li>
                        <input class="answer" type="radio" name="answer" value="A"> <label class="answertext">$20 Trillion</label>
                        <input class="answer" type="radio" name="answer" value="B"> <label class="answertext">$42 Trillion</label>
                        <input class="answer" type="radio" name="answer" value="C"> <label class="answertext">$14 Trillion</label>
                        <input class="answer" type="radio" name="answer" value="D"> <label class="answertext">$8 Trillion</label>
                    </li>
                    <li>
                        <input class="answer" type="radio" name="answer" value="X"> <label class="answertext">Call it for $100,000</label>
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