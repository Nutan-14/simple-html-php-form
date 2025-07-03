<?php
// Step 1: Connect to the database
$host = "127.0.0.1";
$username = "root";
$password = "";
$database = "html_form.db";

// Create connection
$conn = new mysqli($host, $username, $password, $database,3307);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Step 2: Get form data
$name = $_POST['name'];
$email = $_POST['email'];

// Step 3: Insert into database
$sql = "INSERT INTO form_data (name, email) VALUES ('$name', '$email')";

if ($conn->query($sql) === TRUE) {
    echo "✅ Data inserted successfully!";
} else {
    echo "❌ Error: " . $sql . "<br>" . $conn->error;
}

// Step 4: Close connection
$conn->close();
?>
