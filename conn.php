<?php
$db_host='localhost';
$db_username='root';
$db_password='';
$db_name='myDb';

 $con = mysqli_connect($db_host,$db_username,$db_password,$db_name)
 or die('Error Connecting to Database.');
?>