<?php
class Error404 extends CI_Controller {

	 public function __construct(){
        parent::__construct();
		$this->data['url']=$this->config->item("base_url");

		// CARGAR LOS MODELOS PARA EL ADMINISTRADOR DE CONTENIDOS
	    //$this->load->model("Categoria_model","Categoria");
    }

	 public function index(){
		 $this->data["title"]= "Avilés Analítica";
		 $this->load->view("header_view",$this->data);
		 $this->load->view("error404_view");
		 $this->load->view("footer_view");
	 }

}
//END ERROR404 CONTROLLER
