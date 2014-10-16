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
		$this->initTemplate();		
		
	}

	private function initParam(){
		$this->cVariable['webTitle'] = 'ETA';
	}

	private function initLogin(){
		if (Auth::check()){
		    // The user is logged in...
		    $userInfo = Session::get('userInfo');
		    //var_dump($userInfo);
		    $this->cVariable['userInfo'] = unserialize($userInfo);
		}else{
			return Redirect::guest('login');
		}
	}

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

	
}
