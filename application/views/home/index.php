<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="<?= base_url('assets/') ?>images/icon.png" type="image/x-icon">
    <link rel="stylesheet" href="<?= base_url('assets/css/home.css') ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
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

<body>
    <div class="loader-wrapper" id="preloader">
        <div class="loader"></div>
    </div>

    <script src="https://cdnjs.cloudflare/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script>
        // Wait for the DOM to be fully loaded
        document.addEventListener("DOMContentLoaded", function() {
            // Hide the preloader with a fade-out effect once the page is loaded
            window.addEventListener("load", function() {
                var preloader = document.getElementById("preloader");
                preloader.style.opacity = "0";
                setTimeout(function() {
                    preloader.style.display = "none";
                }, 500); // Adjust the timeout to match the transition duration
            });
        });
    </script>
</body>

</html>