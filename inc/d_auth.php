<?php 
    require_once('../core/kelas.php');
    require_once('../core/koneksi.php');
    $kon = new koneksi();
    $kelas = new Kelas();

    if(empty($_SESSION['username'])){
        header("Location:../inc/no_acces.php");
    }

    if(isset($_GET['url'])){
        $url = ucfirst($_GET['url']);
    }else{
        $url = "Dashboard";
    }
    if(isset($_SESSION['level'])){
        $level = $_SESSION['level'];
    }else{
        $level = "siswa";
    }
    
?>