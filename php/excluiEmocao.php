<?php
require_once __DIR__.'/connect.php';


$codEstatus = isset($_POST['codEstatus']) ? $_POST['codEstatus'] : '';

$sql = "  
    DELETE FROM  estatus
    WHERE codEstatus ='$codEstatus' ";
    echo $sql;
 $results = mysqli_query($conn, $sql);


    


?>