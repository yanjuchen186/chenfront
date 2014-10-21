<?php
/**
 *  git remote add origin https://github.com/chenchangmeng/eta.git
 *  558182  密码
 *  git push origin master
 *  ntpdate us.pool.ntp.org
 */
class BaseController extends Controller {

	/**
	 * 变量
	 */
	protected $cVariable = array();

	public function __construct(){
		//$this->beforeFilter('auth');
	
		//检查登录情况
		//$this->initLogin();
		$this->initParam();
		$this->initMenu();
		$this->initTemplate();		
		
	}

	private function initParam(){
		$this->cVariable['webTitle'] = 'ETA';
	}

	public function initMenu(){
		$CCName = Route::currentRouteAction();
		$CCName = substr($CCName, 0, stripos($CCName, '@', 0));
		if(in_array($CCName, array('CareerController', 'PartnerController'))){
			$CCName = "CompanyController";
		}
		$this->cVariable['CCName'] = $CCName;
		$product = new Product;
		$this->cVariable['productItem'] = $product->getCategory();
	}

	// private function initLogin(){
	// 	if (Auth::check()){
	// 	    // The user is logged in...
	// 	    $userInfo = Session::get('userInfo');
	// 	    //var_dump($userInfo);
	// 	    $this->cVariable['userInfo'] = unserialize($userInfo);
	// 	}else{
	// 		return Redirect::guest('login');
	// 	}
	// }

	/**
	 * 初始化模版
	 */
	private function initTemplate(){
		$this->cVariable['header'] = View::make('header', $this->cVariable);
		$this->cVariable['menu'] = View::make('menu', $this->cVariable);
		$this->cVariable['footer'] = View::make('footer');
	}

	/**
	 * Setup the layout used by the controller.
	 *
	 * @return void
	 */
	protected function setupLayout()
	{
		if ( ! is_null($this->layout))
		{
			$this->layout = View::make($this->layout);
		}
	}

	public function str_escape($str){
		if($str){
		   $str = htmlspecialchars($str);
		   $str = str_replace(array('_', '%', '#'), '', $str);
		}
		return $str;
	}

	/**
	 * 发生错误时 返回面板页
	 */
	protected function backToDashboard(){
		return Redirect::to("career/career-index");
	}

	protected function initCurrentJs($js){
		$jsStr = "";
		if(is_array($js)){
		   foreach ($js as $key => $value) {
		   		$jsStr .= HTML::script($value);
		   }
		}else{
			$jsStr .= HTML::script($js);
		}
		return $jsStr;
	}

	protected function initCurrentCss($css){
		$cssStr = "";
		if(is_array($css)){
		   foreach ($css as $key => $value) {
		   		$cssStr .= HTML::style($value);
		   }
		}else{
			$cssStr .= HTML::style($css);
		}
		return $cssStr;
	}

	
}
