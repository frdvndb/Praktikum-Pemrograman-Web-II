<?php
//Penggunaan Indexed Array
$Samsung = ["Samsung Galaxy S22", "Samsung Galaxy S22+", "Samsung Galaxy A03", "Samsung Galaxy Xcover5"];
?>
<!-- Penggunaan HTML -->
<html>
    <head>
        <!-- Penggunaan CSS -->
        <style>
            table, th, td { border: 1px solid;}
        </style>
    </head>
    <body>
        <!-- Penggunaan Tabel-->
        <table>
            <tr>
                <th><b>Daftar Smartphone Samsung</b></td>
            </tr>
            <!-- Pemanggilan Array -->
            <tr><td><?php echo $Samsung[0]?></td></tr>
            <tr><td><?php echo $Samsung[1]?></td></tr>
            <tr><td><?php echo $Samsung[2]?></td></tr>
            <tr><td><?php echo $Samsung[3]?></td></tr>
        </table>
    </body>
</html>