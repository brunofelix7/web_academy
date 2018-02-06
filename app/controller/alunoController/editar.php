<?php

  require('../../config/AppConfiguration.php');
  $config = new AppConfiguration();

  $aluno = new Aluno($_POST['id'], $_POST['nome'], $_POST['matricula'], $_POST['n1'], $_POST['n2'], $_POST['n3'], $_POST['disciplina']);

  $alunoDAO = new AlunoDAO();
  $alunoDAO->update($aluno);

  Redirect::redirectTo("aluno", "list");

?>
