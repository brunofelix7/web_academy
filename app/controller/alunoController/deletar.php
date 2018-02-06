<?php

  require('../../config/AppConfiguration.php');
  $config = new AppConfiguration();
  $alunoDAO = new AlunoDAO();
  $alunoDAO->delete($_GET['id']);
  Redirect::redirectTo("aluno", "list");

?>
