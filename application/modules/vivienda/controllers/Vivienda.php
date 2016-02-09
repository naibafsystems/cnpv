<?php defined('BASEPATH') OR exit('No direct script access allowed');

	/**
	 * Controlador para el módulo de Vivienda
	 * @since  22/09/2015	   
	 * @author dmdiazf
	 */

	class Vivienda extends MX_Controller {
	
		public function __construct(){		
			parent::__construct();	
			$this->load->library("validarsesion");
		}
	
		public function index(){
			$this->load->model("modvivienda");
			$nro_form = $this->session->userdata("numform");			
			$data["vivienda"] = $this->modvivienda->consultarVivienda($nro_form);			
			$data["view"] = "vivienda";
			$this->load->view("layout",$data);		
		}
		
		public function guardarVivienda(){
			$this->load->model("modvivienda");
			$index = $this->input->post("index");
			$nro_form = $this->session->userdata("numform");			
			if ($nro_form!=NULL){						
				$arrayDatos["c2v14_tipo_viv"] = $this->input->post("c2v14_tipo_viv");
				$arrayDatos["c2v15_con_ocup"] = 1; //Valor enviado por defecto
				$arrayDatos["c2v16_tot_hog"] = 1; //Valor enviado por defecto
				$arrayDatos["c2v17_mat_pared"] = $this->input->post("c2v17_mat_pared");
				$arrayDatos["c2v18_mat_piso"] = $this->input->post("c2v18_mat_piso");
				$arrayDatos["c2v19_mat_techo"] = $this->input->post("c2v19_mat_techo");
				$arrayDatos["c2v20_anos_viv"] = $this->input->post("c2v20_anos_viv");
				$arrayDatos["c2v21a_ee"] = $this->input->post("c2v21a_ee");
				$arrayDatos["c2v21a1_estrato"] = $this->input->post("c2v21a1_estrato");
				$arrayDatos["c2v21b_alc"] = $this->input->post("c2v21b_alc");
				$arrayDatos["c2v21c_acu"] = $this->input->post("c2v21c_acu");
				$arrayDatos["c2v21d_gas"] = $this->input->post("c2v21d_gas");
				$arrayDatos["c2v22_tipo_sersa"] = $this->input->post("c2v22_tipo_sersa");
				$arrayDatos["c2v23_eli_bas"] = $this->input->post("c2v23_eli_bas");
				if ($this->modvivienda->actualizarVivienda($nro_form, $arrayDatos)){
					if ($index==4){ // Cuando se guarda la última pagina se cambia al estado 2. En el resto de los casos el estado será 1.
						$estadoModulo = 2;
						$estadoForm = 7;
					}
					else{
						$estadoModulo = 1;
						$estadoForm = 6;
					}
					$this->modvivienda->actualizarEstadoModuloVivienda($nro_form, $estadoModulo); //Actualizar el estado del Modulo.
					$this->modvivienda->actualizarEstadoFormulario($nro_form, $estadoForm); //Actualizar el estado del formulario.
				}
			}
			else{
				die();
			}	
		}
		
			
	}//EOC
