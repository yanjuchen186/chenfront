<?php

class NewsController extends BaseController {

	private $news;

	public function __construct(){
		parent::__construct();
		$this->news = new News;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function getNewsList()
	{	
		//信息列表
		$this->cVariable['newsData'] = $this->news->getNewsList();
		return View::make('News.NewsList', $this->cVariable);
	}

	public function getNewsDetail($id){
		//current news
		$this->cVariable['currentNewsData'] = $this->news->getNewsDetail($id);
		
		if(empty($this->cVariable['currentNewsData'])){
			//跳转到首页
			return Redirect::to("home/index");
		}
		//var_dump($this->cVariable['currentNewsData']);
		return View::make('News.NewsDetail', $this->cVariable);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
