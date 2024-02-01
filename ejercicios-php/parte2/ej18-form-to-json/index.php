<?php
sleep(3);

$iduser = $_POST['userId'];
$login = $_POST['login'];
$lastname = $_POST['lastName'];
$name = $_POST['name'];
$date = $_POST['birthDate'];

$userObj = new stdclass;

$userObj->id = $iduser;
$userObj->login = $login;
$userObj->lastName = $lastname;
$userObj->name = $name;
$userObj->date = $date;

echo json_encode($userObj);

?>