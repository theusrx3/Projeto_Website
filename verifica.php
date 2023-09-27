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
$email = $_POST["email"];
$senha = $_POST["senha"];
$checar = "SELECT * FROM usuario WHERE email='$email' AND senha='$senha'";
$retorno = mysqli_query($conexao, $checar);
//------------------------------------------------------------------------------ //

//-----------------------------realizar cadastro------------------------------- //
if(mysqli_num_rows ($retorno) >0){
    
    header('Location: http://localhost:3000/');
    die();

}
else{
    
   header("location: area_de_cadastro.php");
   echo "<script>alert('login não encontrado, realize seu cadastro!');</script>";
}
//---------------------------------------------------------------------------- //


?>
</body>
</html>
