<?php 

require ('funcoes.php');

$contadores = buscarContadores();

/*foreach ($contadores as $c ) 
{
	echo '<p>' . $c['nome'] . '</p>';
}*/





 ?>
 <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8"> 
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Contador</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>

<body>
  <div id="container">
	<header>
		<h1>Contador de Coisas</h1>
	</header>
	
	<div id="listadecontadores">

		<?php foreach ($contadores as $c): ?>
	

	   	
			<div class="contador">
				<button>-</button>
				<div class="contt">
					<p><?= $c['nome'] ?></p>
					<p><?= $c['numero'] ?></p>
				</div>
				<button>+</button>
			</div>

		<?php endforeach; ?>


		
	</div>
	<footer>
		<form action="index.php" method="post">
		<label>Novo Contador</label> 
		<input type="text" name="campo1">
		<button>Adicionar</button>
		</form>
	</footer>
</div>


</body>


</html>