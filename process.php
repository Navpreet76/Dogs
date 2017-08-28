<?php

$servername	= "localhost";
$username = "root";
$password = "root";
$dbname = "dogs";

// $breed_id = $_POST['breed_id'];
// $name = $_POST['name'];
// $origin = $_POST['origin'];
// $life_expectancy = $_POST['life_expectancy'];
// $description = $_POST['description'];

//Create Connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
//Check Connection
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO Breeds (name, origin, life_expectancy, description) VALUES('$_POST[name]', '$_POST[origin]', '$_POST[life_expectancy]', '$_POST[description]' )";

if ($conn->query($sql) === TRUE) {
	echo "New Record created Successfully!";
} else {
	echo "Error: " . "<br>" . $conn->error;
}
$conn->close();

?>
<?php header('Location: index.php'); ?>