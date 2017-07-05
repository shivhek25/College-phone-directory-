<?php
<<<<<<< HEAD
 $connection=mysqli_connect("localhost:8889", "root", "root") ;
 if (!$connection{
     die("Database Connection Failed" . mysqli_error($connection1));
 }
 $select_db=mysqli_select_db($connection, "College_Phone_Directory");
 if (!$select_db){
     die("Database Selection Failed" . mysqli_error($connection1));
 }
 $data = mysql_query("SELECT * FROM Info");
  while($row = mysql_fetch_assoc($data)){
=======
 require('connect.php');
 $sql="SELECT * FROM Info";
 $data = mysqli_query($connection, $sql) or trigger_error(mysql_error()." in ".$sql);;
 while($row = mysqli_fetch_assoc($data)){
>>>>>>> 277e81e97c0b38c9699f4211d89a52309d3af462
    echo "Name ".$row['name'].", Position:".$row['position'].", Phone Number:".$row['phone_number']
    .", Email Address:".$row['email']."<br/>";
    }
 ?>
 <html>
  <head>
    <title>College Phone Directory</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" >
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
      .tabs{
        margin: 1px solid red;
      }
    </style>
  </head>
  <body>
    <div class="col-md-12 tabs">
      <div class="col-md-3">Name</div>
      <div class="col-md-3">Position</div>
      <div class="col-md-3">Phone Number</div>
      <div class="col-md-3">Email</div>
    </div>
  </body>
</html>
