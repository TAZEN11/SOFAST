<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

<<<<<<< HEAD
	// eror saya 
=======
	
>>>>>>> a8d5780db937f5800594d38ca386a73ec9adc96e
	public function index()
	{
        $mainView = 'home/index';
		$this->load->view('template',compact('mainView'));
	}
}
