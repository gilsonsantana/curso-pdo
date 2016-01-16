<?php
/**
 * Created by PhpStorm.
 * User: Gilson
 * Date: 16/01/2016
 * Time: 10:36
 */
    try{
        $conexao = new \PDO("mysql:host=localhost;dbname=pdo","root","root");

        echo "<h1> Alunos matriculados na disciplina:</h1>";

        $query = "select * from alunos";
        $alunos = $conexao->query($query)->fetchAll(pdo::FETCH_CLASS);

        echo "<table><tr><td>Aluno</td><td>Nota</td></tr>";

        foreach($alunos as $aluno){
            echo "<TR>";
            echo "<td>".$aluno->nome."</td>";
            echo "<td>".$aluno->nota."</td>";
            echo "</TR>";
        }

        echo "</table>";

        echo "<h1> TOP3 - Nota total:</h1>";

        $query = "select * from alunos order by nota desc limit 3";
        $alunos = $conexao->query($query)->fetchAll(pdo::FETCH_CLASS);

        echo "<table><tr><td>Aluno</td><td>Nota</td></tr>";

        foreach($alunos as $aluno){
            echo "<TR>";
            echo "<td>".$aluno->nome."</td>";
            echo "<td>".$aluno->nota."</td>";
            echo "</TR>";
        }

        echo "</table>";

    }catch(PDOException $e){
        echo "Sem conexâo ao banco de dados";
    }


