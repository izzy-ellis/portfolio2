
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Grid</title>
	<style type="text/css">
		
		body {
			margin: 0 calc(mod(100vw, 300px) / 2);
		}

		.box {
			width: 300px;
			height: 300px;
			float: left;
		}

		/* The flip card container */
		.flip-card {
			background-color: transparent;
			/* width: 300px;
			height: 300px; */
			perspective: 1000px;
		}

		/* This container is needed to position the front and back side */
		.flip-card-inner {
			position: relative;
			width: 100%;
			height: 100%;
			text-align: center;
			transition: transform 0.8s;
			transform-style: preserve-3d;
		}

		/* Do a horizontal flip when you move the mouse over the flip box container */
		.flip-card:hover .flip-card-inner {
			transform: rotateY(180deg);
		}

		/* Position the front and back side */
		.flip-card-front, .flip-card-back {
			position: absolute;
			width:100%;
			height: 100%;
			-webkit-backface-visibility: hidden; /* Safari */
			backface-visibility: hidden;
		}

		/* Style the front side (fall back if image is missing) */
		.flip-card-front {
			background-color: #bbb;
			color: black;
		}

		/* Style the back side */
		.flip-card-back {
			background-color: dodgerblue;
			color: white;
			transform: rotateY(180deg);
		}

		.button {
			display: inline-block;
			border: 1px solid;
			border-color: #012766;
			background: #012766;
			padding: 10px 16px;
			border-radius: 4px;
			color: #ffffff;
		}

		[id^=modal] {
			display: none;
			position: fixed;
			top: 0;
			left: 0;
		}

		[id^=modal]:target {
			display: block;
		}

		input[type=checkbox] {
			position: absolute;
			clip: rect(0, 0, 0, 0);
		}

		.popup {
			width: 100%;
			height: 100%;
			z-index: 99999;
		}

		.popup__overlay {
			position: fixed;
			z-index: 1;
			display: block;
			top: 0;
			left: 0;
			height: 100%;
			width: 100%;
			background: #000000b3;
		}

		.popup__wrapper {
			position: fixed;
			z-index: 9;
			width: 80%;
			max-width: 1200px;
			top: 50%;
			left: 50%;
			transform: translate(-50%, -50%);
			border-radius: 8px;
			padding: 58px, 32px, 32px, 32px;
			background: #fff;
		}

		.popup__close {
			position: absolute;
			top: 16px;
			right: 26px;
		}

	</style>
</head>
<body>
	<div class="container">
	<?php
	$alphabet = "abcdefghijklmnopqrstuvwxyz";
	for ($i = 0; $i < strlen($alphabet); $i++) { ?>
		<div id="<?= substr($alphabet, $i, 1) ?>" class="flip-card box">
			<div class="flip-card-inner">
				<div class="flip-card-front">
					<img src="img/<?= substr($alphabet, $i, 1) ?>.png" class="picture">
				</div>
				<div class="flip-card-back">
					<h1><?= substr($alphabet, $i, 1) ?></h1>
					<p>The letter <?= substr($alphabet, $i, 1) ?></p>
					<a class="button" href="#modal<?= $i ?>">More info</a>
				</div>
			</div>
		</div>
		<div class="popup" id="modal<?= $i ?>">
			<a class="popup__overlay" href="#"></a>
			<div class="popup__wrapper">
				<a class="popup__close" href="#">X</a>
				<p>Some more info about the letter <?= substr($alphabet, $i, 1) ?></p>
			</div>
		</div>
		 <?php
	}
	?>
	</div>
</body>
</html>