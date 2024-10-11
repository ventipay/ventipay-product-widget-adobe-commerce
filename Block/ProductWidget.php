<?php
namespace VentiPay\ProductWidget\Block;

use Magento\Framework\View\Element\Template;
use Magento\Framework\Pricing\PriceCurrencyInterface;
use Magento\Framework\Registry;

class ProductWidget extends Template
{
    protected $priceCurrency;
    protected $registry;

    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        PriceCurrencyInterface $priceCurrency,
        Registry $registry,
        array $data = []
    ) {
        $this->priceCurrency = $priceCurrency;
        $this->registry = $registry;
        parent::__construct($context, $data);
    }

    public function getProduct()
    {
        $product = $this->registry->registry('current_product');
        return $product;
    }

    public function getFormattedPrice()
    {
        $product = $this->getProduct();
        if ($product) {
            $price = $product->getFinalPrice();
            return $this->priceCurrency->format($price, false, 2);
        }
        return null;
    }

    public function getCurrencyCode()
    {
        return $this->priceCurrency->getCurrency()->getCurrencyCode();
    }
}
