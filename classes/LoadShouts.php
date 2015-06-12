<?php

/**
* Contao Open Source CMS
*/

namespace sioweb\contao\extensions\shoutbox;
use Contao;

/**
* @file LoadShouts.php
* @class LoadShouts
* @author Sascha Weidner
* @version 3.0.0
* @package sioweb.contao.extensions.shoutbox
* @copyright Sascha Weidner, Sioweb
*/

class LoadShouts extends \Backend
{

	public function generate() {
		return parent::generate();
	}

	public function generateAjax() {
		return parent::generate();
	}

	public function getNewShouts() {
		$Shout = ShoutboxModel::findAll(array('limit'=>5,'order'=>'id DESC'));
		if(!$Shout)
			return;

		$Shouts = array();
		while($Shout->next()) {
			$Shouts[] = $Shout->row();
		}

		$sObj = new \FrontendTemplate('mod_shoutbox');
		$sObj->setData(array('shouts'=>$Shouts));
		return $sObj->parse();
	}
}