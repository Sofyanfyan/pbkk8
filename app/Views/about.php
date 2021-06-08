<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About me</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url('css/bootstrap.min.css') ?>" />
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="<?= base_url() ?>">Home</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('about') ?>">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('contact') ?>">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <header class="jumbotron">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="h1">About us</h1>
                </div>
            </div>
        </div>
    </header>

    <div class="container">
        <div class="row">
        <div class="col-md-12">
        <h5>Personal Details :</h5>
        <p>Name : Achmad Sofyan Pratama</p>
        <p>Address : Gresik,Menganti,Mojotengah 14</p>
        <p>Birth Date : 19 January 2000</p>
        <p>Nationality : Indonesia</p>
        <p>Phone Number : 123456</p>
        <p>Email : example@fawd.com</p>
        </div>
            <div class="col-md-12">
              

<br>
<br>
                <h5>Educational Backround :</h5>
                <p>2005-2007 RA AL-Mubtadiin</p>
                <p>2007-2013 Elementary School AL-Mubtadiin</p>
                <p>2013-2015 Junior High School AL-AZHAR</p>
                <p>2015-2018 Senior High School AL-AZHAR</p>
            </div>
        </div>
    </div>

    <footer class="jumbotron jumbotron-fluid mt-5 mb-0">
		<div class="container text-center"><?= Date('Y') ?></div>
	</footer>

    <!-- Jquery dan Bootsrap JS -->
    <script src="<?= base_url('js/jquery.min.js') ?>"></script>
    <script src="<?= base_url('js/bootstrap.min.js') ?>"></script>
</body>

</html>