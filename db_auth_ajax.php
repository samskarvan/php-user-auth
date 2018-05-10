<?php
session_start();

require_once('./db_connect.php');

$username=$_POST['username'];
$password=md5($_POST['password']);

$query = "SELECT `username`, `name`, `user_level` FROM `users` WHERE `username` = '$username' AND `password` = '$password'";

$result = mysqli_query($db, $query);
$output=[];
$output['success']=false;

if(mysqli_num_rows($result)){
    $user=mysqli_fetch_assoc($result);

    $_SESSION['user']=$user;
    $output['success']=true;
    $output['mesage']='User validated but scott says it doesn\'t matter';
}else{

$output['error']= 'inavlid user but still doesn\'t matter';
}

print(json_encode($output));