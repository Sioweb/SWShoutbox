<?php

/**
* Contao Open Source CMS
*  
* @file tl_shoutbox.php
* @author Sascha Weidner
* @version 3.0.0
* @package sioweb.contao.extensions.shoutbox
* @copyright Sascha Weidner, Sioweb
*/

/**
 * Table tl_shoutbox 
 */
$GLOBALS['TL_DCA']['tl_shoutbox'] = array
(

	// Config
	'config' => array
	(
		'dataContainer'               => 'Table',
		'enableVersioning'            => true,
		'sql' 				=> array(
			'keys' => array
			(
				'id' => 'primary'
			)
		)
	),

	// List
	'list' => array
	(
		'sorting' => array
		(
			'mode'					=> 1,
			'fields'					=> array('id'),
			'flag'						=> 12
		),
		'label' => array
		(
			'fields'                  => array('id', 'Name'),
			'format'                  => '<span style="color:#b3b3b3; padding-left:3px;">[%s]</span> %s'
		),
		'global_operations' => array
		(
			'all' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['MSC']['all'],
				'href'                => 'act=select',
				'class'               => 'header_edit_all',
				'attributes'          => 'onclick="Backend.getScrollOffset();" accesskey="e"'
			)
		),
		'operations' => array
		(
			'edit' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_sendeplan']['edit'],
				'href'                => 'act=edit',
				'icon'                => 'edit.gif'
			),
			'copy' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_sendeplan']['copy'],
				'href'                => 'act=copy',
				'icon'                => 'copy.gif'
			),
			'delete' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_sendeplan']['delete'],
				'href'                => 'act=delete',
				'icon'                => 'delete.gif',
				'attributes'          => 'onclick="if (!confirm(\'' . $GLOBALS['TL_LANG']['MSC']['deleteConfirm'] . '\')) return false; Backend.getScrollOffset();"'
			),
			'show' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_sendeplan']['show'],
				'href'                => 'act=show',
				'icon'                => 'show.gif'
			)
		)
	),

	// Palettes
	'palettes' => array(
		'default'                     => '{title_legend},Name,Message'
	),

	// Fields
	'fields' => array(
		'id' => array
		(
			'sql'                     => "int(10) unsigned NOT NULL auto_increment"
		),
		'pid' => array
		(
			'sql'                     => "int(10) unsigned NOT NULL default '0'"
		),
		'fillIn' => array
		(
			'sql'                     => "char(1) NOT NULL default ''"
		),
		'sorting' => array
		(
			'sql'                     => "int(10) unsigned NOT NULL default '0'"
		),
		'tstamp' => array
		(
			'sql'                     => "int(10) unsigned NOT NULL default '0'"
		),
		'headline' => array(
			'label'                   => &$GLOBALS['TL_LANG']['tl_sendeplan']['headline'],
			'exclude'                 => true,
			'inputType'               => 'text',
			'eval'                    => array('mandatory'=>true, 'maxlength'=>255),
			'sql'					  => "varchar(255) NOT NULL default ''"
		),
		'alias' => array(
			'label'                   => &$GLOBALS['TL_LANG']['tl_sendeplan']['alias'],
			'exclude'                 => true,
			'search'                  => true,
			'inputType'               => 'text',
			'eval'                    => array('rgxp'=>'alnum', 'unique'=>true, 'spaceToUnderscore'=>true, 'maxlength'=>128, 'tl_class'=>'w50'),
			'save_callback' => array(
				array('tl_sendeplan', 'generateAlias')
			),
			'sql'					  => "varchar(255) NOT NULL default ''"
		),
		'Name' => array(
			'label'                   => &$GLOBALS['TL_LANG']['tl_sendeplan']['Name'],
			'exclude'                 => true,
			'inputType'               => 'text',
			'eval'                    => array('maxlength'=>255),
			'sql'					  => "varchar(255) NOT NULL default ''"
		),
		'Message' => array(
			'label'                   => &$GLOBALS['TL_LANG']['tl_sendeplan']['Message'],
			'exclude'                 => true,
			'search'                  => true,
			'inputType'               => 'textarea',
			'eval'                    => array('mandatory'=>true, 'rte'=>'tinyMCE', 'helpwizard'=>true),
			'explanation'             => 'insertTags',
			'sql'					  => "varchar(255) NOT NULL default ''"
		)
	)
);