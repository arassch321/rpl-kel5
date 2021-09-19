<?php
require_once("koneksi.php");
session_start();
if(isset($_POST['login']))
{
$admin = $pdo_conn->prepare('SELECT * FROM akun WHERE email = :email and password = :password');
$admin->execute(array(
                  ':email' => $_POST['email'],
                  ':password' => $_POST['password']
                  ));
$row = $admin->fetch(PDO::FETCH_ASSOC);
if(empty($row['email']))
{
    echo "email atau password yang dimasukan tidak valid";
}
else 
{
    header("location: index.html");
}
}
?>