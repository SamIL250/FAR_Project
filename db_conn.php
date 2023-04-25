<?php
$host_name = 'localhost';
$user = 'root';
$password = '6ZpIOZnTNBbVGN1S';
$db_name = 'far';

$conn = mysqli_connect($host_name, $user, $password, $db_name);


$f_name = $_POST['f_name'];
$l_name = $_POST['l_name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$id = $_POST['id'];
$bank = $_POST['bank'];
$reason = $_POST['reason'];
$amount = $_POST['amount'];

$sql = "INSERT INTO `customers`(`First_name`, `Last_name`, `Phone_number`, `Email_address`, `Id`, `Bank_acount`, `Reason`, `Amount`)
 VALUES ('$f_name','$l_name','$phone','$email','$id','$bank','$reason','$amount')";


$succe = mysqli_query($conn, $sql);

if($succe) {
    header('Connection Successful');
} else{
    echo 'Coonection Failed ';
}

?>