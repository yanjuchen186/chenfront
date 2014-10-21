<?php

class ProductController extends BaseController {

	private $product;

	public function __construct(){
		parent::__construct();
		$this->product = new Product;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function getIndex()
	{
		//产品与服务简介
		//$this->cVariable['productItem'] = $this->product->getCategory();
		return View::make('Product.ProductIndex', $this->cVariable);
	}

	public function getProductInfo($type, $tid, $vid){
		// var_dump($this->cVariable['currInfo']);

		if($type == "product"){
			//获取当前产品或服务详细信息
			$this->cVariable['currInfo'] = $this->product->getProductBasicInfo($tid);

			$detailInfo = $this->product->getProductDetailInfos($tid, $vid);

			$this->cVariable['detailData'] = $detailInfo;

			
		}else if($type == "service"){
			//return View::make('Product.ServiceInfo', $this->cVariable);
			//查看当前服务是否有子类
			$taxonomy = new Taxonomy;

			$childData = $taxonomy->getChildTermsData($tid);

			if(!empty($childData)){
				//父类基本信息
				$this->cVariable['currInfo'] = $taxonomy->getTermData($tid);
				//var_dump($this->cVariable['currInfo']);
				//有子类
				//显示多个子类的信息
				$this->cVariable['sData'] = $this->product->getServiceAllData($childData);
				// echo "<pre>";
				// print_r($this->cVariable['sData']);
				// echo "</pre>";
				//exit;
				return View::make('Product.ServiceInfo', $this->cVariable);
			}else{
				//获取当前产品或服务详细信息
				$this->cVariable['currInfo'] = $this->product->getProductBasicInfo($tid);
				
				//没有子类
				$detailInfo = $this->product->getProductDetailInfos($tid, $vid);

				$this->cVariable['detailData'] = $detailInfo;
			}
		}
		return View::make('Product.ProductInfo', $this->cVariable);

		
	}

}
