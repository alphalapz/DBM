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
                   include 'database3.php';
                   $conn = Database::connect();
                   $sql = 'SELECT ifam, id_ifam, b_del, fid_usr_new, fid_usr_edit from itmu_ifam';
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
    </div>
   ?>
  </body>
</html>











<!--
Amanda	3	California Especial Empanizados PAGADO
Dany y 	1	Titanic	Empanizado PAGADO
Nestor	2	California	Empanizado PAGADO
Edwin	  1	Jr	Empanizado PAGADO
Amanda	1	Aderezo Extra NULL
Total   7                               $410
-->
