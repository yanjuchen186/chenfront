<?php

class HomeController extends BaseController {
	private $home;

	public function __construct(){
		parent::__construct();
		$this->home = new Home;
	}

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function getIndex(){
		// var_dump(file_exists("http://192.168.2.70/eta/public/upload/slide/20141021035916_slide-v1.png"));
		//幻灯片
		$this->cVariable['bannerData'] = $this->home->getBannerData();

		//推荐产品与服务
		$this->cVariable['psData'] = $this->home->psRecommend();

		//行业客户
		$this->cVariable['customerData'] = $this->home->getCustomerData();

		//新闻推荐
		$this->cVariable['newsData'] = $this->home->getNewsData();
		echo "<pre>";
		print_r($this->cVariable['newsData']);
		echo "</pre>";
		
		return View::make('HomeIndex', $this->cVariable);
	}

	public function showWelcome()
	{
		return View::make('hello');
	}

}
