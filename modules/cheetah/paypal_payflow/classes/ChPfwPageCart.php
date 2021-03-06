<?php

/**
 * This work, "Cheetah - https://www.cheetahwsb.com", is a derivative of "Dolphin Pro V7.4.2" by BoonEx Pty Limited - https://www.boonex.com/, used under CC-BY. "Cheetah" is licensed under CC-BY by Dean J. Bassett Jr.
 * CC-BY License - http://creativecommons.org/licenses/by/3.0/
 */

ch_import('ChWsbPageView');

class ChPfwPageCart extends ChWsbPageView
{
	protected $_oMain;

    function __construct(&$oMain)
    {
        parent::__construct('ch_pfw_cart');

        $this->_oMain = $oMain;

        $GLOBALS['oTopMenu']->setCurrentProfileID($this->_oMain->getUserId());
        $GLOBALS['oTopMenu']->setCustomVar('sys_payment_module_uri', $this->_oMain->_oConfig->getUri());
    }

	function getBlockCode_Featured()
    {
        return $this->_oMain->getCartContent(CH_PMT_ADMINISTRATOR_ID);
    }

    function getBlockCode_Common()
    {
        return $this->_oMain->getCartContent(CH_PMT_EMPTY_ID);
    }
}
