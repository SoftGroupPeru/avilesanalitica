<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct() {
        parent::__construct();
         $this->data['title']= "Avilés Analítica - Soluciones para su laboratorio";
				 $this->data['url']= base_url();
    }

	public function index()
	{
		$this->data['home'] = TRUE;

		$this->load->view('header_view', $this->data);
		$this->load->view('home_view');
		$this->load->view('footer_view', $this->data);
	}

}


//END HOME Controller
