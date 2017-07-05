<?php
	require('connect.php');
    // If the values are posted, insert them into the database.
    if (isset($_POST['name'])){
        $name = $_POST['name'];
        $position = $_POST['position'];
        $phone_number = $_POST['phone_number'];
				$email = $_POST['email'];
        $query = "INSERT INTO `Info` (name, position, phone_number, email) VALUES ('$name', '$position', $phone_number, '$email')";
        $result = mysqli_query($connection, $query) or trigger_error(mysql_error()." in ".$query);
        if($result){
            $smsg = "Information added successfully.";
        }else{
            $fmsg ="Information failed to be added";
        }
    }
    ?>
  <html>
  <head>
		<title>College directory</title>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" >
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      <style>{
        .entire {
          padding-top: 40px;
          padding-bottom: 40px;
          background-color: #eee;
            }

        .form-signin {
          max-width: 330px;
          padding: 15px;
          margin: 0 auto;
        }
        .form-signin .form-signin-heading,
        .form-signin .checkbox {
          margin-bottom: 10px;
        }
        .form-signin .checkbox {
          font-weight: normal;
        }
        .form-signin .form-control {
          position: relative;
          height: auto;
          -webkit-box-sizing: border-box;
          -moz-box-sizing: border-box;
          box-sizing: border-box;
          padding: 10px;
          font-size: 16px;
        }
        .form-signin .form-control:focus {
          z-index: 2;
        }
        .form-signin input[type="email"] {
          margin-bottom: -1px;
          border-bottom-right-radius: 0;
          border-bottom-left-radius: 0;
        }
        .form-signin input[type="password"] {
          margin-bottom: 10px;
          border-top-left-radius: 0;
          border-top-right-radius: 0;
        }
        }</style>
      </head>
      <body class="entire">
        <div class="container">
          <form class="form-signin" method="POST">
            <?php if(isset($smsg)){ ?><div class="alert alert-success" role="alert"> <?php echo $smsg; ?> </div><?php } ?>
            <?php if(isset($fmsg)){ ?><div class="alert alert-danger" role="alert"> <?php echo $fmsg; ?> </div><?php } ?>
            <h2 class="form-signin-heading">Please Add Information</h2>
            <div class="input-group">
	              <span class="input-group-addon" id="basic-addon1">@</span>
	              <input type="text" name="name" class="form-control" placeholder="Name" required>
                <span class="input-group-addon" id="basic-addon1">@</span>
	              <input type="text" name="position" class="form-control" placeholder="Position" required>
	          </div>
              <label for="inputNumber" class="sr-only">Phone number</label>
              <input type="number" name="phone_number" class="form-control" placeholder="Phone number" required autofocus>
              <label for="inputEmail" class="sr-only">Email address</label>
              <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
              <button class="btn btn-lg btn-primary btn-block" type="submit">Add</button>
              <a class="btn btn-lg btn-primary btn-block" href="directory.php">Check database</a>
             </form>
        </div>
      </body>
    </html>
