<?php

// // Configurações do banco de dados local
// $hostname = 'localhost';
// $username = 'hotwyl';
// $password = 'Abc-123@';
// $database = 'musadamente';

// Configurações do banco de dados local
$hostname = 'nspro102.hostgator.com.br';
$username = 'musada86_adima';
$password = '3278Data';
$database = 'musada86_dataarqmm';

try {
    // Conexão com o banco de dados usando PDO
    $pdo = new PDO("mysql:host=$hostname;dbname=$database", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Consulta SQL 1
    $sql1 = "
        SELECT
            COUNT(*) AS total_registros,
            SUM(atena) AS soma_atena,
            SUM(afrodite) AS soma_afrodite,
            SUM(persefone) AS soma_persefone,
            SUM(artemis) AS soma_artemis,
            SUM(demeter) AS soma_demeter,
            SUM(hera) AS soma_hera,
            AVG(atena) AS media_atena,
            AVG(afrodite) AS media_afrodite,
            AVG(persefone) AS media_persefone,
            AVG(artemis) AS media_artemis,
            AVG(demeter) AS media_demeter,
            AVG(hera) AS media_hera
        FROM
            $database.testes;
    ";  

    // Consulta SQL 2
    $sql2 = "SELECT atena, afrodite, persefone, artemis, demeter, hera FROM $database.testes;";
    
    $consulta1 = consulta($pdo, $sql1);

    $consulta2 = consulta($pdo, $sql2);

    $dados = trataDados($consulta1 , $consulta2);
    
    // Exibir os resultados
    echo json_encode($dados);

} catch (PDOException $e) {
    echo "Erro na conexão com o banco de dados: " . $e->getMessage();
}

function consulta($pdo, $sql){
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function trataDados($a1, $a2){

    $arr = [];

    foreach ($a1[0] as $key => $value) {
        if($key == 'total_registros'){
            $arr[$key] = intval($value);
        }
        if(substr($key,0,4) == 'soma'){
            $arr['soma'][$key] = intval($value);
        }
        if(substr($key,0,5) == 'media'){
            $arr['media'][$key] = floatval($value);
        }
        
    }
    
    foreach ($a2 as $k => $v) {
        $c = 0;
        foreach ($v as $key => $val) {
            if($val > $c){
                $a[$k] = 'qtd_'.$key;
                $c = $val;
            }
        } 
    }

    $arr['quantidade'] = array_count_values($a);

    return $arr;

}