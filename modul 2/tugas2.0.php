<?php
error_reporting(0);
$_POST['username']=htmlspecialchars($_POST['username']);
$_POST['password']=htmlspecialchars($_POST['password']);
$_POST['password_confirmation']=htmlspecialchars($_POST['password_confirmation']);

if (strlen($_POST['username']) > 7){
    $nameErr = "Nama tidak boleh lebih dari 7 karakter!";
}

if (!preg_match("/(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*#?&])/", $_POST['password'])){
    $passErr = "Password tidak sesuai ketentuan!";
}elseif(strlen($_POST['password']) < 10){
    $passErr = "Password tidak boleh kurang dari 10 karakter!";
}

if ($_POST['password_confirmation'] != $_POST['password']){
    $passConfErr = "Konfirmasi password tidak cocok";
}
?>