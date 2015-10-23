<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Autocomplete extends CI_Controller
{
	
	public function __construct(){
		parent::__construct();
		$this->layout->setLayout('template');
		if(!$this->session->userdata('login')){
			header("Location:".base_url());
		}
	}
	
	
	
	public function autocompletar(){

		if($this->input->is_ajax_request() && $this->input->post('letra')){

			$res=$this->autocompletado_model->buscador($_POST["letra"]);

			if(count($res)>0){
				foreach ($res as $value) {
					?><p><a href="javascript:void(0);" onclick="option_select('<? echo $value->nombre." ".$value->apellido_paterno." ".$value->apellido_materno ; ?>','<? echo $value->id_cliente ?>')"><? echo $value->nombre." ".$value->apellido_paterno." ".$value->apellido_materno ?></a></p>
					<?php
				}
			}else{
				echo "<p>No existe el cliente</p>";
			}

		}
		
	}
	
}
/*
 * end application/controllers/autocompletado.php
 */