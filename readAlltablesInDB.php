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
                <h3>PHP CRUD Grid</h3>
            </div>
            <div class="row">
                <table class="table table-striped table-bordered">
                  <tbody>
                  <?php
                   include 'database.php';
                   $conn = Database::connect();
                   $sql = 'SHOW TABLES';
                   $sum = 0;
                   foreach ($conn->query($sql) as $row) {
                          echo "<thead><th> $row[0] </th></thead>";
                         $sql2 = "SELECT * FROM $row[0]";
                         echo "$sql2";
                         echo "<tr>";
                         foreach ($conn->query($sql2) as $row2) {
                            for ($x = 0; $x <= mysqli_fetch_lengths($row2); $x++) {
                            }
                            echo "<td> $row2[0] </td>";

                            var_dump($row2);
                            // echo "<td> $row2[0] </td>";
                            // $sum += $row2[0];
                         }
                         echo "<br>";
                         echo "</tr>";
                   }
                   Database::disconnect();
                  ?>
                  </tbody>
                  <tfoot>
                    <tr>
                      <td>Sum</td>
                      <td><?php echo "$sum" ?></td>
                    </tr>
                  </tfoot>
            </table>
        </div>
    </div> <!-- /container -->
  </body>
</html>
<!--
Amanda	3	California Especial Empanizados
Dany y 	1	Titanic	Empanizado
Nestor	2	California	Empanizado
Edwin	  1	Jr	Empanizado
Amanda	1	Aderezo Extra
Total   7                               $410
-->
