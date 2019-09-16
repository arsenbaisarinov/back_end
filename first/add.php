<?php
require_once('connect.php');

$request = "INSERT INTO list_of_users (name, surname, email) VALUES (:name, :surname, :email)";

$s = $db->prepare($request);

$s->bindValue(':name',$_POST['name']);
$s->bindValue(':surname',$_POST['surname']);
$s->bindValue(':email',$_POST['email']);

$s->execute();

header("location: index.php", true, 301 ); 
exit;

?>