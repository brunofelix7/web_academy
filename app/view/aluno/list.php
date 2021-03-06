<?php
  require('../../config/AppConfiguration.php');
  $config = new AppConfiguration();
  $alunoDAO = new AlunoDAO();
  $result = $alunoDAO->findAll();
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
             <a href="list.php">
                 <i class="pe-7s-user"></i>
                 <p>Alunos</p>
             </a>
           </li>
           <li>
             <a href="../disciplina/list.php">
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

  <!-- MAIN -->
  <div class="content">
      <div class="container-fluid">
          <div class="row">
              <div class="col-md-12">
                  <div class="card">
                      <div class="header">
                        <div class="row">
                            <div class="col-md-9">
                              <h4 class="title">Listagem de alunos</h4>
                              <p class="category">Visualize os alunos cadastrados</p>
                            </div>
                            <div class="col-md-3">
                              <a href="form.php" class="btn btn-success btn-fill pull-right"><i class="fas fa-user-plus"></i> Novo</a>
                            </div>
                        </div>
                      </div>
                      <div class="content table-responsive table-full-width">
                          <table class="table table-hover table-striped">
                              <thead>
                                <th>Matrícula</th>
                                <th>Nome</th>
                                <th>Status</th>
                                <th>Ações</th>
                              </thead>
                              <tbody>
                                <?php
                                  foreach ($result as $row) {
                                ?>
                                <tr>
                                  <?php if($result != null){ ?>
                                    <td><?php echo $row['matricula'] ?></td>
                                    <td><?php echo $row['nome'] ?></td>
                                    <!-- Buscar pelo disciplina_id e pegar o nome -->
                                    <td>
                                      <?php
                                        if(round(($row['n1'] + $row['n2'] + $row['n3']) / 3, 2) < 7){
                                          echo "<span class='label label-danger'>REPROVADO</span>";
                                        }else{
                                          echo "<span class='label label-success'>APROVADO</span>";
                                        }
                                      ?>
                                    </td>
                                    <td>
                                      <div class="btn-group btn-group-sm" role="group" aria-label="Basic example">
                                        <a style="color:gray;" href="<?php echo 'details.php?id=' . $row['id'] ?>"><i class="fas fa-search"></i></i></a>
                                        <a style="color:orange;" href="<?php echo 'edit.php?id=' . $row['id'] ?>"><i class="fas fa-edit"></i></i></a>
                                        <a style="color:red;" href="<?php echo '../../controller/alunoController/deletar.php?id=' . $row['id'] ?>"><i class="fas fa-trash-alt"></i></a>
                                      </div>
                                    </td>
                                  <?php } else { ?>
                                    <td><?php echo 'Sem informações.' ?></td>
                                  <?php } ?>
                                </tr>
                                <?php
                                  }
                                ?>
                              </tbody>
                          </table>
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
