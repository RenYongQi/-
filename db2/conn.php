<?php
$dbms="mysql";
$host="dev.dxdc.net";
$name="a0916133408";
$pwd="93858884";
$dsn="$dbms:host=$host;dbname=$name";
$pdo=new pdo($dsn,$name,$pwd);
$pdo->query("set names utf8");
?>