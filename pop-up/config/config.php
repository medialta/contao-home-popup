<?php

$GLOBALS['TL_HOOKS']['generatePage'][] = array('PopUp', 'addPopupScripts');
$GLOBALS['TL_HOOKS']['outputFrontendTemplate'][] = array('PopUp', 'PopUpHtml');