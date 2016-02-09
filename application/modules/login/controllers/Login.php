<?php defined('BASEPATH') OR exit('No direct script access allowed');

	/**
	 * Controlador para el módulo de Vivienda
	 * @since  22/09/2015	   
	 * @author dmdiazf
	 */

	class Login extends MX_Controller {
	
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
			$this->load->model("usuario");
			$inscripcion = $this->config->item("inscripcion");
			$data["reg"] = (!$this->usuario->validaCierreFechas($inscripcion["fec_ini"], $inscripcion["fec_fin"]))?false:true;				
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
			header("Content-Type: application/json; charset=utf-8");
			$data = array();						
			$this->load->model("usuario");
			$login = str_replace(array("<",">","[","]","^","'"),"",$this->input->post("txtUsuario"));
			$password = str_replace(array("<",">","[","]","^","'"),"",$this->input->post("txtPassword"));
			$inscripcion = $this->config->item("inscripcion"); //Obtengo las fechas de inscripcion de la encuesta
			$diligenciamiento = $this->config->item("diligenciamiento"); //Obtengo las fechas de diligenciamiento de la encuesta
			
			//Valido que la fecha actual de la B.D. esté entre las fechas de inicio de inscripcion y fecha de fin del diligenciamiento
			if ($this->usuario->validaCierreFechas($inscripcion["fec_ini"], $diligenciamiento["fec_fin"])){
				if ($this->usuario->validarUsuarioCRYPT($login, $password)){
					$datosRegistro = array(
				 		"C0I1_ENCUESTA" => $this->session->userdata("numform"),
				 		"C3E24_NROHOG" => 1,
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
				 		"CC_COD_SUPE" => null);
				 	$this->usuario->guardarRegistroVisita($datosRegistro);
				 	$data["result"] = true;
				 	$data["url"] = base_url() . "inicio";
				 	$data["message"] = "";
				 }
				 else{
				 	$data["result"] = false;
				 	$data["url"] = base_url() . "login";
				 	$data["message"] = utf8_encode("<strong>Usuario y/o contrase&ntilde;a errados.</strong> Intente nuevamente.");
				 }
								 
			}
			else{
				//La fecha actual no esta dentro del rango de inicio / cierre de la encuesta.
				$data["result"] = false;
				$data["url"] = base_url() . "cierre";
				$data["message"] = utf8_encode("<strong>Lo sentimos. El periodo para el diligenciamiento de la prueba piloto del e-censo ya ha concluido. Agradecemos su participaci&oacute;n.</strong>");
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
			$visita = $this->session->userdata("visita");
			$num_form = $this->session->userdata("numform");
			$this->usuario->registroSalida($visita, $num_form);			
			$this->session->sess_destroy();
			redirect("/","location",301);
		}
		
		/*** ELIMINAR ESTE METODO ***/
		public function test(){
			$password = "pruebas";
			$test = $this->danecrypt->encode($password);
			var_dump($test);
		}
				
	}//EOC
