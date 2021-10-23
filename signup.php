<?php
$usn = filter_input(INPUT_POST, 'usn');
$firstname = filter_input(INPUT_POST, 'firstname');
$lastname = filter_input(INPUT_POST, 'lastname');
$password = filter_input(INPUT_POST, 'password');
$confirmpassword = filter_input(INPUT_POST, 'confirmpassword');

if (!empty($usn)){
if (!empty($firstname)){
if (!empty($lastname)){
if (!empty($password)){
if (!empty($confirmpassword)){
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "signup";
// Create connection
$conn = new mysqli ($host, $dbusn, $dbfirstname, $dblastname, $dbpassword, $dbconfirmpassword, $dbname);


if (mysqli_connect_error()){
die('Connect Error ('. mysqli_connect_errno() .') '
. mysqli_connect_error());
}
else{
$sql = "INSERT INTO signup(usn,firstname,lastname, password,confirmpassword)
values ('$usn','$firstname','$lastname','$password','$confirmpassword')";
if ($conn->query($sql)){
echo "New record is inserted sucessfully";
}
else{
echo "Error: ". $sql ."
". $conn->error;
}
$conn->close();
}
}
else{ 
    echo "Password should not be empty" ;
    die() ;
}
}
else{
    echo "usn should not be empty" ;
    die() ;
}
}
}
}
?>