<?php

  require('../../config/AppConfiguration.php');
  $config = new AppConfiguration();

  $user = new User($_POST['username'], Encryption::toSHA1($_POST['password']));
  $userDAO = new UserDAO();

  $userLogged = $userDAO->login($user);
  if($userLogged != null):
    Session::start($userLogged->getUsername());
    Redirect::redirectTo("aluno", "list");
  else:
    Redirect::redirectTo(null, "index");
  endif;

?>
