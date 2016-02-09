<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	/**
	 * Modelo para la validación de ingreso de usuarios al aplicativo y, cosulta y edición de usuarios
	 * @author hhchavezv
	 * @since  2016ene12	 
	 **/

class Usuario extends CI_Model {

	function __construct(){
		parent::__construct();
		$this->load->library("danecrypt");
	}

	/**
	 * Valida que el login / contraseña de un usuario sea auténtico y que se encuentre registrado en la base de datos
	 * Contraseña Sin Encriptar
	 * @author DMDiazF
	 * @since  13/10/2015
	 **/
	public function validarUsuario($login, $password){
		$result = false;
		$sql = "SELECT *
		        FROM cnp_admin_usuarios
		        WHERE usuario = '$login'
		        AND estado = 1";
		$query = $this->db->query($sql);
		if ($query->num_rows() > 0){
			foreach($query->result() as $row){
				if (strcmp($row->CLAVE, $password)===0){					
					$sessionData = array("auth" => "OK",
										 "id" => $row->ID_USUARIOS,
										 "usuario" => $row->USUARIO,
										 "clave" => $row->CLAVE,
										 "tipo_usuario" => $row->TIPO_USUARIO,
										 "estado" => $row->ESTADO,
										 "fecha_creacion" => $row->FECHA_CREACION,
										 "fecha_expiracion" => $row->FECHA_EXPIRACION,
										 "numform" => $row->NRO_ENCUESTA_FORM,
										 "visita" => $visita);					
					$this->session->set_userdata($sessionData);
					$result = true;
				}
			}
		}
		$this->db->close();
		return $result;
	}
	
	/**
	 * Valida que el login / contraseña de un usuario sea auténtico y que se encuentre registrado en la base de datos
	 * Contraseña Encriptada
	 * @author DMDiazF	
	 * @since  13/10/2015
	 **/
	public function validarUsuarioCRYPT($login, $password){		
		$result = false;
		$sql = "SELECT U.id_usuarios_adm, CONCAT(CONCAT(U.NOMBRES, ' '), U.APELLIDOS) AS nombre, U.usuario, U.clave, U.tipo_usuario, U.estado, U.fecha_creacion, U.fecha_expiracion
				FROM cnp_admin_usuarios_adm U
				WHERE  LOWER(U.usuario) = LOWER('$login')
				AND U.estado = 1";			
		$query = $this->db->query($sql);
		if ($query->num_rows() > 0){
			foreach($query->result() as $row){
				$encrypt = $this->danecrypt->encode($password);
				if (strcmp($row->CLAVE, $encrypt)===0){
					
					$sessionData = array("auth" => "OK",
						                 "id" => $row->ID_USUARIOS_ADM,
						                 "nombre" => utf8_decode($row->NOMBRE),
						                 "usuario" => $row->USUARIO,
						                 "clave" => $row->CLAVE,
						                 "tipo_usuario" => $row->TIPO_USUARIO,
						                 "estado" => $row->ESTADO,
						                 "fecha_creacion" => $row->FECHA_CREACION,
						                 "fecha_expiracion" => $row->FECHA_EXPIRACION
							             );
					$this->session->set_userdata($sessionData);
					$result = true;
				}
			}
		}
		$this->db->close();
		return $result;
	}
	
	/**
	 * Luego de que el usuario y contraseña han sido validados, se redirecciona al usuario a cada módulo que corresponde según el rol de usuario.
	 * @author DMDiazF
	 * @since  13/10/2015
	 */
	public function redireccionarUsuario(){
		$rol = $this->session->userdata("tipo_usuario");
		switch($rol){
			case 'F': //Fuente
					  $controller = "inicio";
					  break;
			default:  //Login
					  $controller = "login";
					  break;				  
		}
		redirect($controller,"location",301);			
	}
	
	/**
	 * Función para recordar el usuario y la contraseña de acceso al aplicativo.
	 * @author DMDiazF
	 * @since  13/10/2015
	 */
	public function recordarEmail($email){
		$data = array();
		$sql = "SELECT usuario, clave
				FROM cnp_admin_usuarios_adm
				WHERE LOWER(usuario) = LOWER('$email')";
		$query = $this->db->query($sql);
		if ($query->num_rows() > 0){
			foreach($query->result() as $row){
				$data["usuario"] = strtolower($row->USUARIO);
				$data["password"] = $this->danecrypt->decode($row->CLAVE);
			}
		}
		$this->db->close();
		return $data;
	}
	
	
	/**
	 * Obtiene los nombres del usuario a partir del usuario (email)
	 * @author dmdiazf
	 * @since  28/10/2015	  
	 */
	public function obtenerDatosUsuario($email){
		$user = array();
		$sql = "SELECT U.nombres, U.apellidos 
				FROM cnp_admin_usuarios_adm U
				WHERE  U.usuario = '$email'";
		$query = $this->db->query($sql);
		if ($query->num_rows() > 0){
			foreach($query->result() as $row){
				$user["nombres"] = $row->NOMBRES; 
				$user["apellidos"] = $row->APELLIDOS; 
				
			}
		}
		$this->db->close();
		return $user;
	}
	
	
	/**
	 * Inserta el registro de la visita en la tabla de visitas
	 * @author dmdiazf
	 * @since  28/10/2015
	 */
	public function guardarRegistroVisita($datosRegistro){
		$result = false;
		if ($this->db->insert("CNPV_RESULTADOS_ENTREVISTA", $datosRegistro)){
			$result = true;
		}
		$this->db->close();
		return $result;
	}
	
	
	/**
	 * Obtiene el numero de la visita que está realizando el usuario.
	 * @author Daniel M. Díaz
	 * @since  28/10/2015
	 */
	private function obtenerNumeroVisita($nro_form){
		$visita = 0;
		$sql = "SELECT COUNT(*) AS total
				FROM cnpv_resultados_entrevista
				WHERE c0i1_encuesta = $nro_form";		
		$query = $this->db->query($sql);
		if ($query->num_rows() > 0){			
			foreach($query->result() as $row){
				$visita = $row->TOTAL + 1;				
			}
		}
		$this->db->close();
		return $visita;
	}
	
	/**
	 * Actualiza la tabla de resultados de la entrevista con la fecha... hora... de salida
	 * @author dmdiazf	
	 * @since  28/10/2015
	 */
	public function registroSalida($visita, $num_form){
		$estadoVisita = $this->obtenerEstadoVisitaFormulario($num_form);
		$data = array(
			"CC_HH_FIN" => date("G"),
			"CC_MM_FIN" => date("i"),
			"CC_RES_ENT" => $estadoVisita				
		);		
		$this->db->where("C0I1_ENCUESTA", $num_form);
		$this->db->where("CC_NRO_VIS", $visita);
		$this->db->update("CNPV_RESULTADOS_ENTREVISTA", $data);
	}
	
	/**
	 * Obtiene el estado general de diligenciamiento del formulario para indicar si el formulario completo diligenciado fue completo o incompleto
	 * @author dmdiazf
	 * @since  28/10/2015
	 */
	private function obtenerEstadoVisitaFormulario($num_form){
		$estado = 2; //La encuesta está incompleta. VALOR POR DEFECTO
		$sql = "SELECT sec_prereg, sec_vivi, sec_hogar, sec_pers
				FROM cnpv_admin_control
				WHERE nro_encuesta_form = $num_form";
		$query = $this->db->query($sql);
		if ($query->num_rows() > 0){
			$row = $query->row();
			if (($row->SEC_PREREG==2)&&($row->SEC_VIVI==2)&&($row->SEC_HOGAR==2)&&($row->SEC_PERS==2)){
				$estado = 1; //La encuesta está completa
			}
		}
		$this->db->close();
		return $estado;
	}
	
	/**
	 * Busqueda de usuarios de acuerdo a parametros
	 * @author hhchavezv
	 * @since  2016ene12
	 */
	public function busquedaUsuarios($txtEmail,$txtNroId,$txtNombre1,$txtNombre2,$txtApellido1,$txtApellido2){
			$usuarios = array();
			$sql = "SELECT U.id_usuarios, U.nro_encuesta_form, U.USUARIO, LOWER(U.USUARIO) AS usu_minuscula, P.cedula, P.primer_nombre, P.segundo_nombre, P.primer_apellido, P.segundo_apellido,
					C.FK_ESTADO, e.desc_estado
					FROM  cnp_admin_usuarios U
					LEFT JOIN cnp_preregistro P ON  U.nro_encuesta_form = P.nro_encuesta_form 
					LEFT JOIN  cnpv_admin_control C ON U.nro_encuesta_form = C.nro_encuesta_form 
					LEFT JOIN cnpv_param_estados E ON C.fk_estado = E.id_estado 
					WHERE 1=1 ";
			
			if ($txtEmail!='-'){
				$sql.= "AND U.USUARIO = '$txtEmail' ";
			}
			if ($txtNroId!='-' && $txtNroId!='0'){
				$sql .= "AND P.cedula = '$txtNroId' ";
			}
			if ($txtNombre1!='-'){
				$sql .= "AND LOWER(P.primer_nombre) LIKE LOWER('%$txtNombre1%') ";
			}
			if ($txtNombre2!='-'){
				$sql .= "AND LOWER(P.segundo_nombre) LIKE LOWER('%$txtNombre2%') ";
			}
			if ($txtApellido1!='-'){
				$sql .= "AND LOWER(P.primer_apellido) LIKE LOWER('%$txtApellido1%') ";
			}
			if ($txtApellido2!='-'){
				$sql .= "AND LOWER(P.segundo_apellido) LIKE LOWER('%$txtApellido2%') ";
			}
			
			
			
			$sql.=" ORDER BY  usu_minuscula ASC ";
			//echo $sql;
			$query = $this->db->query($sql);
			if ($query->num_rows() > 0){
				$i = 0;
				foreach($query->result() as $row){
					$usuarios[$i]["txtEmail"] = $row->USUARIO;
					$usuarios[$i]["txtNroId"] = $row->CEDULA;
					$usuarios[$i]["txtNombre1"] = $row->PRIMER_NOMBRE;
					$usuarios[$i]["txtNombre2"] = $row->SEGUNDO_NOMBRE;					
					$usuarios[$i]["txtApellido1"] = $row->PRIMER_APELLIDO;
					$usuarios[$i]["txtApellido2"] = $row->SEGUNDO_APELLIDO;
					$usuarios[$i]["txtEstado"] = $row->DESC_ESTADO;
					
					//$usuarios[$i]["opc"] = '<a href="'.site_url("/admin/mostrarDetalleUsuario/$row->NRO_ENCUESTA_FORM").'">Ver</a>';
					$usuarios[$i]["opc"] = '<a href="'.site_url("/admin/mostrarDetalleUsuario/$row->NRO_ENCUESTA_FORM").'">Ver</a> | <a href="'.site_url("/admin/editarUsuario/$row->NRO_ENCUESTA_FORM").'">Editar</a>';
					//$usuarios[$i]["opc"] = '<a href="'.site_url("/gh_usuariosadmin/mostrarDetalle/$row->ID_usuarios_ADMIN").'" title="Ver Solicitud">Ver</a> | <a  onclick="linkTramitarSolicitud('.$row->ID_usuarios_ADMIN.','.$row->FK_TRAMITE_ACTUAL.',\''.$interfaz.'\');" title="Tramitar Solicitud">Tramitar</a>';
				
					$i++;
				}
			}
			$this->db->close();
			return $usuarios;
		}
	
	/**
	 * Obtiene los datos del usuario a partir del id que se recibe por parámetro
	 * @author hhchavezv
	 * @since  2015ene13
	 */	
	public function datosUsuario($formulario){
		
		$data = array();
		$sql = " SELECT U.id_usuarios, U.USUARIO, LOWER(U.USUARIO) AS usu_minuscula, U.clave, U.estado, U.nro_encuesta_form,
				 P.cedula, P.C4P40_TIPO_DOC, P.primer_nombre, P.segundo_nombre, P.primer_apellido, P.segundo_apellido,
				 C.FK_ESTADO, e.desc_estado 
				 FROM  cnp_admin_usuarios U
				 LEFT JOIN cnp_preregistro P ON  U.nro_encuesta_form = P.nro_encuesta_form 
				 LEFT JOIN cnpv_admin_control C ON U.nro_encuesta_form = C.nro_encuesta_form 
				 LEFT JOIN cnpv_param_estados E ON C.fk_estado = E.id_estado
				 WHERE u.nro_encuesta_form='$formulario'";
				 
		$query = $this->db->query($sql);
		if ($query->num_rows() > 0){
			$row = $query->row();
			$data["id_usuarios"] = $row->ID_USUARIOS;
			$data["usuario"] = $row->USUARIO; 
			$data["clave"] = $this->danecrypt->decode($row->CLAVE); 
			$data["desc_estado"] = ($row->ESTADO == 1)?'Activo':'Inactivo';
			$data["estado"] = $row->ESTADO;			
			$data["nro_encuesta_form"] = $row->NRO_ENCUESTA_FORM; 
			$data["cedula"] = $row->CEDULA; 
			$data["tipoDoc"] = $this->nombreTipoDoc($row->C4P40_TIPO_DOC); 
			$data["primer_nombre"] = $row->PRIMER_NOMBRE; 
			$data["segundo_nombre"] = $row->SEGUNDO_NOMBRE; 
			$data["primer_apellido"] = $row->PRIMER_APELLIDO; 
			$data["segundo_apellido"] = $row->SEGUNDO_APELLIDO; 
			$data["estado_form"] = $row->DESC_ESTADO; 
			
		}
		$this->db->close();
		return $data;
	}

	/**
	 * Personas del hogar
	 * @author hhchavezv
	 * @since  2015ene13
	 */
	public function GridPersonasHogar($formulario){
		$data = array();
		//$formulario="900000159";
		/*$sql = "SELECT  C4P40_TIPO_DOC, 
					C4P41_SABE_DOC,
					C4P39A_1ER_NOMBRE,
					C4P39AA_2DO_NOMBRE,
					C4P39B_1ER_APELLIDO,
					C4P39BB_2DO_APELLIDO,
					C4P44_EDAD,
					C4P42_SEXO,
					JEFE,  
					SUM(NVL(case JEFE when 1 then 1 else 0 end, 0)) OVER () AS EXISTE, 
					SUM(NVL (completo, 0)) OVER () AS COMPLETO
					FROM CNP_PREREGISTRO_PERSONAS
					WHERE NRO_ENCUESTA_FORM='".$formulario."'
					ORDER BY DIRECTORIO";*/
		$sql = "SELECT  H.C0I1_ENCUESTA,
				H.C3P24_NROHOG,
				H.C4P41_NRO_PER,
				H.C4P42A_1ER_NOMBRE,
				H.C4P42B_1ER_APELLIDO,
				H.C4P43_TIPO_DOC,
				H.C4P44_NRO_DOC,
				LOWER(H.C4P44_NRO_DOC) AS DOC_MINUSCULA,
				R.C3R38B2_2NOMBRE,
				R.C3R38C2_2APELLIDO, 
				H.C4P47_EDAD,
				H.C4P45_SEXO				
				FROM CNPV_PERSONA_HOGAR H
				LEFT JOIN CNPV_PERSONA_RESIDENTE R ON (H.C0I1_ENCUESTA=R.C0I1_ENCUESTA AND H.C3P24_NROHOG=R.C3R24_NROHOG AND H.C4P41_NRO_PER = R.C3R38A_NRO_RESI)
				WHERE H.C0I1_ENCUESTA='".$formulario."'
				ORDER BY H.C0I1_ENCUESTA, H.C3P24_NROHOG, H.C4P41_NRO_PER  ";	
					
		$query = $this->db->query($sql);
		if ($query->num_rows() > 0){
			$i = 0;
			$existe=0;
			foreach($query->result() as $row){
								
				$data[$i]["C4P42A_1ER_NOMBRE"] = $row->C4P42A_1ER_NOMBRE;
				$data[$i]["C3R38B2_2NOMBRE"] = $row->C3R38B2_2NOMBRE;
				$data[$i]["C4P42B_1ER_APELLIDO"] = $row->C4P42B_1ER_APELLIDO;
				$data[$i]["C3R38C2_2APELLIDO"] = $row->C3R38C2_2APELLIDO;
				$data[$i]['C4P43_TIPO_DOC_DES']	=$this->nombreTipoDoc($row->C4P43_TIPO_DOC);					
				$data[$i]["C4P43_TIPO_DOC"] = $row->C4P43_TIPO_DOC;
				$data[$i]["C4P44_NRO_DOC"] = $row->C4P44_NRO_DOC;
				$data[$i]["C4P47_EDAD"] = $row->C4P47_EDAD;
				$data[$i]["C4P45_SEXO"] = $row->C4P45_SEXO;
				if ($row->C4P45_SEXO==1)
					$data[$i]['C4P45_SEXO_DES']  = "Hombre";
				else if ($row->C4P45_SEXO==2)
					$data[$i]['C4P45_SEXO_DES']  = "Mujer";
				else
					$data[$i]['C4P45_SEXO_DES']  = "";
				
				/*if ($row->JEFE==1)
					$data[$i]['C4P49_PARENTESCO_DES']  = "S&iacute;";
				else
					$data[$i]['C4P49_PARENTESCO_DES']  = "No";
				
				
				$data[$i]['C4P49_PARENTESCO']=$row->JEFE;
				 */
				$i++;
			}
	
		}
		$this->db->close();
		return $data;
	}
	
	function nombreTipoDoc($tipoDoc)
	{
		$nom="";
		switch ($tipoDoc)
			{
				case  1:
					$nom="RC";
				break;
				case  2:
					$nom="TI";
				break;
				case  3:
					$nom="CC";
				break;
				case  4:
					$nom="CE";
				break;
				case  5:
					$nom="NT";
				break;
				
					
			}	
		
		return $nom;
	}
		
	/**
	 * Actualiza informacion de usuario
	 * @author hhchavezv
	 * @since  2015ene14
	 */
	public function updateUsuario($datos)
	{
		$data = array();
		$data_registro = array();
		isset( $datos["txtUsuario"] ) ? $Usuario= $datos["txtUsuario"] : $Usuario='null';
		
		if ( isset( $datos["txtUsuario"] ) &&  $datos["txtUsuario"]!='' ) {
			$data["USUARIO"]=  $datos["txtUsuario"];
			$data_registro["CORREO_ELECTRONICO"]=  $datos["txtUsuario"];
		}		
		/*if ( isset( $datos["selEstado"] ) && $datos["selEstado"]!='-' && $datos["selEstado"]!='' ) {
			$data["ESTADO"]= $datos["selEstado"];
		}*/
		
		if ( isset( $datos["txtClave"]) && ($datos["txtClave"] !="") ) {
			$data["CLAVE" ]= $this->danecrypt->encode($datos["txtClave"]);
		}
		
		// Inicia transacción
		$this->db->trans_start();
		
		if (count($data)>0){
						
			$this->db->where("NRO_ENCUESTA_FORM", $datos["hd_formul"]);
            $this->db->update("CNP_ADMIN_USUARIOS", $data);
		}
		
		if (count($data_registro)>0){
						
			$this->db->where("NRO_ENCUESTA_FORM", $datos["hd_formul"]);
            $this->db->update("CNP_PREREGISTRO", $data_registro);
		}
		
		// FIn de transaccion
		$this->db->trans_complete();
		if ($this->db->trans_status() === FALSE)
		{
			$res= FALSE;			
			echo "Error al guardar. Intente nuevamente o actualice la p&aacute;gina.";
		}else
		{
			$res= TRUE;
		}	
		
		$this->db->close();
    	return $res;
		
	}
	
	/**
	 * Verificar si existe email en tabla usuarios
	 * @author hhchavezv
	 * @since  2015ene15
	 **/
	public function existeEmail($email, $formulario){
		$result = false;
		
		$sql = "SELECT USUARIO
		        FROM CNP_ADMIN_USUARIOS
		        WHERE NRO_ENCUESTA_FORM='$formulario'";
				 
		$query = $this->db->query($sql);
		if ($query->num_rows() > 0){
			$existe=1;
			$row = $query->row();
			$usuario_actual = $row->USUARIO; 			
		}
		else
		{
			$existe=0;
		}
		
		if( $usuario_actual != $email)
		{
			$sql = "SELECT USUARIO
		        FROM CNP_ADMIN_USUARIOS
		        WHERE USUARIO = '$email'";
			$query = $this->db->query($sql);
			if ($query->num_rows() > 0)
				$result=true;			
			else
				$result=false;
		}
		else
		{
			$result=false;	
		}
			
		$this->db->close();
		return $result;
	}
	
}//EOC
