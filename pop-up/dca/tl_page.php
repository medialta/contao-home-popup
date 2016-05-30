<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2016 Leo Feyer
 *
 * @package   Contao
 * @author    Medialta <contact@medialta.com>
 * @copyright Medialta 2016
 */

/**
 * Extend the tl_page palettes
 */
$GLOBALS['TL_DCA']['tl_page']['palettes']['__selector__'][] = 'popup_enable';
$GLOBALS['TL_DCA']['tl_page']['palettes']['root'] = str_replace('createSitemap;', 'createSitemap;{popup_legend},popup_enable;', $GLOBALS['TL_DCA']['tl_page']['palettes']['root']);

/**
 * Add the tl_page subpalette
 */
$GLOBALS['TL_DCA']['tl_page']['subpalettes']['popup_enable'] = 'popup_title,popup_content,popup_button';

/**
 * Add the fields to tl_page
 */
$GLOBALS['TL_DCA']['tl_page']['fields']['popup_enable'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_page']['popup_enable'],
    'exclude'                 => true,
    'inputType'               => 'checkbox',
    'eval'                    => array('submitOnChange'=>true, 'tl_class'=>'w50'),
    'sql'                     => "char(1) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_page']['fields']['popup_title'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_page']['popup_title'],
    'exclude'                 => true,
    'inputType'               => 'text',
    'eval'                    => array('tl_class'=>'clr long'),
    'sql'                     => "varchar(255) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_page']['fields']['popup_content'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_page']['popup_content'],
    'exclude'                 => true,
    'inputType'               => 'textarea',
    'eval'                    => array('mandatory'=>true, 'rte' => 'tinyMCE'),
    'sql'                     => "text NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_page']['fields']['popup_button'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_page']['popup_button'],
    'exclude'                 => true,
    'inputType'               => 'text',
    'eval'                    => array('mandatory'=>true, 'maxlength'=>128, 'tl_class'=>'w50'),
    'sql'                     => "varchar(128) NOT NULL default ''"
);