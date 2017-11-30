<?php
require_once './../bootstrap.php';
?>
<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" type="text/css" href="css/app.css">
  </head>
  <body>
    <header>
      <h1>Welcome</h1>
    </header>
    <div id="app">
      <?php
        print_r(DB::getInstance()->query("SELECT * FROM customers", PDO::FETCH_ASSOC));
        $router->dispatch();
      ?>
    </div>
  </body>
  <script src="js/app.js?<?php echo date('YmdHis'); ?>"></script>
</html>