<?php
class Ingresos_model Extends CI_Model{


	public function ingresos(){

		$query=$this->db
		->select("id_ingreso, fecha, concepto, descripcion, ingreso")
		->select("DATE_FORMAT(fecha, '%d-%m-%Y') as fecha", FALSE)
		->from("ingresos")
		->where("id_usuario",$this->session->userdata('idUser'))
		->order_by('fecha','desc')
		->get();

		return $query->result();
	
	}

	public function get_all_ingresos(){

		$query=$this->db
		->select_sum("ingreso")
		->from("ingresos")
		->where("id_usuario",$this->session->userdata('idUser'))
		->get();

		return $query->row();

	}

	public function get_ingresos_todos_los_meses(){

		$ingresos=array();

		$enero=$this->db
		->select_sum("ingreso")
		->from("ingresos")
		->where('fecha >=','2015-01-01')
		->where('fecha <=','2015-01-31')
		->where("id_usuario",$this->session->userdata('idUser'))
		->get();

		$result=$enero->row();

		$ingresos[]=$result->ingreso;

		$febrero=$this->db
		->select_sum("ingreso")
		->from("ingresos")
		->where('fecha >=','2015-02-01')
		->where('fecha <=','2015-02-31')
		->where("id_usuario",$this->session->userdata('idUser'))
		->get();

		$result=$febrero->row();
		
		$ingresos[]=$result->ingreso;

		$marzo=$this->db
		->select_sum("ingreso")
		->from("ingresos")
		->where('fecha >=','2015-03-01')
		->where('fecha <=','2015-03-31')
		->where("id_usuario",$this->session->userdata('idUser'))
		->get();

		$result=$marzo->row();
		
		$ingresos[]=$result->ingreso;

		$abril=$this->db
		->select_sum("ingreso")
		->from("ingresos")
		->where('fecha >=','2015-04-01')
		->where('fecha <=','2015-04-31')
		->where("id_usuario",$this->session->userdata('idUser'))
		->get();

		$result=$abril->row();
		
		$ingresos[]=$result->ingreso;

		$mayo=$this->db
		->select_sum("ingreso")
		->from("ingresos")
		->where('fecha >=','2015-05-01')
		->where('fecha <=','2015-05-31')
		->where("id_usuario",$this->session->userdata('idUser'))
		->get();

		$result=$mayo->row();
		
		$ingresos[]=$result->ingreso;

		$junio=$this->db
		->select_sum("ingreso")
		->from("ingresos")
		->where('fecha >=','2015-06-01')
		->where('fecha <=','2015-06-31')
		->where("id_usuario",$this->session->userdata('idUser'))
		->get();

		$result=$junio->row();
		
		$ingresos[]=$result->ingreso;

		$julio=$this->db
		->select_sum("ingreso")
		->from("ingresos")
		->where('fecha >=','2015-07-01')
		->where('fecha <=','2015-07-31')
		->where("id_usuario",$this->session->userdata('idUser'))
		->get();

		$result=$julio->row();
		
		$ingresos[]=$result->ingreso;

		$agosto=$this->db
		->select_sum("ingreso")
		->from("ingresos")
		->where('fecha >=','2015-08-01')
		->where('fecha <=','2015-08-31')
		->where("id_usuario",$this->session->userdata('idUser'))
		->get();

		$result=$agosto->row();
		
		$ingresos[]=$result->ingreso;

		$septiembre=$this->db
		->select_sum("ingreso")
		->from("ingresos")
		->where('fecha >=','2015-09-01')
		->where('fecha <=','2015-09-31')
		->where("id_usuario",$this->session->userdata('idUser'))
		->get();

		$result=$septiembre->row();
		
		$ingresos[]=$result->ingreso;

		$octubre=$this->db
		->select_sum("ingreso")
		->from("ingresos")
		->where('fecha >=','2015-10-01')
		->where('fecha <=','2015-10-31')
		->where("id_usuario",$this->session->userdata('idUser'))
		->get();

		$result=$octubre->row();
		
		$ingresos[]=$result->ingreso;

		$noviembre=$this->db
		->select_sum("ingreso")
		->from("ingresos")
		->where('fecha >=','2015-11-01')
		->where('fecha <=','2015-11-31')
		->where("id_usuario",$this->session->userdata('idUser'))
		->get();

		$result=$noviembre->row();
		
		$ingresos[]=$result->ingreso;

		$diciembre=$this->db
		->select_sum("ingreso")
		->from("ingresos")
		->where('fecha >=','2015-12-01')
		->where('fecha <=','2015-12-31')
		->where("id_usuario",$this->session->userdata('idUser'))
		->get();

		$result=$diciembre->row();
		
		$ingresos[]=$result->ingreso;

	
		return $ingresos;		

	}

	//metodo para agregar cliente
	public function add_ingreso(){	

		$arreglo=array(
						"concepto"=>$_POST["concepto"],
						"ingreso"=>$_POST["ingreso"],
						"descripcion"=>$_POST["descripcion"],
						"fecha"=>$_POST["fecha"],
						"id_usuario"=>$this->session->userdata('idUser')
				       );

	    $this->db->insert('ingresos', $arreglo);

	    echo "success";

	}


	public function get_ingreso_por_id($id_ingreso){

		$query=$this->db
		->select("id_ingreso, concepto, ingreso, descripcion, fecha, id_usuario")
		->from("ingresos")
		->where("id_ingreso",$id_ingreso)
		->get();

		return $query->row();
	
	}

	public function update_ingreso(){


		$datos=array("concepto"=>$_POST["concepto"],
			         "ingreso"=>$_POST["ingreso"],
			         "descripcion"=>$_POST["descripcion"],
			         "fecha"=>$_POST["fecha"],
			         "id_usuario"=>$this->session->userdata('idUser')
					);

		$this->db->where('id_ingreso', $_POST["id_ingreso"]);

		$this->db->update('ingresos', $datos);

		

	}


	public function get_ingresos_fechas(){

		$where=array();

		$where['fecha >=']=$_POST["fechaDe"];
		$where['fecha <=']=$_POST["fechaA"];

		$query=$this->db
		->select("id_ingreso, concepto, ingreso, descripcion, fecha, id_usuario")
		->select("DATE_FORMAT(fecha, '%d-%m-%Y') as fecha", FALSE)
		->from("ingresos")
		->where($where)
		->order_by('fecha','asc')
		->get();

		return $query->result();

	}


	public function delete_ingreso($id_ingreso){

		$this->db->delete('ingresos', array('id_ingreso'=>$id_ingreso));

	}



}//end class