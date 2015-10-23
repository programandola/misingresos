<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ganancias extends CI_Controller {

	private $match;

	public function __construct(){
		
		parent::__construct();
		
		$this->layout->setLayout('template');
		
		if(!$this->session->userdata('login')){
			
			header("Location:".base_url());
		
		}

	}


	public function index(){

		$ingresos=$this->ingresos_model->get_all_ingresos();

		$egresos=$this->egresos_model->get_all_egresos();

		$this->layout->view('index', compact('ingresos','egresos'));

	}


	public function get_pagos_cliente_nombre(){

		$pagos=$this->pagos_model->get_pagos_cliente_nombre();

		$this->layout->view('pagos_cliente_nombre', compact('pagos'));

	}

	public function get_pagos_cliente_fechas(){

		$pagos=$this->pagos_model->get_pagos_cliente_fechas();

		$this->layout->view('pagos_cliente_nombre', compact('pagos'));

	}

	public function addpago(){
		//validaciones campos vacios
		if( $_POST["nombre_completo"] == "" ){

			echo "<strong>¡Error!</strong> Ingresa el nombre ó apellido del cliente";

			exit;

		}else
			if( $_POST["concepto"] == "" ){

			echo "<strong>¡Error!</strong> Ingresa el Concepto de pago";

			exit;

		}else
			if( $_POST["monto"] == "" ){

			echo "<strong>¡Error!</strong> Ingresa el Monto";

			exit;

		}else
			if( $_POST["fecha"] == "" ){

			echo "<strong>¡Error!</strong> Ingresa la Fecha de pago";

			exit;

		}

		//validamos que exista el nombre del cliente
		$clientes=$this->clientes_model->get_clientes();

		foreach ($clientes as $cliente) {
			
			if( trim($_POST["nombre_completo"]) == trim($cliente->nombre." ".$cliente->apellido_paterno." ".$cliente->apellido_materno)){
				
				$this->match=true;

				$id_cliente=$cliente->id_cliente;
			
			}

		}

		//si coinciden procedo a agregar el pago
		if($this->match==true){
			
			$this->clientes_model->add_pago($id_cliente);


		}else{

			echo "El cliente no existe, no se puede agregar el pago";

			exit;

		}
	}



	//metodos de ayuda/////////////////////////////////////////////////////
	
	public function recorta_cadena($cadena, $numRecortar){

		$cadena=substr($cadena, 0, $numRecortar);

		return $cadena;

	}


}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */