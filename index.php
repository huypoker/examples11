<?php
 $servername = "localhost";
 $username = "username";
 $password = "password"
     // Create connection 
$conn = new mysql ($servername, $username, $password); 
    // Check connection 
if ($conn->connect_error){
    die ("Connect falied: ". $conn-> connect_error);
    
}
echo "connect successfully";
?>