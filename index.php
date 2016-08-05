<?php require "login/loginheader.php"; ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet" media="screen">
    <link href="css/main.css" rel="stylesheet" media="screen">

    <script src="js/jquery-3.1.0.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
      <script src="js/bootstrap-notify.min.js" type="text/javascript"></script>
  </head>
  <body>
  <header class="navbar navbar-fixed-top navbar-brand"><h3>Air Booking</h3></header>
  <header class="page-header"></header>
    <div class="container">

      <div class="form-signin">
        <a href="login/logout.php" class="btn btn-default btn-lg btn-block">Logout</a>
      </div>
    </div> <!-- /container -->

  <script>
      $(document).ready(function () {

          $.notify({
              // options
              message: 'You have been <strong>successfully logged in</strong>.'
          },{
              // settings
              type: 'success',
              timer: 1000,
              offset: 20,
              spacing: 10,
              z_index: 1031,
              delay: 5000,
              animate: {
                  enter: 'animated fadeInDown',
                  exit: 'animated fadeOutUp'
              }
          });

      });


  </script>
  </body>
</html>
