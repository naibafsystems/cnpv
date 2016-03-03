<?php defined('BASEPATH') OR exit('No direct script access allowed');

	/**
	 * Controlador para el módulo de administracion
	 * @since  2015ene08	   
	 * @author hhchavezv
	 */

	class Operativo extends MX_Controller {
	
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
				$data["url"] = base_url() . "operativo/inicio";
				$data["message"] = "";				
				//$this->usuario->redireccionarUsuario();
			}
			else{
				//redirect("/","location",301);
				$data["result"] = false;
				$data["url"] = base_url()."operativo";
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
			redirect("/operativo","location",301);
		}
		
		/**
		 * Abre pantalla inicial de administracion
		 * @author hhchavezv
		 * @since  2015ene08
		 */
		public function inicio(){
			$this->load->library("validarsesion");	
			$data["header"] = "/template/navbar_operativo";
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
			$data["header"] = "/template/navbar_operativo";
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
			$data["header"] = "/template/navbar_operativo";
			
			$this->load->model("usuario");
			$data["formulario"] = $formulario;
			$data["view"] = "detalleUsuario";
			$data["usuario"] = $this->usuario->datosUsuario($formulario);
			$data["gridPersonas"]=$this->usuario->GridPersonasHogar($formulario);
			$this->load->view("layout",$data);		
		}	
	
		/**
		 * Muestra datos del usuario y formulario para adicionar novedad
		 * @author bmottag	
		 * @since  2015feb17
		 */
		public function formNovedad($formulario){
			$this->load->library("validarsesion");	
			$data["header"] = "/template/navbar_operativo";
			
			$this->load->model("usuario");
			$data["formulario"] = $formulario;
			$data["view"] = "formNovedad";
			$data["usuario"] = $this->usuario->datosUsuario($formulario);
			$data["novedades"] = $this->usuario->datosNovedades($formulario);
			$this->load->view("layout",$data);		
		}
	
		/**
		 * Adicionar novedad
		 * @author bmottag
		 * @since  2016feb17
		 */
		 public function addNovedad(){
				$this->load->library("validarsesion");	
				
				header('Content-Type: application/json');
				$this->load->model("usuario");
				
				$data = array();
				
				if($this->usuario->updateUsuario($_POST) )
				{	
					$data["result"] = true;
					$data["formulario"] =  $_POST["hd_formul"];
				}
				else{
						$data["result"] = false;
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
				$data["header"] = "/template/navbar_operativo";
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
			$data["header"] = "/template/navbar_operativo";
			
			$this->load->model("usuario");
			$data["formulario"] = $formulario;
			$data["view"] = "detalleHogar";
			$data["usuario"] = $this->usuario->datosUsuario($formulario);
			$data["gridPersonas"]=$this->usuario->GridPersonasHogar($formulario);
			$this->load->view("layout",$data);		
		}
		
		/**
		 * Construye el PDF del reporte de registro cuestionarios
		 * @access  Public
		 * @author Orlando Alberto Garzon Diaz <oagarzond@dane.gov.co>
		 */
		public function generarReporteAO() {
			$this->load->model("usuario");
			//$dirRoot = $_SERVER["DOCUMENT_ROOT"] . $_SERVER["PHP_SELF"];
			//$dirRoot = "/home1/home/dimpe/cnpv_v2/application/modules/operativo/controllers/sss/";
			$dirRoot = "/home1/home/dimpe/cnpv_v2/assets/";
			//echo $dirRoot; exit;
			$this->load->library("html2pdf");
			$this->html2pdf->folder($dirRoot);
			$this->html2pdf->filename('ejemplo.pdf');
			$this->html2pdf->paper('letter', 'landscape');
			list($ancho, $alto, $tipo, $atributos) = getimagesize('/home1/home/dimpe/cnpv_v2/images/logotipo_DANE.png');
			$data["logotipo"] = '<img src="/home1/home/dimpe/cnpv_v2/images/logotipo_DANE.png" height="' . $alto . '" width="' . $ancho . '"  />';
			//var_dump($data["logotipo"]); exit;
			// Se consulta los datos que van a ser mostrados en la grilla - 2016-03-01
			$arrParam = array();
			$html = '';
			$usuarios = $this->usuario->consultarDatosReporte($arrParam);
			$total = count($usuarios);
			$pag = 0;
			$cantMostrar = 20;
			if($usuarios != false && count($usuarios) > 0) {
				//var_dump($usuarios); exit;
				//$usua[0][] = array_pop($usuarios);
				//$data["arrUsuarios"] = $usuarios;
				foreach ($usuarios AS $indUsua => $valUsua) {
					if($indUsua > 0 && $indUsua % $cantMostrar == 0) {
						for($i = 0; $i < $cantMostrar; $i++) {
							$posInd = $indUsua - ($cantMostrar - $i);
							$usua[$i] = $usuarios[$posInd];							
						}
						$data["arrUsuarios"] = $usua;
						$pag++;
						$data["pagina"] = $pag;
						$html .= $this->load->view("formAO", $data, true);
					}
				}
				if($total > $pag * $cantMostrar) {
					unset($usua);
					for($i = $pag * $cantMostrar; $i < $total; $i ++) {
						$usua[$i] = $usuarios[$i];
					}
					$data["arrUsuarios"] = $usua;
					$data["pagina"] = $pag + 1;
					$html .= $this->load->view("formAO", $data, true);
				}
			}
			//echo $html; exit;
			$this->html2pdf->html($html);
			$this->html2pdf->create('dd');
		}
		
		public function pdf2() {
			require('/home1/home/dimpe/cnpv_v2/application/libraries/pdffpdf.php');
			$pdf = new Pdffpdf();
			// T�tulos de las columnas
			$header = array('Pa�s', 'Capital', 'Superficie (km2)', 'Pobl. (en miles)');
			// Carga de datos
			$data = $pdf->LoadData('/home1/home/dimpe/cnpv_v2/application/libraries/fpdf/tutorial/paises.txt');
			$pdf->SetFont('Arial','',14);
			$pdf->AddPage();
			$pdf->BasicTable($header,$data);
			$pdf->AddPage();
			$pdf->ImprovedTable($header,$data);
			$pdf->AddPage();
			$pdf->FancyTable($header,$data);
			$pdf->Output();
		}
		
		public function reporte() {
			$this->load->library("validarsesion");
			$data["header"] = "/template/navbar_operativo";
			$this->load->model("Usuario");
			$data["view"] = "reporte";
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
