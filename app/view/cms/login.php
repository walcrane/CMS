<?php
if (session_status() == PHP_SESSION_NONE)
    session_start();

if (isset($_SESSION['is_logged_in']) && $_SESSION['is_logged_in']) // jeżeli jest zalogowany, to przekierowujemy od razu do panelu
    header('Location: ' . HOST . 'admin');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Panel logowania</title>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
    integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
    integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
  </script>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <!------ Include the above in your HEAD tag ---------->

  <script src="https://cdn.jsdelivr.net/jquery.validation/1.15.1/jquery.validate.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
    integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

  <base href="http://localhost/cms2/">
</head>


<body>
  <div class="container">
    <div class="row">
      <div class="col-md-5 mx-auto">
        <div id="first">
          <div class="myform form">
            <div class="logo mb-3">
              <div class="col-md-12 text-center">
                <h3 class="mt-5">Panel logowania - Tutorial CMS</h3>
              </div>
            </div>
            <form action="app/scripts/login.php" method="post">
              <div class="form-group">
                <label for="login">Login</label>
                <input type="text" name="login" class="form-control" id="login" placeholder="login">
              </div>
              <div class="form-group">
                <label for="password">Hasło</label>
                <input type="password" name="password" id="password" class="form-control" placeholder="hasło">
              </div>
              <?php if (isset($_SESSION['login_message'])): ?>
                <div class="alert alert-dismissible alert-danger">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <?= $_SESSION['login_message'] ?>
                </div>
              <?php unset($_SESSION['login_message']); endif; ?>
              <div class="col-md-12 text-center ">
                <input type="submit" name="submit" class=" btn btn-block mybtn btn-primary tx-tfm" value="Zaloguj"></input>
              </div>
            </form>
            <div class="row col-md-2 mx-auto">
              <a class="mt-3" href="index.php">Powrót</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php require_once('inc/footer.php') ?>