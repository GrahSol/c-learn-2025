<?php

$nama = "Anugrah";
$umur = 20;
$sisaUang = 500000;
$sudahMakanBelum = true;

$hobi = ["main game", "main gitar"];

echo "namaku ", $nama, ", umurku ", $umur, ", sisa uang Rp.", $sisaUang;
echo "<br>";
if($sudahMakanBelum == false){
    echo "aku udah makan";
}else{
    echo "makan dulu bang";
}
echo "<br>";
foreach ($hobi as $k => $h ) {
    echo "hobi ke-",$k+1, " saya adalah ", $h; 
    echo "<br>";
}

$data = ["nama" => "Anugrah"];

foreach ($data as $key => $value) {
    
}







