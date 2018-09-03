<?php
require('db.php');
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }



$query =" SELECT * FROM magreg ORDER BY id ";
$resource=mysqli_query($conn,$query);

while($row = $resource->fetch_array(MYSQL_ASSOC)) {
            $myArray[] = $row;
    }
    $response = array(
        'status' => true,
        'data' => $myArray
    );
    echo json_encode($response);

?>