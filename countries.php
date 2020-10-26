<?php 
	require_once('bd/ControllerCountries.php');
	$countries = new ControllerCountries();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>countries</title>

	<!-- FontAwesome -->
	<script src="https://kit.fontawesome.com/90bfac5e12.js" crossorigin="anonymous"></script>

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

	<!-- Fonts -->
	<link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">

	<!-- Styles Css -->
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/animation.css">
	<link rel="stylesheet" href="css/header.css">
	<link rel="stylesheet" href="css/footer.css">
	
	<link rel="stylesheet" href="css/countries.css">

	<link rel="stylesheet" href="css/media-query.css">
	
	<!-- Jquery -->
	<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>

	<!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</head>
<body>

	<?php 
		if (file_exists('views/header.php')) {
			require_once('views/header.php');
		}
	?>

	<section class="content">
		<div class="content-img">
			<h3 class="text-img">European countries</h3>
		</div>
		<main>

			<div class="table-response-sm" id="table-countries">
				<table class="table table-striped table-dark table-hover">
					<thead>
						<tr>
							<th scope="col">Countries</th>
							<th scope="col">Capital</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($countries->__get('countries') as $countrie => $capital) { ?>
							<tr>
								<th scope="row"><?= $countrie ?></th>
								<td><?= $capital ?></td>
							</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>

		</main>
	</section>

	<?php 
		if (file_exists('views/footer.php')) {
			require_once('views/footer.php');
		}
	?>

	<script type="text/javascript" src="js/script.js"></script>

</body>
</html>