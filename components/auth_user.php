<?php
/**
 * Created by PhpStorm.
 * User: volyinets
 * Date: 05.09.2018
 * Time: 19:09
 */
require_once 'functions.php';
$pass = @$_POST["pass"];
$login = @$_POST["login"];

if(empty($pass) || empty($login)) die("error");
$name = checkLoginReg($login);

if(checkAuth($login, $pass)){
    echo "Hello, ".$name["name"];
} else {
    echo "Error ВСЕ НЕ ВЕРНО!!!";
}