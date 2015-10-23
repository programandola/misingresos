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






}//end class