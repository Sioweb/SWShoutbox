<?php

/**
* Contao Open Source CMS
*/

namespace sioweb\contao\extensions\shoutbox;
use Contao;

/*
* @file GetShouts.php
* @class GetShouts
* @author Sascha Weidner
* @version 3.0.0
* @package sioweb.contao.extensions.shoutbox
* @copyright Sascha Weidner, Sioweb
*/

if(!class_exists('ShoutboxModel')) {
	
class ShoutboxModel extends \Model {
	/**
	 * Table name
	 * @var string
	 */
	protected static $strTable = 'tl_shoutbox';
}

}