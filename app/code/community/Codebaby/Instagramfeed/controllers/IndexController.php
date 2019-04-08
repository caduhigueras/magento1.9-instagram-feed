<?php
class Codebaby_Instagramfeed_IndexController extends Mage_Core_Controller_Front_Action
{   
    public function indexAction(){
    	$this->loadLayout();
        $bannerHtml = $this->getLayout()->createBlock('instagramfeed/instagramfeed')
                           ->setTemplate('page/instafeed.phtml');
        $this->getLayout()->getBlock('content')->append($bannerHtml);
        $this->renderLayout();
    }
}