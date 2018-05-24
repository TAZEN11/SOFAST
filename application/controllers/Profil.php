<?php  
defined('BASEPATH') OR exit('No direct script access allowed');  

class Profil extends CI_Controller {  
    function __construct(){  
        parent::__construct();  
        // $this->simple_login->cek_login();  
       	$this->load->library(array('form_validation'));
		$this->load->helper(array('url','form'));
		$this->load->model('m_account'); //call model
    }  

    //Load Halaman dashboard
    public function index() {  
        // $this->load->view('profil/index');  
    	// $main_view='profil/input_info';
        $this->load->view('profil/index');
  }

    public function create()
    {
    	$this->form_validation->set_rules('id_user', 'NAME','required');
		$this->form_validation->set_rules('pekerjaan', 'PEKERJAAN','required');
		$this->form_validation->set_rules('jurusan','JURUSAN','required');
		$this->form_validation->set_rules('alamat','ALAMAT','required');
		$this->form_validation->set_rules('skill','SKILL','required');
		$this->form_validation->set_rules('angkatan','ANGKATAN','required');
		if($this->form_validation->run() == FALSE) {
			$this->load->view('profil/input_info');
		}else{
 
			// $data['name']   =    $this->input->post('name');
			$data['pekerjaan'] =    $this->input->post('pekerjaan');
			$data['jurusan']  =    $this->input->post('jurusan');
			$data['alamat'] =    $this->input->post('alamat');
			$data['skill'] =    $this->input->post('skill');
			$data['angkatan'] =    $this->input->post('angkatan');
 
			$this->m_account->info($data);
			 
			$pesan['message'] =    "Input Data Berhasil";
			 
			$this->load->view('account/v_success',$pesan);
		}
   	}



}  
