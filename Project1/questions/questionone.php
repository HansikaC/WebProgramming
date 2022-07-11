<!DOCTYPE html>
<html>

<head>
    <title>Question 1</title>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <div class="bg"></div>
    <div class="bg bg2"></div>
    <div class="bg bg3"></div>
    <div>
        <h1>Question 1</h1>
    </div>
    <div>
        <form action="./questiontwo.php" method="post">
            <fieldset>
                <ul class="centered">
                    <li class="column">
                        <label>What is 1 + 1?</label>
                    </li>
                    <li>
                        <input class="answer" type="radio" name="answer" value="A"> <label class="answertext">1</label>
                        <input class="answer" type="radio" name="answer" value="B"> <label class="answertext">2</label>
                        <input class="answer" type="radio" name="answer" value="C"> <label class="answertext">3</label>
                        <input class="answer" type="radio" name="answer" value="D"> <label class="answertext">4</label>
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