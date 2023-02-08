<?php 

    require_once('koneksi.php');
    class kelas {
        public $koneksi;
        private $id_kelas;
        private $nama_kelas;
        private $kompetesi_keahlian;
        public function __construct(){
            $kon = new Koneksi();
            $this->koneksi = $kon->kon;
        }

        public function tambahKelas($nama_kelas,$kompetesi_keahlian) {
            $query = msqli_query($this->koneksi, "SELECT * FROM kelas WHERE nama_kelas = '$nama_kelas' AND kompetesi_keahlian = '$kompetesi_keahlian'");
            $result = mysqli_fetch_array($query);
            if($result['nama_kelas'] == $nama_kelas && $result['kompetesi_keahlian'] == $kompetesi_keahlian) {
                session_start();
                $_SESSION['msg'] = "Data kelas sudah ada !!!";
                header(Location:../dashboard?url=addkelas);
            }else{
                $this->nama_kelas = $nama_kelas;
                $this->kompetesi_keahlian = $kompetesi_keahlian;
            mysqli_query($this->koneksi,"INSER INTO kelas (nama_kelas, kompetesi_keahlian) VALUES ('$this->nama_kelas', '$this->kompetesi_keahlian')");
            session_start();
            $_SESSION['msg'] = "Data kelas sudah berhasil ditambahkan!";
            header(Location:../dashboard?url=kelas);
            }
        }
    }