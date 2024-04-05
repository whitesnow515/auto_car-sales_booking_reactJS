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

$query = "SELECT * FROM bookings";
$result = mysqli_query($connection, $query);
$data = array();
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $data[] = $row;
    }
    echo json_encode($data);
    // Redirect the user to the dashboard or another page
} else {
    error_log("fail");
    echo "fail";
}
// Close the connection
mysqli_close($connection);
?>
