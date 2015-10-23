<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Autocompletado_model extends CI_Model
{
	
	public function buscador($match){
		//usamos after para decir que empiece a buscar por
		//el principio de la cadena
		//ej SELECT localidad from localidades_es 
		//WHERE localidad LIKE '%$abuscar' limit 12
		
	
		
	$query=$this->db
	->select("id_cliente, nombre, apellido_paterno, apellido_materno")
	->from("clientes")
	->like('nombre', $match, 'after')
	->or_like('apellido_paterno', $match, 'after')
	->get();

	return $query->result();
		

		/*
		$query=$this->db
		->select("id_usuario, nombre, login, correo, telefono, celular, direccion, status")
		->select("DATE_FORMAT(fecha_registro, '%d-%m-%Y %h:%i %p') as fecha_registro", FALSE)
		->from("usuarios")
		->where('id_usuarios_perfiles',1)
		->like('nombre', $_POST["nombre"])
		->get();

		return $query->result();
		

		
		/*
		$this->db->select('localidad');
		
		$this->db->like('localidad',$abuscar,'after');
		
		$resultados = $this->db->get('localidades_es', 12);
		
		//si existe algún resultado lo devolvemos
		if($resultados->num_rows() > 0)
		{
			
			return $resultados->result();
			
		//en otro caso devolvemos false
		}else{
			
			return FALSE;
			
		}
		*/
		
	}
	
}
/*
 * end application/models/autocompletado_model.php
 */