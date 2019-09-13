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
		<div class="contador">
			<button>-</button>
			<div class="contt">
				<span>Xixi</span>
				<p>4</p>
			</div>
			<button>+</button>
		</div>

		<div class="contador">
			<button>-</button>
			<div class="contt">
				<span>Copos d'água</span>
				<p>4</p>
			</div>
			<button>+</button>
		</div>

		<div class="contador">
			<button>-</button>
			<div class="contt">
				<span>Biscoitos</span>
				<p>4</p>
			</div>
			<button>+</button>
		</div>
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