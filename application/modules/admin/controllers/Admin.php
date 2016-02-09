<?php defined('BASEPATH') OR exit('No direct script access allowed');

	/**
	 * Controlador para el módulo de administracion
	 * @since  2015ene08	   
	 * @author hhchavezv
	 */

	class Admin extends MX_Controller {
	
		public function __construct(){		
			parent::__construct();
			$this->load->library("danecrypt");
			$this->load->library("email");	
					
		}
	
		/**
		 * Muestra la pagina login
		 * @author dmdiazf
		 * @since  10/11/2015
		 */
		public function index(){
			$data["header"] = "/template/navbar2";
			$data["view"] = "login";
			$this->load->view("layout",$data);
		}
		
		/**
		 * Validacion y autenticacion de usuarios
		 * @author dmdiazf	
		 * @since  10/11/2015
		 */
		public function userAuth(){			
			header('Content-Type: application/json');
			$data = array();						
			$this->load->model("usuario");
			$login = str_replace(array("<",">","[","]","^","'"),"",$this->input->post("txtUsuario"));
			$password = str_replace(array("<",">","[","]","^","'"),"",$this->input->post("txtPassword"));
			if ($this->usuario->validarUsuarioCRYPT($login, $password)){
				$datosRegistro = array(						
					"C0I1_ENCUESTA" => $this->session->userdata("numform"),      
					/*"C3E24_NROHOG" => 1,      
					"CC_NRO_VIS" => $this->session->userdata("visita"),        
					"CC_HH_INI" => date("G"),         
					"CC_MM_INI" => date("i"),        
					"CC_HH_FIN" => null,        
					"CC_MM_FIN" => null,        
					"CC_DIA_ENT" => date("d"),       
					"CC_MES_ENT" => date("m"),       
					"CC_ANO_ENT" => date("Y"),       
					"CC_RES_ENT" => null,        
					"CC_COD_RECO" => null,    
					"CC_COD_SUPE" => null
					*/
					);
				//$this->usuario->guardarRegistroVisita($datosRegistro);
				$data["result"] = true;
				$data["url"] = base_url() . "admin/inicio";
				$data["message"] = "";				
				//$this->usuario->redireccionarUsuario();
			}
			else{
				//redirect("/","location",301);
				$data["result"] = false;
				$data["url"] = base_url()."admin";
				$data["message"] = "<strong>Usuario y/o contrase&ntilde;a errados.</strong> Intente nuevamente.";				
			}
			echo json_encode($data);				
		}

		/**
		 * Muestra formulario para recordatorio de contraseña
		 * @author dmdiazf
		 * @since 10/11/2015
		 */
		public function reminder(){
			$data["header"] = "/template/navbar2";
			$data["view"] = "reminder";
			$this->load->view("layout",$data);
		}
		
		/**
		 * Envio de correos para recordatorio de contraseña
		 * @author dmdiazf
		 * @since  10/11/2015
		 */
		public function olvido(){
			$this->load->model("usuario");			
			$arrayMeses = array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");			
			$arrayDias = array("Domingo", "Lunes", "Martes", "Miercoles", "Jueves", "Viernes", "Sabado");
			$email = $this->input->post("txtReminder");
			$usuario = $this->usuario->recordarEmail($email);
			if (count($usuario) > 0){
				$config = array(
					"protocol" => "smtp",
					"smtp_host" => "192.168.1.98",
					"smtp_port" => 25,
					"smtp_crypto" => "tls",
					"smtp_user" => "aplicaciones@dane.gov.co",
					"smtp_pass" => "Ou67UtapW3v",
					"mailtype" => "html",
					"charset" => "utf-8",
					"newline" => "\r\n"
				);
				
				$this->email->initialize($config);
				$data["usuario"] = $usuario["usuario"];
				$data["password"] = $usuario["password"];
				$data["fecha"] = $arrayDias[date('w')].", ".date('d')." de ".$arrayMeses[date('m')-1]." de ".date('Y');
				$data["user"] = $this->usuario->obtenerDatosUsuario($email);
				$this->email->from("ecenso@dane.gov.co", "Departamento Administrativo Nacional de Estadística - DANE");
				$this->email->to($email);
				$this->email->subject("Recordatorio de Contraseña / E-Censo Departamento Administrativo Nacional de Estadística - DANE");
				$html = $this->load->view("mailrec",$data,true);
				$this->email->message($html);
				//var_dump($this->email->print_debugger());
				if ($this->email->send()){					
					$data["header"] = "/template/navbar2";
					$data["view"] = "login";
					$data["enviado"] = true;
					$data["mensaje"] = "<strong>Mensaje Enviado.</strong> Su contrase&ntilde;a ha sido enviada a la direcci&oacute;n de correo indicada.";
					$this->load->view("layout",$data);
				}
			}
			else{
				$data["header"] = "/template/navbar2";
				$data["view"] = "login";
				$data["enviado"] = false;
				$data["mensaje"] = "<strong>No se ha podido enviar el mensaje.</strong> La direcci&oacute;n de correo electr&oacute;nico indicada no existe en nuestra base de datos.";
				$this->load->view("layout",$data);					
			}
		}
		
		
		/**
		 * Cierra la sesion y sale del aplicativo
		 * @author dmdiazf
		 * @since  22/10/2015
		 */
		public function salir(){
			$this->load->model("usuario");
			/*$visita = $this->session->userdata("visita");
			$num_form = $this->session->userdata("numform");
			$this->usuario->registroSalida($visita, $num_form);	*/	
			$this->session->sess_destroy();
			redirect("/admin","location",301);
		}
		
		/**
		 * Abre pantalla inicial de administracion
		 * @author hhchavezv
		 * @since  2015ene08
		 */
		public function inicio(){
			$this->load->library("validarsesion");	
			$data["header"] = "/template/navbar_admin";
			$data["view"] = "inicio";
			$this->load->view("layout",$data);
		}
		
		/**
		* Muestra el formulario para realizar la búsqueda de usuarios 
		* @author hhchavezv	
		* @since  2016ene12
		*/	
		public function usuarios(){
			$this->load->library("validarsesion");	
			$data["header"] = "/template/navbar_admin";
			$this->load->model("Usuario");
			$data["view"] = "usuarios";
			$this->load->view("layout",$data);	
		}
		
		/**
		* Obtiene datos en formato JSON para llenar el grid de tabla usuarios
		* @author hhchavezv
		* @since  2016ene12
		*/
		public function busquedaUsuariosAJAX($txtEmail,$txtNroId,$txtNombre1,$txtNombre2,$txtApellido1,$txtApellido2){
			$this->load->library("validarsesion");
			header("Content-Type: text/plain; charset=utf-8");
			
			// Para decodificar caracteres especiales
			$txtEmail=urldecode($txtEmail);
			$txtNroId=urldecode($txtNroId);
			$txtNombre1=urldecode($txtNombre1);
			$txtNombre2=urldecode($txtNombre2);
			$txtApellido1=urldecode($txtApellido1);
			$txtApellido2=urldecode($txtApellido2);
			
			$this->load->model("usuario");
			$usuarios = $this->usuario->busquedaUsuarios($txtEmail,$txtNroId,$txtNombre1,$txtNombre2,$txtApellido1,$txtApellido2);
			echo json_encode($usuarios);
		}

		/**
		* Valida si hay sesion activa
		* @author hhchavezv
		* @since  2016ene12
		*/
		public function validaSesion(){
			$this->load->library("validarsesion");
			header("Content-Type: text/plain; charset=utf-8");
			$usuario=$this->session->userdata("id");
			//print_r($this->session->all_userdata() );
			if ( empty ($usuario ))
				echo 'Error';
			else
				echo '-ok-';
		}		
		
	/**
	 * Muestra el detalle desde la opcion "Ver" en el Grid Panel de la busqueda de usuarios
	 * @author hhchavezv	
	 * @since  2015ene13
	 */
	public function mostrarDetalleUsuario($formulario){
		$this->load->library("validarsesion");	
		$data["header"] = "/template/navbar_admin";
		
		$this->load->model("usuario");
		$data["formulario"] = $formulario;
		$data["view"] = "detalleUsuario";
		$data["usuario"] = $this->usuario->datosUsuario($formulario);
		$data["gridPersonas"]=$this->usuario->GridPersonasHogar($formulario);
		$this->load->view("layout",$data);		
	}	

	/**
	 * Muestra el detalle desde la opcion "Ver" en el Grid Panel de la busqueda de usuarios
	 * @author hhchavezv	
	 * @since  2015ene13
	 */
	public function editarUsuario($formulario){
		$this->load->library("validarsesion");	
		$data["header"] = "/template/navbar_admin";
		
		$this->load->model("usuario");
		$data["formulario"] = $formulario;
		$data["view"] = "editarUsuario";
		$data["usuario"] = $this->usuario->datosUsuario($formulario);
		
		$this->load->view("layout",$data);		
	}

	/**
	 * Actualiza un usuario
	 * @author hhchavezv
	 * @since  2015ene14
	 */
	 public function updateUsuario(){
			$this->load->library("validarsesion");	
			
			header('Content-Type: application/json');
			$this->load->model("usuario");
			$data = array();
			
			if($this->usuario->existeEmail($_POST["txtUsuario"],$_POST["hd_formul"]))
			{
				$data["result"] = "email";				
			}
			else
			{
			
				if($this->usuario->updateUsuario($_POST) )
					{	
						$data["result"] = true;
						$data["formulario"] = $_POST["hd_formul"];
					}
				else{
						$data["result"] = false;
				}
			}			
			echo json_encode($data);		
					
		}
	
		/**
		* Muestra el formulario para realizar la búsqueda de personas registradas en un hogar 
		* @author hhchavezv	
		* @since  2016ene15
		*/	
		public function personas(){
			$this->load->library("validarsesion");	
			$data["header"] = "/template/navbar_admin";
			$this->load->model("Persona");
			$data["view"] = "personas";
			$this->load->view("layout",$data);	
		}

		/**
		* Obtiene datos en formato JSON para llenar el grid de tabla peronas
		* @author hhchavezv
		* @since  2016ene15
		*/
		public function busquedaPersonasAJAX($txtNroId,$txtNombre1,$txtNombre2,$txtApellido1,$txtApellido2){
			$this->load->library("validarsesion");
			header("Content-Type: text/plain; charset=utf-8");
			// Para decodificar caracteres especiales
			$txtNroId=urldecode($txtNroId);
			$txtNombre1=urldecode($txtNombre1);
			$txtNombre2=urldecode($txtNombre2);
			$txtApellido1=urldecode($txtApellido1);
			$txtApellido2=urldecode($txtApellido2);
			
			$this->load->model("persona");
			$personas = $this->persona->busquedaPersonas($txtNroId,$txtNombre1,$txtNombre2,$txtApellido1,$txtApellido2);
			echo json_encode($personas);
		}
		/**
	 * Muestra el detalle desde la opcion "Ver" en el Grid Panel de la busqueda de usuarios
	 * @author hhchavezv	
	 * @since  2015ene13
	 */
	public function mostrarDetalleHogar($formulario){
		$this->load->library("validarsesion");	
		$data["header"] = "/template/navbar_admin";
		
		$this->load->model("usuario");
		$data["formulario"] = $formulario;
		$data["view"] = "detalleHogar";
		$data["usuario"] = $this->usuario->datosUsuario($formulario);
		$data["gridPersonas"]=$this->usuario->GridPersonasHogar($formulario);
		$this->load->view("layout",$data);		
	}
		/*** ELIMINAR ESTE METODO ***
		public function test(){
			$key = "AX1aj2gAhT7f1857-XH6Ockj710vyyY7mX2_u9lhpmg";
			$password = $this->danecrypt->decode($key); 
			//$password = $this->danecrypt->encode($key); 
			var_dump($password);
		}*/
				
	}//EOC
