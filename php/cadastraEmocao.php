<?php
require_once __DIR__.'/connect.php';


$nomeEmocao = isset($_POST['nomeEmocao']) ? $_POST['nomeEmocao'] : '';
echo $nomeEmocao;
$sql = "  
    INSERT INTO estatus(nome)
    VALUES ('$nomeEmocao') ";
    $results = mysqli_query($conn, $sql);

echo $sql;
