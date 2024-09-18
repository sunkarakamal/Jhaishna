<?php
$url='localhost';
$username='root';
$password='Jhaishna@899747';
$con = mysqli_connect($url, $username, $password, "test");
if(!$con){
 die('Could not Connect My Sql:' .mysql_error());
}
?>
