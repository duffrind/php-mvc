<DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  </head>
  <body>
    <header>
      <a href='/php-mvc'>Home</a>
      <a href='?controller=posts&action=index'>Posts</a>
    </header>

    <?php require_once('routes.php'); ?>

    <footer>
      Copyright
    </footer>
  <body>
<html>
