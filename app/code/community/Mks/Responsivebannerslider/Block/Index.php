<?php   
class Mks_Responsivebannerslider_Block_Index extends Mage_Core_Block_Template{   



public function getResponsivebannersliderEnabled()
    {
        return Mage::getStoreConfig('general_setting/banner_setting/baner_eanble',Mage::app()->getStore());
    }
public function getResponsivebannersliderSpeed()
    {
        return Mage::getStoreConfig('general_setting/banner_setting/slide_speed',Mage::app()->getStore());
    }
public function getResponsivebannerBannerLoop()
    {
        return Mage::getStoreConfig('general_setting/banner_setting/banner_loop',Mage::app()->getStore());
    }
public function getResponsivebannerSlideType()
    {
        return Mage::getStoreConfig('general_setting/banner_setting/slide_type',Mage::app()->getStore());
    }
public function getResponsivebannerPauseOnhover()
    {
        return Mage::getStoreConfig('general_setting/banner_setting/pauseonhover',Mage::app()->getStore());
    }


}
