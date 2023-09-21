<?php
session_start();

$name=$_POST['name'];
$phone=$_POST['phone'];
$order=$_POST['order'];
$additem=$_POST['additem'];
$noorder=$_POST['noorder'];
$date=$_POST['date'];
$add=$_POST['address'];
$msg=$_POST['message'];

//Connect to database

$conn=new mysqli('localhost', 'root', '', 'quesene');

if($conn->connect_error){
    die('Connection failed: '.$conn->connect_error);
}
else{
    $stmt=$conn->prepare("INSERT INTO user_info (name, ph, order_det, add_item, no_orders, date, address, message) VALUES (?, ?, ? ,?, ?, ?, ?, ?)");
    $stmt->bind_param("sississs", $name, $phone, $order, $additem, $noorder, $date, $add, $msg);
    $stmt->execute();
    echo "Order placed successfully";
    if(isset($_SESSION['index'])) {
        header("Location: ".$_SESSION['index']);
        exit();
    }
    
    $stmt->close();
    $conn->close();
    
}



?>





