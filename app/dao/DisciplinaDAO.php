<?php

  class DisciplinaDAO extends Database implements IDisciplina{

    public function __construct(){
        try{
            $db = Database::getInstance();
            $this->conn = $db->getConnection();
          }catch(PDOException $e){
            echo "Falha de conexao. " . $e->getMessage();
        }
    }

    //  Salva uma disciplina
    public function save(Disciplina $disciplina){
      try{
        $nome = $disciplina->getNome();
        $sql = sprintf(DisciplinaSQL::INSERT_SQL, $nome);
        $this->conn->exec($sql);
        return $this->conn->lastInsertId();
      }catch(PDOException $e){
        echo "Erro ao cadastrar disciplina. " . $e->getMessage();
      }
    }

    //  Atualiza uma disciplina
    public function update(Disciplina $disciplina){
      try{
        $nome = $disciplina->getNome();
        $id = $disciplina->getId();
        $sql = sprintf(DisciplinaSQL::UPDATE_SQL, $nome, $id);
        $this->conn->exec($sql);
      }catch(PDOException $e){
        echo "Erro ao excluir disciplina. " . $e->getMessage();
      }
    }

    //  Deleta uma disciplina
    public function delete($id){
      try{
        $sql = sprintf(DisciplinaSQL::DELETE_SQL, $id);
        $this->conn->exec($sql);
      }catch(PDOException $e){
        echo "Erro ao excluir disciplina. " . $e->getMessage();
      }
    }

    //  Busca uma disciplina por id
    public function findById($id){
      $disciplina = null;
      try{
        $sql = sprintf(DisciplinaSQL::SELECT_ONE_SQL, $id);
        $result = $this->conn->query($sql);
        if($result){
          foreach ($result as $row) {
            $disciplina = new Disciplina($row['id'], $row['nome']);
          }
        }
        return $disciplina;
      }catch(PDOException $e){
        echo "Disciplina não encontrada. " . $e->getMessage();
      }
    }

    //  Busca todas as disciplinas
    public function findAll(){
      try{
        $result = $this->conn->query(DisciplinaSQL::SELECT_SQL);
        if($result):
            return $result;
        else:
          return null;
        endif;
      }catch(PDOException $e){
        echo "Disciplinas não encontrados. " . $e->getMessage();
      }
    }

  }

?>
