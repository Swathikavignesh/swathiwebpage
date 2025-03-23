<?php
$servername = "localhost"; // Change this if needed
$username = "root"; // Default for XAMPP/WAMP
$password = ""; // Default for XAMPP/WAMP
$dbname = "user_database";

// Create a database connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check if the connection was successful
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form values
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $recruiter = $_POST['recruiter'];
    $company = $_POST['company'];
    $consider = $_POST['consider'];

    // Prepare SQL query to insert data
    $sql = "INSERT INTO users (name, email, phone, recruiter, company, consider) 
            VALUES ('$name', '$email', '$phone', '$recruiter', '$company', '$consider')";

    if ($conn->query($sql) === TRUE) {
        echo "Data saved successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close connection
$conn->close();
?>
