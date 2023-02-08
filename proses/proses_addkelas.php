<?php 
    require_once('../core/kelas.php');
    $kelas = new Kelas();
    if(isset($_POST['submit'])){
        $nama_kelas = $_POST['nama_kelas'];
        $kompetensi_keahlian = $_POST['kompetensi_keahlian'];
        $kelas->tambahKelas($nama_kelas, $kompetensi_keahlian);
    }

?>