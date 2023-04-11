<?php
    if ($_POST["submit"])  {
    $kata = $_POST["kata"];

    $botol = ceil($kata * 0.2 / 20);

    echo "<center>";
    echo "<h2>Hasil Hitung Kebutuhan Tinta Spidol</h2>";
    echo "Jumlah Kata: " . $kata . "<br>";
    echo "Kebutuhan Tinta Spidol (ml): " . ($kata * 0.2) . " ml<br>";
    echo "Jumlah Botol Tinta Spidol yang Diperlukan: " . $botol . " botol<br>";
    }
?>