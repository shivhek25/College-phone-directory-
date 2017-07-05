<?php
 require('connect.php');
 $sql="SELECT * FROM Info";
 $data = mysqli_query($connection, $sql) or trigger_error(mysql_error()." in ".$sql);;
 while($row = mysqli_fetch_assoc($data)){
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
