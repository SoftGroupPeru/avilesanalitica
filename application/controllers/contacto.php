<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contacto extends CI_Controller {

	public function __construct() {
        parent::__construct();
         $this->data['title']= "Contacto - Avilés Analítica";
				 $this->data['url']= base_url();
    }

	public function index()
	{
		$this->data['contacto'] = TRUE;

		$this->load->view('header_view', $this->data);
		$this->load->view('Contacto/contacto_view');
		$this->load->view('footer_view', $this->data);
	}


}


//END CONTACTO Controller
