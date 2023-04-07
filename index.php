<?php
require_once('./models/CD.php');
session_start();

$cd_arrays = $_SESSION['cds']??[];


function buscar (&$cd_arrays, $valorBuscado) {
	foreach ($cd_arrays as $cancion) {
		if ($cancion->dameTitulo() === $valorBuscado)
			return true;
	}
	return false;
}


if (isset($_REQUEST['cargar']) && !empty($_REQUEST['titulo'])) {
	
	if (!buscar($cd_arrays, $_REQUEST['titulo'])) {
		$cancion = new Cancion($_REQUEST['titulo'],$_REQUEST['autor']);
		array_push($cd_arrays, $cancion);
	}
	
	$_SESSION['cds'] = $cd_arrays;
}

$cd = new CD(...$cd_arrays);


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

<form action="<?=htmlspecialchars($_SERVER['PHP_SELF'])?>">
		<input type="text" required name="titulo" placeholder="título">
		<input type="text" name="autor" placeholder="Autor">
		<button name="cargar">Voy</button>
	</form>
	<?php
	 if (isset($cd)) {
		echo "<ul>";
		foreach($cd->getCanciones() as $cancion) {
			echo "<li>",$cancion->dameTitulo(),'❤️',$cancion->dameAutor(),"</li>";
		}
		echo "<ul>";
	 }
	?>
</body>
</html>