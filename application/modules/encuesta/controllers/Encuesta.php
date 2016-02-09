<?php defined('BASEPATH') OR exit('No direct script access allowed');

	/**
	 * Controlador para el módulo de Encuesta de Envío
	 * @since  27/10/2015	   
	 * @author hhchavezv
	 */

	class Encuesta extends MX_Controller {
	
		public function __construct(){		
			parent::__construct();	
			$this->load->library("validarsesion");
		}
	
		public function index(){
			$this->load->model("modencuesta");
			$nro_form = $this->session->userdata("numform");
			if($this->modencuesta->presentarEncuestaFinal($nro_form) )			{
							
				$data["view"] = "encuesta";
				$this->load->view("layout",$data);		
			} else{
				redirect("inicio");// NOTA: Validar en /inicio que si estado=12 muestre directamente el msj de finalizado con descarga pdf ($this->msjEncuesta)
			}
		}
		
		public function guardarEncuesta(){
			$this->load->model("modencuesta");
			$nro_form = $this->session->userdata("numform");
			//$nro_form=900000018;
				if ($this->modencuesta->guardarEncuesta($nro_form, $_POST)){				
					
					// se adicional campo SEC_ENCU en tabla CNPV_ADMIN_CONTROL
					$this->modencuesta->actualizarEstadoModuloEncuesta($nro_form, 2); //Actualizar el estado del Modulo.
					$this->modencuesta->actualizarEstadoFormulario($nro_form, 12); //Actualizar el estado del formulario.
				
					echo "-ok-";
				}else
				{ 
					echo "error";
				}
		}
		
		public function msjEncuesta(){
			$this->load->model("modencuesta");
			$this->load->library("phpqrcode");
			$nro_form = $this->session->userdata("numform");			
			$data["qrcode"] = $this->phpqrcode->getQRImage($nro_form); //Obtener el HTML para mostrar la imagen.
			if($this->modencuesta->presentarMsjFinal($nro_form) ){							
				$data["codigo"] = $nro_form;
				$data["nombre"] = strtoupper (utf8_encode($this->session->userdata("nombre")) );				
				$data["view"] = "msj_encuesta";
				$this->load->view("layout",$data);	
			} 
			else{
				redirect("inicio");// NOTA: Validar en /inicio que si estado=12 muestre directamente el msj de finalizado con descarga pdf ($this->msjEncuesta)
			}			
		}
		
	}//EOC
