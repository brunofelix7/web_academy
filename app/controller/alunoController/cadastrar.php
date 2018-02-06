<?php

  require('../../config/AppConfiguration.php');
  $config = new AppConfiguration();

  $aluno = new Aluno(0, $_POST['nome'], $_POST['matricula'], 0, 0, 0, $_POST['disciplina']);

  $alunoDAO = new AlunoDAO();
  $id = $alunoDAO->save($aluno);

  Redirect::redirectTo("aluno", "list");

?>
