<?php

  require('../../config/AppConfiguration.php');
  $config = new AppConfiguration();

  $disciplina = new Disciplina(0, $_POST['nome']);

  $disciplinaDAO = new DisciplinaDAO();
  $id = $disciplinaDAO->save($disciplina);

  Redirect::redirectTo("disciplina", "list");

?>
