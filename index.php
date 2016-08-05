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

      <link href="css/animate.css" rel="stylesheet">
  </head>
  <body>
  <header class="navbar navbar-fixed-top navbar-brand"><h3>Air Booking</h3></header>
  <header class="page-header"></header>
    <div class="container">

        <div class="row">
            <button type="button" class="btn btn-info btn-lg center-block"
                    data-toggle="modal" data-target="#bookTicketModal">
                Book a ticket</button>

            <div class="form-signin">

                <a href="login/logout.php" class="btn btn-default btn-lg btn-block">Logout</a>
            </div>
        </div>


    </div> <!-- /container -->

  <!-- Modal -->
  <div class="modal fade " id="bookTicketModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
              <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title" id="myModalLabel">Modal title</h4>
              </div>
              <div class="modal-body">
                  ...
              </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary">Save changes</button>
              </div>
          </div>
      </div>
  </div>

  <script>
      $(document).ready(function () {

          $.notify({
              // options
              message: 'You have been <strong>successfully logged in</strong>.'
          },{
              // settings
              type: 'success',
              offset: 20,
              spacing: 10,
              z_index: 1031,
              delay: 2000,
              allow_dismiss: true,
              animate: {
                  enter: 'animated fadeInDown',
                  exit: 'animated fadeOutUp'
              }
          });

      });


  </script>
  </body>
</html>
