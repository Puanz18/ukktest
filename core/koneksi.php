<?php
    class Koneksi {
            public $kon;
            private $username;
            private $password;

        function __construct()
        {
            mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
            $this->kon = mysqli_connect("localhost","root","") or die("couldn't connect to MySQL server");
        }

        public function login($username,$password) {
            $query = mysqli_query($this->kon, "SELET * FROM siswa CROSS JOIN petugas WHERE username='$username' AND password='$password'");
            $row = mysqli_fetch_aarray($query);
            if ($row['uername'] == $username AND $row['password'] == $password){
                if($row['level'] == 'admin'){

                }elseif(['level'] == 'petugas'){
  
                }else{
                    session_start();
                }
            }else{
                session_start();
                $_SESSION['msg'] = 'Username or password is invalid !!';
                header("Location: ../index.php");
            }
            
        }
    }
 ?>