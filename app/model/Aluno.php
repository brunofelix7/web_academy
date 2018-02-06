<?php

  class Aluno{

    private $id;
    private $nome;
    private $matricula;
    private $n1;
    private $n2;
    private $n3;
    private $disciplina_id;

    public function __construct($id, $nome, $matricula, $n1, $n2, $n3, $disciplina_id){
      $this->id = $id;
      $this->nome = $nome;
      $this->matricula = $matricula;
      $this->n1 = $n1;
      $this->n2 = $n2;
      $this->n3 = $n3;
      $this->disciplina_id = $disciplina_id;
    }

    public function getId(){
      return $this->id;
    }

    public function setId($id){
      $this->id = $id;
    }

    public function getNome(){
      return $this->nome;
    }

    public function setNome($nome){
      $this->nome = $nome;
    }

    public function getMatricula(){
      return $this->matricula;
    }

    public function setMatricula($matricula){
      $this->matricula = $matricula;
    }

    public function getN1(){
      return $this->n1;
    }

    public function setN1($n1){
      $this->n1 = $n1;
    }

    public function getN2(){
      return $this->n2;
    }

    public function setN2($n2){
      $this->n2 = $n2;
    }

    public function getN3(){
      return $this->n3;
    }

    public function setN3($n3){
      $this->n3 = $n3;
    }

    public function getDisciplina_id(){
      return $this->disciplina_id;
    }

    public function setDisciplina_id($disciplina_id){
      $this->disciplina_id = $disciplina_id;
    }

  }

?>
