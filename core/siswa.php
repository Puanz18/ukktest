<?php

    require_once('koneksi.php');
    class Siswa{
    private $nisn;
    private $nis;
    private $nama;
    private $username;
    private $password;
    private $id_kelas;
    private $alamat;
    private $no_telp;
    private $id_spp;
        public $koneksi;
        public function __construct(){
            $kon = new Koneksi();
            $this->koneksi = $kon->kon;
        }

        public function tambahSiswa(){

        }

    }

?>