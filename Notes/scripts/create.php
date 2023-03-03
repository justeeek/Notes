<?php

// 1. Получить и разобрать внешние параметры
//$name = $_POST["name"];
session_start();
$title = $_POST["title"];
$opis = $_POST["opis"];
$user=$_SESSION["user"];

// 2. Соединиться с базой данных
require("connect.php");

// 3. Выполнить программную логику: изменить данные в базе и (или) получить данные из базы

//$create1 = $mysqli->query("UPDATE users SET Osebe = '{$osebe}' WHERE Osebe = '?'")
if ($title == "" || $opis == "")
{
    echo 0;
}
else {
    $Create = $mysqli->query("INSERT INTO notes (user_id, title, opis) VALUES ('{$user}', '{$title}', '{$opis}')");
}

//$myrow = $CheckNick->fetch_array(MYSQLI_ASSOC);

// 4. Вернуть результат (итоговые данные) клиенту
?>