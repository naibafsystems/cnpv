<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class datosreg extends MX_Controller {
	
		public function __construct(){		
			parent::__construct();			
		}
	
		/**
		 * Obtiene los datos de tipos de certificados de la parametrica
		 * @author Angela Liliana Rodriguez Mahecha
		 * @since  Junio 25 / 2015
		 */
		function obtenerdatos($formu){
			$a = array();
			$sql = "SELECT R.*
						FROM CNP_PREREGISTRO R  
						WHERE NRO_ENCUESTA_FORM='".$formu."'";
			//echo "<br><br><br><br><br><br>".$sql;
			$query = $this->db->query($sql);
			if ($query->num_rows() > 0)
			{
				foreach ($query->result() as $row)
				{
					$a['PRIMER_NOMBRE']=$row->PRIMER_NOMBRE;
					$a['SEGUNDO_NOMBRE'] = $row->SEGUNDO_NOMBRE;
					$a['PRIMER_APELLIDO'] = $row->PRIMER_APELLIDO;
					$a['SEGUNDO_APELLIDO'] = $row->SEGUNDO_APELLIDO;
					$a['C4P40_TIPO_DOC'] = $row->C4P40_TIPO_DOC;
					$a['CEDULA'] = $row->CEDULA;
					$a['CORREO_ELECTRONICO'] = $row->CORREO_ELECTRONICO;
					$a['CONTRASENA'] = $row->CONTRASENA;
					$a['INDICATIVO'] = $row->INDICATIVO;
					$a['TEL_FIJO'] = $row->TEL_FIJO;
					$a['TEL_CELULAR'] = $row->TEL_CELULAR;
					$a['C1I1_DPTO'] = $row->C1I1_DPTO;
					$a['C1I2_MPIO'] = $row->C1I2_MPIO;
					$a['CLASE'] = $row->CLASE;
					$a['LOCALIDAD_COMUNA'] = $row->LOCALIDAD_COMUNA;
					$a['CENTRO_POBLADO'] = $row->CENTRO_POBLADO;
					$a['BARRIO_CORREGI_VEREDA'] = $row->BARRIO_CORREGI_VEREDA;
					$a['TERRITORIALIDAD_ETNICA'] = $row->TERRITORIALIDAD_ETNICA;
					$a['NOM_RESGUARDO_INDIGENA'] = $row->NOM_RESGUARDO_INDIGENA;
					$a['NOM_COMUNIDAD_NEGRA'] = $row->NOM_COMUNIDAD_NEGRA;
					$a['COMUNIDAD_VEREDA_RANCHERIA'] = $row->COMUNIDAD_VEREDA_RANCHERIA;
					$a['NOM_COMUNIDAD_VEREDA_RANCHERIA'] = $row->NOM_COMUNIDAD_VEREDA_RANCHERIA;
					$a['C1IV10_DIR'] = $row->C1IV10_DIR;
					$a['C3H_TOT_PER'] = $row->C3H_TOT_PER;
					
				}
				 
			}
			$this->db->close();
			return $a;
		}
		
		/**
		 * Obtiene el estado del formulario en la tabla de control 
		 * @author Angela Liliana Rodriguez Mahecha
		 * @since  Junio 25 / 2015
		 */
		public function obtenerestado ($formulario){
			$sql = "SELECT * FROM CNPV_ADMIN_CONTROL WHERE NRO_ENCUESTA_FORM='".$formulario."'";
			$query = $this->db->query($sql);
			if ($query->num_rows() > 0)
			{
				foreach ($query->result() as $row)
				{
					$estado_actual=$row->FK_ESTADO;
				}
			}
			return $estado_actual;
		}
		
		
		
		/**
		 * Obtiene el estado del formulario en la tabla de control
		 * @author Angela Liliana Rodriguez Mahecha
		 * @since  Junio 25 / 2015
		 */
		public function obtenerfecnac ($formulario){
			$sql = "SELECT * FROM CNPV_PERSONA_HOGAR WHERE C0I1_ENCUESTA='".$formulario."' AND C3P24_NROHOG='1' AND C4P41_NRO_PER='1'";
			$query = $this->db->query($sql);
			if ($query->num_rows() > 0)
			{
				foreach ($query->result() as $row)
				{
					$FEC_NAC['C4P46A_DIA_NAC']=$row->C4P46A_DIA_NAC;
					$FEC_NAC['C4P46B_MES_NAC']=$row->C4P46B_MES_NAC;
					$FEC_NAC['C4P46C_ANO_NAC']=$row->C4P46C_ANO_NAC;
					$FEC_NAC['C4P45_SEXO']=$row->C4P45_SEXO;
				}
			}
			return $FEC_NAC;
		}
		
		public function pruebaGrid($formulario){
			$data = array();
			$sql = "SELECT P.C4P41_SABE_DOC, P.C4P39A_1ER_NOMBRE, P.C4P39AA_2DO_NOMBRE, P.C4P39B_1ER_APELLIDO, P.C4P39BB_2DO_APELLIDO, P.C4P44_EDAD, P.C4P42_SEXO,
					CASE P.C4P40_TIPO_DOC WHEN '1' THEN 'Registro Civil de Nacimiento' WHEN '2' THEN 'Tarjeta de Identidad' WHEN '3' THEN 'Cedula de Ciudadania' WHEN '4' THEN 'Cedula de Extranjeria'  END AS C4P40_TIPO_DOC,
					CASE P.JEFE WHEN '1' THEN 'SI' WHEN '2' THEN 'NO' END AS JEFE    
					FROM CNP_PREREGISTRO_PERSONAS P 
					INNER JOIN CNP_PREREGISTRO R ON R.CEDULA= P.C4P41_SABE_DOC_P
					WHERE R.NRO_ENCUESTA_FORM='".$formulario."'";
			$query = $this->db->query($sql);
			if ($query->num_rows() > 0){
				$i = 0;
				foreach($query->result() as $row){
					$data[$i]["C4P40_TIPO_DOC"] = $row->C4P40_TIPO_DOC;
					$data[$i]["C4P41_SABE_DOC"] = $row->C4P41_SABE_DOC;
					$data[$i]["C4P39A_1ER_NOMBRE"] = $row->C4P39A_1ER_NOMBRE;
					$data[$i]["C4P39AA_2DO_NOMBRE"] = $row->C4P39AA_2DO_NOMBRE;
					$data[$i]["C4P39B_1ER_APELLIDO"] = $row->C4P39B_1ER_APELLIDO;
					$data[$i]["C4P39BB_2DO_APELLIDO"] = $row->C4P39BB_2DO_APELLIDO;
					$data[$i]["C4P44_EDAD"] = $row->C4P44_EDAD;
					
					if ($row->C4P42_SEXO==1)
					{
						$data[$i]['C4P42_SEXO']  = "Hombre";
					}
					else
					{
						$data[$i]['C4P42_SEXO']  = "Mujer";
							
					}
					
					$data[$i]["JEFE"] = $row->JEFE;
					$i++;
				}
			}
			$this->db->close();
			return $data;
		}
		
	/**
	 * Actualizar los datos Personales de telefono y asigno usuario y clave para el ingreso
	 * @author Angela Liliana Rodriguez Mahecha
	 * @since  Enero / 2016
	 */
	public function actualizaPreinscripcion($datos){
		$result=false;
		$veri=0;
		$formulario=$this->session->userdata("numform");
		$sql = "UPDATE CNP_PREREGISTRO
				SET INDICATIVO='".$datos['dtxtindicativo']."', TEL_FIJO='".$datos['dtxtTelF']."', TEL_CELULAR='".$datos['dtxtTelM']."', CONTRASENA='".$datos['dtxtcontras']."'
				WHERE  NRO_ENCUESTA_FORM='".$formulario."' ";
		$query = $this->db->query($sql);
	
	
		
		/*INSERTA LA TABLA DE USUARIOS*/
		$password = $this->danecrypt->encode($datos['dtxtcontras']);
		$sqlusua="UPDATE CNP_ADMIN_USUARIOS
				 SET CLAVE='".$password."'
				 WHERE NRO_ENCUESTA_FORM='".$formulario."' ";
		$query = $this->db->query($sqlusua);
		
		if ($query)
		{
			$result=true;
		}
			
		$this->db->close();
		return $result;
	}
	
	
	/**
	 * Busca las opciones del departamento para los combos
	 * @author Angela Liliana Rodriguez Mahecha
	 * @since  Enero / 2016
	 */
	function nomdepartamentos()
	{
		$data = false;
		$sql = "SELECT distinct C_DPTO, DPTO FROM CNPV_DIVIPOLA ORDER BY DPTO";
		$query = $this->db->query($sql);
		$i=0;
		if ($query->num_rows() > 0)
		{
			$data = array();
			foreach ($query->result() as $row)
			{
				$data[$i]["id"]=$row->C_DPTO;
				$data[$i]["nombre"]= $row->DPTO;
				$i++;
			}
		}
		//print_r ($data);
			
		$this->db->close();
		return $data;
	}
	
	/**
	 * Busca las opciones del municipio segun el codigo del departamento para los combos
	 * @author Angela Liliana Rodriguez Mahecha
	 * @since  Enero / 2016
	 */
	function nomdempios($coddepto)
	{
		$data = false;
		$sql = "SELECT C_MPIO, MPIO FROM CNPV_DIVIPOLA WHERE C_DPTO='".$coddepto."'ORDER BY MPIO ";
		$query = $this->db->query($sql);
		$i=0;
		if ($query->num_rows() > 0)
		{
			$data = array();
			foreach ($query->result() as $row)
			{
				$data[$i]["id"]=$row->C_MPIO;
				$data[$i]["nombre"]= $row->MPIO;
				$i++;
			}
		}
		//print_r ($data);
			
		$this->db->close();
		return $data;
	}
	
	
	/**
	 * Actualiza los datos de ubicacion del formulario
	 * @author Angela Liliana Rodriguez Mahecha
	 * @since  Enero / 2016
	 */
	public function actualizaubicacion($datos){
		$result = false;
		$var=0;
		$formulario=$this->session->userdata("numform");
		var_dump ($datos);
		if (!isset($datos['dclase']))
		{
			$datos['dclase']='';
		}
		if (!isset($datos['dterrito']))
		{
			$datos['dterrito']='';
		}
		if (!isset($datos['dresgterrit']))
		{
			$datos['dresgterrit']='';
		}
	
	
		echo $sql = "UPDATE CNP_PREREGISTRO
				SET C1I1_DPTO= '".$datos['dDepartamento']."',
					C1I2_MPIO= '".$datos['dMunicipio']."',
					C1IV10_DIR= '".$datos['dtxtdireccion']."',
					CLASE= '".$datos['dclase']."',
					LOCALIDAD_COMUNA= '".$datos['dtxtlocalidad']."',
					CENTRO_POBLADO= '".$datos['dtxtpoblado']."',
					BARRIO_CORREGI_VEREDA= '".$datos['dtxtbarrio']."',
					TERRITORIALIDAD_ETNICA= '".$datos['dterrito']."',
					NOM_RESGUARDO_INDIGENA= '".$datos['dtxtresgu']."',
					NOM_COMUNIDAD_NEGRA= '".$datos['dtxtnomcomu']."',
					COMUNIDAD_VEREDA_RANCHERIA= '".$datos['dresgterrit']."',
					NOM_COMUNIDAD_VEREDA_RANCHERIA= '".$datos['dtxtnom']."'
				WHERE  NRO_ENCUESTA_FORM='".$formulario."' ";
		$query = $this->db->query($sql);
		if ($query)
			$var=1;
	
		$sql = "UPDATE CNPV_VIVIENDA
				SET C1I1_DPTO= '".$datos['dDepartamento']."',
					C1I2_MPIO= '".$datos['dMunicipio']."',
					C1IV10_DIR= '".$datos['dtxtdireccion']."',
					C1I3_CLASE= '".$datos['dclase']."'
				WHERE  C0I1_ENCUESTA='".$formulario."' ";
		$query = $this->db->query($sql);
		if ($query)
			$var=2;
	
		if ($var==2)
		{
			$reult=true;
			$sql = "SELECT * FROM CNPV_ADMIN_CONTROL WHERE NRO_ENCUESTA_FORM='".$formulario."'";
			$query = $this->db->query($sql);
			if ($query->num_rows() > 0)
			{
				foreach ($query->result() as $row)
				{
					$estado_actual=$row->FK_ESTADO;
				}
			}
			
			if ($estado_actual<2)
			{
				/*HACE EL UPDATE DE LA TABLA DE CONTROL*/
				$sql = "UPDATE CNPV_ADMIN_CONTROL SET SEC_VIVI=1, FK_ESTADO=2 WHERE NRO_ENCUESTA_FORM='".$formulario."'";
				$query = $this->db->query($sql);
				//echo "<br>CONTROL<br>".$sql;
			}
		}
	
		$this->db->close();
		return $result;
	}
	
	
	/**
	 * grilla personas del hogar
	 * @author Angela Rodriguez
	 * @since  Enero / 2016
	 */
	public function GridPerHogar($formulario){
		$data = array();
		//$formulario="900000159";
		$sql = "SELECT  C4P40_TIPO_DOC, C4P41_NRO_PER,
					C4P41_SABE_DOC,
					C4P39A_1ER_NOMBRE,
					C4P39AA_2DO_NOMBRE,
					C4P39B_1ER_APELLIDO,
					C4P39BB_2DO_APELLIDO,
					C4P44_EDAD,
					C4P42_SEXO,
					JEFE,
					SUM(NVL(case JEFE when 1 then 1 else 0 end, 0)) OVER () AS EXISTE,
					SUM(NVL (completo, 0)) OVER () AS COMPLETO
					FROM CNP_PREREGISTRO_PERSONAS
					WHERE NRO_ENCUESTA_FORM='".$formulario."'";
		$query = $this->db->query($sql);
		if ($query->num_rows() > 0){
			$i = 0;
			$existe=0;
			foreach($query->result() as $row){
				$data[$i]["EXISTE"] = $row->EXISTE;
				$data[$i]['COMPLETO']=$row->COMPLETO;
				$data[$i]["C4P41_NRO_PER"] = $row->C4P41_NRO_PER;
				$data[$i]["C4P42A_1ER_NOMBRE"] = $row->C4P39A_1ER_NOMBRE;
				$data[$i]["C3R38B2_2NOMBRE"] = $row->C4P39AA_2DO_NOMBRE;
				$data[$i]["C4P42B_1ER_APELLIDO"] = $row->C4P39B_1ER_APELLIDO;
				$data[$i]["C3R38C2_2APELLIDO"] = $row->C4P39BB_2DO_APELLIDO;
					
				if ($row->C4P40_TIPO_DOC==1)
				{
					$data[$i]['C4P43_TIPO_DOC_DES']  = "RC";
				}
				else if ($row->C4P40_TIPO_DOC==2)
				{
					$data[$i]['C4P43_TIPO_DOC_DES']  = "TI";
				}
				else if ($row->C4P40_TIPO_DOC==3)
				{
					$data[$i]['C4P43_TIPO_DOC_DES']  = "CC";
				}
				else if ($row->C4P40_TIPO_DOC==4)
				{
					$data[$i]['C4P43_TIPO_DOC_DES']  = "CE";
				}
				else if ($row->C4P40_TIPO_DOC==5)
				{
					$data[$i]['C4P43_TIPO_DOC_DES']  = "NT";
				}
				$data[$i]["C4P43_TIPO_DOC"] = $row->C4P40_TIPO_DOC;
				$data[$i]["C4P44_NRO_DOC"] = $row->C4P41_SABE_DOC;
				$data[$i]["C4P47_EDAD"] = $row->C4P44_EDAD;
				$data[$i]["C4P45_SEXO"] = $row->C4P42_SEXO;
				if ($row->C4P42_SEXO==1)
				{
					$data[$i]['C4P45_SEXO_DES']  = "Hombre";
				}
				else if ($row->C4P42_SEXO==2)
				{
					$data[$i]['C4P45_SEXO_DES']  = "Mujer";
				}
				else
				{
					$data[$i]['C4P45_SEXO_DES']  = "";
	
				}
					
				if ($row->JEFE==1)
				{
					$data[$i]['C4P49_PARENTESCO_DES']  = "S&iacute;";
	
				}
				else
				{
					$data[$i]['C4P49_PARENTESCO_DES']  = "No";
	
				}
				$data[$i]['C4P49_PARENTESCO']=$row->JEFE;
	
					
				$i++;
			}
	
		}
		$this->db->close();
		return $data;
	}
	
	
	/**
	 * verifica que no exista la cedula de las personas integrantes del hogar
	 * @author Angela Liliana Rodriguez Mahecha
	 * @since  Enero / 2016
	 */
	public function verificaExisteCCd($datos){
		$existe=0;
		if ($datos['C4P43_TIPO_DOC']==5)
		{
			$existe=0;
		}
		else
		{
			$sqlver ="SELECT * FROM CNPV_PERSONA_HOGAR 
					WHERE C4P43_TIPO_DOC='".$datos['C4P43_TIPO_DOC']."' AND C4P44_NRO_DOC='".$datos['C4P44_NRO_DOC']."'";
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
	 * inserta en la tabla de pre_registo personas y en personas_recidentes y en personas_hogar
	 * @author Angela Liliana Rodriguez Mahecha
	 * @since  Enero / 2016
	 */
	public function GuardaPerHogard($datos){
		//var_dump ($datos);
		$existe=0;
	
		$sqlver ="SELECT MAX(C4P41_NRO_PER) AS C4P41_NRO_PER  FROM CNPV_PERSONA_HOGAR
                WHERE
                C0I1_ENCUESTA= '".$datos['formulario']."' ";
		$query = $this->db->query($sqlver);
	
		if ($query->num_rows() > 0){
			foreach($query->result() as $row)
			{
				$consecutivo=$row -> C4P41_NRO_PER+1;
			}
		}
	
		$sql = "INSERT INTO CNP_PREREGISTRO_PERSONAS
				(DIRECTORIO, C4P40_TIPO_DOC,  C4P41_SABE_DOC, C4P39A_1ER_NOMBRE, C4P39AA_2DO_NOMBRE, C4P39B_1ER_APELLIDO, C4P39BB_2DO_APELLIDO, C4P44_EDAD, C4P42_SEXO, JEFE, NRO_ENCUESTA_FORM, COMPLETO, C4P41_NRO_PER)
				VALUES (SEQ_PREREGISTRO_PERSONAS.Nextval, '".$datos['C4P43_TIPO_DOC']."','".$datos['C4P44_NRO_DOC']."', '".$datos['C4P42A_1ER_NOMBRE']."', '".$datos['C3R38B2_2NOMBRE']."', '".$datos['C4P42B_1ER_APELLIDO']."', '".$datos['C3R38C2_2APELLIDO']."' , '".$datos['C4P47_EDAD']."' , '".$datos['C4P45_SEXO']."','".$datos['C4P49_PARENTESCO']."', '".$datos['formulario']."', '1', $consecutivo)";
		$query = $this->db->query($sql);
	
	
		$sql = "INSERT INTO CNPV_PERSONA_HOGAR
			(C0I1_ENCUESTA, C3P24_NROHOG, C4P41_NRO_PER, C4P42A_1ER_NOMBRE,  C4P42B_1ER_APELLIDO, C4P43_TIPO_DOC, C4P44_NRO_DOC, C4P45_SEXO, C4P47_EDAD, C4P49_PARENTESCO)
			VALUES ('".$datos['formulario']."', '1', '".$consecutivo."', '".$datos['C4P42A_1ER_NOMBRE']."', '".$datos['C4P42B_1ER_APELLIDO']."', '".$datos['C4P43_TIPO_DOC']."', '".$datos['C4P44_NRO_DOC']."', '".$datos['C4P45_SEXO']."', '".$datos['C4P47_EDAD']."', '".$datos['C4P49_PARENTESCO']."')";
		$query = $this->db->query($sql);
	
	
		$sql = "INSERT INTO CNPV_PERSONA_RESIDENTE
			(C0I1_ENCUESTA, C3R24_NROHOG, C3R38A_NRO_RESI, C3R38B1_1NOMBRE,  C3R38B2_2NOMBRE, C3R38C1_1APELLIDO, C3R38C2_2APELLIDO)
			VALUES ('".$datos['formulario']."', '1', '".$consecutivo."', '".$datos['C4P42A_1ER_NOMBRE']."', '".$datos['C3R38B2_2NOMBRE']."', '".$datos['C4P42B_1ER_APELLIDO']."', '".$datos['C3R38C2_2APELLIDO']."')";
		$query = $this->db->query($sql);
	
		if ($query)
		{
			$existe=1;
		}
	
		return $existe;
	
	}
	
	/**
	 * verifica si existe la cc de la persona que estan modificando
	 * @author Angela Liliana Rodriguez Mahecha
	 * @since  Enero / 2016
	 */
	public function verificaExisteCCmodificard($datos){
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
			$sqlver ="SELECT * FROM CNPV_PERSONA_HOGAR
					 WHERE C4P43_TIPO_DOC='".$datos['C4P43_TIPO_DOC']."' AND C4P44_NRO_DOC='".$datos['C4P44_NRO_DOC']."' and C4P41_NRO_PER!='".$datos['id']."'";
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
	 * Actualiza los datos de la persona del hogar en las tres tablas
	 * @author Angela Liliana Rodriguez Mahecha
	 * @since  Enero / 2016
	 */
	public function EditaPerHogard($datos){
		//var_dump ($datos);
		$existe=0;
	
		$sql = "UPDATE CNP_PREREGISTRO_PERSONAS SET
				C4P39A_1ER_NOMBRE= '".$datos['C4P42A_1ER_NOMBRE']."', C4P39AA_2DO_NOMBRE= '".$datos['C3R38B2_2NOMBRE']."', C4P39B_1ER_APELLIDO= '".$datos['C4P42B_1ER_APELLIDO']."', C4P39BB_2DO_APELLIDO= '".$datos['C3R38C2_2APELLIDO']."',  C4P40_TIPO_DOC='".$datos['C4P43_TIPO_DOC']."', C4P41_SABE_DOC='".$datos['C4P44_NRO_DOC']."', C4P42_SEXO='".$datos['C4P45_SEXO']."', C4P44_EDAD='".$datos['C4P47_EDAD']."', JEFE='".$datos['C4P49_PARENTESCO']."', COMPLETO='1'
				WHERE NRO_ENCUESTA_FORM= '".$datos['formulario']."'  AND  C4P41_NRO_PER = '".$datos['C4P41_NRO_PER']."'";
		$query = $this->db->query($sql);
		if ($query)
		{
			$existe=2;
		}
	
		if ($datos['C4P41_NRO_PER']==1)
		{
			$sql = "UPDATE CNP_PREREGISTRO SET
				PRIMER_NOMBRE= '".$datos['C4P42A_1ER_NOMBRE']."', SEGUNDO_NOMBRE= '".$datos['C3R38B2_2NOMBRE']."', PRIMER_APELLIDO= '".$datos['C4P42B_1ER_APELLIDO']."', SEGUNDO_APELLIDO= '".$datos['C3R38C2_2APELLIDO']."',  C4P40_TIPO_DOC='".$datos['C4P43_TIPO_DOC']."', CEDULA='".$datos['C4P44_NRO_DOC']."'
				WHERE NRO_ENCUESTA_FORM= '".$datos['formulario']."' ";
			$query = $this->db->query($sql);
		}
	
		$sql = "UPDATE CNPV_PERSONA_HOGAR SET
				C4P42A_1ER_NOMBRE= '".$datos['C4P42A_1ER_NOMBRE']."', C4P42B_1ER_APELLIDO= '".$datos['C4P42B_1ER_APELLIDO']."', C4P43_TIPO_DOC='".$datos['C4P43_TIPO_DOC']."', C4P44_NRO_DOC='".$datos['C4P44_NRO_DOC']."', C4P45_SEXO='".$datos['C4P45_SEXO']."', C4P47_EDAD='".$datos['C4P47_EDAD']."', C4P49_PARENTESCO='".$datos['C4P49_PARENTESCO']."'
				WHERE C0I1_ENCUESTA= '".$datos['formulario']."'  AND  C4P41_NRO_PER = '".$datos['C4P41_NRO_PER']."'";
		$query = $this->db->query($sql);
		if ($query)
		{
			$existe=3;
		}
	
		$sql = "UPDATE CNPV_PERSONA_RESIDENTE SET
				C3R38B1_1NOMBRE= '".$datos['C4P42A_1ER_NOMBRE']."', C3R38B2_2NOMBRE= '".$datos['C3R38B2_2NOMBRE']."', C3R38C1_1APELLIDO= '".$datos['C4P42B_1ER_APELLIDO']."', C3R38C2_2APELLIDO= '".$datos['C3R38C2_2APELLIDO']."'
				WHERE C0I1_ENCUESTA= '".$datos['formulario']."'  AND  C3R38A_NRO_RESI = '".$datos['C4P41_NRO_PER']."'";
		$query = $this->db->query($sql);
		if ($query)
		{
			$existe=4;
		}
	
		if ($existe==4)
		{
			$existe=1;
		}
	
		return $existe;
	}	
	
	/**
	 * Elimina la persona integrante del hogar en las tres tablas
	 * @author Angela Liliana Rodriguez Mahecha
	 * @since  Enero / 2016
	 */
	public function EliminarPerHogard($datos){
		//var_dump ($datos);
		$existe=0;
	
		$sql = "DELETE FROM CNP_PREREGISTRO_PERSONAS
				WHERE
				NRO_ENCUESTA_FORM= '".$datos['formulario']."' AND  C4P41_NRO_PER = '".$datos['id']."'";
		$query = $this->db->query($sql);
		if ($query)
		{
			$existe=2;
		}
	
	
		$sql = "DELETE FROM CNPV_PERSONA_RESIDENTE
				WHERE
				C0I1_ENCUESTA= '".$datos['formulario']."' AND  C3R38A_NRO_RESI = '".$datos['id']."'";
		$query = $this->db->query($sql);
		if ($query)
		{
			$existe=3;
		}
	
	
		$sql = "DELETE FROM CNPV_PERSONA_HOGAR
				WHERE
				C0I1_ENCUESTA= '".$datos['formulario']."' AND  C4P41_NRO_PER = '".$datos['id']."'";
		$query = $this->db->query($sql);
		if ($query)
		{
			$existe=3;
		}
	
	
		if ($query)
		{
			$existe=1;
		}
	
		return $existe;
	
	}
	
	
	/**
	 * obtiene todos los datos del preregistro
	 * @author Liliana Ramirez Pedraza
	 * @since  Agosto 18 / 2015
	 */
	public function obtenernombred($formulario)
	{
		$result = false;
		$sql = "SELECT * FROM CNP_PREREGISTRO WHERE NRO_ENCUESTA_FORM='$formulario'";
		$query = $this->db->query($sql);
	
		if ($query->num_rows() > 0)
		{
			foreach($query->result() as $row)
			{
				$result   = $row->PRIMER_NOMBRE." ".$row->SEGUNDO_NOMBRE ." ". $row->PRIMER_APELLIDO . " ". $row->SEGUNDO_APELLIDO;
			}
		}
		$this->db->close();
		return $result;
	}
	
	/**
	 * obtiene todos los datos del preregistro
	 * @author Liliana Ramirez Pedraza
	 * @since  Agosto 18 / 2015
	 */
	public function obtenercorreod($formulario)
	{
		$result = false;
		$sql = "SELECT * FROM CNP_ADMIN_USUARIOS
		 WHERE NRO_ENCUESTA_FORM='$formulario'";
		$query = $this->db->query($sql);
	
		if ($query->num_rows() > 0)
		{
			foreach($query->result() as $row)
			{
	
				$result   = $row->USUARIO;
			}
		}
		//echo "<br>eeeeeeeee".$result;
		$this->db->close();
		return $result;
	}
	
	/**
	 * obtiene todos los datos del preregistro
	 * @author Liliana Ramirez Pedraza
	 * @since  Agosto 18 / 2015
	 */
	public function obtenerclaved($formulario)
	{
		$result = false;
		$sql = "SELECT * FROM CNP_PREREGISTRO WHERE NRO_ENCUESTA_FORM='$formulario'";
		$query = $this->db->query($sql);
	
		if ($query->num_rows() > 0)
		{
			foreach($query->result() as $row)
			{
	
				$result   = $row->CONTRASENA;
			}
		}
		$this->db->close();
		return $result;
	}
	
	
	/**
	 * Funcion para verificar que todos los datos de todos los integrantes del hogar esten completos
	 * @author Angela Liliana Rodriguez Mahecha
	 * @since  Enero  / 2016
	 */
	public function verificacompletosd($dato){
		//var_dump ($datos);
		$result=0;
	
		$sql1="select SUM(COMPLETO) AS COMPLETOS from  CNP_PREREGISTRO_PERSONAS
		where NRO_ENCUESTA_FORM='".$dato."'";
		$query = $this->db->query($sql1);
		$validapadre=$query->num_rows();
	
		if ($query->num_rows() > 0){
			foreach($query->result() as $row){
				$result = $row->COMPLETOS;
			}
		};
			
		return $result;
	
	}
	
	
	/**
	 * Actualiza el total de personas de un hogar
	 * @author Angela Liliana Rodriguez Mahecha
	 * @since  Enero  / 2016
	 */
	public function actualizatotperso($datos){
		$formulario=$this->session->userdata("numform");
		$sql = "UPDATE CNP_PREREGISTRO
				SET C3H_TOT_PER= '".$datos['dcanti']."',
					FECHAFIN = SYSDATE
				WHERE  NRO_ENCUESTA_FORM='".$formulario."' ";
		$query = $this->db->query($sql);
	
		$sql = "UPDATE CNPV_HOGAR
				SET C3H_TOT_PER= '".$datos['dcanti']."'
				WHERE  C0I1_ENCUESTA='".$formulario."' ";
		$query = $this->db->query($sql);
	
		$result = true;
		
		$sql = "SELECT * FROM CNPV_ADMIN_CONTROL WHERE NRO_ENCUESTA_FORM='".$formulario."'";
		$query = $this->db->query($sql);
		if ($query->num_rows() > 0)
		{
			foreach ($query->result() as $row)
			{
				$estado_actual=$row->FK_ESTADO;
			}
		}
		
		if ($estado_actual<5)
		{
			$sql = "UPDATE CNPV_ADMIN_CONTROL SET SEC_HOGAR=1, FK_ESTADO=5, SEC_PREREG=2, FEC_FINPREREG=SYSDATE WHERE NRO_ENCUESTA_FORM='".$formulario."'";
			$query = $this->db->query($sql);
		}
		
		$this->db->close();
		return $result;
	}
	
	
	 
}//EOC	   
