<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="css/favicon.ico">

    <title>SISTU</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/signin.css" rel="stylesheet">
  </head>

  <body>

    <div class="container">
        <form class="form-signin">
          <h2 class="form-signin-heading" autofocus>SISTU</h2>
            <label for="inputEmail" class="sr-only">Email</label>
            <input type="email" id="inputEmail" class="form-control" placeholder="Email" required autofocus>
            <label for="inputPassword" class="sr-only">Senha</label>
            <input type="password" id="inputPassword" class="form-control" placeholder="Senha" required>
            <div class="checkbox">
              <label>
                <input type="checkbox" value="remember-me"> Me Lembre
              </label>
            </div>
            <button class="btn btn-lg btn-primary btn-block" type="submit" onclick="JavaScript:location = 'usuario.php?pg=home'">Entrar</button>
          </form>
        </div>
    <script src="js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>