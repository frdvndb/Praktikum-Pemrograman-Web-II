<?php

    // Pembuatan array multi-dimensi dan asosiatif
    // dengan nilai statis.
    $data = [
        ["no" => 1, "nama" => "Ridho", 
        "MK" => [
            ["namaMK" =>"Pemrograman I", "SKS" => 2], 
            ["namaMK" => "Praktikum Pemrograman I", "SKS" => 1],
            ["namaMK" => "Pengantar Lingkungan Lahan Basah", "SKS" => 2], 
            ["namaMK" => "Arsitektur Komputer", "SKS" => 3]
        ]
        ],

        ["no" => 2, "nama" => "Ratna", 
        "MK" => [
            ["namaMK" =>"Basis Data I", "SKS" => 2], 
            ["namaMK" => "Praktikum Basis Data I", "SKS" => 1],
            ["namaMK" => "Kalkulus", "SKS" => 3]
        ]
        ],

        ["no" => 3, "nama" => "Tono", 
        "MK" => [
            ["namaMK" => "Rekayasa Perangkat Lunak", "SKS" => 3], 
            ["namaMK" => "Analisis dan Perancangan Sistem", "SKS" => 3],
            ["namaMK" => "Komputasi Awan", "SKS" => 3], 
            ["namaMK" => "Kecerdasan Bisnis", "SKS" => 3]
        ]
        ]
    ];

    // Perulangan foreach() untuk:
    // memasukkan data baru ke array, yaitu
    // data nilai total SKS dan keterangan
    foreach ($data as $key => $value) {
        $totalSKS = 0;
        foreach ($value["MK"] as $MK) { 
            $totalSKS += $MK["SKS"];
        }
        $data[$key]["totalSKS"] = $totalSKS;

        // Pengkondisian if(), yaitu
        // Jika total SKS lebih kecil dari 7,
        // keterangan adalah revisi.
        // Jika tidak: 
        // keterangan adalah tidak revisi.
        if ($data[$key]["totalSKS"] < 7) {
            $data[$key]["keterangan"] = "Revisi KRS"; 
        } else {
            $data[$key]["keterangan"] = "Tidak Revisi";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRAK403 - M. FARID PEBRIAN (2110817210015)</title>

    <!-- Penggunaan CSS untuk pengaturan tabel dan kelas-->
    <style>
        table, th, td{
            border: 1px solid;
            border-collapse: collapse;
            margin-top: 15px;
            padding: 5px 20px 10px 5px;
        }
        th {text-align: left; background-color: #CCCDCC;}
        .revisi {background-color: red;}
        .tidakRevisi {background-color: green;}
    </style>
</head>
<body>
    <!-- Pembuatan tabel --> 
    <table>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Mata Kuliah diambil</th>
            <th>SKS</th>
            <th>Total SKS</th>
            <th>Keterangan</th>
        </tr>
        <?php

            // Perulangan foreach() untuk:
            // menampilkan nilai array multi-dimensi
            // ke dalam tabel
            foreach ($data as $key => $value) {

                // Variabel $barisMK digunakan untuk:
                // menentukan penempatan nilai pada kolom
                foreach ($value["MK"] as $barisMK => $MK) {
                    echo "<tr>";

                    // Pengkondisian:
                    // Jika nilai $barisMK sama dengan 0
                    if ($barisMK === 0) {
                        echo "<td>".$value["no"]."</td>";
                        echo "<td>".$value["nama"]."</td>";
                        echo "<td>".$MK["namaMK"]."</td>";
                        echo "<td>".$MK["SKS"]."</td>";
                        echo "<td>".$value["totalSKS"]."</td>";

                        // Jika nilai keterangan 'Revisi KRS',
                        // maka ditampilkan nilai tersebut.
                        // Jika tidak, maka ditampilkan
                        // nilai 'Tidak Revisi'.
                        // CSS pada kelas untuk mengatur warna
                        if ($value["keterangan"] == 'Revisi KRS') {
                            echo "<td class = revisi>".$value["keterangan"]."</td>";
                        } else {
                            echo "<td class = tidakRevisi>".$value["keterangan"]."</td>";
                        }
                    
                    // Jika tidak sesuai pengkondisian
                    } else {
                        echo "<td></td>";
                        echo "<td></td>";
                        echo "<td>".$MK["namaMK"]."</td>";
                        echo "<td>".$MK["SKS"]."</td>";
                        echo "<td></td>";
                        echo "<td></td>";
                    }
                    echo "</tr>";
                }
            }
        ?>
    </table>   
</body>
</html>