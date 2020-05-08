<!DOCTYPE html>
<html>
	<header>
		<title>Curso PHP</title>
		<meta charset="utf-8">
	</header>

	<body>
		<?php

			echo "<h1>Testando variáveis</h1><br>";

			//As variáveis em PHP começam obrigatoriamente com $
			$Nome= "Sarah";
			$Idade= 25;

			/*As variáveis não aceitam caracteres especiais, exceto o _ , 
			E também não podem começar com números*/
			$nome_completo = "Maria Joanna dos Santos";

			//PHP é case sensitive
			$animal = "rato";
			$Animal = "cachorro";
			$ANIMAL = "elefante";

			//A tipagem é dinâmica e fraca
			$nome = "João";		#string
			$idade = 24;		#int
			$peso = 72	.5;		#float
			$altura = 1.60;		#float
			$casado = false;	#boolean

			//Consequencias da tipagem fraca
			$soma = $idade + $peso;
			$anomalia = $peso + $nome;

			echo "$soma = $idade + $peso; <br>";
			echo "$anomalia = $peso + $nome; <br>";

		?>

		<p>Nome: <?= $Nome ?></p> <!-- Impressão na tela com a tag de impressão do php --> 
		<p>Idade: <?= $Idade ?></p> <!-- Impressão na tela com a tag de impressão do php --> 

		<?php

			//Constantes
			define('STATIC_PATH', 'projeto/static/');

			//É uma boa pratica manter as constantes com letra maiuscula
			echo STATIC_PATH . '<br>'; #Exemplo de acesso a uma constante

					?>

	</body>

</html>
