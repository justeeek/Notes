<?php

// 1. Получить и разобрать внешние параметры
//$name = $_POST["name"];
session_start();
$opis = $_POST["opis"];
$myid=$_POST["myid"];
$user=$_SESSION["user"];

// 2. Соединиться с базой данных
require("connect.php");

// 3. Выполнить программную логику: изменить данные в базе и (или) получить данные из базы

//$create1 = $mysqli->query("UPDATE users SET Osebe = '{$osebe}' WHERE Osebe = '?'")
if ($opis == "")
{
    echo 0;
}
else {
    $Create = $mysqli->query("UPDATE notes SET opis = '{$opis}' WHERE id = '{$myid}'");
}

//$myrow = $CheckNick->fetch_array(MYSQLI_ASSOC);

// 4. Вернуть результат (итоговые данные) клиенту
?>