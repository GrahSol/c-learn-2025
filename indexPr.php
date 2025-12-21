<?php

$mahasiswa = [
    "nama" => "Anugrah Palesang Pasinggi",
    "prodi" => "S1 Rekayasa Perangkat Lunak",
    "fakultas" => "Informatika",
    "sisa_uang" => 5000000,
    "hutang_perpustakaan" => false,
    "ipk" => 3.6
];

$jumlah_sks = 20;
$harga_per_sks = 150000;
$total_tagihan = $jumlah_sks * $harga_per_sks;
$sisa_uang_akhir = $mahasiswa['sisa_uang'] - $total_tagihan;


function cekKeuangan($sisa_duit) {
    if ($sisa_duit >= 0) {
        return "Lunas, bisa ambil KRS";
    } else {
        return "Ditolak, uang kurang!";
    }
}
$hasil_cek_keuangan = cekKeuangan($sisa_uang_akhir);


echo "Nama: ", $mahasiswa['nama'],"<br>";
echo "Prodi: ", $mahasiswa['prodi'], "<br>";
echo "Fakultas: ", $mahasiswa['fakultas'],"<br>";
echo "IPK: ", $mahasiswa['ipk'],"<br>";
echo "Uang Awal: Rp ", $mahasiswa['sisa_uang'], "<br>";
echo "Total Tagihan: ", $total_tagihan, "<br>";
echo "Sisa Uang Akhir: ", $sisa_uang_akhir, "<br>";
echo "Status Keuangan: ", $hasil_cek_keuangan, "<br>";
if (($mahasiswa['ipk'] > 3.0 && $sisa_uang_akhir >= 0) || ($mahasiswa['hutang_perpustakaan'] == false && $sisa_uang_akhir >= 0)) {
    echo "Lolos Verifikasi KRS";
} else {
    echo "Tidak Lolos Verifikasi KRS";
}

?>