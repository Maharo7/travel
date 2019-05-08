<?php
    class LoginModel extends CI_Model
    {
        public function checkLogin($login,$pass){			
               $sql = "select * from admin where login='".$login."' and password='".$pass."'";
             //   $sql = 'select count(*) from Utilisateur where login like user1 and password like pass1';
                $query = $this->db->query($sql);
                $ret = $query->row_array();
                return $ret;
            }
        
		/* public function getProduitByID($id){
            $query=$this->db->query("select * from produit where id='".$id."'");
			$result=$query->result_array();
			return $result;
        }
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