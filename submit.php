<?php
// Assuming you have a database connection
$servername = "localhost";
$username = "root";
$password = "Naaistam@94";
$dbname = "employe";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Process form data
$userName = $_POST['userName'];
$templateName = $_POST['templateName'];
$description = $_POST['description'];

// SQL to insert data
$sql = "INSERT INTO forms (user_name, template_name, description)
        VALUES ('$userName', '$templateName', '$description')";

if ($conn->query($sql) === TRUE) {
    echo "Form sent to author successfully.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
