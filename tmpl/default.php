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
	// Get the parameters
	$size = $params->get('size');
	$twitterlink = $params->get('twitterlink');
	$twitter = $params->get('twitter');
	$facebooklink = $params->get('facebooklink');
	$facebook = $params->get('facebook');
	$githublink = $params->get('githublink');
	$github = $params->get('github');
	$joomlalink = $params->get('joomlalink');
	$joomla = $params->get('joomla');
	$linkedinlink = $params->get('linkedinlink');
	$linkedin = $params->get('linkedin');
	//Show twitter icon
	if ($twitter=="1"){?>
		<a href="<?php echo $twitterlink;?>"><img src="./modules/mod_mdsocial/assets/twitter<?php echo $size;?>.png" /></a>
		<?php }
	//Show Facebook Icon
	if ($facebook=="1"){?>
		<a href="<?php echo $facebooklink;?>"><img src="./modules/mod_mdsocial/assets/facebook<?php echo $size;?>.png" /></a>
		<?php }
	//Show Github Icon
	if ($github=="1"){?>
		<a href="<?php echo $githublink;?>"><img src="./modules/mod_mdsocial/assets/github<?php echo $size;?>.png" /></a>
		<?php }	
	//Show Joomla! Extension icon
	if ($joomla=="1"){?>
		<a href="<?php echo $joomlalink;?>"><img src="./modules/mod_mdsocial/assets/joomla<?php echo $size;?>.png" /></a>
		<?php }	
	//Show LinkedIn icon
	if ($linkedin=="1"){?>
		<a href="<?php echo $linkedinlink;?>"><img src="./modules/mod_mdsocial/assets/linkedin<?php echo $size;?>.png" /></a>
		<?php }	
		?>
	</div>
	
	