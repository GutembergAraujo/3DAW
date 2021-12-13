<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<a href="ex4_cadAluno.php">Inserir Aluno</a><br>
<a href="ex4_altAluno.php">Alterar Aluno</a><br>
<a href="ex4_listAluno.php">Listar Aluno</a><br>
<a href="ex4_excluirAluno.php">Excluir Aluno</a><br><br>

<h1>Listar Aluno</h1>

<table>
    	<tr>
		<th>Matricula</th>
        	<th>Nome Aluno</th>
        	<th>email</th>
       		<th>Idade</th>
        	<th>Ações</th>
    	</tr>
<?php
	$i;
	$matricula =array ("1234","5678");
	$nome =array ("gustavo","gutemberg");
	$email =array ("tavo@gmail.com","gut@gmail.com");
	$idade =array ("12","43");
	function listAluno($i){
		global $matricula,$nome,$email,$idade;
		echo "<tr><td>$matricula[$i]</td>";
		echo "<td>$nome[$i]</td>";
		echo "<td>$email[$i]</td>";
		echo "<td>$idade[$i]</td>";
		echo '<td><a href="alteraAluno.php?matricula=$matricula[$i]">Altera</a>';
		echo '<a href="excluirAluno.php?matricula=$matricula[$i]">Exclui</a></td></tr>';		
	}
	for($i=0;$i<count($matricula);$i++){
		listAluno($i);		
	}	
?>		
</table>
</body>
</html>