<?php include 'connection.php' ?>

<!DOCTYPE html>
<html>
<head>
	<title>form for adding breeds</title>
</head>
<body>
<form action="process.php" method="post">
<h3>Breed name:</h3>
<input type="text" name="name">
<h3>Origin:</h3>
<input type="text" name="origin">
<h3>Life Expectancy:</h3>
<input type="text" name="life_expectancy">
<h3>Description:</h3>
<input type="text" name="description">
<input type="submit">	
</form>
</body>
</html>