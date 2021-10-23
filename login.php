<?php
$USN = filter_input(INPUT_POST, 'USN');
$password = filter_input(INPUT_POST, 'password');
if (!empty($USN)){
if (!empty($password)){
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "results";
// Create connection
$conn = new mysqli ($host, $dbUSN, $dbpassword, $dbname);
if (mysqli_connect_error()){
die('Connect Error ('. mysqli_connect_errno() .') '
. mysqli_connect_error());
}
else{
$sql = "INSERT INTO login (USN, password)
values ('$USN','$password')";
if ($conn->query($sql)){
echo "New record is inserted sucessfully";
}
else{
echo "Error: ". $sql ."
". $conn->error;
}
$conn->close();
}
}s
else{
echo "Login failed";
die();
}
}
else{
echo "Login successful";
die();
}
?>