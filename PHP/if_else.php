<!DOCTYPE html>
<html>
	<header>
		<title>Curso PHP</title>
		<meta charset="utf-8">
	</header>

	<body>
		<?php

			# Operadores de comparação
				/* 
				 ==
				 === igual e do mesmo tipo
				 != ou <>
				 !== diferente e de tipos diferentes
				 <
				 >
				 <=
				 >=
				*/


			# Operadores lógicos
				/* 
				 AND ou &&
				 OR ou ||
				 XOR  - verdadeiro somente se só uma das consições for verdadeira
				 >=
				*/


			if(){}
			else if () {}
			else{}


			#Operadores ternários
			$rico = true;

			$rico == false ? echo'Pobre' : echo'Rico';
			//para encadear operadores ternários para colocar outro ternario no 

			$inteligente = false;
			$rico == false ? echo'Pobre' : inteligente == true ?  echo 'rico  e inteligente': echo 'rico e burro';

			if(!$rico){
				echo'Pobre';
			} else if ($inteligente){
				echo 'rico  e inteligente';
			} else {
				echo 'rico e burro';
			}


		?>



	</body>

</html>
