<?php

// 1. Получить и разобрать внешние параметры
//$name = $_POST["name"];
session_start();
$user=$_SESSION["id"];
$myid=$_POST["myid"];

// 2. Соединиться с базой данных
require("connect.php");

// 3. Выполнить программную логику: изменить данные в базе и (или) получить данные из базы
$friends = array();
$loginResults = $mysqli->query("SELECT opis FROM notes WHERE id = '{$myid}'");
//$result = $loginResult->fetch_array(MYSQLI_ASSOC);

// 4. Вернуть результат (итоговые данные) клиенту
while($row = $loginResults->fetch_array(MYSQLI_ASSOC))// получаем все строки в цикле по одной
{
    //echo $row['nickname'], $row['name'];// выводим данные

    array_push($friends, $row);
}

// 4. Вернуть результат (итоговые данные) клиенту

echo json_encode($friends);
?>
