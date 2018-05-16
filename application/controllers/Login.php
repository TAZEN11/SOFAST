<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper(['url','form']);
        $this->load->model('Logina_model', 'logina', true);
    }
	public function index()
	{
		$this->load->view('login_page');
	}
}