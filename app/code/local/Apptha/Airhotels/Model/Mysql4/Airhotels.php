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
 * @package     Apptha_Airhotels
 * @version     0.2.9
 * @author      Apptha Team <developers@contus.in>
 * @copyright   Copyright (c) 2014 Apptha. (http://www.apptha.com)
 * @license     http://www.apptha.com/LICENSE.txt
 * 
 */

/**
 * Airhotels Resource model class
 */
/**
 * Saved order details
 * After placing order and 
 * Host property details will be retreived
 * @author user
 *
 */
class Apptha_Airhotels_Model_Mysql4_Airhotels extends Mage_Core_Model_Mysql4_Abstract {
 /**
  * Construct Method
  * 
  * @see Mage_Core_Model_Resource_Abstract::_construct()
  */
 public function _construct() {
  /**
   * Note that the id refers to the key field in your database table.
   * 
   * Initialize airhotels Block.
   */
  $this->_init ( 'airhotels/airhotels', 'id' );
  /**
   * Init airhotels property booked
   * Table with id
   */
 }
}