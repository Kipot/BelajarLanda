<?php

// echo "SELAMAT DATANG DI LANDA SYSTEMS";

// Array (Multidimensi, Assosiative)

// FUCNTION PHP
// empty()
// isset()
// unset()
// unlink()
// is_array()

// Array
// $siswa[0] = "naufal";
// $siswa[1] = "naufal";
// $siswa[2] = "yusron";
// $siswa[3] = "dll";

// $siswa = ["naufal", "yusrom", "dll"];
// var_dump($siswa);

// Array Assosiative
// $siswa["nama"]  = "NAUFAL";
// $siswa["nama"]  = "YUSRON";
//
// $siswa["kelas"] = "A 12";
// $siswa["kelas"] = "B 12";


// Array Assosiative & Multidimensi
// $siswa["nama"][0]  = "NAUFAL";
// $siswa["nama"][1]  = "YUSRON";
//
// $siswa["kelas"][0] = "A 12";
// $siswa["kelas"][1] = "B 12";

// var_dump();
// print_r($siswa);

// ================== EMPTY() =============================
// $siswa = "NAUFAL";
// if (empty($siswa)) {
//   echo "TIDAK ADA ISI";
// } else {
//   echo "ADA ISI";
// }

// ================== ISSET() =============================
// $siswa = NULL;
// $siswa = "";
// $siswa = array();

// if (isset($siswa)) {
//   echo "ADA DATA";
// } else {
//   echo "TIDAK ADA DATA";
// }

// ================== UNSET() =============================
// $siswa = array(
//   'kelas' => "A12",
//   'nama'  => "Rahmad");
// unset($siswa['nama']);
// var_dump($siswa);

// ================== UNLINK() =============================
// $file = "rahmad.txt";
// unlink($file);

// ================== IS_ARRAY() =============================
// if (is_array($siswa)) {
//   echo "INI ARRAY";
// } else {
//   echo "INI BUKAN ARRAY";
// }

$siswa = array(
  // "Key" => value ["key" => "value", "key_2" => "value2"]
  "SMP 12" => [ "alamat" => "value", "no_tlp" => 12312312],
  "SMP 13" => [ "alamat" => "value2", "no_tlp" => 1111111],
  "SMA 12" => [ "alamat" => "asd", "no_tlp" => 1111111],
  "SMA 13" => [ "alamat" => "dsa", "no_tlp" => 1111111]
);

foreach ($siswa as $key => $value) {
  if (substr($key, 0, 3) == "SMA") {
    echo $key."<br>";
  }
}

 ?>
