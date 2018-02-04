<?php

  Route::set("home", function(){
      HomeController::CreateView();
  });

  Route::set("about", function(){
      echo "about";
  });

?>
