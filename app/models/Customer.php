<?php
class Customer extends Eloquent{

	public function getCustomerList(){
		//客户数据
		$cusData = $this->getCustomerData();
		//客户分类数据
		$cusTerm = $this->getCustomerTerm();

		$newData = array();

		if(!empty($cusTerm)){
			foreach ($cusData as $key => $value) {
				$currTid = $value->tid;
				//找到当前客户属于哪个分类
				foreach ($cusTerm as $kkey => $kvalue) {
					if($kvalue['tid'] == $currTid){
					   $cusTerm[$kkey]['termChild'][] = (array)$cusData[$key];
					   break;
					}else{
					   if(isset($kvalue['child']) && !empty($kvalue['child'])){
					   	  //查看当前客户是否属于二级分类
					   	  foreach ($kvalue['child'] as $ckey => $cvalue) {
					   	  	 if($currTid == $cvalue['tid']){
					   	  	 	$cusTerm[$kkey]['child'][$ckey]['termChild'][] = (array)$cusData[$key];
					   	  	 	break;
					   	  	 }
					   	  }//$kvalue['child']
					   }
					}

				}//$cusTerm

			}//$cusData
		}
		if(!empty($cusTerm)){
		   //当出现一级分类与二级分类同时有数据时，将一级分类数据 整合进二级分类
		   foreach ($cusTerm as $key => $value) {
		   	   if(!empty($value['termChild']) && $value['child']){
		   	   	  if(isset($value['child'][0])){
		   	   	  	 $cusTerm[$key]['child'][0]['termChild'] = array_merge($value['termChild'], $value['child'][0]['termChild']);
		   	   	  	  $cusTerm[$key]['termChild'] = array();
		   	   	  }
		   	   }
		   }
		}
		return $cusTerm;
	}

	public function getCustomerData(){
		$sql =" SELECT
					t1.*
				FROM
					eta_customer t1
				ORDER BY  t1.sort  DESC ";
				//echo $sql;
		$result = DB::select($sql);
		return $result;
	}

	public function getCustomerTerm(){
		$taxonomy = new Taxonomy;
		$customerData = array();
		$termsItem = $taxonomy->getTermsData(5);

		if(!empty($termsItem)){
			foreach ($termsItem as $key => $value) {
				if($value->pid == 0){
					$customerData[$value->tid]['name'] = $value->name;
					$customerData[$value->tid]['sort'] = $value->weight;
					$customerData[$value->tid]['tid'] = $value->tid;
					$customerData[$value->tid]['termChild'] = array();
					if(!isset($customerData[$value->tid]['child'])){
						$customerData[$value->tid]['child'] = array();
					}
				}else{
					if(isset($customerData[$value->pid]['child'])){
						$customerData[$value->pid]['child'][] = array(
							'name' => $value->name,
							'sort' => $value->weight,
							'tid' => $value->tid,
							'termChild' => array(),
						);
					}else{
						$customerData[$value->pid]['child'] = array();
					}
				}
			}

			
			$customerData = $this->KKSort($customerData);
			
		}

		return $customerData;
		
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