<?php
//VERIFICA SE A REQUEST É UM (POST)
// if ($_SERVER["REQUEST_METHOD"] == "GET") {

    header("Content-Type: application/json");

    //CONECTA COMO BANCO DE DADOS
    require ('../../databaseManager/conectar.php');

    //PREPARA A CONSULTA SQL
    $getAlunos =  "SELECT * FROM dados";

    //
    $result = $conn->query($getAlunos);

    //VERIFICA SE A TABELA CONTÉM ALUNO
    if($result->num_rows <= 0){
        throw new \Exception("Esse usuário não existe", 404);
    }

    $array = [];

    while ($row = $result->fetch_assoc()) {
        if($row['estado'] == 'a'){
            $array[] = [
                'iduser' => $row['idUser'],
                'nome' => $row['nome'],
                'midia' => [$row['nome']],
            ];
        }
    }

    echo json_encode($array);

// }
?>