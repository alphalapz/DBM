<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link   href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container">
            <div class="row">
                <h3>
<?php
$conn = new mysqli("alpha.com", "root", "msroot", "erp");
$conn->set_charset("utf8");

// Check connection
if ($conn === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error() . "<br>");
}
// Print host information
echo "Connect Successfully: " . mysqli_get_host_info($conn) . "<br>";
//definir las columnas de la BD origen
//datos del Origen
      $colsOrigin = array(
          'ifam',
          'id_ifam',
          'b_del',
          'fid_usr_new',
          'fid_usr_edit'
      );
      $tableOrigin = "itmu_ifam";

//datos del destino
      $colsDest = array(
          'name',
          'external_id',
          'is_deleted',
          'created_by_id',
          'updated_by_id'
      );
      $tableDest = "erp_item_families";


$allColsOrigin = "";

// Armar el conjunto de columnas que formaran la query
foreach ($colsOrigin as $col => $value) {
    echo $value . ",";
    $allColsOrigin = $allColsOrigin . $value . ",";
}
echo "</h3>";
echo "</div>";
echo "<div class='row'>";

//concatenar la consulta con las columnas ingresadas anteriormente
$strSQL = 'SELECT ' . substr($allColsOrigin, 0, -1) . ' from ' . $tableOrigin;

$query  = mysqli_query($conn, $strSQL);
while ($result = mysqli_fetch_array($query)) {
  for ($i=0; $i < count($colsOrigin); $i++) {
    echo $result[$i];
  }
  echo "<br>";
}
echo "</div>";
// Close connection
mysqli_close($conn);
?>
     </div>
  </body>
</html>












<!--
<div class="row">
    <table class="table table-striped table-bordered">
      <tbody>
      <?php
       include 'database.php';
       $conn = Database::connect();
       $cols = array(
         'ifam',
         'id_ifam',
         'b_del',
         'fid_usr_new',
         'fid_usr_edit'
       );
       $allCols = "";
       foreach ($cols as $col => $value) {
         echo $value . ",";
         $allCols = $allCols . $value . ",";
       }
       echo "<br>";
       echo "<br>";
       echo substr($allCols, 0, -1);
       echo "<br>";
       echo "<br>";

       $sql = 'SELECT ' . substr($allCols, 0, -1) . ' from itmu_ifam';
       echo $sql;
       $sum = 0;
       foreach ($conn->query($sql)  as $row) {
            echo "<tr><td>" . $row['ifam'] . "</td>";
            echo "<td>" . $row['id_ifam'] . "</td>";
            echo "<td>" . $row['b_del'] . "</td>";
            echo "<td>" . $row['fid_usr_new'] .  "</td>";
            echo "<td>" . $row['fid_usr_edit'] . "</td></tr>";
       }
       Database::disconnect();
      ?>
      </tbody>
</table>
</div>
-->
