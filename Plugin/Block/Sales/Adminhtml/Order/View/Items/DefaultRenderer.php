<?php
/**
 * Copyright © Jigar K Karangiya. All rights reserved.
 */
namespace Jigar\OrderItemImage\Plugin\Block\Sales\Adminhtml\Order\View\Items;

use Magento\Backend\Block\Template;

/**
 * Class DefaultRenderer
 */
class DefaultRenderer
{
    /**
     * @param Template $originalBlock
     * @param array $after
     * @return array
     */
    public function afterGetColumns(Template $originalBlock, array $after): array
    {
        $after = ['image' => "col-image"] + $after;
        return $after;
    }
}
