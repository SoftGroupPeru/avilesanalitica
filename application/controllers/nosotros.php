<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nosotros extends CI_Controller {

	public function __construct() {
        parent::__construct();
         $this->data['title']= "Contacto - Avilés Analítica";
				 $this->data['url']= base_url();
    }

	public function index()
	{
		$this->data['nosotros'] = TRUE;

		$this->load->view('header_view', $this->data);
		$this->load->view('Nosotros/nosotros_view');
		$this->load->view('footer_view', $this->data);
	}


}


//END NOSOTROS Controller
