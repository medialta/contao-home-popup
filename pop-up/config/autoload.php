<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2016 Leo Feyer
 *
 * @license LGPL-3.0+
 */


/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
    // Classes
    'Contao\PopUp' => 'system/modules/pop-up/classes/PopUp.php',
));


/**
 * Register the templates
 */
TemplateLoader::addFiles(array
(
    'popup_default' => 'system/modules/pop-up/templates/pop-up',
));
