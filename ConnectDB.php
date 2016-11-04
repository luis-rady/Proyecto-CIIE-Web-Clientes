<?php

$host = 'localhost';
$username = 'root';
$password = '';
$db_name = 'ciieAdmin';

$link = mysql_connect("$host", "$username", "$password")or die("cannot connect to DB");
mysql_select_db("$db_name")or die("cannot select DB");

?>
