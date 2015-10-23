<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ganancias extends CI_Controller {

	public function __construct(){
		
		parent::__construct();	
		$this->layout->setLayout('template');	
		if(!$this->session->userdata('login')){		
			header("Location:".base_url());
		}

	}


	public function index(){

		$this->layout->setTitle('Mis Ingresos - Ganancias');
		$ingresos=$this->ingresos_model->get_all_ingresos();
		$egresos=$this->egresos_model->get_all_egresos();
		$this->layout->view('index', compact('ingresos','egresos'));

	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */