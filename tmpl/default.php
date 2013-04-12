<?php
	// no direct access
	defined('_JEXEC') or die('Restricted access');
	?>
				<div class="<?php echo $moduleclass_sfx ?>">
		<?php 
	$langSite = substr($params->get('locale'), 0, 2);
	if ($langSite != '') {
		$langSite .= '/';
	}
	$twitterlink = $params->get('twitterlink');
	?>
	<a href="<?php echo $twitterlink;?>"><img src="./modules/mod_mdsocial/assets/twitter48x48.png" /></a>
	
		</div>
	
	