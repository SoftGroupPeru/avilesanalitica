<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct() {
        parent::__construct();
         $this->data['title']= "Avilés Analítica - Soluciones para su laboratorio";
				 $this->data['url']= base_url();
				 $this->load->model("Marca_model","Marca");
				 $this->load->model("Producto_model","Producto");
    }

	public function index()
	{
		$this->data['home'] = TRUE;

		$this->load->view('header_view', $this->data);
		$this->load->view('home_view');
		$this->load->view('footer_view', $this->data);
	}

	public function productos()
	{
		$this->data['productos'] = TRUE;
		$body['listadoMarcas'] = $this->Marca->listadoMarcas();
		$body['estadoProductos'] = $this->Producto->estadosProductos();

		$body['totalProductos'] = $this->Producto->totalProductos();
		//echo $this->db->last_Query();
		//PAGINACION

		$this->load->view('header_view', $this->data);
		$this->load->view('Productos/productos_view',$body);
		$this->load->view('footer_view', $this->data);
	}

}


//END HOME Controller
