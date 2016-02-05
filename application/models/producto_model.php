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

    public function totalProductos(){
      $this->db->select('p.idProducto, p.nombre, p.stock, p.serie, p.parte, p.cantidad, m.nombre as marca');
      $this->db->from('producto p');
      $this->db->join('marca m', 'm.idMarca = p.Marca_idMarca');
      $this->db->where('p.estado', 1);
      $this->db->limit(6);
      $consulta = $this->db->get();
      $resultado = $consulta->row();
      return $resultado;
    }

 }
