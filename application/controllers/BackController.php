<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
date_default_timezone_set('Africa/Lagos');

class BackController extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->library('grocery_CRUD');
        $this->load->helper('url');
        $this->load->library('form_validation');
        $this->load->database();

    }

    public function index()
    {
		  $this->load->helper('url');

        $this->load->view('traveler/back');
    }

    public function destination()
    {
        $crud = new grocery_CRUD();

		//nom table
        $crud->set_table('destination');
		//fichier image
        $crud->set_field_upload('image','assets/images');
        $crud->set_field_upload('Background','assets/images');
        $output = $crud->render();

        $this->_example_output($output);
    }
	public function service()
    {
        $crud = new grocery_CRUD();

		//nom table
        $crud->set_table('service');
		//fichier image
      
        $output = $crud->render();

        $this->_example_output($output);
    }
	public function team()
    {
        $crud = new grocery_CRUD();

		//nom table
        $crud->set_table('team');
		//fichier image
        $crud->set_field_upload('image','assets/images');
        $crud->set_field_upload('Background','assets/images');
        $output = $crud->render();

        $this->_example_output($output);
    }
	public function blog()
    {
        $crud = new grocery_CRUD();

		//nom table
        $crud->set_table('blog');
		//fichier image
        $crud->set_field_upload('image','assets/images');
        $crud->set_field_upload('Background','assets/images');
        $output = $crud->render();

        $this->_example_output($output);
    }

    function _example_output($output = null)

    {    $this->load->helper('url');

        $this->load->view('traveler/back',$output);
    }
}