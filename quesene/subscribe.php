<?php
session_start();

$email=$_POST['email'];


//Connect to database

$conn=new mysqli('localhost', 'root', '', 'quesene');

if($conn->connect_error){
    die('Connection failed: '.$conn->connect_error);
}
else{
    $stmt=$conn->prepare("INSERT INTO subscribe (email) VALUES (?)");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    echo "Subscribed successfully";
    if(isset($_SESSION['index'])) {
        header("Location: ".$_SESSION['index']);
        exit();
    }
    
    $stmt->close();
    $conn->close();
    
}

?>
