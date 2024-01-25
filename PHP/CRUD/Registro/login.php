<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./assets/css/login.css" />
    <title>Login</title>
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
        <form action="test_login.php" method="post">
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
          <input type="submit" class="btn-logar" name="submit" value = "Logar">
        </form>
        <div class="cadastrar">
          <label for="" class="cadastro-text">Não tem uma conta?</label>
          <a href="index.php" class="cadastro-link"><strong>Cadastre-se</strong></a>
        </div>
      </div>
    </main>
    <div class="bg">
      <img src="./assets/imgs/purple.png" alt="purple" class="img-bg" />
    </div>
  </body>
</html>
