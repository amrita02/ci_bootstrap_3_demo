<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Quick_link extends Admin_Controller {

	public function index()
	{
		$crud = $this->generate_crud('quick_links','*');
		$crud->columns('link');
		//$crud = $this->generate_crud('quick_links');
		$this->mPageTitle = 'Quick Links';
		$this->render_crud();
	}
	
	
}
