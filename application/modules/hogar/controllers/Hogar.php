<?php defined('BASEPATH') OR exit('No direct script access allowed');

	/**
	 * Controlador para el modulo de Hogar
	 * @since  22/09/2015	   
	 * @author Angela Rodriguez
	 */

	class hogar extends MX_Controller {
	
		public function __construct(){		
			parent::__construct();		
		//	$this->load->library("validarsesion");	
		}
	
		public function index(){	
			$this->load->model("modhogar");
			$paises =$this->modhogar->nomdepaises();
			$data["paises"]=$paises;
			$nro_form = $this->session->userdata("numform");
			//$nro_form = '900000023';	
			$data["hogar"] = $this->modhogar->consultarHogar($nro_form);
			//$data["pershogar"] = $this->modhogar->GridPerHogar($nro_form);
			$data["Ejefe"] = $this->modhogar->consultarJefe($nro_form);
			
			$data["view"] = "hogar";
			$this->load->view("layout",$data);
			
			
		}
		
		/**
		 * Agrega las personas fallecidas y pinta la tabla
		 * @since  21/10/2015
		 * @author Liliana Ramirez
		 */
		public function agregarfallecido(){
			$this->load->model("modhogar");
			$_POST['formulario'] = $this->session->userdata("numform");
			//$_POST['formulario'] = '900000023';
			//var_dump ($_POST);
			$datos=$this->modhogar->guardadatos($_POST);
		}
	
		/**
		 * Agrega las personas fallecidas y pinta la tabla
		 * @since  21/10/2015
		 * @author Liliana Ramirez
		 */
		public function jsonQuery(){
			//echo "entro";
			$data["formulario"] = $formulario = $this->session->userdata("numform");
			//$data["formulario"]  = $formulario = '900000023';
			$this->load->model("modhogar");
			$test = $this->modhogar->Gridfalledidos($formulario);
			echo json_encode($test);
		}
		
		

		/**
		 * grilla de  las personas reseidentes del hogar
		 * @since  26/10/2015
		 * @author Liliana Ramirez
		 */
		public function jsonQueryper(){
			//echo "entro";
			$data["formulario"] = $formulario = $this->session->userdata("numform");
			//$data["formulario"]  = $formulario = '900000076';
			//$data["formulario"]  = $formulario = '900000023';
			$this->load->model("modhogar");
			$test = $this->modhogar->GridPerHogar($formulario);
			echo json_encode($test);
		}
		
		/**
		 * grilla de  las personas reseidentes del hogar
		 * @since  26/10/2015
		 * @author Liliana Ramirez
		 */
		public function jsonQueryEditper(){
			//echo "entro";
			//var_dump ($_POST);
			
			$_POST['formulario'] = $formulario = $this->session->userdata("numform");
			//$_POST['formulario']= $formulario = '900000023';
			$this->load->model("modhogar");
			
			if ($_POST['oper']=="add")
			{
				$verifica = $this->modhogar->verificaExisteCC($_POST);
				//echo "varifica=".$verifica;
				if ($verifica == 1)
				{
					//echo "falla";
					echo "1";
				}
				else
				{
					
					$guarda = $this->modhogar->GuardaPerHogar($_POST);
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
				$verifica = $this->modhogar->verificaExisteCCmodificar($_POST);
				if ($verifica == 1)
				{
					//echo "falla";
					echo "1";
				}
				else
				{
					$actualizo = $this->modhogar->EditaPerHogar($_POST);
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
				$elimino = $this->modhogar->EliminarPerHogar($_POST);
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
		public function jsonQueryElifallecidos(){
			//echo "entro";
			//var_dump ($_POST);
				
			$_POST['formulario'] = $formulario = $this->session->userdata("numform");
			//$_POST['formulario']= $formulario = '900000023';
			$this->load->model("modhogar");
				
			$elimino = $this->modhogar->EliminarFallecido($_POST);
			if ($elimino == 0 )
			{
				echo "2";
			}
			else if  ($elimino== 1 )
			{
				echo "3";
			}
		}
		
		/**
		 * Obtiene datos en formato JSON para llenar el grid de datos
		 * @author dmdiazf
		 * @since  26/08/2015
		 */
		public function busquedaFallecidos(){
			$data["formulario"] = $formulario = $this->session->userdata("numform");
			//$data["formulario"] = $formulario = '900000023'; 
			header("Content-Type: text/plain; charset=utf-8");
			$this->load->model("modhogar");
			$fallecidos = $this->modhogar->Gridfalledidos($formulario);
			echo json_encode($fallecidos);
		}
		
		
		/**
		 * Agrega las personas fallecidas y pinta la tabla
		 * @since  27/10/2015
		 * @author Angela Rodriguez
		 */
		public function cargatipodoc(){
			
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
		 * Agrega las personas fallecidas y pinta la tabla
		 * @since  27/10/2015
		 * @author Angela Rodriguez
		 */
		public function guardarHogar(){
			$this->load->model("modhogar");
			$nro_form  = $formulario = $this->session->userdata("numform");	
			//$nro_form  = $formulario = '900000023';
			$datos=$this->input->post();
			$index=$this->input->post('index');
			//var_dump ($datos);
			
			if ($this->modhogar->actualizarHogar($nro_form, $datos)){
				if ($index==9){ // Cuando se guarda la última pagina se cambia al estado 2. En el resto de los casos el estado será 1.
					$estadoModulo = 2;
					$estadoForm = 9;
				}
				else{
					$estadoModulo = 1;
					$estadoForm = 8;
				}
				$this->modhogar->actualizarEstadoModuloHogar($nro_form, $estadoModulo); //Actualizar el estado del Modulo.
				$this->modhogar->actualizarEstadoFormulario($nro_form, $estadoForm); //Actualizar el estado del formulario.
			}
		}
		
		
	}//EOC
