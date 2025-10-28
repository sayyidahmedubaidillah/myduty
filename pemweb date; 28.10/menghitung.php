<?php

// --- TUGAS PERHITUNGAN PHP SEDERHANA ---

// 1. Kita tulis dulu semua datanya ke dalam variabel
$pemasukan = 50000000;
$hutang_a = 16500000;
$hutang_b = 9500000;

// Untuk bunga, kita bisa langsung tulis 0.05 (dari 5/100)
// dan 0.045 (dari 4.5/100)
$persen_bunga_a = 0.05;
$persen_bunga_b = 0.045;




// Hitung berapa rupiah bunga A
$nilai_bunga_a = $hutang_a * $persen_bunga_a; // 16.5jt * 0.05

// Hitung berapa rupiah bunga B
$nilai_bunga_b = $hutang_b * $persen_bunga_b; // 9.5jt * 0.045




// Jawaban untuk: "Berapa jumlah total bunga hutang?"
$total_bunga = $nilai_bunga_a + $nilai_bunga_b;

// Jawaban untuk: "Berapa jumlah total hutang?"

$total_hutang = $hutang_a + $hutang_b + $total_bunga;


$sisa_uang = $pemasukan - $total_hutang;


echo "--- Tampil Hasil ---";
echo "<br>";
echo "<br>";

echo "Berapa jumlah total bunga hutang?";
echo "<br>";
echo "Jawaban: Rp ";
echo $total_bunga; // Menampilkan 1252500
echo "<br>";
echo "<br>";

echo "Berapa jumlah total hutang?";
echo "<br>";
echo "Jawaban: Rp ";
echo $total_hutang; // Menampilkan 27252500
echo "<br>";
echo "<br>";

echo "Berapa sisa uang?";
echo "<br>";
echo "Jawaban: Rp ";
echo $sisa_uang; // Menampilkan 22747500