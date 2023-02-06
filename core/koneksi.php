<?php
    class Koneksi {
            public $kon;
            private $username;
            private $password;

        function __construct()
        {
            mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
            $this->kon = mysqli_connect("localhost","root","") or die("couldn't connect to MySQL server");
            mysqli_select_db($this->kon, "ukktest");
        }

        public function login($username,$password) {
            $query = mysqli_query($this->kon, "SELET * FROM siswa CROSS JOIN petugas WHERE username='$username' AND password='$password'");
            $row = mysqli_fetch_aarray($query);
            if ($row['uername'] == $username AND $row['password'] == $password){
                if($row['level'] == 'admin'){
                    session_start();
                    $_SESSION['id_petugas'] = $row['id_petugas'];
                    $_SESSION['username'] = $row['username'];
                    $_SESSION['level'] = $row['level'];
                    header("location:../dashboard");
                }elseif(['level'] == 'petugas'){
                    session_start();
                    $_SESSION['id_petugas'] = $row['id_petugas'];
                    $_SESSION['username'] = $row['username'];
                    $_SESSION['level'] = $row['level'];
                    header("location:../dashboard");
                }else{
                    session_start();
                    $_SESSION['nisn'] = $row['nisn'];
                    $_SESSION['username'] = $row['username'];
                    header("location:../dashboard");
                }
            }else{
                session_start();
                $_SESSION['msg'] = 'Username or password is invalid !!';
                header("Location: ../index.php");
            }
            
        }
    }
 ?>