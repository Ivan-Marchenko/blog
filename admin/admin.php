<?php
require_once '../functions/connect.php';
session_start();
global $pdo;

$login=$_POST["login"];
$password=$_POST["password"];

$sql= $pdo->prepare("SELECT id,login From user WHERE login=:login and password=:password");
$sql->execute(array("login"=>$login,"password"=>$password));
$array=$sql->fetch(PDO::FETCH_ASSOC);
if ($array["id"]>0){
    $_SESSION["login"]=$array["login"];
    header("Location:/admin.php");
}
else{
    header("Location:/login.php");
}