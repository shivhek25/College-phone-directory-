<?php
 $connection1=mysqli_connect("localhost:8889", "root", "root") ;
 if (!$connection1{
     die("Database Connection Failed" . mysqli_error($connection1));
 }
 $select_db1=mysqli_select_db($connection1, "College_Phone_Directory");
 if (!$select_db1){
     die("Database Selection Failed" . mysqli_error($connection1));
 }
 $data = mysql_query("SELECT * FROM Info");
  while($row = mysql_fetch_assoc($data)){
    echo "Name ".$row['name'].", Position:".$row['position'].", Phone Number:".$row['phone_number']
    .", Email Address:".$row['email']."<br/>";
    }
 ?>
