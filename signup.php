<?php
// Database connection script
$servername = "localhost"; // Your server name, usually "localhost" for local development
$email = "root"; // Your MySQL email
$password = ""; // Your MySQL password
$dbname = "cardb"; // The name of your database
// Create connection
$connection = mysqli_connect($servername, $email, $password, $dbname);

// Check connection
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}

// Your existing code to handle login
$name = $_GET['name'];
$email = $_GET['email'];
$password = $_GET['password'];

// Query the database to check if the email and password match
$query = "INSERT INTO auth(uname, email, upassword) values ('$name', '$email', '$password')";
$result = mysqli_query($connection, $query);

// echo "success";
if ($result === true) {
    echo "success";
    // Redirect the user to the dashboard or another page
} else {
    echo "Invalid email or password";
}

// Close the connection
mysqli_close($connection);
?>
