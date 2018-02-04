<?php

    interface IAluno{

        public function save(Aluno $aluno);
        public function update(Aluno $aluno);
        public function delete($id);
        public function findById($id);
        public function findAll();

    }

?>
