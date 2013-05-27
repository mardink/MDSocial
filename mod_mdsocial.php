<?php
/**
 * @package Joomla
 * @subpackage Md Social
 * @copyright (C) 2013 MardinkWebdesign / Martijn Hiddink
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
	defined( '_JEXEC' ) or die( 'Restricted access' );
	$moduleclass_sfx = htmlspecialchars($params->get('moduleclass_sfx'));
	require( JModuleHelper::getLayoutPath( 'mod_mdsocial' ) );
	?>