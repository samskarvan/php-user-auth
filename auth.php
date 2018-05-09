<?php


require_once('./user_data.php');

$username =$_POST['username'];
$password = $_POST['password'];

if(isset ($user_data[$username]) && $user_data[$username]['password']===$password){
    echo '<h1>Suh, Dude!</h1>';
}
else{
    echo '<h1>Nah, Dude!</h1>';
}


?>

