<?php

class MageProfis_UrlIndexer_Model_Observer_Noroute
{
    public function searchRedirects($event)
    {
        $request = Mage::app()->getRequest();
        Mage::helper('urlindexer/redirect')->handleRedirectByRequest($request);
        return $this;
    }

}
