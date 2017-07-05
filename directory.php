<?php
 require('connect.php');
 $sql="SELECT * FROM Info";
 $data = mysqli_query($connection, $sql) or trigger_error(mysql_error()." in ".$sql);;
 while($row = mysqli_fetch_assoc($data)){
    echo "Name ".$row['name'].", Position:".$row['position'].", Phone Number:".$row['phone_number']
    .", Email Address:".$row['email']."<br/>";
    }
 ?>
