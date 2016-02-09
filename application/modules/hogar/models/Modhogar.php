<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	/***
	 * Modelo para obtencion de datos del modulo de hogar 
	 * @author Angela Rodriguez
	 * @since  20/10/2015	 
	 ***/

class MODHogar extends CI_Model {

	function __construct(){
		parent::__construct();
	}

	
	/**
	 * Busca si el departamento
	 * @author Angela Liliana Rodriguez Mahecha
	 * @since  Octubre 20 / 2015
	 */
	function nomdepaises()
	{
		$data = false;
		$sql = "SELECT CODIGO, NOMBRE_PAIS FROM CNPV_PARAM_PAIS WHERE CODIGO NOT IN ('850', '249', '245', '239', '580', '149') ORDER BY NOMBRE_PAIS";
		$query = $this->db->query($sql);
		$i=0;
		if ($query->num_rows() > 0)
		{
			$data = array();
			foreach ($query->result() as $row)
			{
				$data[$i]["CODIGO"]=$row->CODIGO;
				$data[$i]["NOMBRE_PAIS"]= $row->NOMBRE_PAIS;
				$i++;
			}
		}
		//print_r ($data);
			
		$this->db->close();
		return $data;
	}
	
	/**
	 * guarda fallecidos del hogar
	 * @author Liliana Ramirez 
	 * @since  Octubre 21 / 2015
	 */
	function guardadatos($datos)
	{
		//var_dump ($datos);
		
		$sqlver ="SELECT MAX(C3F35A_NRO_FALL) AS C3F35A_NRO_FALL  
				FROM CNPV_PERSONA_FALLECIDA
                WHERE
                C0I1_ENCUESTA= '".$datos['formulario']."' AND  C3F24_NROHOG= '1' ";
		$query = $this->db->query($sqlver);
		
		if ($query->num_rows() > 0){
			foreach($query->result() as $row)
			{
				$consecutivo=$row -> C3F35A_NRO_FALL+1;
			}
		}
		
		echo $sql = "INSERT INTO CNPV_PERSONA_FALLECIDA 
				(C0I1_ENCUESTA, C3F24_NROHOG, C3F35A_NRO_FALL, C3F35B_SEXO_FALL, C3F35C_EDAD_FALL, C3F35D_CERT_DEFUN)
				VALUES ('".$datos['formulario']."', '1', '".$consecutivo."', '".$datos['sexo']."', '".$datos['edad']."', '".$datos['certificado']."')";
		$query = $this->db->query($sql);
		
		$sql="UPDATE CNPV_HOGAR SET	C3H35_NRO_FALL='".$datos['combocantidad']."' WHERE C0I1_ENCUESTA='".$datos['formulario']."'";
		$query = $this->db->query($sql);
	}
	
	/**
	 * grilla fallecidos del hogar
	 * @author Liliana Ramirez
	 * @since  Octubre 21 / 2015
	 */
	public function Gridfalledidos($formulario){
		$data = array();
		$sql = "SELECT  C3F35A_NRO_FALL, CASE C3F35B_SEXO_FALL WHEN 1 THEN 'Hombre' WHEN 2 THEN 'Mujer' END AS C3F35B_SEXO_FALL,
     				C3F35C_EDAD_FALL, CASE C3F35D_CERT_DEFUN  WHEN 1 THEN 'Si' WHEN 2 THEN 'No' WHEN 3 THEN 'No Sabe' END AS C3F35D_CERT_DEFUN
					FROM CNPV_PERSONA_FALLECIDA
					WHERE C0I1_ENCUESTA='".$formulario."'";
		$query = $this->db->query($sql);
		if ($query->num_rows() > 0){
			$i = 0;
			foreach($query->result() as $row){
				$data[$i]["C3F35A_NRO_FALL"] = $row->C3F35A_NRO_FALL;
				$data[$i]["C3F35B_SEXO_FALL"] = $row->C3F35B_SEXO_FALL;
				$data[$i]["C3F35C_EDAD_FALL"] = $row->C3F35C_EDAD_FALL;
				$data[$i]["C3F35D_CERT_DEFUN"] = $row->C3F35D_CERT_DEFUN;
				$i++;
			}
		}
		$this->db->close();
		return $data;
	}
	
	
	/**
	 * grilla personas del hogar 
	 * @author Liliana Ramirez
	 * @since  Octubre 26 / 2015
	 */
	public function GridPerHogar($formulario){
		$data = array();
		$sql = "SELECT  H.C4P41_NRO_PER, H.C4P42A_1ER_NOMBRE, R.C3R38B2_2NOMBRE, H.C4P42B_1ER_APELLIDO, R.C3R38C2_2APELLIDO, H.C4P43_TIPO_DOC, H.C4P44_NRO_DOC, H.C4P47_EDAD,
		        H.C4P45_SEXO, H.C4P49_PARENTESCO,  SUM(NVL(case H.C4P49_PARENTESCO when 1 then 1 else 0 end, 0)) OVER () AS EXISTE  
		        FROM CNPV_PERSONA_HOGAR H
        		INNER JOIN CNPV_PERSONA_RESIDENTE R ON H.C0I1_ENCUESTA=R.C0I1_ENCUESTA AND H.C3P24_NROHOG=R.C3R24_NROHOG AND H.C4P41_NRO_PER = R.C3R38A_NRO_RESI
				WHERE H.C0I1_ENCUESTA='".$formulario."'";
		$query = $this->db->query($sql);
		if ($query->num_rows() > 0){
			$i = 0;
			$existe=0;
			foreach($query->result() as $row){
				$data[$i]["EXISTE"] = $row->EXISTE;
				$data[$i]["C4P41_NRO_PER"] = $row->C4P41_NRO_PER;
				$data[$i]["C4P42A_1ER_NOMBRE"] = $row->C4P42A_1ER_NOMBRE;
				$data[$i]["C3R38B2_2NOMBRE"] = $row->C3R38B2_2NOMBRE;
				$data[$i]["C4P42B_1ER_APELLIDO"] = $row->C4P42B_1ER_APELLIDO;
				$data[$i]["C3R38C2_2APELLIDO"] = $row->C3R38C2_2APELLIDO;
				
				if ($row->C4P43_TIPO_DOC==1)
				{
					$data[$i]['C4P43_TIPO_DOC_DES']  = "RC";
				}
				else if ($row->C4P43_TIPO_DOC==2)
				{
					$data[$i]['C4P43_TIPO_DOC_DES']  = "TI";
				}
				else if ($row->C4P43_TIPO_DOC==3)
				{
					$data[$i]['C4P43_TIPO_DOC_DES']  = "CC";
				}
				else if ($row->C4P43_TIPO_DOC==4)
				{
					$data[$i]['C4P43_TIPO_DOC_DES']  = "CE";
				}
				else if ($row->C4P43_TIPO_DOC==5)
				{
					$data[$i]['C4P43_TIPO_DOC_DES']  = "NT";
				}
				$data[$i]["C4P43_TIPO_DOC"] = $row->C4P43_TIPO_DOC;
				$data[$i]["C4P44_NRO_DOC"] = $row->C4P44_NRO_DOC;
				$data[$i]["C4P47_EDAD"] = $row->C4P47_EDAD;
				$data[$i]["C4P45_SEXO"] = $row->C4P45_SEXO;
				if ($row->C4P45_SEXO==1)
				{
					$data[$i]['C4P45_SEXO_DES']  = "Hombre";
				}
				else
				{
					$data[$i]['C4P45_SEXO_DES']  = "Mujer";
						
				}
				
				if ($row->C4P49_PARENTESCO==1)
				{
					$data[$i]['C4P49_PARENTESCO_DES']  = "S&iacute;";
					
				}
				else 
				{
					$data[$i]['C4P49_PARENTESCO_DES']  = "No";
			
				}
				
				if ($row->C4P49_PARENTESCO==1)
				{
					$data[$i]['C4P49_PARENTESCO']  = "1";
						
				}
				else
				{
					$data[$i]['C4P49_PARENTESCO']  = "99";
						
				}
				
				$i++;
			}
			
		}
		$this->db->close();
		return $data;
	}
	
	/**
	 * Consulta los datos del módulo de vivienda para un numero de formulario indicado
	 * @param $nro_form
	 * @return array
	 */
	public function consultarHogar($nro_form){
		$hogar = array();
		$sql = "SELECT * FROM CNPV_HOGAR WHERE C0I1_encuesta = $nro_form";
		//echo $sql;
		$query = $this->db->query($sql);
		if ($query->num_rows() > 0){
			foreach($query->result() as $row){
				$hogar["C0I1_ENCUESTA"] = $row -> C0I1_ENCUESTA;
				$hogar["C3H24_NROHOG"] = $row -> C3H24_NROHOG;
				$hogar["C3H_TOT_PER"] = $row -> C3H_TOT_PER;
				$hogar["C3H25_VIVE_EN"] = $row -> C3H25_VIVE_EN;
				$hogar["C3H26_VR_ARRDO"] = $row -> C3H26_VR_ARRDO;
				$hogar["C3H27_NRO_CUARTOS"] = $row -> C3H27_NRO_CUARTOS;
				$hogar["C3H28_NRO_DORMIT"] = $row -> C3H28_NRO_DORMIT;
				$hogar["C3H29_COCINAN_CON"] = $row -> C3H29_COCINAN_CON;
				$hogar["C3H30_OTRO_COMB"] = $row -> C3H30_OTRO_COMB;
				$hogar["C3H30A_CUAL_OTRO"] = $row -> C3H30A_CUAL_OTRO;
				$hogar["C3H31_AGUA_COCIN"] = $row -> C3H31_AGUA_COCIN;
				$hogar["C3H32_RECICLAN"] = $row -> C3H32_RECICLAN;
				$hogar["C3H33A_RADIO"] = $row -> C3H33A_RADIO;
				$hogar["C3H33B_TVABIE"] = $row -> C3H33B_TVABIE;
				$hogar["C3H33C_TVSUSC"] = $row -> C3H33C_TVSUSC;
				$hogar["C3H33D_TEL_FIJO"] = $row -> C3H33D_TEL_FIJO;
				$hogar["C3H33E_INT_FIJO"] = $row -> C3H33E_INT_FIJO;
				$hogar["C3H33F_INT_MOVIL"] = $row -> C3H33F_INT_MOVIL;
				$hogar["C3H33G_PC"] = $row -> C3H33G_PC;
				$hogar["C3H34_EMIGRA"] = $row -> C3H34_EMIGRA;
				$hogar["C3H34A_VENEZUELA"] = $row -> C3H34A_VENEZUELA;
				$hogar["C3H34B_USA"] = $row -> C3H34B_USA;
				$hogar["C3H34C_ESPANA"] = $row -> C3H34C_ESPANA;
				$hogar["C3H34D_ECUADOR"] = $row -> C3H34D_ECUADOR;
				$hogar["C3H34E_PANAMA"] = $row -> C3H34E_PANAMA; 
				$hogar["C3H34F_CANADA"] = $row -> C3H34F_CANADA;
				$hogar["C3H34G_OTRO_PAIS"] = $row -> C3H34G_OTRO_PAIS;
				$hogar["C3H34G1_OTRO_CUAL"] = $row -> C3H34G1_OTRO_CUAL;
				$hogar["C3H35_NRO_FALL"] = $row -> C3H35_NRO_FALL;
				$hogar["C3H36_AE_HOG"] = $row -> C3H36_AE_HOG; 
				$hogar["C3H36A_AE_GRUPO"] = $row -> C3H36A_AE_GRUPO;
				$hogar["C3H36B_AE_REALIZA"] = $row -> C3H36B_AE_REALIZA;
				$hogar["C3H36C_AE_QPER"] = $row -> C3H36C_AE_QPER;
				$hogar["C3H37A_DESPLAFORZ"] = $row -> C3H37A_DESPLAFORZ;
				$hogar["C3H37A1_ANIODESPLA"] = $row -> C3H37A1_ANIODESPLA;
				$hogar["C3H37A2_RETORNO"] = $row -> C3H37A2_RETORNO;
				$hogar["C3H37B_DESPLAFORZ"] = $row -> C3H37B_DESPLAFORZ;
				$hogar["C3H37B1_ANIODESPLA"] = $row -> C3H37B1_ANIODESPLA;
				$hogar["C3H37B2_RETORNO"] = $row -> C3H37B2_RETORNO;
				$hogar["C3H37C_DESPLAFORZ"] = $row -> C3H37C_DESPLAFORZ;
				$hogar["C3H37C1_ANIODESPLA"] = $row -> C3H37C1_ANIODESPLA;
				$hogar["C3H37C2_RETORNO"] = $row -> C3H37C2_RETORNO;
			}
		}
		$this->db->close();
		return $hogar;
	}
	
	
	/**
	 * Consulta los datos del módulo de vivienda para un numero de formulario indicado
	 * @param $nro_form
	 * @return array
	 */
	public function consultarJefe($nro_form){
		$jefe= 0;
		$sql = "SELECT * FROM CNPV_PERSONA_HOGAR WHERE C0I1_encuesta = $nro_form";
		//echo $sql;
		$query = $this->db->query($sql);
		if ($query->num_rows() > 0){
			foreach($query->result() as $row){
				if ($row -> C4P49_PARENTESCO==1)
				{
					$jefe= 1;
				}
			}
		}
		$this->db->close();
		return $jefe;
	}
	
	
	/**
	 * Consulta los datos del módulo de vivienda para un numero de formulario indicado
	 * @param $nro_form
	 * @return array
	 */
	public function verificaExisteCC($datos){
		$existe=0;
		if ($datos['C4P43_TIPO_DOC']==5)
		{
			$existe=0;
		}
		else
		{
			$sqlver ="SELECT * FROM CNPV_PERSONA_HOGAR WHERE C4P43_TIPO_DOC='".$datos['C4P43_TIPO_DOC']."' AND C4P44_NRO_DOC='".$datos['C4P44_NRO_DOC']."'";
			$query = $this->db->query($sqlver);
			if ($query->num_rows() > 0){
				$existe=1;
			}
			else 
			{
				$existe=0;
			}
		}
		$this->db->close();
		return  $existe;
	}
	
	
	/**
	 * Consulta los datos del módulo de vivienda para un numero de formulario indicado
	 * @param $nro_form
	 * @return array
	 */
	public function verificaExisteCCmodificar($datos){
		$existe=0;
		/*echo "aquii";
		var_dump ($datos);
		echo "fin datos";*/
		if ($datos['C4P43_TIPO_DOC']==5)
		{
			$existe=0;
		}
		else
		{
			$sqlver ="SELECT * FROM CNPV_PERSONA_HOGAR WHERE C4P43_TIPO_DOC='".$datos['C4P43_TIPO_DOC']."' AND C4P44_NRO_DOC='".$datos['C4P44_NRO_DOC']."'";
			$query = $this->db->query($sqlver);
			if ($query->num_rows() > 0){
				$existe=1;
			}
			else
			{
				$existe=0;
			}
		}
		$this->db->close();
		return  $existe;
	}
	
	/**
	 * Consulta los datos del módulo de vivienda para un numero de formulario indicado
	 * @param $nro_form
	 * @return array
	 */
	public function GuardaPerHogar($datos){
		//var_dump ($datos);
		$existe=0;
		
		$sqlver ="SELECT MAX(C4P41_NRO_PER) AS C4P41_NRO_PER  FROM CNPV_PERSONA_HOGAR 
                WHERE 
                C0I1_ENCUESTA= '".$datos['formulario']."' AND  C3P24_NROHOG= '1' ";
		$query = $this->db->query($sqlver);
		
		if ($query->num_rows() > 0){
			foreach($query->result() as $row)
			{
				$consecutivo=$row -> C4P41_NRO_PER+1;
			}
		}
		
		$sql = "INSERT INTO CNPV_PERSONA_RESIDENTE 
				(C0I1_ENCUESTA, C3R24_NROHOG, C3R38A_NRO_RESI, C3R38B1_1NOMBRE, C3R38B2_2NOMBRE, C3R38C1_1APELLIDO, C3R38C2_2APELLIDO)
				VALUES ('".$datos['formulario']."', '1', '".$consecutivo."', '".$datos['C4P42A_1ER_NOMBRE']."', '".$datos['C3R38B2_2NOMBRE']."', '".$datos['C4P42B_1ER_APELLIDO']."', '".$datos['C3R38C2_2APELLIDO']."')";
		$query = $this->db->query($sql);
		
		$sql = "INSERT INTO CNPV_PERSONA_HOGAR
			(C0I1_ENCUESTA, C3P24_NROHOG, C4P41_NRO_PER, C4P42A_1ER_NOMBRE,  C4P42B_1ER_APELLIDO, C4P43_TIPO_DOC, C4P44_NRO_DOC, C4P45_SEXO, C4P47_EDAD, C4P49_PARENTESCO)
			VALUES ('".$datos['formulario']."', '1', '".$consecutivo."', '".$datos['C4P42A_1ER_NOMBRE']."', '".$datos['C4P42B_1ER_APELLIDO']."', '".$datos['C4P43_TIPO_DOC']."', '".$datos['C4P44_NRO_DOC']."', '".$datos['C4P45_SEXO']."', '".$datos['C4P47_EDAD']."', '".$datos['C4P49_PARENTESCO']."')";
		$query = $this->db->query($sql);
		
		if ($query)
		{
			$existe=1;
		}
		
		return $existe;
		
	}
	
	
	/**
	 * Consulta los datos del módulo de vivienda para un numero de formulario indicado
	 * @param $nro_form
	 * @return array
	 */
	public function EditaPerHogar($datos){
		//var_dump ($datos);
		$existe=0;
	
		$sql = "UPDATE CNPV_PERSONA_RESIDENTE SET 
				C3R38B1_1NOMBRE= '".$datos['C4P42A_1ER_NOMBRE']."', C3R38B2_2NOMBRE= '".$datos['C3R38B2_2NOMBRE']."', C3R38C1_1APELLIDO= '".$datos['C4P42B_1ER_APELLIDO']."', C3R38C2_2APELLIDO= '".$datos['C3R38C2_2APELLIDO']."'
				WHERE 
				C0I1_ENCUESTA= '".$datos['formulario']."' AND  C3R24_NROHOG= '1' AND  C3R38A_NRO_RESI = '".$datos['C4P41_NRO_PER']."'";
		$query = $this->db->query($sql);
	
		$sql = "UPDATE CNPV_PERSONA_HOGAR SET
				C4P42A_1ER_NOMBRE= '".$datos['C4P42A_1ER_NOMBRE']."', C4P42B_1ER_APELLIDO= '".$datos['C4P42B_1ER_APELLIDO']."', C4P43_TIPO_DOC='".$datos['C4P43_TIPO_DOC']."', C4P44_NRO_DOC='".$datos['C4P44_NRO_DOC']."', C4P45_SEXO='".$datos['C4P45_SEXO']."', C4P47_EDAD='".$datos['C4P47_EDAD']."', C4P49_PARENTESCO='".$datos['C4P49_PARENTESCO']."'
				WHERE
				C0I1_ENCUESTA= '".$datos['formulario']."' AND  C3P24_NROHOG= '1' AND  C4P41_NRO_PER = '".$datos['C4P41_NRO_PER']."'";
		$query = $this->db->query($sql);
	
		if ($query)
		{
			$existe=1;
		}
	
		return $existe;
	}
	
	/**
	 * Consulta los datos del módulo de vivienda para un numero de formulario indicado
	 * @param $nro_form
	 * @return array
	 */
	public function EliminarPerHogar($datos){
		//var_dump ($datos);
		$existe=0;
	
		$sql = "DELETE FROM CNPV_PERSONA_RESIDENTE 
				WHERE
				C0I1_ENCUESTA= '".$datos['formulario']."' AND  C3R24_NROHOG= '1' AND  C3R38A_NRO_RESI = '".$datos['id']."'";
		$query = $this->db->query($sql);
	
		$sql = "DELETE FROM CNPV_PERSONA_HOGAR 
				WHERE
				C0I1_ENCUESTA= '".$datos['formulario']."' AND  C3P24_NROHOG= '1' AND  C4P41_NRO_PER = '".$datos['id']."'";
		$query = $this->db->query($sql);
	
		if ($query)
		{
			$existe=1;
		}
	
		return $existe;
	
	}
	
	
	
	/**
	 * Consulta los datos del módulo de vivienda para un numero de formulario indicado
	 * @param $nro_form
	 * @return array
	 */
	public function EliminarFallecido($datos){
		//var_dump ($datos);
		$existe=0;
	
		$sql = "DELETE FROM CNPV_PERSONA_FALLECIDA
				WHERE
				C0I1_ENCUESTA= '".$datos['formulario']."' AND  C3F24_NROHOG= '1' AND  C3F35A_NRO_FALL = '".$datos['id']."'";
		$query = $this->db->query($sql);
	
	
		if ($query)
		{
			$existe=1;
		}
	
		return $existe;
	
	}
	
	
	/**
	 * Actualiza los datos del módulo de vivienda para un numero de formulario indicado
	 * @param $nro_form
	 * @return boolean
	 */
	public function actualizarHogar($nro_form, $Datos){
		$result = true;
		var_dump ($Datos);
		$PerTotal=0;
		if ($Datos['index']==9)
		{
			$cant = "SELECT COUNT (C4P41_NRO_PER) AS TOTAL FROM CNPV_PERSONA_HOGAR WHERE C0I1_ENCUESTA='".$nro_form."' AND C3P24_NROHOG='1' GROUP BY C0I1_ENCUESTA, C3P24_NROHOG ";
			$querycant = $this->db->query($cant);
			
			if ($querycant->num_rows() > 0){
				foreach($querycant->result() as $row)
				{
					$PerTotal=$row -> TOTAL;
				}
			}
		}
		
			$sql="UPDATE CNPV_HOGAR SET ";
			
			switch($Datos['index']){
				case 1: //Guardar preguntas formulario 1
					$contenido= "C3H25_VIVE_EN='".$Datos['C3H25_VIVE_EN']."', C3H26_VR_ARRDO='".$Datos['C3H26_VR_ARRDO']."'";
					break;
				case 2: //Guardar preguntas formulario 2
					$contenido= "C3H27_NRO_CUARTOS='".$Datos['C3H27_NRO_CUARTOS']."', C3H28_NRO_DORMIT='".$Datos['C3H28_NRO_DORMIT']."'";
					break;
				case 3: //Guardar preguntas formulario 3
					if (!isset($Datos['C3H30_OTRO_COMB']))
					{
						$Datos['C3H30_OTRO_COMB']="";
					}
					if (!isset($Datos['C3H30A_CUAL_OTRO']))
					{
						$Datos['C3H30A_CUAL_OTRO']="";
					}
					$contenido= "C3H29_COCINAN_CON='".$Datos['C3H29_COCINAN_CON']."', C3H30_OTRO_COMB='".$Datos['C3H30_OTRO_COMB']."', C3H30A_CUAL_OTRO='".$Datos['C3H30A_CUAL_OTRO']."', C3H31_AGUA_COCIN='".$Datos['C3H31_AGUA_COCIN']."', C3H32_RECICLAN='".$Datos['C3H32_RECICLAN']."'";
					break;
				case 4: //Guardar preguntas formulario 4
					$contenido= "C3H33A_RADIO='".$Datos['C3H33A_RADIO']."', C3H33B_TVABIE='".$Datos['C3H33B_TVABIE']."', C3H33C_TVSUSC='".$Datos['C3H33C_TVSUSC']."', C3H33D_TEL_FIJO='".$Datos['C3H33D_TEL_FIJO']."', C3H33E_INT_FIJO='".$Datos['C3H33E_INT_FIJO']."', C3H33F_INT_MOVIL='".$Datos['C3H33F_INT_MOVIL']."', C3H33G_PC='".$Datos['C3H33G_PC']."'";
					break;
				case 5: //Guardar preguntas formulario 5
					if (!isset($Datos['C3H34A_VENEZUELA']))
					{
						$Datos['C3H34A_VENEZUELA']="";
					}
					if (!isset($Datos['C3H34B_USA']))
					{
						$Datos['C3H34B_USA']="";
					}
					if (!isset($Datos['C3H34C_ESPANA']))
					{
						$Datos['C3H34C_ESPANA']="";
					}
					if (!isset($Datos['C3H34D_ECUADOR']))
					{
						$Datos['C3H34D_ECUADOR']="";
					}
					if (!isset($Datos['C3H34E_PANAMA']))
					{
						$Datos['C3H34E_PANAMA']="";
					}
					if (!isset($Datos['C3H34F_CANADA']))
					{
						$Datos['C3H34F_CANADA']="";
					}
					if (!isset($Datos['C3H34G_OTRO_PAIS']))
					{
						$Datos['C3H34G_OTRO_PAIS']="";
					}
					if (!isset($Datos['C3H34G1_OTRO_CUAL']))
					{
						$Datos['C3H34G1_OTRO_CUAL']="";
					}
					$contenido= "C3H34_EMIGRA='".$Datos['C3H34_EMIGRA']."', C3H34A_VENEZUELA='".$Datos['C3H34A_VENEZUELA']."', 
								C3H34B_USA='".$Datos['C3H34B_USA']."', C3H34C_ESPANA='".$Datos['C3H34C_ESPANA']."', 
								C3H34D_ECUADOR='".$Datos['C3H34D_ECUADOR']."', C3H34E_PANAMA='".$Datos['C3H34E_PANAMA']."', 
								C3H34F_CANADA='".$Datos['C3H34F_CANADA']."', C3H34G_OTRO_PAIS='".$Datos['C3H34G_OTRO_PAIS']."', 
								C3H34G1_OTRO_CUAL='".$Datos['C3H34G1_OTRO_CUAL']."'";
					break;
				case 6: //Guardar preguntas formulario 6
					$contenido= "C3H35_NRO_FALL='".$Datos['C3H35_NRO_FALL']."'";
					break;
				case 7: //Guardar preguntas formulario 7
					if (!isset($Datos['grupo']))
					{
						$Datos['grupo']="";
					}
					if (!isset($Datos['actividad']))
					{
						$Datos['actividad']="";
					}
					if (!isset($Datos['C3H36C_AE_QPER']))
					{
						$Datos['C3H36C_AE_QPER']="";
					}
					$contenido= "C3H36_AE_HOG='".$Datos['C3H36_AE_HOG']."', C3H36A_AE_GRUPO='".$Datos['grupo']."', C3H36B_AE_REALIZA='".$Datos['actividad']."', C3H36C_AE_QPER='".$Datos['C3H36C_AE_QPER']."'";
					break;
				
					
				case 8: //Guardar preguntas formulario 8
					if (!isset($Datos['C3H37A1_ANIODESPLA']))
					{
						$Datos['C3H37A1_ANIODESPLA']="";
					}
					if (!isset($Datos['C3H37A2_RETORNO']))
					{
						$Datos['C3H37A2_RETORNO']="";
					}
					if (!isset($Datos['C3H37B1_ANIODESPLA']))
					{
						$Datos['C3H37B1_ANIODESPLA']="";
					}
					if (!isset($Datos['C3H37B2_RETORNO']))
					{
						$Datos['C3H37B2_RETORNO']="";
					}
					if (!isset($Datos['C3H37C1_ANIODESPLA']))
					{
						$Datos['C3H37C1_ANIODESPLA']="";
					}
					if (!isset($Datos['C3H37C2_RETORNO']))
					{
						$Datos['C3H37C2_RETORNO']="";
					}
				
					$contenido= "C3H37A_DESPLAFORZ='".$Datos['C3H37A_DESPLAFORZ']."', 
								C3H37A1_ANIODESPLA='".$Datos['C3H37A1_ANIODESPLA']."', 
								C3H37A2_RETORNO='".$Datos['C3H37A2_RETORNO']."', 
								C3H37B_DESPLAFORZ='".$Datos['C3H37B_DESPLAFORZ']."', 
								C3H37B1_ANIODESPLA='".$Datos['C3H37B1_ANIODESPLA']."', 
								C3H37B2_RETORNO='".$Datos['C3H37B2_RETORNO']."', 
								C3H37C_DESPLAFORZ='".$Datos['C3H37C_DESPLAFORZ']."', 
								C3H37C1_ANIODESPLA='".$Datos['C3H37C1_ANIODESPLA']."', 
								C3H37C2_RETORNO='".$Datos['C3H37C2_RETORNO']."'";
					break;
				case 9: //Guardar preguntas formulario 1
					$contenido= "C3H_TOT_PER='".$PerTotal."'";
					break;
					
			}
			$complemento=" WHERE C0I1_ENCUESTA='".$nro_form."' AND C3H24_NROHOG='1'";
			
			$sql =$sql.$contenido.$complemento;
			//echo $sql;
		$query = $this->db->query($sql);
		if (!$query)
		{
			$result=false;
		}
		return $result;
	}
	
	
	/**
	 * Actualiza el estado del modulo de vivienda en la tabla de control cuando se ha terminado de diligenciar el formulario
	 * @author dmdiazf
	 * @since  21/10/2015
	 */
	public function actualizarEstadoModuloHogar($nro_form, $estado){
		$result = false;
		$estadoActual = $this->obtenerEstadoModulo($nro_form,"SEC_HOGAR");
		if (($estado==1 || $estado==2) && ($estadoActual < 2)){
			$data = array("SEC_HOGAR" => $estado);
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
		if (($estado==8 || $estado==9) && ($estadoForm < 9)){
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