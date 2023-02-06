<?php 
    session_start();
    if(empty($_SESSION['username'])){
        header('Location: ../index.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="icon" href="../img/121.jpg">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
<audio hidden autoplay loop>
		<source src="../img/amvSong.mp3" type="audio/mpeg">
		Browsermu tidak mendukung tag audio
	  </audio>
    <div class="hero">
        <video autoplay loop muted plays-inline class="back-video">
            <source src="../img/11.mp4" type="video/mp4">
        </video>
</body>
</html>