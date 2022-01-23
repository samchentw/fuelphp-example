<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title><?php echo "測試頁" ?></title>
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
					<table class="table">
						<thead>
							<tr>
								<th>#</th>
								<th>title</th>
								<th>body</th>
								<th>action</th>
							</tr>
						</thead>

						<tbody>
							<?php
							foreach ($posts as $post) {
							?>
								<tr>
									<td><?php echo $post['id']; ?></td>
									<td><?php echo $post['title']; ?></td>
									<td><?php echo $post['body']; ?></td>
									<td>
										<!-- todo -->
										<a href="/post/edit/<?php echo $post['id']; ?>">Edit(todo)</a>
										<a href="/post/delete/<?php echo $post['id']; ?>">Delete(todo)</a>
									</td>
								</tr>

							<?php
							}
							?>
						</tbody>
					</table>



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