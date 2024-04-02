<?php
$url='localhost';
$username='root';
$password='JT@123';
$con=mysqli_connect($url,$username,$password,"test");
if(!$con){
 die('Could not Connect My Sql:' .mysql_error());
}
?>