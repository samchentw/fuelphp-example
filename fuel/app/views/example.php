<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title><?php echo "test" ?></title>
	<?php echo Asset::css('bootstrap.css'); ?>
</head>

<body>
	<header>
		<div class="container">
			<div id="logo"></div>
		</div>
	</header>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1>Hello,
					<?php echo $name; ?>
					<br><br>
					<?php
					// echo $post[1]['body'];
					foreach ($post as $p) {
						echo $p['body'];
					}
					?>
				</h1>
				<br><br>
			</div>
		</div>
		<footer>
			<p class="pull-right">Page rendered in {exec_time}s using {mem_usage}mb of memory.</p>
			<p>
				<a href="https://fuelphp.com">FuelPHP</a> is released under the MIT license.<br>
				<small>Version: <?php echo Fuel::VERSION; ?></small>
			</p>
		</footer>
	</div>
</body>

</html>