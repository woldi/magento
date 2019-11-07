<?php

class CartObserver_Model_AddedProduct
{
    public function handle(Varien_Event_Observer $observer)
    {
        $product = $observer->getEvent()->getProduct();

        Mage::log(
            sprintf('[%s] %s added to cart', $product->getSku(), $product->getName()),
            Zend_Log::DEBUG,
            'cart-observer.log'
        );
    }
}
