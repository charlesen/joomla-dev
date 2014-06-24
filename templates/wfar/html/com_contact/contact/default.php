<?php
 /**
 * @package		Joomla.Site
 * @subpackage	com_contact
 * @copyright	Copyright (C) 2005 - 2012 Open Source Matters, Inc. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

$cparams = JComponentHelper::getParams ('com_media');
?>
<div id="contact-us" class="row<?php echo $this->pageclass_sfx?>">
	<h2 class="color_1 border_bottom">Contact</h2>
	<div class="col-xs-12">
		<div id="contact-map" class="col-xs-4">
			<h3>Naxe Technologies France</h3>
			<adress>
				9 bis, rue du Transvaal <br />
				92250, La Garenne Colombes <br />
				T: 01 56 03 66 70 <br />
				<a href="mailto:direction@naxe.fr">direction@naxe.fr</a>
			</adress>
		</div>
		<div id="contact-form-wrapper" class="col-xs-8">
			<?php  echo $this->loadTemplate('form');  ?>	
		</div ><!--Contact form -->
	</div>
	
	<div class="col-xs-12">
		<h3>L'agence</h3>
		<div class="iframe">
			<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2622.0955802748126!2d2.2566333!3d48.91357120000001!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e665be82ea0351%3A0x67f820d1af230dd6!2s9+Rue+du+Transvaal!5e0!3m2!1sfr!2sfr!4v1400241101946" width="850" height="400" frameborder="0" style="border:0"></iframe>
		</div>
	</div>
	
</div>