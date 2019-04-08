<?php
class Codebaby_Instagramfeed_Block_Instagramfeed extends Mage_Core_Block_Template{
	protected $_instaToken = '';
	protected $_instaPage = '';
	
	private function getInstaToken()
	{
		return $this->_instaToken = Mage::getStoreConfig('instagram_block_tab/instagramconfiggroup/instagramtoken',Mage::app()->getStore());
	}

	private function getInstaPageCount()
	{
		return $this->_instaPage = Mage::getStoreConfig('instagram_block_tab/instagramconfiggroup/instagrampagecount',Mage::app()->getStore());
	}

	public function getInstaTitle()
	{
		$instaSectionTitle = Mage::getStoreConfig('instagram_block_tab/instagramconfiggroup/tituloinstasection',Mage::app()->getStore());
		if($instaSectionTitle):
			return $instaSectionTitle;
		endif;
		return false;
	}

	public function getInstaWrapperClass()
	{
		$instaWrapperClass = Mage::getStoreConfig('instagram_block_tab/instagramconfiggroup/instahtmlwrapper',Mage::app()->getStore());
		if($instaWrapperClass):
			return $instaWrapperClass;
		endif;
		return false;
	}

	public function getTamanhoPost()
	{
		$tamanhoPost= Mage::getStoreConfig('instagram_block_tab/instagramconfiggroup/tamanhopost',Mage::app()->getStore());
		if($tamanhoPost):
			return $tamanhoPost;
		endif;
		return false;
	}

	public function getInstaTitleWrapper()
	{
		$titleWrapper = Mage::getStoreConfig('instagram_block_tab/instagramconfiggroup/instatitlewrapper',Mage::app()->getStore());
		if($titleWrapper):
			return $titleWrapper;
		endif;
		return false;
	}

	public function getInstaTitleClass()
	{
		$instaTitleClass = Mage::getStoreConfig('instagram_block_tab/instagramconfiggroup/instatitleclass',Mage::app()->getStore());
		if($instaTitleClass):
			return $instaTitleClass;
		endif;
		return false;
	}

	public function getInstaItemClass()
	{
		$instaItemClass = Mage::getStoreConfig('instagram_block_tab/instagramconfiggroup/instaitemclass',Mage::app()->getStore());
		if($instaItemClass):
			return $instaItemClass;
		endif;
		return false;
	}
	public function getInstaItensWrapperClass()
	{
		$instaItensWrapperClass = Mage::getStoreConfig('instagram_block_tab/instagramconfiggroup/instaitenswrapperclass',Mage::app()->getStore());
		if($instaItensWrapperClass):
			return $instaItensWrapperClass;
		endif;
		return false;
	}
	
	public function getInstaRequest()
	{
		$access_token = $this->getInstaToken();
		$count = $this->getInstaPageCount();
		$urlReq = 'https://api.instagram.com/v1/users/self/media/recent/?access_token='.$access_token.'&count='.$count;
		$return = $this->instagramMagentoApiCurlConnect($urlReq);
		return $return->data;
	}
	
	private function instagramMagentoApiCurlConnect( $api_url ){
		$connection_c = curl_init(); // initializing
		curl_setopt( $connection_c, CURLOPT_URL, $api_url ); // API URL to connect
		curl_setopt( $connection_c, CURLOPT_RETURNTRANSFER, 1 ); // return the result, do not print
		curl_setopt( $connection_c, CURLOPT_TIMEOUT, 20 );
		$json_return = curl_exec( $connection_c ); // connect and get json data
		curl_close( $connection_c ); // close connection
		return json_decode( $json_return ); // decode and return
	}

	
}