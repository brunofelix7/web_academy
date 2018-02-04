<?php

    class DisciplinaSQL{

        public const INSERT_SQL = "INSERT INTO disciplinas(nome) VALUES('%s')";
        public const DELETE_SQL = "DELETE FROM disciplinas WHERE id = %s";
        public const UPDATE_SQL = "UPDATE disciplinas SET nome = '%s' WHERE id = %s";
        public const SELECT_SQL = "SELECT * FROM disciplinas";
        public const SELECT_ONE_SQL = "SELECT * FROM disciplinas WHERE id = %s";

    }

?>
