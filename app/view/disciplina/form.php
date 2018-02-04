<?php
  require('../../config/Session.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8" />
  <link rel="icon" type="image/png" href="../../../assets/img/favicon.ico"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>We Academy</title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
  <meta name="viewport" content="width=device-width" />
  <link href="../../../assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="../../../assets/css/animate.min.css" rel="stylesheet"/>
  <link href="../../../assets/css/light-bootstrap-dashboard.css?v=1.4.0" rel="stylesheet"/>
  <link href="../../../assets/css/demo.css" rel="stylesheet" />
  <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
  <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
  <link href="../../../assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
</head>
  <body>
  <div class="wrapper">
    <!-- Menu -->
    <div class="sidebar" data-color="purple" data-image="../../../assets/img/sidebar-5.jpg">
    <div class="sidebar-wrapper">
        <div class="logo">
           <a href="#" class="simple-text">Web Academy</a>
        </div>
        <ul class="nav">
           <li>
             <a href="../aluno/list.php">
                 <i class="pe-7s-user"></i>
                 <p>Alunos</p>
             </a>
           </li>
           <li class="active">
             <a href="list.php">
                 <i class="pe-7s-note2"></i>
                 <p>Disciplinas</p>
             </a>
           </li>
        </ul>
     	</div>
     </div>
     <div class="main-panel">
       <nav class="navbar navbar-default navbar-fixed">
         <div class="container-fluid">
           <div class="navbar-header">
               <a class="navbar-brand" href="#"><?php echo 'Olá, ' . ucfirst(Session::getLoggedUser()) ?> </a>
           </div>
            <div class="collapse navbar-collapse">
              <ul class="nav navbar-nav navbar-right">
                <li>
                  <a href="#">
                    <p>Log out</p>
                  </a>
                </li>
			          <li class="separator hidden-lg hidden-md"></li>
              </ul>
          </div>
        </div>
      </nav>

      <!-- Main -->
      <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6">
            <div class="card">
              <div class="header">
                <h4 class="title">Nova disciplina</h4>
              </div>
                <div class="content">
                  <form action="../../controller/disciplinaController/cadastrar.php" method="POST">
                   <div class="row">
                       <div class="col-md-12">
                           <div class="form-group">
                               <label>Nome</label>
                               <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite o nome..." />
                           </div>
                       </div>
                   </div>
                   <button type="submit" class="btn btn-info btn-fill pull-left">Cadastrar</button>
                    <div class="clearfix"></div>
                  </form>
                </div>
            </div>
        </div>
    </div>
  </div>
</div>

  <!-- FOOTER -->
  <footer class="footer">
     <div class="container-fluid">
         <p class="copyright pull-left">
             &copy; <script>document.write(new Date().getFullYear())</script> <a href="#">Pós em Desenvolvimento de Aplicações para Web</a>, Fundamentos da Programação PHP OO
         </p>
     </div>
  </footer>
  </div>
 </div>
</body>

  <script src="../../../assets/js/jquery.3.2.1.min.js" type="text/javascript"></script>
  <script src="../../../assets/js/bootstrap.min.js" type="text/javascript"></script>
  <script src="../../../assets/js/chartist.min.js"></script>
  <script src="../../../assets/js/bootstrap-notify.js"></script>
  <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <script src="../../../assets/js/light-bootstrap-dashboard.js?v=1.4.0"></script>
  <script src="../../../assets/js/demo.js"></script>
</html>
