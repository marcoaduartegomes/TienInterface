<?php
require_once __DIR__.'/connect.php';


$codTien = isset($_POST['codTien']) ? $_POST['codTien'] : '';

$sql = "  
    DELETE FROM  tien
    WHERE codTien ='$codTien' ";
    echo $sql;
 $results = mysqli_query($conn, $sql);
   echo unlink('../tien/'.$CodSlider.'.jpg');

    


?>