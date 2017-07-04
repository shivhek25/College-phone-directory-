<?php
$connection = mysqli_connect('localhost:8889', 'root', 'root');
if (!$connection){
    die("Database Connection Failed" . mysqli_error($connection));
}
$select_db = mysqli_select_db($connection, 'College_Phone_Directory');
if (!$select_db){
    die("Database Selection Failed" . mysqli_error($connection));
}?>
