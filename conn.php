<?php 

$lastname = $POST["lastname"];
$firstname = $POST["firstname"];
$email = $POST["email"];
$password = $POST["password"];

$conn = new mysqli('localhost', 'root', '', 'db_abis');
if($conn->connect_error){
    die('Connection Failed :'.$conn->connect_error);
}
else{
    $stmt = $conn->prepare("insert into tb_reg(lastname, firstname, email, password)
    values(?,?,?,?)");
    $stmt->bind_param("ssss",$lastname, $firstname, $email, $password);
    $stmt->execute();
    $stmt->close();
    $conn->close();
}
?>
