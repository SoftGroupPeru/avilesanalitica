<?php
/**
* PRODUCTOS
*
* @copyright  2016 SoftGroup Perú
* @version    1.0
* @link       http://softgroup-peru.com/
*/

 class Producto_model extends CI_Model{
	 function __construct(){
        parent::__construct();
  }


    public function estadosProductos(){
      $query = $this->db->query('SELECT
                                (SELECT COUNT(idProducto) FROM `producto`
                                		WHERE producto_seminuevo = 1 AND estado = 1
                                	) AS seminuevo,
                            		(SELECT COUNT(idProducto) FROM `producto`
                            		  WHERE producto_nuevo = 1 AND estado = 1
                                	) AS nuevo
                                FROM producto LIMIT 1');
      $resultado = $query->result();
      return $resultado;
    }

    function filas(){
  		$consulta = $this->db->get('producto');
  		return  $consulta->num_rows() ;
  	}

    public function totalProductos($por_pagina,$segmento){
      $this->db->select('p.idProducto, p.nombre, p.imagen, p.stock, p.serie, p.parte, p.cantidad, m.nombre as marca, p.producto_nuevo as nuevo, p.producto_seminuevo as seminuevo');
      $this->db->from('producto p');
      $this->db->join('marca m', 'm.idMarca = p.Marca_idMarca');
      $this->db->where('p.estado', 1);
      $this->db->limit($por_pagina, $segmento);
      $consulta = $this->db->get();
      $resultado = $consulta->result();
      return $resultado;
    }

 }
