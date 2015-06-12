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

class GetShouts extends \Module{

	/**
	 * Template
	 * @var string
	 */
	protected $strTemplate = 'mod_shoutbox';

	public function generateAjax() {
		return parent::generate();
	}
	
	/**
	 * Generate module
	 */
	protected function compile() {
		$Shout = ShoutboxModel::findAll(array('limit'=>5,'order'=>'id DESC'));
		if(!$Shout)
			return; 
		
		$Shouts = array();
		while($Shout->next()) {
			$Shouts[] = $Shout->row();
		}
		
		$this->Template->shouts = $Shouts;
	}
}