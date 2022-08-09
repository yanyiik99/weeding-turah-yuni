<?php

// Mengkoneksikan database
$db = mysqli_connect("localhost", "root", "", "turah_yuni");


// Membuat function query untuk mengambil serta menampilkan data table dengan Select
function query($select){
  
  global $db;

  $result = mysqli_query($db, $select);

  $tables = [];
  while( $table = mysqli_fetch_assoc($result)){
    $tables[] = $table;
  }

  return $tables;
}


// Tambah Data 
function tambahData($data){

  global $db;

  // Menangkap data input user
  $nama = htmlspecialchars($data["nama"]);
  $deskripsi = htmlspecialchars($data["deskripsi"]);
  $id_hadir = htmlspecialchars($data["id_hadir"]);


  $insert = "INSERT INTO `tamu` (`id`, `nama`, `deskripsi`, `id_hadir`) 
              VALUES (NULL, '$nama', '$deskripsi', '$id_hadir')
              ";
  

  mysqli_query($db, $insert);
  
  return mysqli_affected_rows($db);

}



?>