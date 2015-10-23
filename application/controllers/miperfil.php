<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Miperfil extends CI_Controller {

	public function __construct(){

		parent::__construct();
		$this->layout->setLayout('template');
		if(!$this->session->userdata('login')){
			header("Location:".base_url());
		}

	}

	public function index(){
		
		$this->layout->setTitle('Mis Ingresos - Mi perfil');
		$user=$this->usuarios_model->get_user_por_id();
		$this->layout->view('index', compact('user'));

	}

	public function update_user(){

		$this->usuarios_model->update_user();

	}


}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */