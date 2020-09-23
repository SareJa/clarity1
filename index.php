<!DOCTYPE html>
<html>
    <head>
       <meta charset="utf-8">
	   <title></title>
	   <meta name="author" content="">
	   <meta name="viewport" content="width=device-width, initial-scale=2">
	   <link href="../clarity/style.css" rel="stylesheet">
    </head>
    <body>
	<h1>SARA JANEVAt</h1>
        <h2>Get Fleet</h2>
		
		<form action="../clarity/getFleet.php" method="POST">
			<input type="date" name="text">
			<br><br>
            <input type="submit" id="sendBtn" value="Send">
		</form>
<?php $today = date("F j, Y, g:i a"); echo $today;   ?>
    </body>
</html>