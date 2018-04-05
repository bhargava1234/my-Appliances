<?php

namespace App\Crawler;
use App\Product;
use PHPHtmlParser\Dom;
use PHPHtmlParser\Dom\Collection;
 
class SmallAppliancesClass {
	
	
	
	public function parseProductList()
    {
		
		 $dom = new Dom;
	     $dom->loadFromFile('https://www.appliancesdelivered.ie/search/small-appliances');
	     $products = $dom->find('div.search-results-product');
		 
        /** @var Collection $product */
         foreach ($products as $product) {
	     
		 $art = new Product;
		 $productId = $this->parseProductId($product);	
         $art->pro_appliance_id =md5(uniqid(rand(), true));
		 $art->pro_external_id = $productId;
		 $art->pro_title=$this->parseProductTile($product);
		 $art->pro_description = $this->parseProductDescription($product);
		 $art->pro_image=$this->parseProductImageUrl($product);
		 $art->pro_category='Small Appliances';
		 $art->pro_price_amount=$this->parseProductPriceAmount($product);
		 $art->pro_price_currency='EUR';
		 $art->save();
         
        } 

        //return $products;
    }
	
	private function parseProductDescription($product)
    {
       
        $description = $product->find('ul.result-list-item-desc-list')->innerHtml();
        return empty($description) ? '' : "<ul>$description</ul>";
    }

    
    private function parseProductUrl($product)
    {
      
        return $product->find('h4')->find('a')->getAttribute('href');
    }
  
	
	 private function parseProductTile($product)
    {
        
        return $product->find('h4')->find('a')->innerHtml();
    }
	
	private function parseProductId($product)
    {
        $productUrl = $this->parseProductUrl($product);
        if (preg_match("/\/(\d+)$/", $productUrl, $matches)) {
            return $matches[1];
        }
        return null;
    }
	
	 private function parseProductImageUrl($product)
    {
       
        return $product->find('div.product-image')->find('img.img-responsive')->getAttribute('src');
    }
	
	private function parseProductPriceAmount($product)
    {
        
        $price = $product->find('h3')->innerHtml();
        $price = str_replace('&euro;', '', $price);
        $price = str_replace(',', '', $price);
        $priceInCents = round($price * 100);
        return $priceInCents;
    }
  
}
 

?>