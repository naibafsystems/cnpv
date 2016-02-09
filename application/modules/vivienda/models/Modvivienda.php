<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	/***
	 * Modelo para obtención de datos del módulo de vivienda 
	 * @author DMDiazF
	 * @since  09/10/2015	 
	 ***/

class MODVivienda extends CI_Model {

	function __construct(){
		parent::__construct();
	}

	/**
	 * Consulta los datos del módulo de vivienda para un numero de formulario indicado
	 * @param $nro_form
	 * @return array
	 */
	public function consultarVivienda($nro_form){
		$vivienda = array();
		$sql = "SELECT *
		        FROM cnpv_vivienda V
		        WHERE C0I1_encuesta = $nro_form";					
		$query = $this->db->query($sql);
		if ($query->num_rows() > 0){
			foreach($query->result() as $row){
				$vivienda["c0i1_encuesta"] = $row->C0I1_ENCUESTA;
				$vivienda["c1i2_dpto"] = $row->C1I1_DPTO;
				$vivienda["c1i2_mpio"] = $row->C1I2_MPIO;
				$vivienda["c1i_idpk"] = $row->C1I_IDPK;
				$vivienda["c1i3_clase"] = $row->C1I3_CLASE;
				$vivienda["c1i32_cpob"] = $row->C1I32_CPOB;
				$vivienda["c1i31_localidad"] = $row->C1I31_LOCALIDAD;
				$vivienda["c1i4_co"] = $row->C1I4_CO;
				$vivienda["c1i5_ao"] = $row->C1I5_AO;
				$vivienda["c1i6_uc"] = $row->C1I6_UC;
				$vivienda["c1i8_edifica"] = $row->C1I8_EDIFICA;
				$vivienda["c1i9_vivienda"] = $row->C1I9_VIVIENDA;
				$vivienda["c0i2_encppal"] = $row->C0I2_ENCPPAL;
				$vivienda["id_origen"] = $row->ID_ORIGEN;
				$vivienda["c1iv10_dir"] = $row->C1IV10_DIR;
				$vivienda["c1iv11_barrio"] = $row->C1IV11_BARRIO;
				$vivienda["c1iv13_tipoter"] = $row->C1IV13_TIPOTER;
				$vivienda["c1iv131_codter"] = $row->C1IV131_CODTER;
				$vivienda["c1iv132_tipo_com"] = $row->C1IV132_TIPO_COM;
				$vivienda["c1iv132a_nom_com"] = $row->C1IV132A_NOM_COM;
				$vivienda["c1iv12_parque_nal"] = $row->C1IV12_PARQUE_NAL;
				$vivienda["c2v14_tipo_viv"] = $row->C2V14_TIPO_VIV;
				$vivienda["c2v15_con_ocup"] = $row->C2V15_CON_OCUP;
				$vivienda["c2v16_tot_hog"] = $row->C2V16_TOT_HOG;
				$vivienda["c2v17_mat_pared"] = $row->C2V17_MAT_PARED;
				$vivienda["c2v18_mat_piso"] = $row->C2V18_MAT_PISO;
				$vivienda["c2v19_mat_techo"] = $row->C2V19_MAT_TECHO;
				$vivienda["c2v20_anos_viv"] = $row->C2V20_ANOS_VIV;
				$vivienda["c2v21a_ee"] = $row->C2V21A_EE;
				$vivienda["c2v21a1_estrato"] = $row->C2V21A1_ESTRATO;
				$vivienda["c2v21b_alc"] = $row->C2V21B_ALC;
				$vivienda["c2v21c_1acu"] = $row->C2V21C_ACU;
				$vivienda["c2v21d_gas"] = $row->C2V21D_GAS;
				$vivienda["c2v22_tipo_sersa"] = $row->C2V22_TIPO_SERSA;
				$vivienda["c2v23_eli_bas"] = $row->C2V23_ELI_BAS;
			}
		}
		$this->db->close();
		return $vivienda;
	}
	
	/**
	 * Actualiza los datos del módulo de vivienda para un numero de formulario indicado
	 * @param $nro_form
	 * @return boolean
	 */
	public function actualizarVivienda($nro_form, $arrayDatos){
		$result = true;
		$data = array(
			'C2V14_TIPO_VIV' => $arrayDatos["c2v14_tipo_viv"],
			'C2V15_CON_OCUP' => $arrayDatos["c2v15_con_ocup"],
			'C2V16_TOT_HOG' => $arrayDatos["c2v16_tot_hog"],		
			'C2V17_MAT_PARED' => $arrayDatos["c2v17_mat_pared"],
			'C2V18_MAT_PISO' => $arrayDatos["c2v18_mat_piso"],
			'C2V19_MAT_TECHO' => $arrayDatos["c2v19_mat_techo"],
			'C2V20_ANOS_VIV' => $arrayDatos["c2v20_anos_viv"],
			'C2V21A_EE' => $arrayDatos["c2v21a_ee"],
			'C2V21A1_ESTRATO' => $arrayDatos["c2v21a1_estrato"],	
			'C2V21B_ALC' => $arrayDatos["c2v21b_alc"],
			'C2V21C_ACU' => $arrayDatos["c2v21c_acu"],
			'C2V21D_GAS' => $arrayDatos["c2v21d_gas"],
			'C2V22_TIPO_SERSA' => $arrayDatos["c2v22_tipo_sersa"],
			'C2V23_ELI_BAS' => $arrayDatos["c2v23_eli_bas"]
		);
		$this->db->where('C0I1_ENCUESTA', $nro_form);
		if (!$this->db->update('CNPV_VIVIENDA', $data)){						
			$result = false; 
		}
		return $result;
	}
	
	/**
	 * Actualiza el estado del modulo de vivienda en la tabla de control cuando se ha terminado de diligenciar el formulario
	 * @author dmdiazf
	 * @since  21/10/2015
	 */
	public function actualizarEstadoModuloVivienda($nro_form, $estado){
		$result = false;
		$estadoActual = $this->obtenerEstadoModulo($nro_form,"sec_vivi");
		if (($estado==1 || $estado==2) && ($estadoActual < 2)){
			$data = array("SEC_VIVI" => $estado);
			$this->db->where("NRO_ENCUESTA_FORM", $nro_form);
			if ($this->db->update("CNPV_ADMIN_CONTROL",$data)){
				$result = true;
			}		
		}	
		return $result;
	}
	
	/**
	 * Actualiza el estado general del formulario que se está diligenciando. El estado cambia para indicar que de cada formulario se está diligenciando, o ya se diligenció el módulo de vivienda
	 * Se crean los estados 6 - Diligenciando Modulo Vivienda
	 *                      7 - Terminó Modulo Vivienda
	 * @author dmdiazf
	 * @since  21/10/2015                     
	 */
	public function actualizarEstadoFormulario($nro_form, $estado){
		$result = false;
		$estadoForm = $this->obtenerEstadoModulo($nro_form,"fk_estado");
		if (($estado==6 || $estado==7) && ($estadoForm < 7)){
			$data = array("FK_ESTADO" => $estado);
			$this->db->where("NRO_ENCUESTA_FORM", $nro_form);
			if ($this->db->update("CNPV_ADMIN_CONTROL", $data)){
				$result = true;
			}
		}
		return $result;
	}
	
	/**
	 * Función para obtener el estado actual de diligenciamiento de un modulo de la encuesta.
	 * @author dmdiazf
	 * @since  21/10/2015
	 */
	private function obtenerEstadoModulo($nro_form, $modulo){
		$estado = false;
		$campo = strtoupper($modulo);
		$sql = "SELECT $campo FROM cnpv_admin_control WHERE nro_encuesta_form = $nro_form";
		$query = $this->db->query($sql);
		if ($query->num_rows() > 0){
			$row = $query->row();
			$estado = $row->$campo;
		}
		$this->db->close();
		return $estado;
	}
	
	
}//EOC