<?php
class Product extends Eloquent{

	/**
	 * 获取产品信息
	 */
	public function getProductBasicInfo($tid){
		$sql =" SELECT
					t1.*,
					t2.name as psName
				FROM
					eta_product t1
				LEFT JOIN eta_taxonomy_term_data t2 ON t1.tid = t2.tid
				WHERE t1.tid = {$tid}";
		$result = DB::select($sql);

		return $result;
	}

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
				   	  	'url' => URL::to('product/product-info/'.$type.'/'.$value->tid.'/'.$vid),
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

	public function getProductDetailInfos($tid, $vid){
		//获取产品与服务的属性
		$propertyData = $this->getPropertyData($vid);

		//获取产品属性详细信息
		$data = DB::table('product_info')
				->where('tid', '=', $tid)
				->orderBy('sort', 'desc')
				->get();
		// 		echo "<pre>";
		// var_dump($data[0]);
		// echo "</pre>";
		if(!empty($propertyData)){
			foreach ($propertyData as $key => $value) {
				foreach ($data as $kkey => $kvalue) {
					if($kvalue->type == $value['tid']){
						$propertyData[$key]['child'][] = (array)$data[$kkey];
					}
				}
			}
		}

		// $newData = array();
		// if(!empty($data)){
		// 	foreach ($data as $key => $value) {
		// 		$newData[$value->type][] = $data[$key];
		// 	}
		// }
		return $propertyData;
	}

	public function getPropertyData($vid){
		$taxonomy = new Taxonomy;
		//获取当前分类的属性
		$propetyData = array();
		$propertyMenu = array();
		if($vid == 4){
		   //产品属性
		   $propetyData = $taxonomy->getTermsData(10);
		}else if($vid == 6){
		   //服务属性
		   $propetyData = $taxonomy->getTermsData(11);
		}
		if(!empty($propetyData)){
			foreach ($propetyData as $key => $value) {
				if($value->pid == 0){
					$propertyMenu[$value->tid]['name'] = $value->name;
					$propertyMenu[$value->tid]['sort'] = $value->weight;
					$propertyMenu[$value->tid]['tid'] = $value->tid;
					$propertyMenu[$value->tid]['child'] = array();
				}
			}

			$propertyMenu = $this->KKSort($propertyMenu);
			
		}

		return $propertyMenu;
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