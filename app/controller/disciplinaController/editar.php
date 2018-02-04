<?php

  require('../../config/AppConfiguration.php');
  $config = new AppConfiguration();

  $disciplina = new Disciplina($_POST['id'], $_POST['nome']);

  $disciplinaDAO = new DisciplinaDAO();
  $disciplinaDAO->update($disciplina);

  Redirect::redirectTo("disciplina", "list");

?>
