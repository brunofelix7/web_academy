<?php

  require('../../config/AppConfiguration.php');
  $config = new AppConfiguration();

  $alunoDAO = new AlunoDAO();
  $media = $alunoDAO->calcMedia(1);

  //  OK
  //  echo round($media, 2);

  //  OK
  //  echo $_POST['nome'] . " - " . $_POST['matricula'] . " - " . $_POST['disciplina'];

?>
