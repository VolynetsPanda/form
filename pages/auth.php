<?php
/**
 * Created by PhpStorm.
 * User: volyinets
 * Date: 05.09.2018
 * Time: 19:06
 */
?>
<h2>Авторизвция</h2>
<form action="./components/auth_user.php" method="post">
    <input type="text" name="login" placeholder="login">
    <input type="text" name="pass" placeholder="password">
    <input type="submit">
</form>
<a href="./?page=registr">Регистрация</a>
