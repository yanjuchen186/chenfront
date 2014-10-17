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
		$this->cVariable['productItem'] = $this->product->getCategory();
		return View::make('Product.ProductIndex', $this->cVariable);
	}

	public function getProductInfo($type, $tid, $vid){
		//获取当前产品或服务详细信息
		$this->cVariable['currInfo'] = $this->product->getProductBasicInfo($tid);

		// var_dump($this->cVariable['currInfo']);

		if($type == "product"){
			$detailInfo = $this->product->getProductDetailInfos($tid, $vid);

			$this->cVariable['detailData'] = $detailInfo;

			return View::make('Product.ProductInfo', $this->cVariable);
		}else if($type == "service"){
			return View::make('Product.ServiceInfo', $this->cVariable);
		}

		
	}

}
