<?php
date_default_timezone_set("America/Sao_Paulo");

?>


<html>
<head>
	<title><?php echo $paginaTitulo ;?></title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Oswald:400,700" type="text/css">
	<link rel="shortcut icon" href="favicon.ico">
	<meta charset='utf-8'>
</head>
<body>

	<div class="header">

		<div class="wrapper">

			<h1 class="branding-title"><a href="index.php">Shirts 4 Mike</a></h1>

			<ul class="nav">
				<li class="shirts <?php if ($section=="camisa") {echo "on";}?>"><a href="camisa.php">Camisas</a></li>
				<li class="contact <?php if ($section=="contato"){echo "on";}?>"><a href="contato.php">Contato</a></li>
				<li class="cart"><a href="#">Carrinho de Compras</a></li>
			</ul>

		</div>

	</div>

	<div id="content">