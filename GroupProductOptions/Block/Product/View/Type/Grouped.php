<?php
namespace Abhay\GroupProductOptions\Block\Product\View\Type;

use Magento\GroupedProduct\Block\Product\View\Type\Grouped as MagentoGrouped;
use Abhay\GroupProductOptions\Helper\Config;
use Magento\Catalog\Block\Product\Context;
use Magento\Framework\Stdlib\ArrayUtils;
use Magento\InventorySalesAdminUi\Model\GetSalableQuantityDataBySku;

class Grouped extends MagentoGrouped
{

    private $moduleConfig;
    protected $getSalableQuantityDataBySku;

    public function __construct(
        GetSalableQuantityDataBySku $getSalableQuantityDataBySku,
        Config $moduleConfig,
        Context $context,
        ArrayUtils $arrayUtils,
        array $data = []
    ) {
        $this->getSalableQuantityDataBySku = $getSalableQuantityDataBySku;
        $this->moduleConfig = $moduleConfig;
        parent::__construct($context, $arrayUtils, $data);
    }

    public function getModuleConfigHelper()
    {
        return $this->moduleConfig;
    }

    public function getSaleble($sku)
    {
        $salable = $this->getSalableQuantityDataBySku->execute($sku);
        return $salable;
    }
}
