<?php

class PartnerController extends BaseController {
	private $partner;

	public function __construct(){
		parent::__construct();
		$this->partner = new Partner;
	}


	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function getIndex()
	{
		$this->cVariable['partnerData'] = $this->partner->getPartnerData();
		return View::make('Partner.PartnerIndex', $this->cVariable);
	}

}
