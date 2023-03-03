<?php

// 1. Получить и разобрать внешние параметры
//$name = $_POST["name"];
session_start();
$user=$_SESSION["id"];
$myid=$_POST["myid"];

// 2. Соединиться с базой данных
require("connect.php");

// 3. Выполнить программную логику: изменить данные в базе и (или) получить данные из базы
$loginResults = $mysqli->query("DELETE FROM notes WHERE id = '{$myid}'");
//$result = $loginResult->fetch_array(MYSQLI_ASSOC);

// 4. Вернуть результат (итоговые данные) клиенту




?>
