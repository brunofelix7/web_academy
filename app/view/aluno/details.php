<?php
  require('../../config/AppConfiguration.php');
  $config = new AppConfiguration();
  $alunoDAO = new AlunoDAO();
  $disciplinaDAO = new DisciplinaDAO();
  $aluno = $alunoDAO->findById($_GET['id']);
  $disciplina = $disciplinaDAO->findById($aluno->getDisciplina_id());
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
  <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
  <style>
    hr {
      border: none;
      height: 1px;
      color: #9E9E9E;
      background-color: #9E9E9E;
    }
  </style>
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
           <li class="active">
             <a href="../aluno/list.php">
                 <i class="pe-7s-user"></i>
                 <p>Alunos</p>
             </a>
           </li>
           <li>
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
             <a class="navbar-brand" href="#"><?php echo "Olá, " . "<span class='label label-warning'>" . ucfirst(Session::getLoggedUser()) . "</span>" ?> </a>
           </div>
            <div class="collapse navbar-collapse">
              <ul class="nav navbar-nav navbar-right">
                <li>
                  <a href="../../controller/loginController/logout.php">
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
        <div class="col-md-12">
            <div class="card card-user" style="padding-bottom:15px;">
                <div class="image">
                    <img src="../../../assets/img/capa.jpeg" alt="..."/>
                </div>
                <div style="padding-bottom:0; min-height: 230px;" class="content">
                    <div style="margin-bottom:10px;" class="author">
                        <img class="avatar border-gray" src="../../../assets/img/ic_studant.png" alt="..."/>
                          <h4 class="title"><?php echo $aluno->getNome(); ?><br />
                             <small><?php echo $aluno->getMatricula(); ?></small>
                          </h4>
                    </div>
                    <p class="description text-center"><?php echo $disciplina->getNome(); ?></p>
                    <p class="description text-center">
                      <?php
                        if($aluno->getN1() < 7){
                          echo "<i style='color:red;' class='far fa-file-alt'></i> " . number_format($aluno->getN1(), 2, ',', '.');
                        }else{
                          echo "<i style='color:green;' class='far fa-file-alt'></i> " . number_format($aluno->getN1(), 2, ',', '.');
                        }
                      ?>
                    </p>
                    <p class="description text-center">
                    <?php
                      if($aluno->getN2() < 7){
                        echo "<i style='color:red;' class='far fa-file-alt'></i> " . number_format($aluno->getN2(), 2, ',', '.');
                      }else{
                        echo "<i style='color:green;' class='far fa-file-alt'></i> " . number_format($aluno->getN2(), 2, ',', '.');
                      }
                    ?>
                  </p>
                  <p class="description text-center">
                  <?php
                    if($aluno->getN3() < 7){
                      echo "<i style='color:red;' class='far fa-file-alt'></i> " . number_format($aluno->getN3(), 2, ',', '.');
                    }else{
                      echo "<i style='color:green;' class='far fa-file-alt'></i> " . number_format($aluno->getN3(), 2, ',', '.');
                    }
                  ?>
                </p>
                </div>
                <hr/>
                <div class="text-center">
                  <?php echo "Média: " . "<b>" . number_format($alunoDAO->calcMedia($aluno->getId()), 2, ",", ".") . "</b>"; ?>
                </div>
                <div class="text-center">
                  <?php
                    if(round(($aluno->getN1() + $aluno->getN2() + $aluno->getN3()) / 3, 2) < 7){
                      echo "<span class='label label-danger'>REPROVADO</span>";
                    }else{
                      echo "<span class='label label-success'>APROVADO</span>";
                    }
                  ?>
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
