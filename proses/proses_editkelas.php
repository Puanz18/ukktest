<?php  
    require_once('../core/kelas.php');
    $kelas = new Kelas();
    if(isset($_POST['submit'])){
        $id_kelas = $_POST['id_kelas'];
        $nama_kelas = $_POST['nama_kelas'];
        $kompetensi_keahlian = $_POST['kompetensi_keahlian'];
        $kelas->editKelas($id_kelas, $nama_kelas, $kompetensi_keahlian);
    }
    
?>