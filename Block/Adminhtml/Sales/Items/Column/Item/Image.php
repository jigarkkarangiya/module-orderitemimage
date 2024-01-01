<?php
/**
 * Copyright © Jigar K Karangiya. All rights reserved.
 */
namespace Jigar\OrderItemImage\Block\Adminhtml\Sales\Items\Column\Item;

/**
 * Class Image
 */
class Image extends \Magento\Sales\Block\Adminhtml\Items\Column\DefaultColumn
{
    /**
     * @var \Jigar\OrderItemImage\Model\Order\Item\Image
     */
    private $imageModel;

    /**
     * Image constructor.
     *
     * @param \Magento\Backend\Block\Template\Context $context
     * @param \Magento\CatalogInventory\Api\StockRegistryInterface $stockRegistry
     * @param \Magento\CatalogInventory\Api\StockConfigurationInterface $stockConfiguration
     * @param \Magento\Framework\Registry $registry
     * @param \Magento\Catalog\Model\Product\OptionFactory $optionFactory
     * @param \Jigar\OrderItemImage\Model\Order\Item\Image $imageModel
     * @param array $data
     */
    public function __construct(
        \Magento\Backend\Block\Template\Context $context,
        \Magento\CatalogInventory\Api\StockRegistryInterface $stockRegistry,
        \Magento\CatalogInventory\Api\StockConfigurationInterface $stockConfiguration,
        \Magento\Framework\Registry $registry,
        \Magento\Catalog\Model\Product\OptionFactory $optionFactory,
        \Jigar\OrderItemImage\Model\Order\Item\Image $imageModel,
        array $data = []
    ) {
        $this->imageModel = $imageModel;
        parent::__construct($context, $stockRegistry, $stockConfiguration, $registry, $optionFactory, $data);
    }

    /**
     * @param \Magento\Sales\Model\Order\Item $item
     * @return \Magento\Catalog\Helper\Image|null
     */
    public function getItemImageHelper($item)
    {
        return $this->imageModel->getImageByItem($item);
    }
}
