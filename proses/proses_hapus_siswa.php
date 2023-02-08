<?php 

    require_once('../core/kelas.php');
    $kelas = new Kelas();
    $id_kelas = $_GET['id_kelas'];
    $kelas->hapusKelas($id_kelas);
?>