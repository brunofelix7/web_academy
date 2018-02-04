<?php

    class AppConfiguration{

        private $path;
        private $class;

        public function __construct(){
          //  Configs
          require('../../config/Session.php');
          require('../../config/Database.php');
          require('../../route/Redirect.php');
          require('../../util/Encryption.php');

          //  Models
          require('../../model/User.php');
          require('../../model/Aluno.php');
          require('../../model/Disciplina.php');

          //  Interfaces
          require('../../interface/IUser.php');
          require('../../interface/IAluno.php');
          require('../../interface/IDisciplina.php');

          //  DAOs
          require('../../dao/UserDAO.php');
          require('../../dao/AlunoDAO.php');
          require('../../dao/DisciplinaDAO.php');

          //  Schemas
          require('../../schema/UserSQL.php');
          require('../../schema/AlunoSQL.php');
          require('../../schema/DisciplinaSQL.php');
        }

        public function getPath(){
            return $this->path;
        }

        public function setPath($path){
            $this->path = $path;
        }

        public function getClass(){
            return $this->class;
        }

        public function setClass($class){
            $this->class = $class;
        }

    }

?>
