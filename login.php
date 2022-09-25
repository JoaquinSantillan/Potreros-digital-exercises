<?php 

$usuario = $_POST ["user"];
$password = $_POST ["pass"];

$ckuser = "admin";
$ckpass = "1234";

if($usuario == $ckuser && $password == $ckpass){
    header("location:http://www.youtube.com");
}else{
    header("location:error.html");
};
?>