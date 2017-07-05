<?php
 require('connect.php');
 $sql="SELECT * FROM Info";
 $data = mysqli_query($connection, $sql) or trigger_error(mysql_error()." in ".$sql);;
 while($row = mysqli_fetch_assoc($data)){
    echo "Name: ".$row['name'].", Position:".$row['position'].", Phone Number:".$row['phone_number']
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
    .header{
      height:100px;
      background-color: rgb(27,170,170);
      color: white;
      font-family: Arial;
      font-size: 1.5em;
    }
    </style>
  </head>
  <body>
    <div class="header col-md-12 text-center">
      <img style="margin-top:5px" width="80px" src="http://nitdgp.ac.in/logo/logo.png"/>
      NATIONAL INSTITUTE OF TECHNOLOGY, DURGAPUR
    </div>
  </body>
</html>
