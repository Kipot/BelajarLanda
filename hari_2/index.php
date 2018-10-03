<?php

// HARI KE-2
//  - substr()
// 	- str_replace()
// 	- explode()
// 	- implode()
// 	- strtolower()
// 	- strtoupper()
// 	- array_key_exists()
//  - json_encode()
//  - json_decode()

//  - substr() =================
// substr("STRING", start_character)
// echo substr("Hello world", 0);

// substr(string,start,length)
// echo substr("Hello world", 0, 7);

//  - str_replace() =================
// str_replace(find,replace,string)
$string = "HALO semuanya teman teman";
echo str_replace("teman","Bro", $string);

// 	- explode() =============
$str = "Hello world. It's a beautiful day.";
$str = explode(" ", $str);
// print_r (explode(" ",$str));

// - implode()
$explode = implode(" ", $str);
// echo $explode;

// strtolower()
// $strtolower = strtolower($explode);
// echo $strtolower;

// strtoupper()
// $strtoupper = strtoupper($explode);
// echo $strtoupper;

// array_key_exists()
// $siswa = array(
//   'kelass' => "A12",
//   'nama'  => "Rahmad");

//   if (array_key_exists("kelas", $siswa)) {
//     echo "ada key kelas";
//   }

// json_encode()
// echo json_encode($siswa);

// json_decode() ==
// $json = json_encode($siswa);
// var_dump(json_decode($siswa));

 ?>
