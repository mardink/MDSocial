<?php
/**
 * @package Joomla
 * @subpackage Md Social
 * @copyright (C) 2013  MardinkWebdesign / Martijn Hiddink
 * @license GNU/GPL,  
 * MD Social is free software; you can redistribute it and/or
 * modify it under the terms of the GNU General Public License 3
 * as published by the Free Software Foundation.

 * MD Social is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 */

	// no direct access
	defined('_JEXEC') or die('Restricted access');
	?>
				<div class="mdsocial<?php echo $moduleclass_sfx ?>">
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
    $googlepluslink = $params->get('googlepluslink');
    $googleplus = $params->get('googleplus');
	$target =$params->get('target');
	$target_blank = 'target="_blank"';
	if ($target=="1"){
		$target_blank = 'target="_blank"';
		} else {
		$target_blank = '';
		}
	//Show twitter icon
	if ($twitter=="1"){?>
		<a href="<?php echo $twitterlink;?>" <?php echo $target_blank;?>><img src="/modules/mod_mdsocial/assets/twitter<?php echo $size;?>.png" alt="twitterlink" /></a>
		<?php }
	//Show Facebook Icon
	if ($facebook=="1"){?>
		<a href="<?php echo $facebooklink;?>" <?php echo $target_blank;?>><img src="/modules/mod_mdsocial/assets/facebook<?php echo $size;?>.png" alt="facebooklink" /></a>
		<?php }
	//Show Github Icon
	if ($github=="1"){?>
		<a href="<?php echo $githublink;?>" <?php echo $target_blank;?>><img src="/modules/mod_mdsocial/assets/github<?php echo $size;?>.png" alt="githublink"/></a>
		<?php }	
	//Show Joomla! Extension icon
	if ($joomla=="1"){?>
		<a href="<?php echo $joomlalink;?>" <?php echo $target_blank;?>><img src="/modules/mod_mdsocial/assets/joomla<?php echo $size;?>.png" alt="jedlink" /></a>
		<?php }	
	//Show LinkedIn icon
	if ($linkedin=="1"){?>
		<a href="<?php echo $linkedinlink;?>" <?php echo $target_blank;?>><img src="/modules/mod_mdsocial/assets/linkedin<?php echo $size;?>.png" alt="linkedinlink"/></a>
		<?php }	

    //Show LinkedIn icon
    if ($googleplus=="1"){?>
    <a href="<?php echo $googlepluslink;?>?rel=author" <?php echo $target_blank;?>><img src="/modules/mod_mdsocial/assets/googleplus<?php echo $size;?>.png" alt="googlepluslink"/></a>
                    <?php }
                    ?>
	</div>
	
	