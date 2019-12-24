<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "tolkswing007", "frecord");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$regNo = mysqli_real_escape_string($link, $_REQUEST['regNo']);
$name = mysqli_real_escape_string($link, $_REQUEST['name']);
$submit = $_POST['submit'];

if($submit)

    {
        $filePath = "exercises/ooad/2.docx";
        header("Cache-Control: public");
        header("Content-Description: File Transfer");
        header("Content-Disposition: attachment");
        header("Content-Type: application/zip");
        header("Content-Transfer-Encoding: binary");
            
        // Read the file
        readfile($filePath);
        exit;
    }
    
    else{
        echo 'The file does not exist.';
    }

// Attempt insert query execution
$sql = "INSERT INTO ooad_users (regNo, name) VALUES ('$regNo', '$name')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>