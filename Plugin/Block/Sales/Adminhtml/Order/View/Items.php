<?php
/**
 * Copyright © Jigar K Karangiya. All rights reserved.
 */
namespace Jigar\OrderItemImage\Plugin\Block\Sales\Adminhtml\Order\View;

use Magento\Backend\Block\Template;

class Items
{
    /**
     * @param Template $originalBlock
     * @param array $result
     * @return array
     */
    public function afterGetColumns(Template $originalBlock, array $result): array
    {
        return ['image' => __("Image")] + $result;
    }
}
