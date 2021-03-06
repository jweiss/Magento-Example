<?php
/**
 * Magento
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@magentocommerce.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade Magento to newer
 * versions in the future. If you wish to customize Magento for your
 * needs please refer to http://www.magentocommerce.com for more information.
 *
 * @category    Mage
 * @package     Mage_Cybermut
 * @copyright   Copyright (c) 2010 Magento Inc. (http://www.magentocommerce.com)
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

/**
 * Cybermut Allowed languages Resource
 *
 * @category   Mage
 * @package    Mage_Cybermut
 * @name       Mage_Cybermut_Model_Source_Language
 * @author     Magento Core Team <core@magentocommerce.com>
 */

class Mage_Cybermut_Model_Source_Language
{
    public function toOptionArray()
    {
        return array(
            array('value' => 'EN', 'label' => Mage::helper('cybermut')->__('English')),
            array('value' => 'FR', 'label' => Mage::helper('cybermut')->__('French')),
            array('value' => 'DE', 'label' => Mage::helper('cybermut')->__('German')),
            array('value' => 'IT', 'label' => Mage::helper('cybermut')->__('Italian')),
            array('value' => 'ES', 'label' => Mage::helper('cybermut')->__('Spain')),
            array('value' => 'NL', 'label' => Mage::helper('cybermut')->__('Dutch')),
        );
    }
}



