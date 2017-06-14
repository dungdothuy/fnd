<DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="shortcut icon" href="views/assets/images/icon.ico">

    <title><?= display_title(@$title) ?></title>

    <link rel="stylesheet" href="views/assets/stylesheets/bootstrap.min.css">
    <link rel="stylesheet" href="views/assets/stylesheets/font-awesome.min.css">
    <link rel="stylesheet" href="views/assets/stylesheets/custom-user.css">

    <script src="views/assets/javascripts/jquery-2.2.3.min.js"></script>
    <script src="views/assets/javascripts/bootstrap.min.js"></script>
    <script src="views/assets/javascripts/custom.js"></script>
  </head>
  <body>
    <?php include_once('views/layouts/header.php') ?>
    <div class="container-fluid content-container">
      <?php include_once('views/shareds/message.php') ?>
      <?= @$content ?>
    </div>
    <?php include_once('views/layouts/footer.php') ?>
  <body>
<html>
