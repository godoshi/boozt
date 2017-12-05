<?php
require_once './../bootstrap.php';
?>
<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" type="text/css" href="css/app.css">
  </head>
  <body>
    <div class="container-fluid">
      <nav class="navbar navbar-toggleable-md navbar-inverse bg-primary">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="#">Skills Test</a>
        <div class="collapse navbar-collapse" id="navbarText">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link" href="/">Intro</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/dashboard">Dashboard</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="https://github.com/godoshi/boozt" target="_blank">Source</a>
            </li>
          </ul>
        </div>
      </nav>
      <div id="app" class="row">
        <?php
          $router->dispatch();
        ?>
      </div>
    </div>
  </body>
  <script src="js/app.js?<?php echo date('YmdHis'); ?>"></script>
</html>