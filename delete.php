<?php

require "functions.php";

$users = getUsers('users.json');

$user = getUser($users, $_GET['id']);
array_splice($users, $user, 1);

$newJson = json_encode($users);
file_put_contents('users.json', $newJson);	

header('Location: index.php')
?>