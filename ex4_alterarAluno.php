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

<h1>Alterar Aluno</h1>
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $matricula = $_POST["matricula"];
    $nome = $_POST["aluno"];
    $email = $_POST["email"];
    $idade = $_POST["idade"];

        echo "<h3>Aluno $nome alterado com sucesso<br><br>";
        echo "matricula: $matricula <br>";
        echo "Aluno: $nome <br>";
        echo "email: $email <br>";
        echo "idade: $idade </h3><br><br>";

}   
else{
    $matricula = $_GET["matricula"];
    echo "matricula: $matricula <br><br>";
}
?>
<form action="ex4_alterarAluno.php" method="POST">    
    matricula: <input type="text" name="matricula" value="1234"><br>
    nome:   <input type="text" name="aluno" value="Jose da Silva"><br>
    email:   <input type="text" name="email" value="ze@faeterj.edu.br"><br>
    idade:   <input type="text" name="idade" value="22"><br>
    <input type="submit" value="Alterar">
</form>


</body>
</html>