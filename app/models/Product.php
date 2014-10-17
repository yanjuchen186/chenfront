<?php
class Product extends Eloquent{

	public function getCategory(){
		//产品简介
		$productItem = $this->getPSTerm(4, 'product');
		
		//服务简介
		$serviceItem = $this->getPSTerm(6, 'service');
		

		return array_merge($productItem, $serviceItem);
	}

	public function getPSTerm($vid, $type="product"){
		$taxonomy = new Taxonomy;
		//产品简介
		$psItem = $taxonomy->getTermsData($vid);
		$termItem = array();
		if(!empty($psItem)){
		   foreach ($psItem as $key => $value) {
		   	   if($value->pid == 0){
		   	  		$termItem[] = array(
				   	  	'name' => $value->name,
				   	  	'url' => URL::to('product/product-info/'.$type.'/'.$value->tid),
				   	  	'enName' => $value->enName,
				   	  	'description' => $value->description,
				   	  	'sort' => $value->weight,
				   	  	'type' => $type
				   	);
		   	    }
		   }
		   //进行排序
		   $termItem = $this->KKSort($termItem);
		}

		return $termItem;
	}

	/**
	 * 冒泡排序
	 */
	public function KKSort($propertyMenu){
		sort($propertyMenu);
		$c = count($propertyMenu);
		for($i=0; $i<$c;$i++){
			for($j=$c-1; $j>$i; $j--){
				if($propertyMenu[$j]['sort'] > $propertyMenu[$j-1]['sort']){
					$tmp = $propertyMenu[$j];
					$propertyMenu[$j] =  $propertyMenu[$j-1];
					$propertyMenu[$j-1] = $tmp;
				}
			}
			if(isset($propertyMenu[$i]['child']) && !empty($propertyMenu[$i]['child'])){
				//递归
				$propertyMenu[$i]['child'] = $this->KKSort($propertyMenu[$i]['child']);
			}
		}
		return $propertyMenu;
	
	}

}