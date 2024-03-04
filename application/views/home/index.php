<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="<?= base_url('assets/') ?>images/icon.png" type="image/x-icon">
    <link rel="stylesheet" href="<?= base_url('assets/css/home.css') ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&family=Poppins:wght@400;500;600;700&family=Ubuntu:wght@400;500;700&display=swap" rel="stylesheet">
    <title>Home | Muda SPP</title>
</head>
<style>
    body {
        font-family: 'Ubuntu', sans-serif;
    }
</style>

<body style="background-color: #FAFAFA;">
    <div class="loader-wrapper" id="preloader">
        <div class="loader"></div>
    </div>

    <div class="container">
        <div class="row flex-row-reverse d-flex justify-content-center align-items-center" >
            <div class="col-md-6">
                <img src="<?= base_url("assets/img/home-clipart.png") ?>" alt="" class="img-fluid">
            </div>
            <div class="col-md-6 p-5">
                <h1 class="text-primary">Dashboard</h1>
                <p class="text-secondary fs-3">SMK Muhammadiyah 2 Pekanbaru</p>
                <p class="text-secondary">Aplikasi pembayaran SPP berbasis web</p>
                <div class="d-grid gap-2 d-md-block">
                    <a href="<?= base_url("/admin") ?>" class="btn btn-outline-primary me-2">Login</a>
                    <a href="<?= base_url("/check") ?>" class="btn btn-outline-success">Cek Pembayaran</a>
                </div>
            </div>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script>
        // Wait for the DOM to be fully loaded
        document.addEventListener("DOMContentLoaded", function() {
            // Hide the preloader with a fade-out effect once the page is loaded
            window.addEventListener("load", function() {
                var preloader = document.getElementById("preloader");
                preloader.style.opacity = "0";
                setTimeout(function() {
                    preloader.style.display = "none";
                }, 2000); // Adjust the timeout to match the transition duration
            });
        });
    </script>
</body>

</html>