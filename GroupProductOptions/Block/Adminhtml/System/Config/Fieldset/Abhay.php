<?php
namespace Abhay\GroupProductOptions\Block\Adminhtml\System\Config\Fieldset;

use \Magento\Backend\Block\Template;
use \Magento\Framework\Data\Form\Element\Renderer\RendererInterface;

class Abhay extends Template implements RendererInterface
{

    private $moduleList;

    public function __construct(
        Template\Context $context,
        \Magento\Framework\Module\ModuleList $moduleList,
        array $data = []
    ) {
        $this->_template = 'Abhay_GroupProductOptions::system/config/fieldset/abhay.phtml';
        parent::__construct($context, $data);
        $this->moduleList = $moduleList;
    }

    public function render(\Magento\Framework\Data\Form\Element\AbstractElement $element)
    {
        $_element = $element;
        return $this->toHtml();
    }

    public function getModuleVersion()
    {
        return $this->moduleList->getOne('Abhay_GroupProductOptions')['setup_version'];
    }
}
