<?php

  class AlunoDAO extends Database implements IAluno{

    public function __construct(){
        try{
            $db = Database::getInstance();
            $this->conn = $db->getConnection();
          }catch(PDOException $e){
            echo "Falha de conexao. " . $e->getMessage();
        }
    }

    public function save(Aluno $aluno){

    }

    public function update(Aluno $aluno){

    }

    public function delete($id){

    }

    public function findById($id){

    }

    public function findAll(){
      
    }

  }

?>
