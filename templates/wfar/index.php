<?php
/**
 * @package		Joomla.Site
 * @copyright	Copyright (C) 2005 - 2014 Open Source Matters, Inc. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

/* The following line loads the MooTools JavaScript Library */
JHtml::_('behavior.framework', true);

/* The following line gets the application object for things like displaying the site name */
$app = JFactory::getApplication();
$menu = $app->getMenu();

$pageClass = $menu->getActive()->alias ? 'class="page-'.$menu->getActive()->alias.'"' : '';

$mainClass = $this->countModules('wfar-sidebar') ? 'col-xs-9' : 'col-xs-12';
$moduleCount = $this->countModules( 'wfar-main + wfar-sidebar' );

JFactory::getDocument()->setGenerator('');
?>
<!DOCTYPE html>
<html lang="fr">
	<head>
		<!-- Headers -->
		<jdoc:include type="head" />
		<meta name="author" content="Charles EDOU NZE" />

		<!-- Fonts & CSS -->
		<link href='http://fonts.googleapis.com/css?family=Jura:400,600' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/bootstrap/css/bootstrap.min.css" type="text/css" />
		<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/template.css" type="text/css" />
		<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/small.desktop.css" media="(max-width: 1400px)" />
		<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/tablet.css" media="(max-width: 1024px)" />
		<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/small.tablet.css" media="(max-width: 820px)" />
		<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/mobile.css" media="(max-width: 580px)" />
		
		<!-- Script -->
		<script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/jquery-2.0.3.min.js"></script>
		<script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/bootstrap/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/template.js"></script>
	</head>
	<body <?php echo $pageClass ?>>
		<div id="main">
			<div id="wfar-header">
				<div id="wfar-title" class="row">
					<h1 class="site-title col-xs-6">
						<div class="col-xs-1">
							<img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/images/logo.png" style="width:39px; height:auto;"/>
						</div>
						<div class="col-xs-11">
							<a href="<?php echo $this->baseurl ?>" title="Home"><?php echo htmlspecialchars($app->getCfg('sitename')); ?></a>
						</div>
					</h1>
				</div>
				
				<div id="wfar-menu">
					<?php if($this->countModules('wfar-topmenu')) : ?>
						<jdoc:include type="modules" name="wfar-topmenu" />
					<?php endif; ?>
				</div><!--/wfar-menu -->
				
				<?php if($this->countModules('wfar-search')) : ?>
				<div class="col-xs-12">
					<jdoc:include type="modules" name="wfar-search" style="none" />
				</div>
				<?php endif; ?>
			</div><!--/header -->
			
			<div id="wfar-content">
			
				<?php if($this->countModules('wfar-topquote')) : ?>
					<jdoc:include type="modules" name="wfar-topquote" style="none" />
				<?php endif; ?>
				
				<?php if( $this->countModules('wfar-main')  || $this->countModules('wfar-sidebar')) : ?>
					<div class="row">
						<?php if($this->countModules('wfar-sidebar')) : ?>
						<div class="col-xs-3">
							<div id="wfar-sidebar">
								<jdoc:include type="modules" name="wfar-sidebar" style="sidebar" />
							</div><!--Sidebar/Main -->
						</div>
						<?php endif; ?>
						<?php if($this->countModules('wfar-main')) : ?>
						<div class="<?php echo $mainClass?>">
							<div id="wfar-main">
								<jdoc:include type="modules" name="wfar-main" style="none" />
							</div><!--Main -->
						</div>
						<?php endif; ?>
					</div>
				<?php endif ?>
				
				<div id="content">
					<jdoc:include type="message" />
					<jdoc:include type="component" />
				</div><!--/content -->
				
			</div><!--/content-wrapper -->
			
			<?php if($this->countModules('wfar-bottom')) : ?>
			<div id="wfar-bottom">				
				<jdoc:include type="modules" name="wfar-bottom" style="bottommodule" />
			</div><!-- /bottom-->
			<?php endif; ?>
			
			<footer id="wfar-footer" class="clearfix">
				<p class="col-xs-7 uppercase">&copy; <?php echo date ('Y'); ?> <?php echo htmlspecialchars($app->getCfg('sitename')); ?></p>
				<p class="credits">
					<jdoc:include type="modules" name="wfar-footer" style="bottommodule" />
				</p>
			</footer><!--/footer -->
			
		</div><!--/main -->
		
		<jdoc:include type="modules" name="debug" />
		
	</body>
</html>