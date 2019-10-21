<html>
	<head>
		<title>BIG STORE</title>
	</head>

	<body>
		<h1>Welcome to the B.I.G store!</h1>
		<h1>Men:</h1>
		<ul>
			<?php
				$json = file_get_contents('http://product-service');
				$obj = json_decode($json);

				$products = $obj->products;
				foreach ($products as $product) {
					echo "<li>$product</li>";
				}
			?>
		</ul>
	</body>
		<h1>Women:</h1>
		<ul>
			<?php
				$json = file_get_contents('http://product-service');
				$obj = json_decode($json);

				$products = $obj->products;
				foreach ($products as $product) {
					echo "<li>$product</li>";
				}
			?>
		</ul>
	</body>
		<h1>Kids:</h1>
		<ul>
			<?php
				$json = file_get_contents('http://product-service');
				$obj = json_decode($json);

				$products = $obj->products;
				foreach ($products as $product) {
					echo "<li>$product</li>";
				}
			?>
		</ul>
<html>
