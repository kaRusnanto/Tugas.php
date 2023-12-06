<?php
    // membuat multidimensi Array
    $kendaraan = [
        "transportasi" => ["Mobil","Sepeda","Truk","Motor","Bus"],
        "mobil" => ["merk" => "Toyota", "type" => "Vios", "year" => 2016],
        "motor" => ["Honda","Yamaha","Sizuki"]
    ];

    // menampilkan output
    echo "Ini Array Kendaraan <br><br>";
    echo implode (", ",$kendaraan["transportasi"]),"<br>";
    echo "\===================================/"."<br><br>";

    echo "Ini Array Mobile <br><br>";
    echo $kendaraan["mobil"]["merk"].", ".$kendaraan["mobil"]["type"].", ".$kendaraan["mobil"]["year"],"<br>";
    echo "\===================================/"."<br><br>";
    
    echo "Ini Array Motor <br><br>";
    echo implode (", ",$kendaraan["motor"]),"<br>";
    echo "\===================================/"."<br>";
?>  