<?php

class DownloadController extends BaseController {

	private $download;

	public function __construct(){
		parent::__construct();
		$this->download = new Download;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function getSoftIndex()
	{
		$this->cVariable['softBasicData'] = $this->download->getDownloadBasicInfo('soft');
		return View::make('Download.SoftIndex', $this->cVariable);
	}

	public function getDocIndex()
	{
		//$this->cVariable['softBasicData'] = $this->download->getDownloadBasicInfo('soft');
		return View::make('Download.DocIndex', $this->cVariable);
	}





}
