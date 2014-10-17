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

	public function getProductInfo($tid){

	}

}
