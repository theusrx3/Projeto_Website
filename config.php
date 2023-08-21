<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php 
//-----------------------conexão com o banco de dados------------------------------- //
$conexao = mysqli_connect("localhost", "root", "", "cadastro_projeto");
//--------------------------------------------------------------------------------- //

//-----------------------checar se o cpf já existe------------------------------- //
$cpf = $_POST["cpf"];
$checar = "SELECT cpf FROM usuario WHERE cpf='$cpf'";
$retorno = mysqli_query($conexao, $checar);
//------------------------------------------------------------------------------ //

//-----------------------------realizar cadastro------------------------------- //
if(mysqli_num_rows($retorno)>0){
    
    echo '<script>alert("CPF já cadastrado!!!");</script>';
    print_r("<<<<<< Volte para a página anterior");
}
else{
    $nome = $_POST["nome"];
    $cpf = $_POST["cpf"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];
    $insert = "INSERT INTO usuario (nome, cpf, email, senha) VALUES ('$nome', '$cpf', '$email', '$senha')";
    $resultado = mysqli_query($conexao, $insert);
    header("location: Home.html");
}
//---------------------------------------------------------------------------- //
?>
</body>
</html>


