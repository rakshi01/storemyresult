<?php
$sem = filter_input(INPUT_POST, 'sem');
$sub = filter_input(INPUT_POST, 'sub');
$marks = filter_input(INPUT_POST, 'marks');

if (!empty($sem)){
if (!empty($sub)){
if (!empty($marks)){
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
$sql = "INSERT INTO main(sem,sub,marks)
values ('$sem','$sub''$marks')";
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
echo "submission failed";
die();
}
}
else{
echo "submission successful";
die();
}
?>