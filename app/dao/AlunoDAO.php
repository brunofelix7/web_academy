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

    //  Salva um aluno
    public function save(Aluno $aluno){
      try{
        $nome = $aluno->getNome();
        $matricula = $aluno->getMatricula();
        $n1 = $aluno->getN1();
        $n2 = $aluno->getN2();
        $n3 = $aluno->getN3();
        $disciplina = $aluno->getDisciplina_id();
        $sql = sprintf(AlunoSQL::INSERT_SQL, $nome, $matricula, $n1, $n2, $n3, $disciplina);
        $this->conn->exec($sql);
        return $this->conn->lastInsertId();
      }catch(PDOException $e){
        echo "Erro ao cadastrar aluno. " . $e->getMessage();
      }
    }

    //  Atualiza um aluno
    public function update(Aluno $aluno){
      try{
        $id = $aluno->getId();
        $nome = $aluno->getNome();
        $matricula = $aluno->getMatricula();
        $n1 = $aluno->getN1();
        $n2 = $aluno->getN2();
        $n3 = $aluno->getN3();
        $disciplina = $aluno->getDisciplina_id();
        $sql = sprintf(AlunoSQL::UPDATE_SQL, $nome, $matricula, $n1, $n2, $n3, $disciplina, $id);
        $this->conn->exec($sql);
      }catch(PDOException $e){
        echo "Erro ao cadastrar aluno. " . $e->getMessage();
      }
    }

    //  Deleta um aluno
    public function delete($id){
      try{
        $sql = sprintf(AlunoSQL::DELETE_SQL, $id);
        $this->conn->exec($sql);
      }catch(PDOException $e){
        echo "Erro ao excluir aluno. " . $e->getMessage();
      }
    }

    //  Busca um aluno por id
    public function findById($id){
      $aluno = null;
      try{
        $sql = sprintf(AlunoSQL::SELECT_ONE_SQL, $id);
        $result = $this->conn->query($sql);
        if($result){
          foreach ($result as $row) {
            $aluno = new Aluno($row['id'], $row['nome'], $row['matricula'], $row['n1'], $row['n2'], $row['n3'], $row['disciplina_id']);
          }
        }
        return $aluno;
      }catch(PDOException $e){
        echo "Aluno não encontrada. " . $e->getMessage();
      }
    }

    //  Busca todos os alunos
    public function findAll(){
      try{
        $result = $this->conn->query(AlunoSQL::SELECT_SQL);
        if($result):
            return $result;
        else:
          return null;
        endif;
      }catch(PDOException $e){
        echo "Alunos não encontrados. " . $e->getMessage();
      }
    }

    //  Retorna a media do aluno
    public function calcMedia($id){
      $media = null;
      try{
        $sql = sprintf(AlunoSQL::MEDIA_CALC_SQL, $id);
        $result = $this->conn->query($sql);
        if($result){
          foreach ($result as $row) {
            $media = $row['media'];
          }
        }
        return $media;
      }catch(PDOException $e){
        echo "Erro ao calcular média. " . $e->getMessage();
      }
    }

  }

?>
