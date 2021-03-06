<?php
/**
 * Apptha
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the EULA
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://www.apptha.com/LICENSE.txt
 *
 * ==============================================================
 *                 MAGENTO EDITION USAGE NOTICE
 * ==============================================================
 * This package designed for Magento COMMUNITY edition
 * Apptha does not guarantee correct work of this extension
 * on any other Magento edition except Magento COMMUNITY edition.
 * Apptha does not provide extension support in case of
 * incorrect edition usage.
 * ==============================================================
 *
 * @category    Apptha
 * @package     Apptha_Onestepcheckout
 * @version     0.1.9
 * @author      Apptha Team <developers@contus.in>
 * @copyright   Copyright (c) 2014 Apptha. (http://www.apptha.com)
 * @license     http://www.apptha.com/LICENSE.txt
 *
 * */ 
class Apptha_Onestepcheckout_Block_Onestep_Payment extends Mage_Checkout_Block_Onepage_Payment {

    protected function _construct()
    {
        $this->getCheckout()->setStepData('payment', array(
            'label' => $this->__('Payment Information'),
            'is_show' => $this->isShow()
        ));
        parent::_construct();
    }

    /**
     * Getter
     *
     * @return float
     */
    public function getQuoteBaseGrandTotal()
    {
        return (float) $this->getQuote()->getBaseGrandTotal();
    }
     public function getOnepage()
    {
        return Mage::getSingleton('checkout/type_onepage');
    }

    //get product is virtual product  or not
    public function getVirtual()
    {
        if ($this->getOnepage()->getQuote()->isVirtual())
        {
            return true;
        } 
        else
        {
            return false;
        }
    }

}
