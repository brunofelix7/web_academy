<?php

  class Session{

    public static function start($username){
      session_start();
      $_SESSION['username'] = $username;
    }

    public static function stop(){
      $_SESSION['username'] = null;
      session_destroy();
    }

    public static function getLoggedUser(){
      session_start();
      return $_SESSION['username'];
    }

  }

?>
