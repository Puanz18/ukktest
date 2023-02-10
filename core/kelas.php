<?php

    require_once('koneksi.php');
    class Kelas {
        public $koneksi;
        private $id_kelas;
        private $nama_kelas;
        private $kompetesi_keahlian;
        public function __construct(){
            $kon = new Koneksi();
            $this->koneksi = $kon->kon;
        }

        public function tambahKelas($nama_kelas,$kompetesi_keahlian){
            $query = mysqli_query($this->koneksi,"SELECT * FROM kelas WHERE nama_kelas = '$nama_kelas' AND kompetesi_keahlian = '$kompetesi_keahlian' ");
            $result = mysqli_fetch_array($query);
            if($result['nama_kelas'] == $nama_kelas && $result['kompetesi_keahlian'] == $kompetesi_keahlian){
                session_start();
                $_SESSION['msg'] = "Data kelas sudah ada !!!";
                header("Location: ../dashboard?url=addkelas");
            }else{
                $this->nama_kelas = $nama_kelas;
                $this->kompetesi_keahlian = $kompetesi_keahlian;
                mysqli_query($this->koneksi,"INSERT INTO kelas (nama_kelas,kompetesi_keahlian) VALUES('$this->nama_kelas','$this->kompetesi_keahlian')");
                session_start();
                $_SESSION['msg'] = "Data kelas berhasil di tambahkan";
                header("Location: ../dashboard?url=kelas");
            }            
        }

        public function tampilKelas(){
            $query = mysqli_query($this->koneksi,"SELECT * FROM kelas");
            $no = 1;
            while ($result = mysqli_fetch_array($query)) {
                $this->id_kelas = $result['id_kelas'];
                $this->nama_kelas = $result['nama_kelas'];
                $this->kompetesi_keahlian = $result['kompetesi_keahlian'];

                echo "<tr>";
                echo "<td>" . $no++ . "</td>";
                echo "<td>" . $this->id_kelas . "</td>";
                echo "<td>" . $this->nama_kelas . "</td>";
                echo "<td>" . $this->kompetesi_keahlian . "</td>";
                echo "<td>";
                ?>
                    <a href="../dashboard?url=editkelas&id_kelas=<?= $this->id_kelas ?>">Edit Kelas</a> | <a href="../proses/proses_hapus_siswa.php?id_kelas=<?= $this->id_kelas ?>">Hapus Kelas</a>
                <?php
                echo "</td>";
                echo "</tr>";
            }
        }

        public function editKelas($id_kelas,$nama_kelas, $kompetesi_keahlian){
            $query = mysqli_query($this->koneksi,"SELECT * FROM kelas WHERE nama_kelas = '$nama_kelas' AND kompetesi_keahlian = '$kompetesi_keahlian' ");
            $result = mysqli_fetch_array($query);
            if($result['nama_kelas'] == $nama_kelas && $result['kompetesi_keahlian'] == $kompetesi_keahlian){
                session_start();
                $_SESSION['msg'] = "Data kelas sudah ada !!!";
                header("Location: ../dashboard?url=kelas");
            }else{
                $this->id_kelas = $id_kelas;
                $this->nama_kelas = $nama_kelas;
                $this->kompetesi_keahlian = $kompetesi_keahlian;
                mysqli_query($this->koneksi,"UPDATE kelas SET nama_kelas = '$this->nama_kelas',kompetesi_keahlian = '$this->kompetesi_keahlian' WHERE id_kelas = '$this->id_kelas' ");
                session_start();
                $_SESSION['msg'] = "Data kelas berhasil di ubah";
                header("Location: ../dashboard?url=kelas");
            }
        }

        public function hapusKelas($id_kelas){
            $this->id_kelas = $id_kelas;
            mysqli_query($this->koneksi, "DELETE FROM kelas WHERE id_kelas = '$this->id_kelas'");
            session_start();
            $_SESSION['msg'] = "Kelas berhasil di hapus !!!";
            header("Location: ../dashboard/?url=kelas");
        }

    }

?>