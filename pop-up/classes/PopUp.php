<?php

namespace Contao;

class PopUp extends \Frontend {
    public function addPopupScripts()
    {
        if ($this->isPopupEnabled())
        {
            $GLOBALS['TL_CSS'][] = 'system/modules/pop-up/assets/pop-up.css';
            $GLOBALS['TL_JAVASCRIPT'][] = 'system/modules/pop-up/assets/pop-up.js';
        }
    }

    protected function isPopupEnabled()
    {
        $objRoot = $this->getCurrentRootPage();

        if ($objRoot->popup_enable && !isset($_SESSION['popup_closed']))
        {
            return true;
        }

        return false;
    }

    protected function getCurrentRootPage()
    {
        global $objPage;
        $strKey = $objPage->rootId;

        if (!\Cache::has($strKey))
        {
            \Cache::set($strKey, \PageModel::findByPk($objPage->rootId));
        }

        return \Cache::get($strKey);
    }

    public function PopUpHtml($strContent)
    {
        if ($this->isPopupEnabled()) {
            $objRoot = $this->getCurrentRootPage();
            $objTemplate = new \FrontendTemplate('popup_default');
            $objTemplate->title = $objRoot->popup_title;
            $objTemplate->content = $objRoot->popup_content;
            $objTemplate->button = $objRoot->popup_button;

            $strContent = str_replace('</body>', $objTemplate->parse() . '</body>', $strContent);
            $_SESSION['popup_closed'] = true;
        }
        return $strContent;
    }
}