<!DOCTYPE html>
  <head>
    <title>Databases 3</title>
    <!-- <link rel="stylesheet" href="style.css" /> -->
    <style>
    table, td, th {
    border: 1px solid black;
    padding: 8px;
    text-align: center;
    }
    table{
      border-collapse: collapse;
    }
    </style>
  </head>
<html>
  <body>
    <div align="center">
        <?php
          require "DB_connect.php";

        $conn = db_connect();

        //werkende tabel
        // $sql = "SELECT voetballers.Voornaam, voetballers.Achternaam , elftallen.Elftalcode, elftallen.Omschrijving FROM  voetballers INNER JOIN elftallen ON voetballers.Elftalcode = elftallen.Elftalcode";


        $sql = "SELECT voetballers.Voornaam, voetballers.Achternaam , elftallen.Elftalcode FROM  voetballers INNER JOIN elftallen ON voetballers.Elftalcode = elftallen.Elftalcode WHERE elftallen.Omschrijving = 'Zaterdag'";

        $result= $conn->query($sql);

        //tabel opvragen
        if ($result->num_rows > 0) {
          echo "<table>";
          echo "<th>Voornaam</th>". "<th>Achternaam</th>". "<th>Elftalcode</th>";
          while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>". $row["Voornaam"]."</td><td>". $row["Achternaam"]."</td><td>". $row["Elftalcode"] ."</td>";
            echo "</tr>";
          }
          echo "</table>";
        } else {
          echo "0 results";
        }


        $conn->close();
         ?>
    </div>
  </body>
</html>
