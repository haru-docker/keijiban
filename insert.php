<?php
mb_internal_encoding("utf8");
$pdo =new PDO("mysql:dbname=lesson01;host=172.17.0.6","test","test");
$pdo->exec("insert into 4each_keijiban(handlename,title,comments)
values('".$_POST['handlename']."','".$_POST['title']."','".$_POST['comments']."');");
header("Location:http://192.168.12.15:8080/4each_keijiban/index.php");
?>