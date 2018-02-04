<?php

  require('../../config/AppConfiguration.php');
  $config = new AppConfiguration();
  $disciplinaDAO = new DisciplinaDAO();
  $disciplinaDAO->delete($_GET['id']);
  Redirect::redirectTo("disciplina", "list");

?>
