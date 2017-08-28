
<?php
 $servername = "localhost";
 $username = "root";
 $password = "root";
 $dbname = "dogs";

 //Create Connection
 $conn = new mysqli($servername, $username, $password, $dbname);
 //Check Connection
 if($conn->connect_error){
 	die("Connection failed: " . $conn->connect_error);

 }
$sql = "SELECT breed_id, name, origin, life_expectancy, description FROM Breeds";
$result = $conn->query($sql);

if($result->num_rows > 0){
	//output data to each row
	while($row = $result->fetch_assoc()){
		echo $row["breed_id"] . " - Name: " . $row["name"] ." ". $row["origin"] . " " . $row["life_expectancy"] . 
		" " . $row["description"] . "<br>";
	}
} else {
	echo "0 Results";
}
$conn->close();
?>