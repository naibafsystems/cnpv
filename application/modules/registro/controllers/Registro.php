<?php defined('BASEPATH') OR exit('No direct script access allowed');

	/**
	 * Controlador para el módulo de Vivienda
	 * @since  22/09/2015	   
	 * @author dmdiazf
	 */

	class Registro extends MX_Controller {
	
		public function __construct(){		
			parent::__construct();	
			$this->load->library("danecrypt");
			$this->load->library("validarsesion");
		}
	
		public function index(){	
			$data["view"] = "dpest";
			$this->load->model("datosreg");
			$data["formulario"] = $formulario = $this->session->userdata("numform");	
			$data["datosp"]=$this->datosreg->obtenerdatos($formulario);
			$data["departamentos"]=$this->datosreg->nomdepartamentos();
			$data["pestania"]=$this->datosreg->obtenerestado($formulario);
			$data["fec_nac"]=$this->datosreg->obtenerfecnac($formulario);
			if ($data["datosp"]["C1I1_DPTO"] != NULL)
			{
				$data["mpios"] =$this->datosreg->nomdempios($data["datosp"]["C1I1_DPTO"]);
			}
			//var_dump ($data['datosp']['C1I1_DPTO']);
			$this->load->view("layout",$data);
		}
		
		
		/**
		 * Agrega las personas fallecidas y pinta la tabla
		 * @since  27/10/2015
		 * @author Angela Rodriguez
		 */
		public function actualizaRegistrese(){
			$this->load->model("datosreg");
			$nro_form  = $formulario = $this->session->userdata("numform");
			$datos=$this->input->post();
			$index=$this->input->post('dindex');
			$respuesta="";
			//var_dump ($datos);
		
			if ($index==2)
			{
				$result=$this->datosreg->actualizaPreinscripcion($datos);
				if ($result==false){
					return false;
				}
				else
				{
					return true;
				}
			}
			else if ($index==4)
			{
				$result=$this->datosreg->actualizaubicacion($datos);
				if ($result==false){
					return false;
				}
				else
				{
					return true;
				}
				//$datos=$this->modregistrese->obtenersuccess($formulario);
				//echo "numero".$this->session->userdata("numform");
			}
			else if ($index==3)
			{
				$result=$this->datosreg->actualizatotperso($datos);
				if ($result==false){
					return false;
				}
				else
				{
						
					/*$nro_form  = $formulario = $this->session->userdata("numform");
					$correo = $this->modregistrese->obtenercorreo($formulario);
					$this->load->library("email");
					$config = array(
							'protocol' => 'smtp',
							'smtp_host' => '192.168.1.98',
							'smtp_port' => 25,
							'smtp_crypto' => 'tls',
							'smtp_user' => 'aplicaciones@dane.gov.co',
							'smtp_pass' => 'Ou67UtapW3v',
							'mailtype' => 'html',
							'charset' => 'utf-8',
							'newline' => "\r\n"
					);
						
					$arrayCert = array(
			
							//'1' => 'lramirezp@dane.gov.co',
							'1' => $correo
					);
			
						
					for ($i=1; $i<=count($arrayCert); $i++){
						$this->email->initialize($config);
						$data['datos']=$this->modregistrese->obtenersuccess1($nro_form);
						$this->email->from("aplicaciones@dane.gov.co", "DANE - eCenso ");
						$this->email->to($arrayCert[$i]);
						$this->email->subject("Inscripcion al eCenso");
						$html = $this->load->view("finalizar1",$data,true);
							
						$this->email->message($html);
						$bool = $this->email->send();
						//if ($bool){
						//	$this->certificados->actualizarNotificacionCertificado($arrayCert[$i]);
						//}
					}
					//var_dump ($arrayCert);
					//var_dump($this->email->print_debugger());*/
						
					return true;
				}
				//$datos=$this->modregistrese->obtenersuccess($formulario);
				//echo "numero".$this->session->userdata("numform");
			}
		}
	
		
		/**
		 * busca los municipios de un departamento determinado.
		 * @author Angela Liliana Rodriguez Mahecha
		 * @since  Enero / 2016
		 */
			
		public function busca(){
			//echo "jajkajkjaf";
			$data = array();
			$depto=$this->input->post("coddepto");
			$this->load->model("datosreg");
			$mpios =$this->datosreg->nomdempios($depto);
		
			//var_dump ($mpios);
			echo "<label >Municipio<font color='red'><b>*</b></font></label>
	    				<label><select  id='dMunicipio' name='dMunicipio' onChange='dcambiadepto();'>
							<option value='-'>Seleccione...</option>";
			for ($i=0; $i<count($mpios); $i++){
				echo "<option  value='".$mpios[$i]["id"]."'>".$mpios[$i]["nombre"]."</option>";
			}
			echo "</select></label>";
		}
		
		
		
	/**
		 * busca los municipios de un departamento determinado.
		 * @author Angela Liliana Rodriguez Mahecha
		 * @since  Enero / 2016
		 */
		public function jsonQueryperd(){
				
			$data["formulario"] = $formulario = $this->session->userdata("numform");
			$this->load->model("datosreg");
			$test = $this->datosreg->GridPerHogar($formulario);
			echo json_encode($test);
		}
		
		
		/**
		 * Carga el tipo de documento de los combos para adicionar o modificar personas de la grilla
		 * @since  Enero 2016
		 * @author Angela Rodriguez
		 */
		public function cargatipodocd(){
		
			$code = "";
			//var_dump($_GET);
			switch ($_GET["aCrear"])
			{
				case "C4P43_TIPO_DOC":
					$ComboBox["1"]="Registro civil de nacimiento";
					$ComboBox["2"]="Tarjeta de identidad";
					$ComboBox["3"]="C&eacute;dula de ciudadan&iacute;a";
					$ComboBox["4"]="C&eacute;dula de extranjer&iacute;a";
					$ComboBox["5"]="No tiene documento de identidad";
					break;
				case "C4P49_PARENTESCO":
					$ComboBox["1"]="Si";
					$ComboBox["99"]="No";
					break;
				case "C4P45_SEXO":
					$ComboBox["1"]="Hombre";
					$ComboBox["2"]="Mujer";
					break;
		
			}
			echo "<option value=''>Seleccione</option>";
			foreach($ComboBox as $key=>$value)
			{
				$sel="";
				echo "<option $sel value='$key'>$value</option>";
			}
		
			//echo "<br>".$sql;
			//echo "<br>".$sql."-->REGISTROS".$num_total_registros."<br><br>";
			//print_r($ComboBox);
		
		}
		
		
		
		/**
		* grilla de  las personas reseidentes del hogar
		* @since  26/10/2015
		* @author Liliana Ramirez
		*/
		public function jsonQueryEditperd(){
		
			$_POST['formulario'] = $formulario = $this->session->userdata("numform");
			$this->load->model("datosreg");
		
			if ($_POST['oper']=="add")
			{
				$verifica = $this->datosreg->verificaExisteCCd($_POST);
				//echo "varifica=".$verifica;
				if ($verifica == 1)
				{
					//echo "falla";
					echo "1";
				}
				else
				{
		
					$guarda = $this->datosreg->GuardaPerHogard($_POST);
					if ($guarda == 0 )
					{
						echo "2";
					}
					else if  ($guarda== 1 )
					{
						echo "3";
					}
		
				}
			}
			else if ($_POST['oper']=="edit")
			{
				$verifica = $this->datosreg->verificaExisteCCmodificard($_POST);
				if ($verifica == 1)
				{
					//echo "falla";
					echo "1";
				}
				else
				{
					$actualizo = $this->datosreg->EditaPerHogard($_POST);
					if ($actualizo == 0 )
					{
						echo "2";
					}
					else if  ($actualizo== 1 )
					{
						echo "3";
					}
				}
			}
			else
			{
				$elimino = $this->datosreg->EliminarPerHogard($_POST);
				if ($elimino == 0 )
				{
					echo "2";
				}
				else if  ($elimino== 1 )
				{
					echo "3";
				}
			}
		}
		
		/**
		 * grilla de  las personas reseidentes del hogar
		 * @since  26/10/2015
		 * @author Liliana Ramirez
		 */
		public function verifnomd(){
		
			$data["formulario"] = $formulario = $this->session->userdata("numform");
			$this->load->model("datosreg");
			$test = $this->datosreg->obtenernombred($formulario);
			echo $test;
		}
		

		/**
		 * grilla de  las personas reseidentes del hogar
		 * @since  26/10/2015
		 * @author Liliana Ramirez
		 */
		public function verifcorreod(){
		
			$data["formulario"] = $formulario = $this->session->userdata("numform");
			$this->load->model("datosreg");
			$test = $this->datosreg->obtenercorreod($formulario);
			echo $test;
		}
		
		/**
		 * grilla de  las personas reseidentes del hogar
		 * @since  26/10/2015
		 * @author Liliana Ramirez
		 */
		public function verifclaved(){
		
			$data["formulario"] = $formulario = $this->session->userdata("numform");
			$this->load->model("datosreg");
			$test = $this->datosreg->obtenerclaved($formulario);
			echo $test;
		}
		
		
		/**
		 * Agrega las personas fallecidas y pinta la tabla
		 * @since  27/10/2015
		 * @author Angela Rodriguez
		 */
		public function verificarcompletosd(){
			$this->load->model("datosreg");
			//var_dump ($this->input->post());
			$datos=$this->input->post();
			$nro_form  = $formulario = $this->session->userdata("numform");
			$result=$this->datosreg->verificacompletosd($nro_form);
		
			echo $result;
		}
		
		
		public function buscadatosd()
		{
			$valores=array();
			$this->load->model("wsmodel");
			$cedula=$this->input->post("cedula");
			$valores = $this->wsmodel->validaCedulaWSData($cedula);
			echo json_encode( $valores );
		}
		
		
	}//EOC
