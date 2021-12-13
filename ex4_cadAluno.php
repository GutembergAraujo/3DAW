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

<h1>Inserir Aluno</h1>
<?php
$ehPost = true;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
 	$nome = $_POST["aluno"];
	$matricula = $_POST["matricula"];
    $email = $_POST["email"];
    $idade = $_POST["idade"];
	$txt = "$nome;$matricula;$email;$idade \n";
	$arquivoTxT = "alunos cadastrados.txt";
	if(file_exists($arquivoTxT)){
		file_put_contents($arquivoTxT,$txt,0);
	}
	else{
		file_put_contents($arquivoTxT,"Nome: Matricula: email: Idade: \n",0);
		file_put_contents($arquivoTxT,$txt,0);
	}
	

} else {
    $ehPost = false;
}
?>

<h3><?php if ($ehPost) {echo "Aluno $nome inserido com sucesso";} ?></h3>

<form action="ex4_cadAluno.php" method="POST">
    	nome:   <input type="text" name="aluno"><br>
	matricula: <input type="text" name="matricula"><br>
    	email:   <input type="text" name="email"><br>
    	idade:   <input type="text" name="idade"><br>
    	<input type="submit" value="enviar">
</form>
</body>
</html>