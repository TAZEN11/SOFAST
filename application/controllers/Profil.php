<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil extends CI_Controller {

	// eror saya 
	public function index()
	{
        $mainView = 'profil/index';
		$this->load->view('profil/t_profil',compact('mainView'));
	}
}
