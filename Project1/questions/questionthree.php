<!DOCTYPE html PUBLIC>
<html>

<head>
    <title>Question 3</title>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <?php
    $answer = $_POST["answer"];
    if ($answer == "X") {
        setcookie('money', 100);
       header("Location: final.php");
    } else {
       if($answer !== "D"){
        header("Location: wrong.php"); 
       }
    }
    ?>
    <div class="bg"></div>
    <div class="bg bg2"></div>
    <div class="bg bg3"></div>
    <div>
        <h1>Question 3</h1>
    </div>
    <div>
        <form action="./questionfour.php" method="post">
            <fieldset>
                <ul class="centered">
                    <li class="column">
                        <label>Who was the 24th President of the United States?</label>
                    </li>
                    <li>
                        <input class="answer" type="radio" name="answer" value="A"> <label class="answertext">Grover Cleveland</label>
                        <input class="answer" type="radio" name="answer" value="B"> <label class="answertext">Theodore Roosevelt</label>
                        <input class="answer" type="radio" name="answer" value="C"> <label class="answertext">Benjamin Harrison</label>
                        <input class="answer" type="radio" name="answer" value="D"> <label class="answertext">Martin Van Buren</label>
                    </li>
                    <li>
                        <input class="answer" type="radio" name="answer" value="X"> <label class="answertext">Call it for $1,000</label>
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