<?php
//Penggunaan Associative Array
$Samsung = ['Satu' => "Samsung Galaxy S22", 'Dua' =>  "Samsung Galaxy S22+", 'Tiga' => "Samsung Galaxy A03", 'Empat' => "Samsung Galaxy Xcover 5"];
?>
<!-- Penggunaan HTML -->
<html>
    <head>
        <!-- Penggunaan CSS -->
        <style>
            table, th, td { border: 1px solid;}
            th {background-color: red; font-size: 20px; padding-top: 18px; padding-bottom: 18px}
        </style>
    </head>
    <body>
        <!-- Penggunaan Tabel-->
        <table>
            <tr>
                <th><b>Daftar Smartphone Samsung</b></td>
            </tr>
            <!-- Pemanggilan Array -->
            <tr><td><?php echo $Samsung['Satu']?></td></tr>
            <tr><td><?php echo $Samsung['Dua']?></td></tr>
            <tr><td><?php echo $Samsung['Tiga']?></td></tr>
            <tr><td><?php echo $Samsung['Empat']?></td></tr>
        </table>
    </body>
</html>