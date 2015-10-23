<?php
class Usuarios_model Extends CI_Model{


	//metodo para login
	public function login(){

		$pass_sha1=sha1($_POST["pass"]);

		$where=array("correo"=>$_POST["login"],"pass"=>$pass_sha1);
		$query=$this->db
		->select("id_usuario, nombre, correo, login, pass")
		->from("usuarios")
		->where($where)
		->get();

		$row=$query->row();

		//si existe el usuario 
		if($query->num_rows() > 0){
				//asignar una sesion de usuario y cambiar el menu de registro y login a mi cuenta y cerrar sesion
				 $sesion_data = array('login' => $row->nombre,
	                                  'pass' => $pass_sha1,
	                                  'idUser' => $row->id_usuario,
	                                  'correo'=>$row->correo
	                                 );

	            $this->session->set_userdata($sesion_data);
				echo "Success";
			
		}
		else{
			echo "<p>Correo y/ó Password no Validos</p>";
		}
		
	}

	public function get_user_por_id(){

		$query=$this->db
		->select("id_usuario, nombre, correo, login, pass")
		->from("usuarios")
		->where('id_usuario',$this->session->userdata('idUser'))
		->get();

		return $query->row();

	}


	public function update_user(){

		//validar que nombre y correo no vengan vacios
		if($_POST["nombre"] == ""){
			echo "Ingresa tu Nombre";
			exit;
		}
		if($_POST["correo"] == ""){
			echo "Ingresa tu Correo Electrónico";
			exit;
		}

		//si se mando la variable passnew procedemos a actualizar el password
		if(isset($_POST["passnew"])){

			//validamos que los campos no vengan vacios
			if($_POST["passactual"] == ""){
				echo "Ingresa tu Password Actual";
				exit;
			}else
				if($_POST["passnew"] == ""){
					echo "Ingresa tu Password Nuevo";
					exit;
			}else
				if($_POST["passnewc"] == ""){
					echo "Confirma el Password Nuevo";
					exit;
			}

			//validamos que el password actual coincida con el de la base de datos
			$query=$this->db
			->select("id_usuario, pass")
			->from("usuarios")
			->where('id_usuario',$this->session->userdata('idUser'))
			->get();

			$result=$query->row();

			$passwordActual=$result->pass;
			$passwordActualValidar=sha1($_POST["passactual"]);
			

			if( $passwordActual != $passwordActualValidar ){
				echo "El password actual no coincide, reintentalo porfavor!!!";
				exit;
			}

			//validamos que el password nuevo coincida con el confirmar password
			if($_POST["passnew"] != $_POST["passnewc"]){
				echo "El password nuevo no coincide con la confirmación, revisalos!!!";
				exit;
			}
			
			$datos=array( "nombre"=>$_POST["nombre"],
			              "correo"=>$_POST["correo"],
			              "pass"=>sha1($_POST["passnew"])
			            );
		}else{

			$datos=array( "nombre"=>$_POST["nombre"],
			              "correo"=>$_POST["correo"]
			            );
		}
				

		$this->db->where('id_usuario', $this->session->userdata('idUser'));
		
		$this->db->update('usuarios', $datos);

		echo "Tus datos se actualizaron correctamente";

	}

	public function cerrar_sesion(){

		$this->session->sess_destroy();

		header("Location:".base_url());
		
	}



	


}//end class

