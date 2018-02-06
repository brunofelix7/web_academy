<?php

    class AlunoSQL{

        public const INSERT_SQL = "INSERT INTO alunos(nome, matricula, n1, n2, n3, disciplina_id) VALUES('%s', '%s', '%s', '%s', '%s', '%s')";
        public const DELETE_SQL = "DELETE FROM alunos WHERE id = %s";
        public const UPDATE_SQL = "UPDATE alunos SET nome = '%s', matricula = '%s', n1 = '%s', n2 = '%s', n3 = '%s', disciplina_id = '%s' WHERE id = %s";
        public const SELECT_SQL = "SELECT a.id AS 'id', a.nome 'nome', a.matricula AS 'matricula', a.n1 AS 'n1', a.n2 AS 'n2', a.n3 AS 'n3', d.nome AS 'disciplina_nome' FROM disciplinas d INNER JOIN alunos a ON a.disciplina_id = d.id";
        public const SELECT_ONE_SQL = "SELECT * FROM alunos WHERE id = %s";
        public const MEDIA_CALC_SQL = "SELECT sum(n1 + n2 + n3) / 3 AS 'media' FROM alunos WHERE id = '%s'";

    }

?>
