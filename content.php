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
$id = $_GET['id'];
$value = $_GET['value'];

// Query the database to check if the email and password match
if ($value == 'all') {
    $query = "SELECT * FROM car";
}else{
    $query = "SELECT * FROM car WHERE $id = '$value'";
}
error_log($query);
$result = mysqli_query($connection, $query);

$data = array();

// Fetch the data and store it in an array
while ($row = mysqli_fetch_assoc($result)) {
    $data[] = $row;
}
$temp = array();
for ($i=0; $i < count($data); $i++) { 
    $directory = 'assets/images/car/' . $data[$i]['cname'];
    $files = scandir($directory);
    $num_files = count($files) - 2; 
    array_push($temp, $num_files);
}
for ($i=0; $i < count($temp); $i++) { 
    array_push($data, $temp[$i]);
}
echo json_encode($data);
// Close the connection
mysqli_close($connection);
?>
