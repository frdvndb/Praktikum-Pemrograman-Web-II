<?php
    // Fungsi untuk pengecekan dan menyimpan nilai radio
    // yang sudah dimasukkan sebelumnya pada form
    function ifChecked($name, $value){
        if (isset($_POST[$name]) && $_POST[$name]==$value) echo "checked";
}
?>

<html>
    <head>

        <!-- Dibuat oleh: -->
	    <title>PRAK203 - M. Farid Pebrian (2110817210015)</title>

        <!-- Penggunaan CSS untuk mengatur ukuran font <b> -->
        <style>
            b {font-size:25px;}
        </style>
    </head>
    <body>

	    <!-- Penggunaan form pada HTML dengan metode POST-->
        <form method='post' action='#'>
            Nilai: <input type='text' name='nilaiSuhu' value="<?php echo isset($_POST['nilaiSuhu']) ? $_POST['nilaiSuhu'] : ''; ?>" required><br>
            Dari:<br>
            <input type='radio' name='suhuSebelum' <?php ifChecked('suhuSebelum', 'C');?> value = 'C' required> Celcius<br>
            <input type='radio' name='suhuSebelum' <?php ifChecked('suhuSebelum', 'F');?> value = 'F' required> Fahrenheit<br>
            <input type='radio' name='suhuSebelum' <?php ifChecked('suhuSebelum', 'R');?> value = 'R' required> Rheamur<br>
            <input type='radio' name='suhuSebelum' <?php ifChecked('suhuSebelum', 'K');?> value = 'K' required> Kelvin<br>
            Ke:<br>
            <input type='radio' name='suhuSesudah' <?php ifChecked('suhuSesudah', 'C');?> value = 'C' required> Celcius<br>
            <input type='radio' name='suhuSesudah' <?php ifChecked('suhuSesudah', 'F');?> value = 'F' required> Fahrenheit<br>
            <input type='radio' name='suhuSesudah' <?php ifChecked('suhuSesudah', 'R');?> value = 'R' required> Rheamur<br>
            <input type='radio' name='suhuSesudah' <?php ifChecked('suhuSesudah', 'K');?> value = 'K' required> Kelvin<br>
            <input type='submit' name='konversi' value='Konversi'><br>
        </form>
        <?php

            // Jika form disubmit, maka dilakukan:
            // Pengkondisian untuk menentukan konversi
            // dan rumus yang akan digunakan,
            // serta eksekusi fungsi echo tertentu terhadap pengkondisian
            if ($_POST){  
                echo "<b>Hasil Konversi: ";      
                if ($_POST['suhuSebelum'] ==  'C'){
                    if ($_POST['suhuSesudah'] ==  'C'){echo $_POST['nilaiSuhu'], ' &deg;C';}
                    if ($_POST['suhuSesudah'] ==  'F'){echo (9/5 * $_POST['nilaiSuhu']) + 32, ' &deg;F';}
                    if ($_POST['suhuSesudah'] ==  'R'){echo 4/5 * $_POST['nilaiSuhu'], ' &deg;R';}
                    if ($_POST['suhuSesudah'] ==  'K'){echo $_POST['nilaiSuhu'] + 273.15, ' &deg;K';}
                }
                if ($_POST['suhuSebelum'] ==  'F'){
                    if ($_POST['suhuSesudah'] ==  'C'){echo 5/9 * ($_POST['nilaiSuhu'] - 32), ' &deg;C';}
                    if ($_POST['suhuSesudah'] ==  'F'){echo $_POST['nilaiSuhu'], ' &deg;F';}
                    if ($_POST['suhuSesudah'] ==  'R'){echo 4/9 * ($_POST['nilaiSuhu'] - 32), ' &deg;R';}
                    if ($_POST['suhuSesudah'] ==  'K'){echo 5/9 * ($_POST['nilaiSuhu'] - 32) + 273.15, ' &deg;K';}
                }
                if ($_POST['suhuSebelum'] ==  'R'){
                    if ($_POST['suhuSesudah'] ==  'C'){echo 5/4 * $_POST['nilaiSuhu'], ' &deg;C';}
                    if ($_POST['suhuSesudah'] ==  'F'){echo (9/4 * $_POST['nilaiSuhu']) + 32, ' &deg;F';}
                    if ($_POST['suhuSesudah'] ==  'R'){echo $_POST['nilaiSuhu'], ' &deg;R';}
                    if ($_POST['suhuSesudah'] ==  'K'){echo 5/4 * $_POST['nilaiSuhu'] + 273.15, ' &deg;K';}
                }
                if ($_POST['suhuSebelum'] ==  'K'){
                    if ($_POST['suhuSesudah'] ==  'C'){echo $_POST['nilaiSuhu'] - 273.15, ' &deg;C';}
                    if ($_POST['suhuSesudah'] ==  'F'){echo 9/5 * ($_POST['nilaiSuhu'] - 273.15) + 32, ' &deg;F';}
                    if ($_POST['suhuSesudah'] ==  'R'){echo 4/5 * ($_POST['nilaiSuhu'] - 273.15), ' &deg;R';}
                    if ($_POST['suhuSesudah'] ==  'K'){echo $_POST['nilaiSuhu'], ' &deg;K';}
                }
            }
        ?>
    </body>
</html>