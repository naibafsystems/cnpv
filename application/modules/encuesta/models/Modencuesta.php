<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	/***
	 * Modelo para manejo de datos del módulo de encuesta de envio 
	 * @author hhchavezv
	 * @since  27/10/2015	 
	 ***/

class MODEncuesta extends CI_Model {

	function __construct(){
		parent::__construct();
	}

	/**
	 * Consulta los datos del módulo de vivienda para un numero de formulario indicado
	 * @param $nro_form
	 * @return array
	 */
	public function guardarEncuesta($nro_form, $datos){
	
		//Recibo todos los campos del formulario 
    		foreach($datos as $nombre_campo => $valor){
    			$asignacion = "\$" . $nombre_campo . "='" . $valor . "';";
    			eval($asignacion);
    		}
			isset($inscrip_1)? $inscrip_1 : $inscrip_1=NULL;
			isset($inscrip_2)? $inscrip_2 : $inscrip_2=NULL;
			isset($inscrip_2_cual)? $inscrip_2_cual : $inscrip_2_cual=NULL;
			isset($inscrip_3)? $inscrip_3 : $inscrip_3=NULL;
			isset($dilig_1)? $dilig_1 : $dilig_1=NULL;
			isset($dilig_2)? $dilig_2 : $dilig_2=NULL;
			isset($dilig_3)? $dilig_3 : $dilig_3=NULL;
			isset($dilig_3_cual)? $dilig_3_cual : $dilig_3_cual=NULL;
			isset($dilig_4)? $dilig_4 : $dilig_4=NULL;
			isset($soport_1)? $soport_1 : $soport_1=NULL;
			isset($chat_1)?( ($chat_1 =='-')? $chat_1=NULL : $chat_1 ): $chat_1=NULL;			
			isset($chat_2)?( ($chat_2 =='-')? $chat_2=NULL : $chat_2 ): $chat_2=NULL;
			isset($chat_3)?( ($chat_3 =='-')? $chat_3=NULL : $chat_3 ): $chat_3=NULL;
			isset($chat_4)?( ($chat_4 =='-')? $chat_4=NULL : $chat_4 ): $chat_4=NULL;
			
			isset($tel_1)?( ($tel_1 =='-')? $tel_1=NULL : $tel_1 ): $tel_1=NULL;
			isset($tel_2)?( ($tel_2 =='-')? $tel_2=NULL : $tel_2 ): $tel_2=NULL;
			isset($tel_3)?( ($tel_3 =='-')? $tel_3=NULL : $tel_3 ): $tel_3=NULL;
			isset($tel_4)?( ($tel_4 =='-')? $tel_4=NULL : $tel_4 ): $tel_4=NULL;
			
			isset($mail_1)?( ($mail_1 =='-')? $mail_1=NULL : $mail_1 ): $mail_1=NULL;
			isset($mail_2)?( ($mail_2 =='-')? $mail_2=NULL : $mail_2 ): $mail_2=NULL;
			isset($mail_3)?( ($mail_3 =='-')? $mail_3=NULL : $mail_3 ): $mail_3=NULL;
			isset($mail_4)?( ($mail_4 =='-')? $mail_4=NULL : $mail_4 ): $mail_4=NULL;			
			isset($soport_3)? $soport_3 : $soport_3=NULL;
		
			$fecha_digitacion=$this->fechaActualOracle('h');
			$fk_usu_digita=$this->session->userdata("id");
			
			
			$data = array(
    			'NRO_ENCUESTA_FORM' => $nro_form,
    			'INSCRIP' => $inscrip_1,
    			'INSCRIP_INCONV' => $inscrip_2,
    			'INSCRIP_INCONV_CUAL' => $inscrip_2_cual,
    			'INSCRIP_RECOMEND' => $inscrip_3,
    			'DILIG' => $dilig_1,
    			'DILIG_PREG' => $dilig_2,  
				'DILIG_INCONV' => $dilig_3,    				
				'DILIG_INCONV_CUAL' => $dilig_3_cual,
				'DILIG_RECOMEND' => $dilig_4,
				'SOPORTE' => $soport_1,  
				'CHAT_ATEN' => $chat_1,    				
				'CHAT_RAPID' => $chat_2,
				'CHAT_SOLUC' => $chat_3,
				'CHAT_PERS' => $chat_4,  
				'TEL_ATEN' => $tel_1,    				
				'TEL_RAPID' => $tel_2,
				'TEL_SOLUC' => $tel_3,
				'TEL_PERS' => $tel_4,  
				'EMAIL_ATEN' => $mail_1,    				
				'EMAIL_RAPID' => $mail_2,
				'EMAIL_SOLUC' => $mail_3,
				'EMAIL_PERS' => $mail_4,				
				'SOPORT_RECOMEND'=> $soport_3,		
    			'FK_USU_DIGITA' => $fk_usu_digita,
    			'FECHA_DIGITACION' => $fecha_digitacion
    			);
				
			
			$this->db->insert("CNPV_ENCUESTA_FINAL", $data);
			if($this->db->affected_rows() > 0){
    				$retorno = true;
    			}
    		else{
    				$retorno = false;
    		}
						
			$this->db->close();
    		return $retorno;
	}
	
	
	
	
	/**
	 * Actualiza en la tabla de control el estado de formulario  encuesta envio
	 * @author hhchavezv
	 * @since  28/10/2015
	 */
	public function actualizarEstadoModuloEncuesta($nro_form, $estado){
		$result = false;
		
		if (($estado==1)||($estado==2)){
			
			$data = array("SEC_ENCU" => $estado);
			$this->db->where("NRO_ENCUESTA_FORM", $nro_form);
			if ($this->db->update("CNPV_ADMIN_CONTROL",$data)){
				$result = true;
			}		
		}	
		$this->db->close();
		return $result;
	}
	
	/**
	 * Actualiza el estado general del formulario que se está diligenciando. El estado cambia para indicar en que estado de diligenciamiento va el censo
	 * Se crean los estados 12 - Terminó Encuesta	                       
	 * @author hhchavezv
	 * @since  28/10/2015                     
	 */
	public function actualizarEstadoFormulario($nro_form, $estado){
		$result = false;
		if ($estado==12){
			$data = array("FK_ESTADO" => $estado);
			$this->db->where("NRO_ENCUESTA_FORM", $nro_form);
			if ($this->db->update("CNPV_ADMIN_CONTROL", $data)){
				$result = true;
			}
		}
		$this->db->close();
		return $result;
	}

	/* Obtener del sistema la Fecha y hora actual, para guardar en oracle
	* @author hhchavezv
	* @since  28/10/2015
	*/
    public function fechaActualOracle($formato){
    	
    	date_default_timezone_set('America/Bogota');
    	if($formato=='f'){
    	 	// $fecha=date('d/m/Y');//15/07/2015
			$fecha=date('d/M/Y');//15/07/2015
    	}
     	if($formato=='h'){
    	//$fecha=date('d/m/Y h:i:s A'); //15/07/2015 03:08:54 PM	
		$fecha=date('d/M/Y h:i:s A '); //15/Jul/2015 03:08:54 PM- Debe ser el mes en letras para q pueda guardar sin error
    	}	 
    	return $fecha;
    } 
	
	/**
	 * Función para obtener el estado general actual de diligenciamiento.
	 * @author hhchavezv
	 * @since  29/10/2015
	 */
	public function obtenerEstadoGeneral($nro_form){
		$estado = false;
		$sql = "SELECT FK_ESTADO FROM cnpv_admin_control WHERE nro_encuesta_form = '$nro_form'";
		$query = $this->db->query($sql);
		if ($query->num_rows() > 0){
			$row = $query->row();
			$estado = $row->FK_ESTADO;
		}
		$this->db->close();
		return $estado;
	}
	
	/**
	 * Determina si el formulario ya puede mostrar la encuesta final de envio
	 * @author hhchavezv
	 * @since  29/10/2015
	 */
	public function presentarEncuestaFinal($nro_form){
		if( $this->obtenerEstadoGeneral($nro_form)==11 )
			return true;
		else
			return false;
		
	}
	/**
	 * Determina si el formulario esta finalizado y puede mostrar el msj final y descarga de pdf
	 * @author hhchavezv
	 * @since  30/10/2015
	 */
	public function presentarMsjFinal($nro_form){
		if( $this->obtenerEstadoGeneral($nro_form)==12 )
			return true;
		else
			return false;
		
	}
	
}//EOC