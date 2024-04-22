<?php
$url='localhost';
$username='root';
$password='Jhaishna@899747';
$con = new mysqli($url, $username, $password, "test");

if(!$con){
 die('Could not Connect My Sql:' .mysql_error());
}
?>
