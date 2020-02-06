<!DOCTYPE html>
<html lang="pt-br">
<head>
 <!-- Global site tag (gtag.js) - Google Analytics -->
 
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-157516915-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-157516915-1');
</script>
<!-- Global site tag (gtag.js) - Google Analytics -->
  <meta charset="UTF-8">
  <title>LOGIN</title>

  <meta name="viewport" content="width=device-width">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">

  <!-- Depois apagar --> 
    <link rel="stylesheet" href="node_modules/bootstrap/compiler/bootstrap.css">
    <!-- Depois apagar --> 

</head>
  <body>
   
  <div class="container-fluid sm-d-flex-column ">
    <div class="imagem ">
      <img src="imagens/cidade.jpg" class="img-fluid" alt="Imagem responsiva">
    </div>
    <div class="formulario md-ml-5 " >
      <form class="formInterno " action="../../../control/configLogin.php" method="POST" class="form" >
       <div class="form-group">
          <label for="exampleInputEmail1 ">Login</label>
          <input type="text" size="40" maxlength="50" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="login" placeholder="Digite seu Login">
          <small id="emailHelp" class="form-text text-muted">Nunca compartilhar seu login, e senha com ninguém.</small>
        </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Senha</label>
            <input type="password" size="" class="form-control" id="exampleInputPassword1" name="senha" placeholder="Senha">
          </div>
          <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Lembrar senha</label>
          </div>
            <button type="submit" class="btn btn-primary btn-lg btn-block">Entrar</button>

             <a href="view\formulario\formulario.php" class="badge badge-warning">Cadastra-se</a>
      </form>
    </div>
      <footer class="rodape  d-flex justify-content-center ">
        <p>Corretores de Imóveis Biro Biro copyright &copy;2020.</p>
      </footer>
  </div>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        
    <!-- Depois apagar --> 
    <script src="node_modules/jquery/dist/jquery.js"></script>
    <script src="node_modules/popper.js/dist/umd/popper.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.js"></script>
    <!-- Depois apagar --> 

  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  <script >alert("OPS Login invalido        Olá Sou o Marcos Gabriel Seja Bem Vindo a meu Portfólio ele ainda está em construção mas pode ver as partes que já estão prontas para acessar use o      LOGIN: marcos      SENHA: 123.  ")</script>
  </script>
  </body>
</html>