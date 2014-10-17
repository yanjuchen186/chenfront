<?php

class CustomerController extends BaseController {

	private $customer;

	public function __construct(){
		parent::__construct();
		$this->customer = new Customer;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function getIndex()
	{
		$termsItem = $this->customer->getCustomerList();
		// echo "<pre>";
		// print_r($termsItem);
		// echo "</pre>";
		$this->cVariable['termsItem'] = $termsItem;

		return View::make('Customer.CustomerIndex', $this->cVariable);
	}

}
