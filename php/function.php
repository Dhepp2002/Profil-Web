<?php 
function umur()
{
    $t_lahir = new DateTime("2003-01-08");
    $sekarang = new DateTime("today");
    if ($t_lahir > $sekarang) {
        $tahun = "0";
        $bulan = "0";
        $tanggal = "0";
    }
    $y = $sekarang->diff($t_lahir)->y;
    $m = $sekarang->diff($t_lahir)->m;
    $d = $sekarang->diff($t_lahir)->d;
    echo $y." tahun ".$m." bulan ".$d." hari";
} 
// diff untuk menghitung selisih

$profil = [
    "nama" => "Dhevi Puspitasari",
    "npm" => "21081010165",
    "kelas" => "C081",
    "alamat" => "Tulungagung, Jatim",
    "agama" => "Islam",
];
?>


