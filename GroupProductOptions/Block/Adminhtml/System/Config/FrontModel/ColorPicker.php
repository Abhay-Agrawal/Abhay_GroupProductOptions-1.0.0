<?php
namespace Abhay\GroupProductOptions\Block\Adminhtml\System\Config\FrontModel;

class ColorPicker extends \Magento\Config\Block\System\Config\Form\Field
{
    public function _getElementHtml(\Magento\Framework\Data\Form\Element\AbstractElement $element)
    {
        $html = $element->getElementHtml();
        $value = $element->getData('value');
        $html .= '<script type="text/javascript">
            require(["jquery","jquery/colorpicker/js/colorpicker"], function ($) {
                $(document).ready(function () {
                    var $el = $("#' . $element->getHtmlId() . '");
                    $el.css("backgroundColor", "'. $value .'");
                    // Attach the color picker
                    $el.ColorPicker({
                        color: "'. $value .'",
                        onChange: function (hsb, hex, rgb) {
                            $el.css("backgroundColor", "#" + hex).val("#" + hex);
                        }
                    });
                });
            });
            </script>';
        return $html;
    }
}
