<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Academia FORM - Login </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="imagens/icone da logo.ico" type="image/x-icon">
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <div id="logo">
        <a href="http://127.0.0.1:5500/Home.html">
            <img src="imagens/logo academia.png" alt="Logo do site">
        </a>
    </div>   
    <div id="linha_horizontal">
    </div>
    
    <div class="caixa_login">
        <form action="verifica.php" method="POST">
            <fieldset>
                <legend>
                        <h1><b style="font-size: 19pt;">Realize login para continuar</b></h1>
                </legend>
                <br> 
                <div class="caixaInput">
                    <label for="email" class="inputLabel"><b>E-mail:</b></label>
                    <input type="email" autocomplete="off" name="email" id="email" class="usuarioInput" placeholder="exemplo@exemplo.com" required><br>
                </div>
                <br>
                <div class="caixaInput">
                    <label for="senha" class="inputLabel"><b>Senha:</b></label>
                    <input type="password" autocomplete="off" name="senha" id="senha" class="usuarioInput" placeholder="******" required><br>
                </div>
                <button type="submit" name="submit" id="submit" class="btn btn-primary"><B>REALIZAR LOGIN</B></button>
                <a href="http://localhost:88/projeto/area_de_cadastro.php" id="texto_cadastro"><b>Cadastrar-se</b></a>
            </fieldset>
        </form>
   </div>


   <div>
       <footer>
        <a href="http://127.0.0.1:5500/pagina_sobre.html" style="position: absolute; left: 690px; bottom: 25px; color: white;">Sobre nós</a>
        <a href="http://127.0.0.1:5500/pagina_funcionarios.html" style="position: absolute; left: 850px; bottom: 25px; color: white;">Funcionários</a>
        <a href="http://127.0.0.1:5500/pagina_localiza%C3%A7%C3%A3o.html" style="position: absolute; left: 1025px; bottom: 25px; color: white;">Localização</a>
        <a href="http://127.0.0.1:5500/pagina_contato.html" style="position: absolute; left: 1200px; bottom: 25px; color: white;">Atendimento ao cliente</a>

       </footer>

       <a href="http://127.0.0.1:5500/Home.html">
        <img src="imagens/logo academia.png" alt="logo de rodapé" style="position: absolute; width: 90px; bottom: -80px; left: 200px;">
       </a>
       <a href="https://www.instagram.com/theusrx/">
        <img src="imagens/icone_insta.png" alt="icone do instagram" style="position: absolute; width: 25px; bottom: -10px; left: 420px;">
       </a>
       <a href="https://twitter.com/theusrxx">
        <img src="imagens/icone_twitter.png" alt="icone do twitter" style="position: absolute; width: 30px; bottom: -46px; left: 418px;">
       </a>
       <a href="https://www.tiktok.com/@.theusrx">
        <img src="imagens/icone _tiktok.png" alt="icone do Tik Tok" style="position: absolute; width: 30px; bottom: -88px; left: 415px;">
       </a>
   </div>


</body>
</html>