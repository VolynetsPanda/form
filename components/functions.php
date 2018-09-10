<?php
/**
 * Created by PhpStorm.
 * User: volyinets
 * Date: 03.09.2018
 * Time: 19:07
 */
function Connection(){
    static $dbh = null;
    if($dbh !== null) return $dbh;
    $dbh = new PDO("mysql:host=localhost;dbname=users;charset=utf8", "root", "", [
        PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_ASSOC
    ]);
    return $dbh;
}
function addUsers($name, $login, $pass, $mail){
    $dbh = Connection();
    $name = $dbh->quote($name);
    $login = $dbh->quote($login);
    $pass = $dbh->quote($pass);
    $mail = $dbh->quote($mail);
    $dbh->exec("insert into `user` (`name`, `login`, `pass`, `mail`) values ({$name}, {$login}, {$pass}, {$mail})");
}
function checkMailReg($mail){
    $dbh = Connection();
    $mail = $dbh->quote($mail);
    $stmt = $dbh -> query("Select * from `user` where `mail` = {$mail}");
    return $stmt->fetch();
}
function checkLoginReg($login){
    $dbh = Connection();
    $login = $dbh->quote($login);
    $stmt = $dbh -> query("Select * from `user` where `login` = {$login}");
    return $stmt->fetch();
}
function checkAuth($login, $pass){
    $dbh = Connection();
    $login = $dbh->quote($login);
    $pass = $dbh->quote($pass);
    $stmt = $dbh -> query("Select * from `user` where `login` = {$login} and `pass` = {$pass}");
    return $stmt->fetch();
}
