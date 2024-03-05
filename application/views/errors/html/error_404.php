<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?= $heading ?></title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	<link rel="shortcut icon" href="icon.png" type="image/x-icon">
</head>
<style>
	body {
		font-family: 'Ubuntu', sans-serif;
	}

	.header-404 {
		font-size: 120px;
		background: #2889CF;
		background: linear-gradient(to right, #2889CF 27%, #CF67BC 81%);
		-webkit-background-clip: text;
		-webkit-text-fill-color: transparent;
	}
</style>

<body>
	<div class="container d-flex vh-100 w-100 justify-content-center align-items-center">
		<div class="row">
			<div class="col">
				<h1 class="header-404 fw-bold text-center">Oops!</h1>
				<h3 class="fw-semibold text-center"><?= $heading ?></h3>
				<h5 class="fw-normal text-center"><?= $message ?></h5>
			</div>
		</div>
	</div>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>