<?php
/*!
$db = new App\Database('staff_blog');
$datas=$db-> query('SELECT * FROM articles');

var_dump($datas[0]->titre);

 */
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">


    <title>Starter Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet">

  </head>

  <body>

    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">

      </div>
    </nav>

    <main role="main" class="container">

      <div class="SINGLE-template" style="padding-top:100px;">
      <?= $content; ?>	
      </div>

    </main><!-- /.container -->

 
  </body>
</html>