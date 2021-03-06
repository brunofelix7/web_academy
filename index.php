<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8" />
  <link rel="icon" type="image/png" href="../../../assets/img/favicon.ico"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>We Academy</title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
  <meta name="viewport" content="width=device-width" />
  <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="assets/css/global.css" rel="stylesheet" />
  <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
  <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
</head>
  <body>
      <div class="content">
        <div class="container-fluid bg">
          <div class="row">
              <div class="col-md-4 col-sm-4 col-xs-12"></div>
              <div class="col-md-4 col-sm-4 col-xs-12">
                <form class="form-container" action="app/controller/loginController/login.php" method="POST">
                  <h2>Login</h2>
                  <hr>
                  <div class="form-group">
                    <label for="username">Usuário:</label>
                    <input type="text" class="form-control" id="username" name="username" placeholder="usuário: admin">
                  </div>
                  <div style="padding-bottom: 15px;" class="form-group">
                    <label for="password">Senha:</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="senha: admin">
                  </div>
                  <button type="submit" class="btn btn-success btn-block">Entrar</button>
                </form>
              </div>
          </div>
          <div class="col-md-4 col-sm-4 col-xs-12"></div>
        </div>
      </div>
</body>
  <script src="assets/js/jquery.3.2.1.min.js" type="text/javascript"></script>
  <script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
  <script src="assets/js/chartist.min.js"></script>
  <script src="assets/js/bootstrap-notify.js"></script>
  <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <script src="assets/js/light-bootstrap-dashboard.js?v=1.4.0"></script>
  <script src="assets/js/demo.js"></script>
</html>
