<?php
    $nama = ["Chicago, IL", "Dallas, TX"];
    $populasi = ["2,695,598","1,197,816"];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Populasi Manusia</title>
</head>
<body>
    <h1>Jumlah Populasi Manusia</h1>
    <?php
        $totalArray = count($nama);

        echo "<table border='2'>";
        echo "<tr>";
        echo "<th>NAMA</th>";
        echo "<th>POPULASI</th>";
        echo "</tr>";
        // looping datanya
        for ($i=0; $i < $totalArray; $i++) { 
            echo "<tr>";
            echo "<td>$nama[$i]</td>";
            echo "<td>$populasi[$i]</td>";
            echo "</tr>";
        }
        echo "</table>";
    ?>
   

   <!-- <table border="1" >
        <tr>
            <th>Nama</th>
            <th>Populasi</th>
        </tr>
        <tr>
            <td>Chicago, IL</td>
            <td>2,695,598</td>
        </tr>
   </table>
    <?php foreach($negara as $n ): ?>

    <ul>
        <li><?= $n[0]; ?></li>
        <li><?= $n[1]; ?></li>
    
    </ul>
    <?php endforeach ?>  -->
    

</body>
</html>

