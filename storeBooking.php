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
$title = $_GET['title'];
$start = $_GET['start'];
$end = $_GET['end'];
$allday = $_GET['allDay'];
$car = $_GET['car'];

$query1 = "SELECT * FROM bookings WHERE start = '$start' AND car LIKE '%$car%'";
$result1 = mysqli_query($connection, $query1);

if (mysqli_num_rows($result1) > 0) {
    error_log("fail");
    echo "fail";
    // Redirect the user to the dashboard or another page
} else {
    $query = "INSERT INTO bookings(title, start, end, allday, car) values ('$title', '$start', '$end', '$allday', '$car')";
    error_log($query);
    $result = mysqli_query($connection, $query);
    echo "success";
}
// Close the connection
mysqli_close($connection);
?>
