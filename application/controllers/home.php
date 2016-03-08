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

    public function index(){
    	$this->load->view('flash');
    }

	public function index2()
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

		//$body['totalProductos'] = $this->Producto->totalProductos();
		//echo $this->db->last_Query();
		//PAGINACION
		$this->load->library('pagination'); //Cargamos la librería de paginación
		$config['base_url'] = base_url().'home/productos/'; // parametro base de la aplicación, si tenemos un .htaccess nos evitamos el index.php
		$config['total_rows'] = $this->Producto->filas();//calcula el número de filas
		$config['per_page'] = 9; //Número de registros mostrados por páginas
    $config['num_links'] = 3; //Número de links mostrados en la paginación
 		$config['first_link'] = 'Primera';//primer link
		$config['last_link'] = 'Última';//último link
    $config["uri_segment"] = 3;//el segmento de la paginación
		$config['next_link'] = '<i class="fa fa-angle-right"></i>';//siguiente link
		$config['prev_link'] = '<i class="fa fa-angle-left"></i>';//anterior link
		$config['prev_tag_open'] = '<li>';
		$config['prev_tag_close'] = '</li>';
		$config['next_tag_open'] = '<li>';
		$config['next_tag_close'] = '</li>';
		$config['num_tag_open'] = '<li>';
		$config['num_tag_close'] = '</li>';
		$config['cur_tag_open'] = '<li class="active"><a href="#">';
		$config['cur_tag_close'] = '</a></li>';
		$config['first_tag_open'] = '<li>';
		$config['first_tag_close'] = '</li>';
		$config['last_tag_open'] = '<li>';
		$config['last_tag_close'] = '</li>';

		$this->pagination->initialize($config); //inicializamos la paginación
		$body["totalProductos"] = $this->Producto->totalProductos($config['per_page'],$this->uri->segment(3));


		$this->load->view('header_view', $this->data);
		$this->load->view('Productos/productos_view',$body);
		$this->load->view('footer_view', $this->data);
	}

}


//END HOME Controller
