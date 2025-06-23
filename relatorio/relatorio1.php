<?php

/*SELECT
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
testes
ORDER BY
soma_atena + soma_afrodite + soma_persefone + soma_artemis + soma_demeter + soma_hera DESC;
*/

// ConfiguraÃ§Ãµes do banco de dados
$hostname = 'localhost';
$username = 'hotwyl';
$password = 'Abc-123@';
$database = 'musadamente';

try {
// ConexÃ£o com o banco de dados usando PDO
$pdo = new PDO("mysql:host=$hostname;dbname=$database", $username, $password);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// Consulta SQL
$sql = "
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
        testes
    ORDER BY
        soma_atena + soma_afrodite + soma_persefone + soma_artemis + soma_demeter + soma_hera DESC;
";

// Preparar e executar a consulta
$stmt = $pdo->prepare($sql);
$stmt->execute();

// Exibir os resultados
// while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
//     echo "Total de Registros: {$row['total_registros']}<br>";
//     echo "Soma Atena: {$row['soma_atena']}<br>";
//     echo "Soma Afrodite: {$row['soma_afrodite']}<br>";
//     echo "Soma Persefone: {$row['soma_persefone']}<br>";
//     echo "Soma Artemis: {$row['soma_artemis']}<br>";
//     echo "Soma Demeter: {$row['soma_demeter']}<br>";
//     echo "Soma Hera: {$row['soma_hera']}<br>";
//     echo "Média Atena: {$row['media_atena']}<br>";
//     echo "Média Afrodite: {$row['media_afrodite']}<br>";
//     echo "Média Persefone: {$row['media_persefone']}<br>";
//     echo "Média Artemis: {$row['media_artemis']}<br>";
//     echo "Média Demeter: {$row['media_demeter']}<br>";
//     echo "Média Hera: {$row['media_hera']}<br>";

//     // Adicione as demais colunas conforme necessÃ¡rio

//     // Adicione aqui as demais colunas e valores que vocÃª deseja exibir

//     echo "--------------------------------------<br>";
// }
    echo json_encode($stmt->fetchAll(PDO::FETCH_ASSOC));

} catch (PDOException $e) {
echo "Erro na conexÃ£o com o banco de dados: " . $e->getMessage();
}