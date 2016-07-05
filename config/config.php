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

$GLOBALS['TL_HOOKS']['generatePage'][] = array('PopUp', 'addPopupScripts');
$GLOBALS['TL_HOOKS']['outputFrontendTemplate'][] = array('PopUp', 'PopUpHtml');