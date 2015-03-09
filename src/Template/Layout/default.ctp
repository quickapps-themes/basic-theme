<?php
/**
 * Licensed under The GPL-3.0 License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @since	 2.0.0
 * @author	 Christopher Castro <chris@quickapps.es>
 * @link	 http://www.quickappscms.org
 * @license	 http://opensource.org/licenses/gpl-3.0.html GPL-3.0 License
 */
?>
<!DOCTYPE html>
<html>
	<head>
		<?php echo $this->Html->head(['bootstrap' => 'css,js']); ?>
		<?php echo $this->Html->css('BasicTheme.basic.css'); ?>
		<style>
			.blog-nav a {
				position: relative;
				display: inline-block;
				padding: 10px;
				font-weight: 500;
				color: #cdddeb;
			}
			.blog-nav a:hover,
			.blog-nav a:focus {
				color: #fff;
				text-decoration: none;
			}
		</style>
		<meta name="viewport" content="width=device-width, initial-scale=1">
	</head>

	<body>
		<div class="blog-masthead">
			<div class="container">
				<nav class="blog-nav">
					<?php echo $this->region('main-menu'); ?>
				</nav>
			</div>
		</div>

		<div class="container">
			<div class="blog-header">
				<h1 class="blog-title"><?php echo option('site_title'); ?></h1>
				<p class="lead"><?php echo option('site_description'); ?></p>
			</div>

			<div class="row">
				<div class="col-sm-8 blog-main">
					<?php if ($this->request->isHome()): ?>
						<?php foreach ($nodes as $node): ?>
							<?php echo $this->render($node); ?><hr />
						<?php endforeach; ?>
					<?php else: ?>
						<?php echo $this->fetch('content'); ?>
					<?php endif; ?>
				</div>

				<div class="col-sm-3 col-sm-offset-1 right-sidebar">
					<?php echo $this->region('right-sidebar'); ?>
				</div>
			</div>
		</div>

	    <div class="blog-footer">
	    	<?php echo $this->region('site-footer'); ?>
	    </div>
	</body>
</html>