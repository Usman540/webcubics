
<?php
// Retrieve form data
$name = $_POST['fullName'];      
$type = $_POST['type'];
$contactInfo = $_POST['contactInfo'];

// Connect to the database
$servername = " localhost:3306";
$username = "webcefjw_Usman540";
$password = "AO69x#-=0uh^";
$dbname = "webcefjw_PMContactFormDB";

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Insert data into the database
$sql = "INSERT INTO your_table_name (fldFullName, fldType, fldCntInfo) VALUES ('$name', '$type', '$contactInfo')";

if ($conn->query($sql) === TRUE) {
    echo "Data inserted successfully.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the database connection
$conn->close();
?>
