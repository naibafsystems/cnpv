<?php defined('BASEPATH') OR exit('No direct script access allowed');

	/**
	 * Controlador para el módulo de Persona
	 * @since  22/09/2015 - 14/10/2015
	 * @author dmdiazf - rfhuertast
	 */
	
	/**
	 * Estados campo PERSONA_HOGAR_CCNTROL, en tabla CNPV_PERSONA_HOGAR
	 * @since  2016ene21
	 * @author hhchavezv
	 * 0= cuando se crean inicialmente
	 * 1= cuando se inicia a diligenciar la persona 1, solo se coloca este estado en persona 1
	 * 2= cuando se inicia a diligenciar la persona 2, solo se coloca este estado en persona 2
	 */
	class Persona extends MX_Controller {
	
		public function __construct(){		
			parent::__construct();	
			//$this->load->library("validarsesion");persona
		}
	
		public function index()
		{
			$this->load->model("modpersona");
			
			$personaHogar=$this->modpersona->consultarPersonasHogar();
			$data["personaHogar"]=$personaHogar;
			$data["nomBoton"]="Guardar y siguiente";
			
			//Para pensar en hacer una operacion de edicion, acá debería enviar el código de la persona a editar.
			$nro_pers = $this->modpersona->consultarPersonaActualizar("persona"); //desde aqui trae el codigo de la persona
			
			if($nro_pers!="") $nro_pers = $nro_pers["PERSONA_HOGAR_CCNTROL"]; // ¿ ESTO PARA QUE ?
			
			if($nro_pers!="0" && $nro_pers!="99" && $nro_pers!="")
			{
				$nro_form = $this->session->userdata("numform");
			//	$nro_form = '900000034';
			
				$data["nro_pers"]=$nro_pers;
				
				$data["persona"]=$this->modpersona->consultarPersona($nro_form, $nro_pers);
				$nombreMpioRes=$this->modpersona->consultarMpioResidencia($nro_form, $nro_pers);
				
				$pais=$this->modpersona->consultarPais();
				$data["pais"] = $pais;
	
				$dpto=$this->modpersona->consultarDpto();
				$data["dpto"] = $dpto;
				
				$data["nombreMpioRes"] = $nombreMpioRes;
				$sexoPersona=$this->modpersona->consultarSexoPersona($nro_form, $nro_pers);
				$data["sexoPersona"] = $sexoPersona;
				
				$semanaAnterior=$this->modpersona->consultarSemanaAnterior();
				$data["semanaAnterior"] = $semanaAnterior;
				
				$data["UsuarioSession"] = '<h3>Bienvenido: '.utf8_encode(ucwords(strtolower($this->session->userdata("nombre")))) .'</h3>';
				
				$trabajoActual=$this->modpersona->consultarTrabajoActual($nro_form, $nro_pers);
				$data["trabajoActual"] = $trabajoActual; 
				
				if($this->modpersona->finalizaTodasPersonas() )// finalizo todas las personas
				{
					$data["finaliza"]=true;
				}
				else
				{
					$data["finaliza"]=false;
				}
				
				$data["view"] = "persona";
				$this->load->view("layout",$data);
			}
			else
			{
				//NO SE IDENTIFICO A LA PERSONA, POR LO QUE SE MUESTRA TODA LA TABLA
				$nro_pers = $this->modpersona->consultarPersonaActualizar("personaHogar");
				
				if($nro_pers!="") $nro_pers = $nro_pers["PERSONA_HOGAR_CCNTROL"]; //¿ PARA QUE ES ESTO ?
				
				//Si ya diligencio todos los registros, vuelve y se muestra toda la tabla otra vez
				//@author dmdiazf
				//@since  28/01/2016
				$data["editar"] = true;
				
				if($this->modpersona->finalizaTodasPersonas() )// finalizo todas las personas
				{
					$data["finaliza"]=true;
				}
				else
				{
					$data["finaliza"]=false;
				}
				
				$data["view"] = "personashogar";
				$this->load->view("layout",$data);
				
				/***
				if($nro_pers!="")
				{
					$data["view"] = "personashogar";
					$this->load->view("layout",$data);
				}
				else
				{
					$data["view"] = "inicio/inicio";
					$this->load->view("layout",$data);
				}
				***/
			}
		}
		
		public function iniciaActualiza()
		{
				$this->load->model("modpersona");
				$nro_pers=$this->input->get("nro_pers");
				
				$nro_form = $this->session->userdata("numform");
				$data["nro_pers"]=$nro_pers;
				$data["nomBoton"]="Guardar y siguiente";
				
				$data["persona"]=$this->modpersona->consultarPersona($nro_form, $nro_pers);
				$nombreMpioRes=$this->modpersona->consultarMpioResidencia($nro_form, $nro_pers);
				
				$pais=$this->modpersona->consultarPais();
				$data["pais"] = $pais;
	
				$dpto=$this->modpersona->consultarDpto();
				$data["dpto"] = $dpto;
				$data["nombreMpioRes"] = $nombreMpioRes;
				
				$semanaAnterior=$this->modpersona->consultarSemanaAnterior();
				$data["semanaAnterior"] = $semanaAnterior;
				
				$sexoPersona=$this->modpersona->consultarSexoPersona($nro_form, $nro_pers);
				$data["sexoPersona"] = $sexoPersona;
				
				// 2016feb03 - hhchavezv - Se deshabilita para cambiar control no al ingresar, si no al guardar la primer página, para efectos de identificar bloqueo de edad y fecha nacimiento
				/*
				$sql="UPDATE CNPV_PERSONA_HOGAR SET PERSONA_HOGAR_CCNTROL=".$nro_pers." WHERE C0I1_ENCUESTA = ".$nro_form." AND C3P24_NROHOG=1 AND C4P41_NRO_PER='".$nro_pers."'";
				$query=$this->db->query($sql);
				*/
				
				$data["UsuarioSession"] = ""; 
				
				$trabajoActual=$this->modpersona->consultarTrabajoActual($nro_form, $nro_pers);
				$data["trabajoActual"] = $trabajoActual; 
				
				$data["view"] = "persona";
				$this->load->view("layout",$data);
				
			
		}
	
		public function guardarPersona($nro_pers)
		{
			
			$this->load->model("modpersona");
			$nro_form = $this->session->userdata("numform");
			//$nro_form = '900000034';
			$index=$this->input->post("index");
			$datos=$this->input->post();
			
			if($this->modpersona->actualizarPersona($nro_form, $nro_pers, $datos))
			{
				$sexoPers=$this->modpersona->consultarSexoPersona($nro_form, $nro_pers);
				$edadPers=$this->modpersona->consultarEdadPersona($nro_form, $nro_pers);
				if(($index==11 && $edadPers<5) || ($index==14 && $edadPers<10) || ($index==18 && $sexoPers<>'2')  || $index==19 || $index==20)
					$index=21;
					
				/*if ($index==21){ // Cuando se guarda la última pagina se cambia al estado 2. En el resto de los casos el estado será 1.
					$estadoModulo = 2;
					$estadoForm = 11;
				}
				else{
					$estadoModulo = 1;
					$estadoForm = 10;
				}*/
				if($this->modpersona->finalizaTodasPersonas() )// finalizo todas las personas
				{
					$estadoModulo = 2;
					$estadoForm = 11;
					
				}
				else
				{
					$estadoModulo = 1;
					$estadoForm = 10;
					
				}
				
				$this->modpersona->actualizarEstadoModuloPersona($nro_form, $estadoModulo); //Actualizar el estado del Modulo.
				$this->modpersona->actualizarEstadoFormulario($nro_form, $estadoForm); //Actualizar el estado del formulario.
			}
			
			
		}
		
		/**
		* Lista los municipios de un departamento especificado desde peticion ajax, sin incluir el mpio de residencia
		*/
		public function actualizarMunicipios()
		{
			$this->load->model("modpersona");
			$dpto=$this->input->post("id");
			$mpio=$this->modpersona->consultarMpio($dpto);
			echo '<option value="">Seleccione el municipio</option>';
  			for($i=0;$i<count($mpio);$i++)
  			{
  				echo '<option value="'.$mpio[$i]["VALOR_MINIMO"].'">'.$mpio[$i]["DESCRIPCION"].'</option>';
  			}
		}
		
		/**
		* Lista los municipios de un departamento especificado desde peticion ajax, incluyendo el mpio de residencia
		* @since  2016feb01
		* @author hhchavezv
		*/
		public function actualizarMunicipiosTodos()
		{
			$this->load->model("modpersona");
			$dpto=$this->input->post("id");
			$mpio=$this->modpersona->consultarTodosMpios($dpto);
			echo '<option value="">Seleccione el municipio</option>';
  			for($i=0;$i<count($mpio);$i++)
  			{
  				echo '<option value="'.$mpio[$i]["VALOR_MINIMO"].'">'.$mpio[$i]["DESCRIPCION"].'</option>';
  			}
		}
		
		public function actualizarLPpal($nro_pers, $origen)
		{
			header('Content-Type: application/json');
			
			$this->load->model("modpersona");
			$lPpal=$this->modpersona->consultarLimitacionPpal($nro_pers);
			$lPpalActual=$this->modpersona->consultarLimitacionPpalActual($nro_pers, "");
			$lPpalActual=$lPpalActual["VALOR_MINIMO"];
			
			$sel="";
			$res=array();
			if($origen=="comboDesempeno")
			{
				if(count($lPpal)>1) 
				{
					//echo '<option value="">Seleccione una opcion</option>';				
					$sel= '<option value="">Seleccione una opcion</option>';
					$res["variasDif"]=1;
				}
	  			for($i=0;$i<count($lPpal);$i++)
	  			{
	  				$selected=($lPpalActual==$lPpal[$i]["VALOR_MINIMO"]) ? ' selected="selected" ' : '';
	  				//echo '<option value="'.$lPpal[$i]["VALOR_MINIMO"].'"'.$selected.'>'.$lPpal[$i]["VALOR_MINIMO"].' - '.$lPpal[$i]["DESCRIPCION"].'</option>';
					$sel.= '<option value="'.$lPpal[$i]["VALOR_MINIMO"].'"'.$selected.'>'.$lPpal[$i]["VALOR_MINIMO"].' - '.$lPpal[$i]["DESCRIPCION"].'</option>';
	  			}
				$res["opcDif"]=$sel;
			}
			else if(count($lPpal)==1) {
					//echo $lPpal[0]["DESCRIPCION"];
					$res["variasDif"]=0;
					$res["opcDif"]=$lPpal[0]["DESCRIPCION"];
					
			}
			else
			{
	  			for($i=0;$i<count($lPpal);$i++)
	  			{
	  				if($lPpalActual==$lPpal[$i]["VALOR_MINIMO"])
	  				{
	  					//echo $lPpal[$i]["DESCRIPCION"];
						$res["variasDif"]=0;
						$res["opcDif"]=$lPpal[$i]["DESCRIPCION"];
						$i=count($lPpal);
	  				}
				}
			}
			echo json_encode($res);
		}
		
		public function actualizarLPpalActual()
		{
			$this->load->model("modpersona");
			$lPpal=$this->input->get("lPpalSel");
			if($lPpal=="")
				echo "";
			else
			{
				$nro_pers = $this->modpersona->consultarPersonaActualizar("persona");
				$nro_pers = $nro_pers["PERSONA_HOGAR_CCNTROL"];
				$lPpalActual=$this->modpersona->consultarLimitacionPpalActual($nro_pers, $lPpal);
				echo $lPpalActual["LACTUAL"];
			}
		}
		
		public function actualizarTrabajo()
		{
			$this->load->model("modpersona");
			$trabajo=$this->input->get("trabajoSel");
			$trabajoSel=$this->modpersona->consultarTrabajo($trabajo);
			echo $trabajoSel;
		}
		
		
		
		/**
		 * Nuevo método para la edición de registros luego de que el módulo de personas ya ha sido diligenciado.
		 * Se realizan las modificaciones del módulo de personas para la preparación de salida a producción del piloto e-censo
		 * Se ejecuta exactamente la misma función que se venía ejecutando en el index, pero enviando por parámetro el ID de la persona dentro del grupo familiar.
		 * @author dmdiazf
		 * @since  28/01/2016
		 */
		public function editar($idpers){
			$this->load->model("modpersona");
			$nro_form = $this->session->userdata("numform");
			
			//Actualizar el campor de control con el ID persona como si estuviera diligenciando por primera vez
			//@author dmdiazf
			//@since  28/01/2016
			$this->modpersona->actualizarControlPersona($nro_form, $idpers);
			
			$personaHogar=$this->modpersona->consultarPersonasHogar();
			$data["personaHogar"]=$personaHogar;
			$data["nomBoton"]="Guardar y siguiente";				
			//Para pensar en hacer una operacion de edicion, acá debería enviar el código de la persona a editar.
			$nro_pers = $idpers;
			//$nro_pers = $this->modpersona->consultarPersonaActualizar("persona"); //desde aqui trae el codigo de la persona				
			if($nro_pers!="") $nro_pers = $nro_pers["PERSONA_HOGAR_CCNTROL"]; // ¿ ESTO PARA QUE ?				
			if($nro_pers!="0" && $nro_pers!="99" && $nro_pers!=""){
				$nro_form = $this->session->userdata("numform");
				//$nro_form = '900000034';					
				$data["nro_pers"]=$nro_pers;			
				$data["persona"]=$this->modpersona->consultarPersona($nro_form, $nro_pers);
				$nombreMpioRes=$this->modpersona->consultarMpioResidencia($nro_form, $nro_pers);			
				$pais=$this->modpersona->consultarPais();
				$data["pais"] = $pais;			
				$dpto=$this->modpersona->consultarDpto();
				$data["dpto"] = $dpto;			
				$data["nombreMpioRes"] = $nombreMpioRes;
				$sexoPersona=$this->modpersona->consultarSexoPersona($nro_form, $nro_pers);
				$data["sexoPersona"] = $sexoPersona;			
				$semanaAnterior=$this->modpersona->consultarSemanaAnterior();
				$data["semanaAnterior"] = $semanaAnterior;			
				$data["UsuarioSession"] = '<h3>Bienvenido: '.utf8_encode(ucwords(strtolower($this->session->userdata("nombre")))) .'</h3>';			
				$trabajoActual=$this->modpersona->consultarTrabajoActual($nro_form, $nro_pers);
				$data["trabajoActual"] = $trabajoActual;			
				$data["view"] = "persona";
				$this->load->view("layout",$data);
			}
		}
		
		
		
		
		
		
		
		
	}//EOC
