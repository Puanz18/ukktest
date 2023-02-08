<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="icon" href="img/sss.jpg">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
<audio hidden autoplay loop>
		<source src="img/Devil.mp3" type="audio/mpeg">
		Browsermu tidak mendukung tag audio
	  </audio>
    <div class="hero">
        <video autoplay loop muted plays-inline class="back-video">
            <source src="img/12.mp4" type="video/mp4">
        </video>
    </div>
    <div class="global-container">
        <div class="card login-form">
            <div class="card-body">
                <h1 class="card-title text-center">L O G I N</h1>
            </div>
            <div class="card-text">
                <form action="proses/proses_login.php" method="POST">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Username</label>
                        <input type="text" class="form-control" name="username">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control" name="password">
                    </div>
                    <div class="d-gird gap-2">
                    <button type="submit" name="submit"class="btn btn-primary">Gas kan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>