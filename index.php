<?php 

require ('funcoes.php');


if( $_POST['acao'] == "adicionar")
{
   criarContador($_POST['campo1']);
 
     
}

else if( $_POST['acao'] == "mais")
{
   incrementarContador($_POST['codigo']);
     
}

else if( $_POST['acao'] == "menos")
{
   decrementarContador($_POST['codigo']);
     
}

else if( $_POST['acao'] == "deletar")
{
   deletar($_POST['codigo']);
     
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
	<link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
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
				<button name="acao" value="menos">⊖</button>
				<input type="hidden" name="codigo" value="<?= $c['codigo'] ?>">
				<div class="contt">
					<p><?= $c['nome'] ?></p>
					<p><?= $c['numero'] ?></p>
				</div>
				<button name="acao" value="mais">⨁</button>
				<button name="acao" value="deletar"><img src="Imagem/lixo.png"></button>
			</form>

		<?php endforeach; ?>


		
	</div>
	<footer>
	<div id="add">
		<form action="index.php" method="post">
		<label>Novo Contador</label> 
		<input type="text" name="campo1">
		<button name="acao" value="adicionar">Adicionar</button>
		</form>
	</div>
	</footer>


</div>


</body>


</html>