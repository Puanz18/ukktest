<?php 

    require_once("../core/koneksi.php");
    $core = new Koneksi ();
    $username = $_POST['username'];
    $password = $_POST['password'];
    $core->login($username, $password);

?>