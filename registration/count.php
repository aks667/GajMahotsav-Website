<?php
require('db.php');

$sql = "SELECT count(*) as tot from magreg where confirm='verified'";
    $rs = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($rs);
    $counter = $row['tot'];

$sqlquery = "SELECT count(*) as total from magreg";
    $rsquery = mysqli_query($conn,$sqlquery);
    $rowquery = mysqli_fetch_assoc($rsquery);
    $counterquery = $rowquery['total'];
    
    
    $response = array(
        'status' => true,
        'count' => $counter,
        'counts' => $counterquery,
    );
    
    
    
    
    echo json_encode($response);
?>