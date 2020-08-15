<?php
namespace Abhay\GroupProductOptions\Helper;

use Magento\Framework\App\Helper\AbstractHelper;

class Config extends AbstractHelper
{
    const CONFIG_MODULE_ENABLE_XPATH = 'abhay/general/enable';
    const CONFIG_MODULE_ENABLE_SALABEL = 'abhay/general/salable';
    const CONFIG_MODULE_ENABLE_CHILDSKU = 'abhay/general/childsku';
    const CONFIG_MODULE_DISPLAY_TEXT = 'abhay/general/display_text';
    const CONFIG_MODULE_COLOR_XPATH = 'abhay/general/text_color';


    public function isModuleEnabled()
    {
        return (bool)$this->scopeConfig->getValue(self::CONFIG_MODULE_ENABLE_XPATH);
    }

    public function isSalableEnabled()
    {
        return (bool)$this->scopeConfig->getValue(self::CONFIG_MODULE_ENABLE_SALABEL);
    }

    public function isSkuEnabled()
    {
        return (bool)$this->scopeConfig->getValue(self::CONFIG_MODULE_ENABLE_CHILDSKU);
    }

    public function isDisplayMessage()
    {
        return $this->scopeConfig->getValue(self::CONFIG_MODULE_DISPLAY_TEXT);
    }

    public function isColor()
    {
       return $this->scopeConfig->getValue(self::CONFIG_MODULE_COLOR_XPATH);
    }


}
