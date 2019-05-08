<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
		$this->load->model('DestinationModel');
		$Destination=$this->DestinationModel->get3Destination();
	    $this->load->model('ServiceModel');
		$Service=$this->ServiceModel->get3Service();
	   
		$data = array();
		$data['Service']= $Service;
	   
		
		$data['Destination']= $Destination;
		
	    $this->load->view('traveler/index',$data);
	}

	public function goListeDestination()
	{	
		$this->load->helper('url');
		$this->load->model('DestinationModel');
		
		$Destination=$this->DestinationModel->getAllDestination();
	   
	   
		$data = array();
		$data['Destination']= $Destination;
		
		$this->load->view('traveler/destination', $data);
	}
	
	public function goService(){
		$this->load->helper('url');
		$this->load->model('ServiceModel');
		$Service=$this->ServiceModel->getAllService();
	   
	   
		$data = array();
		$data['Service']= $Service;
		$this->load->view('traveler/service', $data);
	}
	public function goTeam(){
		$this->load->helper('url');
		$this->load->model('TeamModel');
		$Team=$this->TeamModel->getAllTeam();
	   
	   
		$data = array();
		$data['Team']= $Team;
		$this->load->view('traveler/about', $data);
	}
	public function goBlog(){
		$this->load->helper('url');
		$this->load->model('BlogModel');
		$Blog=$this->BlogModel->getAllBlog();
	   
	   
		$data = array();
		$data['Blog']= $Blog;
		$this->load->view('traveler/blog', $data);
	}
	public function goAdmin(){
		$this->load->helper('url');
		$this->load->view('traveler/login');
	}
	
	/* public function goPanier()
	{	
		$this->load->helper('url');
		$this->load->model('PanierModel');
		$Panier=$this->PanierModel->getDetPanierByIDPanier(9);
		
	   
	    // $idCategorie = $this->input->post('id');
		//$SousCate=$this->SousCateModel->getSousCate($idCategorie);
		//echo $idCategorie;
		 
		$data = array();
		$data['Panier']= $Panier;
		$this->load->view('ato/product_summary',$data);
	}
	public function goListeFacture()
	{	
		$this->load->helper('url');
		$this->load->model('FacturePModel');
		/*$offset=$this->input->post("offset");
		$limit=$this->input->post("limit"); 
		
		$Facture=$this->FacturePModel->getAllFacturePagine(0,3);
		
	   
	    // $idCategorie = $this->input->post('id');
		//$SousCate=$this->SousCateModel->getSousCate($idCategorie);
		//echo $idCategorie;
		 
		$data = array();
		$data['Liste']= $Facture;
		$data['offset']= 0;
		$this->load->view('ato/ListeFacture',$data);
	} */
	
	
}
