<?php

  class Redirect{

    public static function redirectTo($folder, $page){
      if($page == "index"):
        header("Location: ../../../" . $page . ".php");
      else:
        header("Location: ../../../app/view/" . $folder . "/" . $page . ".php");
      endif;
    }

  }

?>
