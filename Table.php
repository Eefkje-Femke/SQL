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

        //wie speelt er op welke dag?
        // $sql = "SELECT voetballers.Voornaam, voetballers.Achternaam , elftallen.Elftalcode FROM  voetballers INNER JOIN elftallen ON voetballers.Elftalcode = elftallen.Elftalcode WHERE elftallen.Omschrijving = 'Zaterdag'";

        //Contributie betaling
        // $sql = "SELECT Voornaam, Achternaam , Contributie, ContributieDatum FROM  voetballers WHERE Contributie = 'nee'";

        //opdracht 7
        $sql = "SELECT voetballers.Voornaam, voetballers.Achternaam , relatietabel.ElftalID FROM  voetballers INNER JOIN relatietabel ON voetballers.Elftalcode = relatietabel.ElftalID";

        $result= $conn->query($sql);

        //tabel opvragen
        if ($result->num_rows > 0) {
          echo "<table>";
          echo "<th>Voornaam</th>". "<th>Achternaam</th>". "<th>ElftalID</th>";
          while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>". $row["Voornaam"]."</td><td>". $row["Achternaam"]."</td><td>". $row["ElftalID"] ."</td>";
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
