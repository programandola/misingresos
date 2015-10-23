<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Egresos extends CI_Controller {

	
	public function __construct(){
		
		parent::__construct();
		$this->layout->setLayout('template');
		if(!$this->session->userdata('login')){
			header("Location:".base_url());
		}

	}

	public function index(){

		$this->layout->setTitle('Mis Ingresos - Egresos');
		$egresos=$this->egresos_model->get_egresos();
		$sumaegresos=$this->egresos_model->get_all_egresos();
		$this->layout->view('index', compact('egresos','sumaegresos'));

	}


	public function form_add(){

		$this->layout->view('form-add');

	}


	public function add_egreso(){


		if( $_POST["concepto"] == "" ){
			echo "<strong>¡Error!</strong> Ingresa el concepto";
			exit;
		}else
			if( $_POST["descripcion"] == "" ){
			echo "<strong>¡Error!</strong> Ingresa la Descripción";
			exit;
		}else
			if( $_POST["egreso"] == "" ){
			echo "<strong>¡Error!</strong> Ingresa el Ingreso";
			exit;
		}else
			if( $_POST["fecha"] == "" ){
			echo "<strong>¡Error!</strong> Selecciona la Fecha";
			exit;
		}
		$this->egresos_model->add_egreso();


	}


	public function edit_egreso(){

		$egreso=$this->egresos_model->get_egreso_por_id($_POST["id_egreso"]);
		$this->layout->view('edit-egreso', compact('egreso'));

	}


	public function update_egreso(){

		if( $_POST["concepto"] == "" ){
			echo "<strong>¡Error!</strong> Ingresa el concepto";
			exit;
		}else
			if( $_POST["descripcion"] == "" ){
			echo "<strong>¡Error!</strong> Ingresa la Descripción";
			exit;
		}else
			if( $_POST["egreso"] == "" ){
			echo "<strong>¡Error!</strong> Ingresa el Egreso";
			exit;
		}else
			if( $_POST["fecha"] == "" ){
			echo "<strong>¡Error!</strong> Selecciona la Fecha";
			exit;
		}
		$this->egresos_model->update_egreso();
		echo "success";


	}

	public function get_egresos_fechas(){

		$egresos=$this->egresos_model->get_egresos_fechas();
		$this->layout->view('egresos_fechas', compact('egresos'));

	}


	public function delete_egreso($id_egreso){

		$this->egresos_model->delete_egreso($id_egreso);
		redirect('http://localhost/iegresos/egresos','refresh');

	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */