<?php
$email = $_POST['email'];

$conn = new mysqli('localhost','root', "", 'hng7');
if($conn->connect_error){
    die('connection Failed : '.$conn->connect_error);
}else{
    $stmt = $conn -> prepare("insert into email(email)
     values(?) ");
     $stmt->bind_param('s',$email);
     $stmt->execute();
     echo "registration succesful";
     $stmt->close();
     $conn->close();
}
?>