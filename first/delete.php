<?php

require_once('connect.php');
$request = "DELETE FROM list_of_users WHERE list_of_users.id = :id";
$s = $db->prepare($request);
$s->bindValue(':id',$_POST['user_id']);
$s->execute();

header("location: index.php", true, 301 ); 
exit;

?>