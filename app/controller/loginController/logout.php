<?php

  require('../../config/AppConfiguration.php');
  $config = new AppConfiguration();

  Session::stop();
  Redirect::redirectTo(null, "index");

?>
