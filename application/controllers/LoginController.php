<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginController extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		
		$this->load->helper('url');
		
		$this->load->view('ato/index');
		
		
	}
	public function testLogin(){		
		$this->load->model('LoginModel');   
	    $this->load->helper('url');
		$this->load->library('session');
		
	    $login = $this->input->post("user");			  
	    $pass = $this->input->post("pass");
		$valiny=$this->LoginModel->checkLogin($login,$pass);		
	    $data = array();
		$data['valiny']= $valiny;
		
       
		if($valiny!=null){ 
			$this->session->set_userdata('Id',$valiny[0]['id']);
			
			$this->session;
			redirect('Welcome');
		
			//$this->layout->view('garage/anatyindex',$data);
		}
		else{
				redirect('Welcome/error?err=1');
				//$this->layout->view('garage/login/error?err=0');
		}
	}
}
