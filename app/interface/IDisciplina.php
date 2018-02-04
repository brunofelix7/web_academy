<?php

    interface IDisciplina{

        public function save(Disciplina $disciplina);
        public function update(Disciplina $disciplina);
        public function delete($id);
        public function findById($id);
        public function findAll();

    }

?>
