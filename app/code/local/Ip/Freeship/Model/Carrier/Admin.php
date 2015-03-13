<?php

class Ip_Freeship_Model_Carrier_Admin extends Mage_Shipping_Model_Carrier_Freeshipping
{

    /**
     * FreeShipping Rates Collector
     *
     * @param Mage_Shipping_Model_Rate_Request $request
     * @return Mage_Shipping_Model_Rate_Result
     */
    public function collectRates(Mage_Shipping_Model_Rate_Request $request)
    {
        if (!Mage::app()->getStore()->isAdmin()) {
            return false;
        }

        return parent::collectRates($request);
    }
}