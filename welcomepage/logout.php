<?php
include"C:\xampp\htdocs\Melomixx\login\connect.php";
session_start(); //session start vayo 
session_unset(); //session agi ture garyrah set garyeko unset vayo
session_destroy(); //yo ta abba session ko data destory ho

header('location:/Melomixx/login/login.php');
exit;
?>