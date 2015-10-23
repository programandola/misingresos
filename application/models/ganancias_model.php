<?php
class Ganancias_model Extends CI_Model{


	public function get_ganancias_por_mes($mesnumero){

		$where=array();

		switch ($mesnumero) {
			case '1':
				$where['fecha >=']='2015-01-01';
				$where['fecha <=']='2015-01-31';
			break;
			
			default:
				# code...
				break;
		}


		$query=$this->db
		->select("ingreso")
		->from("ingresos")
		->where($where)
		->order_by('fecha','asc')
		->get();

		return $query->row();
	
	}


	public function get_pago_por_id($id_pago){

		$query=$this->db
		->select("c.nombre, c.apellido_paterno, c.apellido_materno, p.concepto, p.monto")
		->select("DATE_FORMAT(p.fecha, '%d-%m-%Y') as fecha", FALSE)
		->from("clientes c")
		->join("pagos p","c.id_cliente=p.id_cliente","inner")
		->where("p.id_pago",$id_pago)
		->get();

		return $query->row();
	
	}

	public function get_pagos_cliente_nombre(){

		$query=$this->db
		->select("c.nombre, c.apellido_paterno, c.apellido_materno, p.concepto, p.monto, p.fecha")
		->select("DATE_FORMAT(p.fecha, '%d-%m-%Y') as fecha", FALSE)
		->from("clientes c")
		->join("pagos p","c.id_cliente=p.id_cliente","inner")
		->where("c.nombre", $_POST["search"])
		->or_where("c.apellido_paterno", $_POST["search"])
		->get();

		return $query->result();


	}

	public function get_pagos_cliente_fechas(){

	

		$where=array();

		$where['p.fecha >=']=$_POST["fechaDe"];
		$where['p.fecha <=']=$_POST["fechaA"];

		$query=$this->db
		->select("c.nombre, c.apellido_paterno, c.apellido_materno, p.concepto, p.monto")
		->select("DATE_FORMAT(p.fecha, '%d-%m-%Y') as fecha", FALSE)
		->from("clientes c")
		->join("pagos p","c.id_cliente=p.id_cliente","inner")
		->where($where)
		->get();

		return $query->result();


	}

}//end class