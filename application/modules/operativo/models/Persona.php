<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	/**
	 * Modelo para la consulta de personas registradas en un hogar 
	 * @author hhchavezv
	 * @since  2016ene15	 
	 **/

class Persona extends CI_Model {

	function __construct(){
		parent::__construct();
		$this->load->library("danecrypt");
	}


	/**
	 * Busqueda de usuarios de acuerdo a parametros
	 * @author hhchavezv
	 * @since  2016ene12
	 */
	public function busquedaPersonas($txtNroId,$txtNombre1,$txtNombre2,$txtApellido1,$txtApellido2){
			$usuarios = array();
			$sql = "SELECT  H.C0I1_ENCUESTA,
					H.C3P24_NROHOG,
					H.C4P41_NRO_PER,
					H.C4P42A_1ER_NOMBRE,
					H.C4P42B_1ER_APELLIDO,
					H.C4P43_TIPO_DOC,
					H.C4P44_NRO_DOC,
					LOWER(H.C4P44_NRO_DOC) AS DOC_MINUSCULA,
					R.C3R38B2_2NOMBRE,
					R.C3R38C2_2APELLIDO,
					C.FK_ESTADO, E.DESC_ESTADO
					FROM CNPV_PERSONA_HOGAR H
					LEFT JOIN CNPV_PERSONA_RESIDENTE R ON (H.C0I1_ENCUESTA=R.C0I1_ENCUESTA AND H.C3P24_NROHOG=R.C3R24_NROHOG AND H.C4P41_NRO_PER = R.C3R38A_NRO_RESI)
					LEFT JOIN CNPV_ADMIN_CONTROL C ON H.C0I1_ENCUESTA=C.NRO_ENCUESTA_FORM
					LEFT JOIN CNPV_PARAM_ESTADOS E ON C.FK_ESTADO = E.ID_ESTADO 
					WHERE 1=1 ";
			
			if ($txtNroId!='-' && $txtNroId!='0'){
				$sql .= "AND H.C4P44_NRO_DOC = '$txtNroId' ";
			}
			if ($txtNombre1!='-'){
				$sql .= "AND LOWER(H.C4P42A_1ER_NOMBRE) LIKE LOWER('%$txtNombre1%') ";
			}
			if ($txtNombre2!='-'){
				$sql .= "AND LOWER(R.C3R38B2_2NOMBRE) LIKE LOWER('%$txtNombre2%') ";
			}
			if ($txtApellido1!='-'){
				$sql .= "AND LOWER(H.C4P42B_1ER_APELLIDO) LIKE LOWER('%$txtApellido1%') ";
			}
			if ($txtApellido2!='-'){
				$sql .= "AND LOWER(R.C3R38C2_2APELLIDO) LIKE LOWER('%$txtApellido2%') ";
			}
			
			//$sql.=" ORDER BY  H.C4P44_NRO_DOC ASC ";
			$sql.=" ORDER BY  DOC_MINUSCULA ";
			//echo $sql;
			$query = $this->db->query($sql);
			if ($query->num_rows() > 0){
				$i = 0;
				foreach($query->result() as $row){
					
					$usuarios[$i]["txtNroId"] = $row->C4P44_NRO_DOC;
					$usuarios[$i]["txtNombre1"] = $row->C4P42A_1ER_NOMBRE;
					$usuarios[$i]["txtNombre2"] = $row->C3R38B2_2NOMBRE;					
					$usuarios[$i]["txtApellido1"] = $row->C4P42B_1ER_APELLIDO;
					$usuarios[$i]["txtApellido2"] = $row->C3R38C2_2APELLIDO;
					$usuarios[$i]["txtEstado"] = $row->DESC_ESTADO;
					$usuarios[$i]["opc"] = '<a href="'.site_url("/admin/mostrarDetalleHogar/$row->C0I1_ENCUESTA").'">Ver_Hogar</a> ';
					
					$i++;
				}
			}
			//print_r($usuarios);
			$this->db->close();
			return $usuarios;
		}	
}//EOC
