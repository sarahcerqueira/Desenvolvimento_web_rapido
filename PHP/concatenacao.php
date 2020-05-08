<!DOCTYPE html>
<html>
	<header>
		<title>Curso PHP</title>
		<meta charset="utf-8">
	</header>

	<body>
		<?php

			$nome = "Sarah";
			$data = "20/04/2020";

			//Concateção é feita a partir do ponto

			echo ' <h1> Seja bem vinda '.$nome. ' ao curso de PHP </h1>';
			echo '<p> Hoje são: ' . $data;

			/*Com as aspas duplas é possível imprimir variaveis sem fazer concatenação explicita, porém devido a verificação das variaveis 
				aspas duplas são mais lentas que aspas simples.			*/
			echo " <h1> Seja bem vinda $nome ao curso de PHP </h1>";
			echo "<p> Hoje são: $data";
		?>

		<!--  Com a tag de impressão-->

		<h1>Seja bem vinda <?= $nome ?> ao curso de PHP </h1>
		<p> Hoje são <?=$data ?> </p>


	</body>

</html>

