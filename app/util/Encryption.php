<?php

  class Encryption{

    public static function toSHA1($param){
      return sha1($param);
    }

    public static function toMD5($param){
      return md5($param);
    }

  }

?>
