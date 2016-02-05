<?php
/**
* MARCAS
*
* @copyright  2016 SoftGroup Perú
* @version    1.0
* @link       http://softgroup-peru.com/
*/

 class Marca_model extends CI_Model{
	 function __construct(){
        parent::__construct();
  }


    public function listadoMarcas(){
      $query = $this->db->query('SELECT
                          m1.idMarca as id,
                          m1.nombre as nombre,
                          	(
                          		SELECT
                          			COUNT(p.idProducto)
                          		FROM
                          			producto P
                          		JOIN marca m ON idMarca = Marca_idMarca
                          		WHERE
                          			Marca_idMarca = m1.idMarca
                          	  AND m1.estado = 1
                          	) AS cantidad
                          FROM
                          	marca m1');
      $resultado = $query->result();
      return $resultado;
    }


 }
