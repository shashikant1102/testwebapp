<!DOCTYPE html>
<html>
<body>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  <input type="submit" Value="Connect to MySQL Server & Insert data in a table">
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myedunet";
// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully<br>";
$sql = "INSERT INTO student VALUES (4, 'Savani', 'Shivraj', '86565');";
$sql .= "INSERT INTO Student VALUES (7, 'twinkal', 'karad', '55');";
$sql .= "INSERT INTO Student VALUES (8, 'pooja', 'karad', '55');";
$sql .= "INSERT INTO Student VALUES (9, 'komal', 'abad', '55');";
$sql .= "INSERT INTO Student VALUES (10, 'shreya', 'abad', '55');";
$sql .= "INSERT INTO Student VALUES (11, 'mayuri', 'avasari', '55')";
  if ($conn->multi_query($sql) === TRUE) {
    echo "New records inserted successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

}
?>

</body>
</html>
