<div id="page">

	<header>
		
	<?php if ($site_name): ?>
		<h1 id="site_name">
		<a href="<?php print $front_page; ?>"> <spam> <?php print $site_name; ?> </span> </spam></a>
		</h1>
	<?php endif;?>
	</header>

	<div id="navigation">
		
		<?php print render($page['navigation']); ?>


	</div>

	<div id="highlighted">
		
		<?php print render($page['highlighted']); ?>

	</div>

	<div id="main">
		
		<?php if ($title): ?>
			<h1> <?php print $title ?></h1>
		<?php endif ?>
		
		<?php print render($page['content']);?>


	</div>

	<div id="footer">
		
		<?php print render($page['footer']); ?>

	</div>
</div>