
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
				</div>
			</div>
		</div> <?php
	}
	?>
	</div>
</body>
</html>