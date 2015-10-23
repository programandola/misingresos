<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct(){

		parent::__construct();
		
		$this->layout->setLayout('template');
		
		if($this->session->userdata('login')){
		
			header("Location:".base_url()."home");
		
		}
	
	}


	public function index(){
		
        $this->layout->setTitle('Mis Ingresos - Login');

		$this->layout->view('login');

	}


	public function logea(){

		//primero debemos validar que el usuario y pass no vengan vacios
		if($_POST["login"]=="" && $_POST["pass"]==""){

			echo "<p>Ingresa tu Correo y Password para Accesar</p>";

			exit;

		}else
			if($_POST["login"]=="" or $_POST["pass"]==""){

				echo "<p>Ingresa tu Correo y/ó Password</p>";

				exit;

		}

		//despues llamamos al metodo que valida que el user exista en la base de datos
		$this->usuarios_model->login();

	}


	public function recupera_password(){
		//primero validamos que no venga el campo correo vacio
		if($_POST["correo"]==""){

			echo "Ingresa tu Correo para recuperar tu password";

			exit;

		}

		echo "Se envio un email a tu cuenta de correo para restablecer el password";
	
	}

	
	public function salir(){

		$this->usuarios_model->cerrar_sesion();
		
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */