<?php 

    session_start();
    session_unset();
    session_destroy();
    header("Location:../index.php");
    
?>



<-- <a href="../proses/proses_logout.php"><h2>Logiut</h2></a> 
<audio hidden autoplay loop>
		<source src="../img/amvSong.mp3" type="audio/mpeg">
		Browsermu tidak mendukung tag audio
	  </audio>
    <div class="hero">
        <video autoplay loop muted plays-inline class="back-video">
            <source src="../img/11.mp4" type="video/mp4">
        </video> //