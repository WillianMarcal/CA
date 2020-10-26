<?php 
	require_once('views/menu.php');
?>

<header class="content">
	<nav class="navbar navbar-expand-md" id="header">

		<a href="index.php" class="navbar-brand logo-text">Willian</a>

		<button class="navbar-toggler" id="hamburguer" type="button" data-toggle="collapse" data-target="#menu" aria-label="Toggle navigation">
			<i class="fas fa-bars text-white"></i>
		</button>

		<div class="collapse navbar-collapse" id="menu">
			<ul class="navbar-nav ml-auto">

				<?php foreach ($menu as $link) { 
					$diretorio = $link['diretorio'].'.php';
				?>
					<li class="nav-item <?= activeLink($diretorio) ?>">
						<a class="nav-link" href="<?= $diretorio ?>"><?= $link['text'] ?></a>
					</li>
				<?php } ?>
			</ul>
		</div>

	</nav>
</header>