<?php
$servername = "db";
$username = "pimcore";
$password = "pimcore";
$db = "pimcore";

// Create connection
$conn = new mysqli($servername, $username, $password, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

$sql = "SELECT * FROM company WHERE company_name LIKE '%pass%'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["company_id"]. " - Name: " . $row["company_name"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
