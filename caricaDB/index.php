<?php


$db = new PDO($dsn, $user, $password); // TODO get from config file

printf("Uploading schema structure..\n");

$sql = file_get_contents('dbone.sql');

$qr = $db->exec($sql);

printf("Uploading starting values..\n");
// todo



?>