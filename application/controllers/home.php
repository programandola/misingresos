<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->layout->setLayout('template');
		if(!$this->session->userdata('login')){
			header("Location:".base_url());
		}
	}

	public function index(){
		
		$ingresos=$this->ingresos_model->get_ingresos_todos_los_meses();

		$egresos=$this->egresos_model->get_egresos_todos_los_meses();

		$ganancias=array();

		for($i=0; $i<=11; $i++){
			$ganancias[]=($ingresos[$i]-$egresos[$i]);
		}
		
		$this->layout->view('index', compact('ingresos', 'egresos', 'ganancias'));

	}


}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */