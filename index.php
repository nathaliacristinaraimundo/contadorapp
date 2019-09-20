<?php 

require ('funcoes.php');

$contadores = buscarContadores();

if( $_POST['acao'] == "adicionar")
{
   criarContador($_POST['campo1']);
 
     
 }
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
	

	   	
			<form action="index.php" method="post" class="contador">
				<button name="acao" value="menos">-</button>
				<div class="contt">
					<p><?= $c['nome'] ?></p>
					<p><?= $c['numero'] ?></p>
				</div>
				<button name="acao" value="mais">+</button>
			</form>

		<?php endforeach; ?>


		
	</div>
	<footer>
		<form action="index.php" method="post">
		<label>Novo Contador</label> 
		<input type="text" name="campo1">
		<button name="acao" value="adicionar">Adicionar</button>
		</form>
	</footer>
</div>


</body>


</html>