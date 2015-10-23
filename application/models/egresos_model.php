<?php
class Egresos_model Extends CI_Model{

	//metodo para extraer todos los clientes
	public function get_egresos(){	

		$query=$this->db
		->select("id_egreso, fecha, concepto, descripcion, egreso")
		->select("DATE_FORMAT(fecha, '%d-%m-%Y') as fecha", FALSE)
		->from("egresos")
		->order_by('fecha','desc')
		->get();

		return $query->result();

	}

	public function get_all_egresos(){

		$query=$this->db
		->select_sum("egreso")
		->from("egresos")
		->get();

		return $query->row();

	}

	//metodo para agregar pago
	public function add_egreso(){	

		$arreglo=array(
						"concepto"=>$_POST["concepto"],
						"egreso"=>$_POST["egreso"],
						"descripcion"=>$_POST["descripcion"],
						"fecha"=>$_POST["fecha"],
						"id_usuario"=>$this->session->userdata('idUser')
				       );

	    $this->db->insert('egresos', $arreglo);

	    echo "success";

	}


	public function get_egreso_por_id($id_egreso){

		$query=$this->db
		->select("id_egreso, concepto, egreso, descripcion, fecha, id_usuario")
		->from("egresos")
		->where("id_egreso",$id_egreso)
		->get();

		return $query->row();
	
	}

	public function update_egreso(){


		$datos=array("concepto"=>$_POST["concepto"],
			         "egreso"=>$_POST["egreso"],
			         "descripcion"=>$_POST["descripcion"],
			         "fecha"=>$_POST["fecha"],
			         "id_usuario"=>$this->session->userdata('idUser')
					);

		$this->db->where('id_egreso', $_POST["id_egreso"]);

		$this->db->update('egresos', $datos);

	
	}

	public function get_egresos_fechas(){

		$where=array();

		$where['fecha >=']=$_POST["fechaDe"];
		$where['fecha <=']=$_POST["fechaA"];

		$query=$this->db
		->select("id_egreso, concepto, egreso, descripcion, fecha, id_usuario")
		->select("DATE_FORMAT(fecha, '%d-%m-%Y') as fecha", FALSE)
		->from("egresos")
		->where($where)
		->order_by('fecha','asc')
		->get();

		return $query->result();

	}



	public function delete_egreso($id_egreso){

		$this->db->delete('egresos', array('id_egreso'=>$id_egreso));

	}

	public function get_egresos_todos_los_meses(){

		$egresos=array();

		$enero=$this->db
		->select_sum("egreso")
		->from("egresos")
		->where('fecha >=','2015-01-01')
		->where('fecha <=','2015-01-31')
		->get();

		$result=$enero->row();

		$egresos[]=$result->egreso;

		$febrero=$this->db
		->select_sum("egreso")
		->from("egresos")
		->where('fecha >=','2015-02-01')
		->where('fecha <=','2015-02-31')
		->get();

		$result=$febrero->row();
		
		$egresos[]=$result->egreso;

		$marzo=$this->db
		->select_sum("egreso")
		->from("egresos")
		->where('fecha >=','2015-03-01')
		->where('fecha <=','2015-03-31')
		->get();

		$result=$marzo->row();
		
		$egresos[]=$result->egreso;

		$abril=$this->db
		->select_sum("egreso")
		->from("egresos")
		->where('fecha >=','2015-04-01')
		->where('fecha <=','2015-04-31')
		->get();

		$result=$abril->row();
		
		$egresos[]=$result->egreso;

		$mayo=$this->db
		->select_sum("egreso")
		->from("egresos")
		->where('fecha >=','2015-05-01')
		->where('fecha <=','2015-05-31')
		->get();

		$result=$mayo->row();
		
		$egresos[]=$result->egreso;

		$junio=$this->db
		->select_sum("egreso")
		->from("egresos")
		->where('fecha >=','2015-06-01')
		->where('fecha <=','2015-06-31')
		->get();

		$result=$junio->row();
		
		$egresos[]=$result->egreso;

		$julio=$this->db
		->select_sum("egreso")
		->from("egresos")
		->where('fecha >=','2015-07-01')
		->where('fecha <=','2015-07-31')
		->get();

		$result=$julio->row();
		
		$egresos[]=$result->egreso;

		$agosto=$this->db
		->select_sum("egreso")
		->from("egresos")
		->where('fecha >=','2015-08-01')
		->where('fecha <=','2015-08-31')
		->get();

		$result=$agosto->row();
		
		$egresos[]=$result->egreso;

		$septiembre=$this->db
		->select_sum("egreso")
		->from("egresos")
		->where('fecha >=','2015-09-01')
		->where('fecha <=','2015-09-31')
		->get();

		$result=$septiembre->row();
		
		$egresos[]=$result->egreso;

		$octubre=$this->db
		->select_sum("egreso")
		->from("egresos")
		->where('fecha >=','2015-10-01')
		->where('fecha <=','2015-10-31')
		->get();

		$result=$octubre->row();
		
		$egresos[]=$result->egreso;

		$noviembre=$this->db
		->select_sum("egreso")
		->from("egresos")
		->where('fecha >=','2015-11-01')
		->where('fecha <=','2015-11-31')
		->get();

		$result=$noviembre->row();
		
		$egresos[]=$result->egreso;

		$diciembre=$this->db
		->select_sum("egreso")
		->from("egresos")
		->where('fecha >=','2015-12-01')
		->where('fecha <=','2015-12-31')
		->get();

		$result=$diciembre->row();
		
		$egresos[]=$result->egreso;

	
		return $egresos;		

	}

	
}//end class

