<?php
require_once('./config.php');
require_once('./use-cases/list-cds.php');
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>BBDD</title>
</head>
<body>
  <pre>
    <?php
    print_r($cd);
    ?>
  </pre>
</body>
</html>