<!DOCTYPE html>
<html>
  
	<head>
		<title>Register</title>
		
		<meta charset="utf-8" />
		<!-- Link Style sheet -->
		<link rel="stylesheet" href="./css/style.css">
		
	</head>

	<body>
        <?php
            if(isset($_COOKIE["player"])){
                header("Location: ../questions/start.php");
            }
        ?>
  <div>
      <form action="./startlog.php" method="post">
      <fieldset>
          <legend>Returning Player:</legend>

          <strong class="column">Name:</strong>
          <input type="text" name="player" size="17" maxlength="16"><br><br>

          <input type="submit" value="Submit">
      </fieldset>
      </form>
      
  </div>
 
  </body>
  
</html>

