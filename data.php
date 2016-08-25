<?php
//header('Content-Type: application/json');
require_once 'classes/Database.php';

$database = new Database;
$database->query("SELECT DISTINCT nodeid from followers");
$r = $database->resultSet();
foreach ($r as $distinct)
{
//$distinctNode[] = ['nodeid' => $distinct['nodeid']];
//echo json_encode($distinctNode);
$database->query("SELECT x,y FROM followers where nodeid='no1' ");
$result = $database->resultSet();
foreach ($result as $res)
{
  // $point[] = ['x'=>$res['x'], 'y' => $res['y']];

   //echo [{"x":"2","y":"10"},{"x":"5","y":"20"}];

    
    
}

//echo json_encode($point);

    
}
/*$con = mysqli_connect("localhost", "root", "", "follow");
if (mysqli_connect_errno($con)) {
    echo "Failed to connect to DataBase: " . mysqli_connect_error();
} else {
    
    
    $data_points = array();
    $result = mysqli_query($con, "SELECT * FROM followers"); 
    while ($row = mysqli_fetch_array($result)) {
        $point = array("x" => $row['x'], "y" => $row['y']);
        array_push($data_points, $point);
    }
    echo json_encode($data_points);
}
mysqli_close($con);
?>*/