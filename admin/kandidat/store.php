<?php
session_start();
require_once 'connection.php';

$nama = $_POST['nama'];
$nim = $_POST['nim'];
$urut = $_POST['urut'];

$query = mysqli_query($connection, "insert into kandidat(nama, nim, urut) value('$nama', '$nim', '$urut')");
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
