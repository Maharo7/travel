<?php
    class DestinationModel extends CI_Model
    {
        public function getAllDestination(){
            $query=$this->db->query('select * from destination');
            $result=$query->result_array();
			return $result;
        }
		
		public function get3Destination(){
            $query=$this->db->query('select * from destination limit 3');
            $result=$query->result_array();
			return $result;
        }
        
		 public function getDestiByID($id){
            $query=$this->db->query("select * from destination where id='".$id."'");
			$result=$query->result_array();
			return $result;
			
        }
		/*
		public function getProduitByID2($id){
            $query=$this->db->query("select * from produit where id='".$id."'");
			$result=$query->row_array();
			return $result;
        }
		
			
		public function rechercher($nomProd){
           $query=$this->db->query("select * from produit where `index` like '%".$nomProd."%'");
		     // $this->db->select('*');
            //$this->db->like('index', $nomProd);
			//$query = $this->db->get("produit");
			$result=$query->result_array();
			return $result;
        }
		
        public function insertProduit($nom,$description,$image,$idCategorie,$prix){

            $this->nom = $nom;
          
            $this->description = $description;
			$this->image=$image;
            $this->idCategorie = $idCategorie;
            $this->prix=$prix;
           
            $this->db->insert('produit', $this); 
		  // $query=$this->db->query('insert into produit values(null,'.$nom.','.$description.','.$image.','.$idCategorie.','.$prix.')');
        }
      public function getAllCate(){
            $query=$this->db->query('SELECT * FROM categorie');
            $result=$query->result_array();
			return $result;
        } */
    }
?>