<div id="page">

	<header>
		<div id="header_link">
			<?php if ($site_name): ?>
				<h1 id="site_name">
				<a href="<?php print $front_page; ?>"> <spam> <?php print $site_name; ?> </span> </spam></a>
				</h1>
			<?php endif;?>

			<div id="user_link">
				<ul >
	                <li>
	                    <a href="<?php print $base_url.'/drupal/user/register'; ?>"><span class="fa fa-user-plus"></span>Sign Up</a>
	                </li>
	                <li>
	                    <a href="<?php print $base_url.'/drupal/user/login'; ?>"><span class="fa fa-sign-in"></span>Login</a>
	                </li>
	            </ul>
	        </div> 
		</div>

	</header>

	<div id="navigation">
		<?php if ($main_menu): ?>
	        <nav id="main-menu" role="navigation" tabindex="-1">
	           
	          <?php
	          
	          print theme('links__system_main_menu', array(
	            'links' => $main_menu,
	            'attributes' => array(
	              'class' => array('links', 'inline', 'clearfix'),
	            ),
	            'heading' => array(
	              'text' => t('Main menu'),
	              'level' => 'h2',
	              'class' => array('element-invisible'),
	            ),
	          )); ?>
	        </nav>
      	<?php endif; ?>

		
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