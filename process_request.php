<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "frecord_users");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$regNo = mysqli_real_escape_string($link, $_REQUEST['regNo']);
$name = mysqli_real_escape_string($link, $_REQUEST['name']);
 
// Attempt insert query execution
$sql = "INSERT INTO frecord_users (regNo, name) VALUES ('$regNo', '$name')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>