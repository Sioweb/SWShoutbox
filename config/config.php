<?php

/**
* Contao Open Source CMS
*  
* @file config.php
* @author Sascha Weidner
* @version 3.0.0
* @package sioweb.contao.extensions.shoutbox
* @copyright Sascha Weidner, Sioweb
*/


if(TL_MODE == 'FE')
	$GLOBALS['TL_JAVASCRIPT'][] = 'system/modules/SWShoutbox/assets/shoutbox.min.js';

array_insert($GLOBALS['BE_MOD']['sioweb'], 4, array(
	'Shoutbox' => array(
		'tables' => array('tl_shoutbox'),
		'icon' => 'system/modules/SWShoutbox/assets/sioweb16x16.png'
	)
));

array_insert($GLOBALS['FE_MOD'], 4, array(
	'Shoutbox' => array(
		'Shoutbox'    => 'GetShouts'
	)
));

if(\Input::post('getNewShouts') == '1')
	$GLOBALS['TL_HOOKS']['dispatchAjax'][] = array('sioweb\contao\extensions\shoutbox\LoadShouts', 'getNewShouts');