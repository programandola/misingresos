<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ingresos extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->layout->setLayout('template');
		if(!$this->session->userdata('login')){
			header("Location:".base_url());
		}
	}

	public function index(){
		//$this->load->view('hola');
		$ingresos=$this->ingresos_model->ingresos();
		$sumaingresos=$this->ingresos_model->get_all_ingresos();
		$this->layout->view('index', compact('ingresos', 'sumaingresos'));

	}


	public function form_add(){

		$this->layout->view('form-add');

	}

	public function add_ingreso(){
		//validaciones campos vacios

		if( $_POST["concepto"] == "" ){

			echo "<strong>¡Error!</strong> Ingresa el concepto";

			exit;

		}else
			if( $_POST["descripcion"] == "" ){

			echo "<strong>¡Error!</strong> Ingresa la Descripción";

			exit;

		}else
			if( $_POST["ingreso"] == "" ){

			echo "<strong>¡Error!</strong> Ingresa el Ingreso";

			exit;

		}else
			if( $_POST["fecha"] == "" ){

			echo "<strong>¡Error!</strong> Selecciona la Fecha";

			exit;

		}

	
		$this->ingresos_model->add_ingreso();

	}

	public function edit_ingreso(){

		$ingreso=$this->ingresos_model->get_ingreso_por_id($_POST["id_ingreso"]);
		
		$this->layout->view('edit-ingreso', compact('ingreso'));

	}

	public function update_ingreso(){



		if( $_POST["concepto"] == "" ){

			echo "<strong>¡Error!</strong> Ingresa el concepto";

			exit;

		}else
			if( $_POST["descripcion"] == "" ){

			echo "<strong>¡Error!</strong> Ingresa la Descripción";

			exit;

		}else
			if( $_POST["ingreso"] == "" ){

			echo "<strong>¡Error!</strong> Ingresa el Ingreso";

			exit;

		}else
			if( $_POST["fecha"] == "" ){

			echo "<strong>¡Error!</strong> Selecciona la Fecha";

			exit;

		}

	
		$this->ingresos_model->update_ingreso();

		echo "success";


	}


	public function delete_ingreso($id_ingreso){

		$this->ingresos_model->delete_ingreso($id_ingreso);

		redirect('http://localhost/iegresos/ingresos','refresh');

	}

	public function get_ingresos_fechas(){

		$ingresos=$this->ingresos_model->get_ingresos_fechas();

		$this->layout->view('ingresos_fechas', compact('ingresos'));

	}




}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */