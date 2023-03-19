<?php
$con = mysqli_connect('localhost','root');
mysqli_select_db($con,'groupatul');
$user = $_POST['name'];
$user1 = $_POST['email'];
$user2 = $_POST['message'];

$query = "insert into pal (name,email,message) values('$user' , '$user1' , '$user2')";
echo "THANK YOU YOUR RESPONSE HAS SUBMITTED";
mysqli_query($con,$query)
?>
