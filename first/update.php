<?php
require_once('connect.php');

$request = "UPDATE list_of_users SET name = :name , surname = :surname , email = :email  WHERE list_of_users.id = :id ";

$s = $db->prepare($request);
$s->bindValue(':id',$_POST['user_id']);
$s->bindValue(':name',$_POST['user_name']);
$s->bindValue(':surname',$_POST['user_surname']);
$s->bindValue(':email',$_POST['user_email']);

$s->execute();

header("location: index.php", true, 301 ); 
exit;

?>