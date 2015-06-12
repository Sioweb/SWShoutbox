<?php

/**
* Contao Open Source CMS
*  
* @file autoload.php
* @author Sascha Weidner
* @version 3.0.0
* @package sioweb.contao.extensions.shoutbox
* @copyright Sascha Weidner, Sioweb
*/


ClassLoader::addNamespaces(array
(
	'sioweb\contao\extensions\shoutbox'
));

/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
	// Classes
	'sioweb\contao\extensions\shoutbox\LoadShouts'			   => 'system/modules/SWShoutbox/classes/LoadShouts.php',
	// models
	'sioweb\contao\extensions\shoutbox\ShoutboxModel'		   => 'system/modules/SWShoutbox/models/ShoutboxModel.php',
	// modules
	'sioweb\contao\extensions\shoutbox\GetShouts'              => 'system/modules/SWShoutbox/modules/GetShouts.php',
));


/**
 * Register the templates
 */
TemplateLoader::addFiles(array
(
	'mod_shoutbox'   	=> 'system/modules/SWShoutbox/templates',
));
