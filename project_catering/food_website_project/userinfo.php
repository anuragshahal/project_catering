<?php
$con = mysqli_connect('localhost','root');
if($con){
    echo "connection success";
}
else{
    echo "no success";
}
mysqli_select_db($con,'website_userdata');
$user= $_POST['user'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$address= $_POST['address'];

$query = "insert into userinfodata(user , email, phone ,address) 
values('$user','$email','$phone','$address') ";
mysqli_query($con, $query);

//  header('location : index.php');



?>