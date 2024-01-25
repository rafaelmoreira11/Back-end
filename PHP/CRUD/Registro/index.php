<?php
if(isset($_POST['submit'])){
include 'config.php';
    
$email = $_POST['email'];
$senha = $_POST['senha'];
$repetir_senha = $_POST['repetir_senha'];

$sql = mysqli_query($con,"INSERT INTO `cad_user`(`email`, `senha`, `repetir_senha`) VALUES ('$email','$senha','$repetir_senha')");

}
?>


<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./assets/css/style.css" />
    <title>Cadastro</title>
  </head>
  <body>
    <main>
      <div class="main-conteiner">
        <div class="logo">
          <img src="./assets/imgs/logo.png" alt="logo-img" class="img-logo" />
        </div>
        <div class="texts">
          <h1 class="title">Acesse a plataforma</h1>
          <p class="desc">
            Faça login ou registre-se para começar a construir<br />
            seus projetos ainda hoje.
          </p>
        </div>
        <form action="index.php" method="post">
          <label for="#" class="campo"><strong>Email</strong></label>
          <input
            type="email"
            class="input-form"
            placeholder="Digite seu Email"
            name="email"
            required
          />
          <label for="#" class="campo"><strong>Senha</strong></label>
          <input
            type="password"
            class="input-form"
            placeholder="Digite sua Senha"
            name="senha"
            minlength="8"
            required
          />
          <label for="#" class="campo"><strong>Repita a senha</strong></label>
          <input
            type="password"
            class="input-form"
            placeholder="Repita sua Senha"
            name="repetir_senha"
            minlength="8"
            required
          />
          <input type="submit" class="btn-cadastrar" id="btn" name="submit">
          
        </form>
        <div class="login">
          <label for="" class="login-text">Já tem uma conta?</label>
          <a href="login.php" class="login-link"><strong>Entrar</strong></a>
        </div>
      </div>
    </main>
    <div class="bg">
      <img src="./assets/imgs/purple.png" alt="purple" class="img-bg" />
    </div>

    <script src="./assets/js/script.js"></script>
    
  </body>
</html>
