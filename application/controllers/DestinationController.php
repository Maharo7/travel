<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DestinationController extends CI_Controller {
  public function index(){
	 $this->load->helper('url');
		
		$this->load->model('DestinationModel');
		$idDest = $this->input->post('idDest');
		$data['Destination']=$this->DestinationModel->getDestiByID($idDest);
		
		$this->load->view('traveler/singledestination', $data);
  }
  public function dest($idDest){
	 $this->load->helper('url');
		
		$this->load->model('DestinationModel');
		
		$data['Destination']=$this->DestinationModel->getDestiByID($idDest);
		
		$this->load->view('traveler/singledestination', $data);
  }
  /* public function insertDestination(){
	    $this->load->model('ProduitModel');
		$this->load->helper('url');	
		$this->load->library('session');		
	    $nomProd=$this->input->post("nomProduit");
		$description=$this->input->post("description");
		$prix=$this->input->post("prix");
		$image=$this->input->post("image");
		$idCate=$this->input->post("idCategorie");
	    $this->ProduitModel->insertProduit($nomProd,$description,$image,$idCate,$prix);
		redirect('ProduitController/index/error?err=1');
       // $this->load->view('index');
  }
  
  public function rechercher(){
	    $this->load->model('ProduitModel');
		$this->load->helper('url');	  
	    $nomProd=$this->input->post("nomProduit");
		
	  
	    $resultat= $this->ProduitModel->rechercher($nomProd);
      	 
		$data = array();
		$data['Produit']= $resultat;
		$this->load->view('ato/listeprod', $data);
  } */
 
}
