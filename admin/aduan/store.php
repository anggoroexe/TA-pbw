<?php
session_start();
require_once 'connection.php';

$nama_pemilih = $_POST['nama_pemilih'];
$pilihan = $_POST['pilihan'];
$nim = $_POST['nim'];
$kelas = $_POST['kelas'];

$query = mysqli_query($connection, "insert into suara_ti(nama_pemilih, pilihan, nim, kelas) value('$nama_pemilih', '$pilihan', '$nim', '$kelas')");
if ($query) {
  $_SESSION['info'] = [
    'status' => 'success',
    'message' => 'Berhasil menambah data'
  ];
  header('Location: create.php');
                                            } else {
                                              $_SESSION['info'] = [
                                                'status' => 'failed',
                                                'message' => mysqli_error($connection)
                                              ];
                                              header('Location: create.php');
                                            }
