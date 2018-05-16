<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	// eror saya 
	public function index()
	{
        $mainView = 'home/index';
		$this->load->view('template',compact('mainView'));
	}
}
