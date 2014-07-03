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

$mainClass = $this->countModules('wfar-sidebar') ? ' col-xs-9' : ' col-xs-12';
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
		<!--<link href='http://fonts.googleapis.com/css?family=Jura:400,600' rel='stylesheet' type='text/css'>-->
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
				<div class="row">
					<div id="wfar-logo" class="col-xs-2">
							<a href="<?php echo $this->baseurl ?>" title="Home">
								<img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/images/logo-sd.png" />
							</a>
					</div><!--/wfar-logo -->
					
					<div class="col-xs-7">
						<h1 id="site-title">
							<a href="<?php echo $this->baseurl ?>" title="Home"><?php echo htmlspecialchars($app->getCfg('sitename')); ?></a>
						</h1>
					</div><!--/site-title -->
					
					<?php if($this->countModules('wfar-search')) : ?>
					<div id="wfar-search" class="col-xs-3">
							<jdoc:include type="modules" name="wfar-search" style="none" />
					</div><!--/wfar-search -->
					<?php endif; ?>
				</div> 
				
				
				<?php if($this->countModules('wfar-topmenu')) : ?>
				<div id="wfar-menu">
					<jdoc:include type="modules" name="wfar-topmenu" />
				</div><!--/wfar-menu -->
				<?php endif; ?>
				
			</div><!--/wfar-header -->
			
			
			<div id="wfar-center" class="row">
				<?php if($this->countModules('wfar-sidebar')) : ?>
				<div id="wfar-sidebar" class="col-xs-3">
					<jdoc:include type="modules" name="wfar-sidebar" style="sidebar" />
				</div><!--Sidebar -->
				<?php endif; ?>
				
				<div id="wfar-main" class="row<?php echo $mainClass?>">
					<?php if($this->countModules('wfar-maintop')) : ?>
					<div id="wfar-maintop">
						<jdoc:include type="modules" name="wfar-maintop" style="xhtml" />
					</div><!--Main -->
					<?php endif ?>
					
					<div id="wfar-content">
						<?php if($this->countModules('wfar-breadcumbs')) : ?>
							<jdoc:include type="modules" name="wfar-breadcumbs" style="breadcumbs" />
						<?php endif; ?>
						<jdoc:include type="message" />
						<jdoc:include type="component" />
					</div><!--/wfar-content -->
					
					<?php if($this->countModules('wfar-mainbottom')) : ?>
					<div id="wfar-mainbottom">				
						<jdoc:include type="modules" name="wfar-mainbottom" style="bottommodule" />
					</div><!-- /bottom-->
					<?php endif; ?>
				</div><!--/wfar-main -->
			</div><!--/wfar-center -->
			
			<?php if($this->countModules('wfar-bottom')) : ?>
			<div id="wfar-bottom">				
				<jdoc:include type="modules" name="wfar-bottom" style="bottommodule" />
			</div><!-- /bottom-->
			<?php endif; ?>
			
			<footer id="wfar-footer">
				<p class="col-xs-7 uppercase">&copy; <?php echo date ('Y'); ?> <?php echo htmlspecialchars($app->getCfg('sitename')); ?></p>
				<?php if($this->countModules('wfar-footer')) : ?>
				<div id="wfar-footer">
					<jdoc:include type="modules" name="wfar-footer" style="xhtml" />
				</div>
				<?php endif; ?>
			</footer><!--/footer -->
			
		</div><!--/main -->
		
		<jdoc:include type="modules" name="debug" />
		
	</body>
</html>