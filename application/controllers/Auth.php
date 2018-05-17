<?php 


/**
 * 
 */ 
class Auth extends CI_Controller
{
	
	public function logina()
	{
		echo'Login Pagee';
	}
	public function registera()
	{
		if (isset($_POST['registera'])) {
			$this->form_validation->set_rules('username', 'Username', 'required');
			$this->form_validation->set_rules('email', 'Email', 'required');
			$this->form_validation->set_rules('password', 'Pasword', 'required|min_length[5]');
			$this->form_validation->set_rules('password', 'Confirm Password', 'required|min_length[5]|matches[password]');
			$this->form_validation->set_rules('phone', 'Phone', 'required|min_length[5]');
			//if form validation true


			if ($this->form_validation->run()  == TRUE){
				echo 'form validated';
				//add user in database
			}
			
		}


		//load view

		$this->load->view('registera'); 
	}

	
}