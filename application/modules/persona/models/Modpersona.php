<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	/***
	 * Modelo para obtenci&oacute;n de datos del m&oacute;dulo de persona
	 * @author rfhuertast - Roberto Fernando Huertas Torres
	 * @since  28/10/2015	 
	 ***/

class MODPersona extends CI_Model {

	function __construct()
	{
		parent::__construct();
	}

	/***
	 * Funci&oacute;n para consultar la informaci&oacute;n de la persona
	 * @author rfhuertast - Roberto Fernando Huertas Torres
	 * @return $persona - array con la informaci&oacute;n de la persona
	 * @param $nro_form: variable que indica la encuesta que est&aacute; en proceso, $nro_pers: variable con el n&uacute;mero de la persona que se est&aacute; procesando
	 * @since 28/10/2015
	 */
	
	public function consultarPersona($nro_form, $nro_pers)
	{
		$persona = array();
		$sql="SELECT * FROM CNPV_PERSONA_HOGAR WHERE C0I1_ENCUESTA = ".$nro_form;
		$sql.=" AND C3P24_NROHOG=1  AND C4P41_NRO_PER='".$nro_pers."'"; 
		$query = $this->db->query($sql);
		if($query->num_rows() > 0)
		{
			foreach($query->result() as $row)
			{
				$persona["C0I1_ENCUESTA"] = $row->C0I1_ENCUESTA;
				$persona["C3P24_NROHOG"] = $row->C3P24_NROHOG;
				$persona["C4P41_NRO_PER"] = $row->C4P41_NRO_PER;
				$persona["C4P42A_1ER_NOMBRE"] = $row->C4P42A_1ER_NOMBRE;
				$persona["C4P42B_1ER_APELLIDO"] = $row->C4P42B_1ER_APELLIDO;
				$persona["C4P43_TIPO_DOC"] = $row->C4P43_TIPO_DOC;
				$persona["C4P44_SABE_DOC"] = $row->C4P44_SABE_DOC;
				$persona["C4P44_NRO_DOC"] = $row->C4P44_NRO_DOC;
				$persona["C4P45_SEXO"] = $row->C4P45_SEXO;
				$persona["C4P46_SABE_FECHA"] = $row->C4P46_SABE_FECHA;
				$persona["C4P46A_DIA_NAC"] = $row->C4P46A_DIA_NAC;
				$persona["C4P46B_MES_NAC"] = $row->C4P46B_MES_NAC;
				$persona["C4P46C_ANO_NAC"] = $row->C4P46C_ANO_NAC;
				$persona["C4P47_EDAD"] = $row->C4P47_EDAD;
				$persona["C4P48_COLOMBIA"] = $row->C4P48_COLOMBIA;
				$persona["C4P48A_OTRA"] = $row->C4P48A_OTRA;
				$persona["C4P48B_CUAL_NAL"] = $row->C4P48B_CUAL_NAL;
				$persona["C4P49_PARENTESCO"] = $row->C4P49_PARENTESCO;
				$persona["C4P50_LUG_NAC"] = $row->C4P50_LUG_NAC;
				
				$persona["C4P50A_DPTO_NAC"] = $row->C4P50A_DPTO_NAC;
				$persona["C4P50B_MPIO_NAC"] = $row->C4P50B_MPIO_NAC;
				// 2016feb01 - hhchavezv - consulta mpio identificando si es el mismo de residencia u otro
				/*
				if($row->C4P50_LUG_NAC ==1){
					$persona["C4P50A_DPTO_NAC_RESID"] = $row->C4P50A_DPTO_NAC;
					$persona["C4P50B_MPIO_NAC_RESID"] = $row->C4P50B_MPIO_NAC;
					$persona["C4P50A_DPTO_NAC"] = '';
					$persona["C4P50B_MPIO_NAC"] = '';
				}else if($row->C4P50_LUG_NAC ==2){
					$persona["C4P50A_DPTO_NAC_RESID"]= '';
					$persona["C4P50B_MPIO_NAC_RESID"]= '';
					$persona["C4P50A_DPTO_NAC"] = $row->C4P50A_DPTO_NAC;
					$persona["C4P50B_MPIO_NAC"] = $row->C4P50B_MPIO_NAC;		
				}	
				*/
				$persona["C4P50C_PAIS_NAC"] = $row->C4P50C_PAIS_NAC;
				$persona["C4P50C1_ANO_LLEGO"] = $row->C4P50C1_ANO_LLEGO;
				$persona["C4P51_RES_MAMA"] = $row->C4P51_RES_MAMA;
				$persona["C4P51A_DPTO_MAMA"] = $row->C4P51A_DPTO_MAMA;
				$persona["C4P51B_MPIO_MAMA"] = $row->C4P51B_MPIO_MAMA;
				$persona["C4P51C_PAIS_MAMA"] = $row->C4P51C_PAIS_MAMA;
				$persona["C4P52_VIVIA_5ANOS"] = $row->C4P52_VIVIA_5ANOS;
				$persona["C4P52A_DPTO_5ANOS"] = $row->C4P52A_DPTO_5ANOS;
				$persona["C4P52B_MPIO_5ANOS"] = $row->C4P52B_MPIO_5ANOS;
				$persona["C4P52C_PAIS_5ANO"] = $row->C4P52C_PAIS_5ANO;
				$persona["C4P52C1_ANO_LLEGA5"] = $row->C4P52C1_ANO_LLEGA5;
				$persona["C4P53_CLASE_5ANOS"] = $row->C4P53_CLASE_5ANOS;
				$persona["C4P54_VIVIA_1ANO"] = $row->C4P54_VIVIA_1ANO;
				$persona["C4P54A_DPTO_1ANO"] = $row->C4P54A_DPTO_1ANO;
				$persona["C4P54B_MPIO_1ANO"] = $row->C4P54B_MPIO_1ANO;
				$persona["C4P54C_PAIS_1ANO"] = $row->C4P54C_PAIS_1ANO;
				$persona["C4P55_CLASE_1ANO"] = $row->C4P55_CLASE_1ANO;
				$persona["C4P56_CAUSA_1ANO"] = $row->C4P56_CAUSA_1ANO;
				$persona["C4P56A_OTRA_CAUSA"] = $row->C4P56A_OTRA_CAUSA;
				$persona["C4P57_ETNIA"] = $row->C4P57_ETNIA;
				$persona["C4P57A_COD_ETNIA"] = $row->C4P57A_COD_ETNIA;
				$persona["C4P58A_HABLA_LENG"] = $row->C4P58A_HABLA_LENG;
				$persona["C4P58B_OTRAS_LENG"] = $row->C4P58B_OTRAS_LENG;
				$persona["C4P58B1_QOTRAS_LENG"] = $row->C4P58B1_QOTRAS_LENG;
				$persona["C4P58C_HABLA_ESP"] = $row->C4P58C_HABLA_ESP;
				$persona["C4P59_CREENCIA"] = $row->C4P59_CREENCIA;
				$persona["C4P60_AFI_SALUD"] = $row->C4P60_AFI_SALUD;
				$persona["C4P60A_REGIMEN"] = $row->C4P60A_REGIMEN;
				$persona["C4P61_ENFERMO"] = $row->C4P61_ENFERMO;
				$persona["C4P62A_HOSPITAL"] = $row->C4P62A_HOSPITAL;
				$persona["C4P62B_MED_TRAD"] = $row->C4P62B_MED_TRAD;
				$persona["C4P63_ATENDIERON"] = $row->C4P63_ATENDIERON;
				$persona["C4P64A_OIR"] = $row->C4P64A_OIR;
				$persona["C4P64B_HABLAR"] = $row->C4P64B_HABLAR;
				$persona["C4P64C_VER"] = $row->C4P64C_VER;
				$persona["C4P64D_CAMINAR"] = $row->C4P64D_CAMINAR;
				$persona["C4P64E_COGER"] = $row->C4P64E_COGER;
				$persona["C4P64F_DECIDIR"] = $row->C4P64F_DECIDIR;
				$persona["C4P64G_COMER"] = $row->C4P64G_COMER;
				$persona["C4P64H_RELACION"] = $row->C4P64H_RELACION;
				$persona["C4P64I_TAREAS"] = $row->C4P64I_TAREAS;
				$persona["variasDificultades"] =$this->variasDificultades($nro_form,1, $nro_pers);
				$persona["C4P65_LIM_PPAL"] = $row->C4P65_LIM_PPAL;
				$persona["C4P66_CAUSA"] = $row->C4P66_CAUSA;
				$persona["C4P66A_OTRACAUSA"] = $row->C4P66A_OTRACAUSA;
				$persona["C4P67A_AYUDA_TEC"] = $row->C4P67A_AYUDA_TEC;
				$persona["C4P67B_AYUDA_PERS"] = $row->C4P67B_AYUDA_PERS;
				$persona["C4P67C_AYUDA_MED"] = $row->C4P67C_AYUDA_MED;
				$persona["C4P67D_AYUDA_ANCES"] = $row->C4P67D_AYUDA_ANCES;
				$persona["C4P67E_AYUDA_ANIM"] = $row->C4P67E_AYUDA_ANIM;
				$persona["C4P67F_AYUDA_OTRO"] = $row->C4P67F_AYUDA_OTRO;
				$persona["C4P68_CUIDA"] = $row->C4P68_CUIDA;
				$persona["C4P69_ESTAB_ASIS"] = $row->C4P69_ESTAB_ASIS;
				$persona["C4P70_EDU_INTEG"] = $row->C4P70_EDU_INTEG;
				$persona["C4P71_ALFABETA"] = $row->C4P71_ALFABETA;
				$persona["C4P72_ASISTENCIA"] = $row->C4P72_ASISTENCIA;
				$persona["C4P72A_UBIC_INST"] = $row->C4P72A_UBIC_INST;
				$persona["C4P72A1_DPTO_INST"] = $row->C4P72A1_DPTO_INST;
				$persona["C4P72A2_MPIO_INST"] = $row->C4P72A2_MPIO_INST;
				$persona["C4P72A3_PAIS_INST"] = $row->C4P72A3_PAIS_INST;
				$persona["C4P72B_DEJO_EST"] = $row->C4P72B_DEJO_EST;
				$persona["CAP72C1_FAMILIA"] = $row->CAP72C1_FAMILIA;
				$persona["CAP72C2_ECONOMIA"] = $row->CAP72C2_ECONOMIA;
				$persona["CAP72C3_INSTEDUC"] = $row->CAP72C3_INSTEDUC;
				$persona["CAP72C4_EDUCANT"] = $row->CAP72C4_EDUCANT;
				$persona["CAP72C5_ENTORNOEDUC"] = $row->CAP72C5_ENTORNOEDUC;
				$persona["CAP72C6_PERSONAL"] = $row->CAP72C6_PERSONAL;
				$persona["CAP72C7_OTRA"] = $row->CAP72C7_OTRA;
				$persona["C4P73_NIVEL_ANOS"] = $row->C4P73_NIVEL_ANOS;
				$persona["C4P74A_CEL"] = $row->C4P74A_CEL;
				$persona["C4P74B_PC"] = $row->C4P74B_PC;
				$persona["C4P74C_TABLETA"] = $row->C4P74C_TABLETA;
				$persona["C4P74D_INTERNET"] = $row->C4P74D_INTERNET;
				$persona["C4P75_TRABAJO"] = $row->C4P75_TRABAJO;
				$persona["CAP76A_NEG_FLIA"] = $row->CAP76A_NEG_FLIA;
				$persona["CAP76B_NEG_FLIG"] = $row->CAP76B_NEG_FLIG;
				$persona["CAP76C_NEG_FLIF"] = $row->CAP76C_NEG_FLIF;
				$persona["CAP76D_NEG_FLIE"] = $row->CAP76D_NEG_FLIE;
				$persona["CAP76E_NEG_FLID"] = $row->CAP76E_NEG_FLID;
				$persona["CAP76F_NEG_FLIC"] = $row->CAP76F_NEG_FLIC;
				$persona["CAP76G_NEG_FLIB"] = $row->CAP76G_NEG_FLIB;
				$persona["CAP77_AE_EMPRESA"] = $row->CAP77_AE_EMPRESA;
				$persona["CAP77A_AE_REALIZA"] = $row->CAP77A_AE_REALIZA;
				$persona["C4P78_TIPO_TRAB"] = $row->C4P78_TIPO_TRAB;
				$persona["C4P79_SITIO_TRAB"] = $row->C4P79_SITIO_TRAB;
				$persona["C4P79A_DPTO_TRAB"] = $row->C4P79A_DPTO_TRAB;
				$persona["C4P79B_MPIO_TRAB"] = $row->C4P79B_MPIO_TRAB;
				$persona["C4P79C_PAIS_TRAB"] = $row->C4P79C_PAIS_TRAB;
				$persona["C4P80_COTIZ_PENS"] = $row->C4P80_COTIZ_PENS;
				$persona["C4P81_EST_CIVIL"] = $row->C4P81_EST_CIVIL;
				$persona["C4P82_THNV"] = $row->C4P82_THNV;
				$persona["C4P82A_HNVH"] = $row->C4P82A_HNVH;
				$persona["C4P82B_HNVM"] = $row->C4P82B_HNVM;
				$persona["C4P83_HNV"] = $row->C4P83_HNV;
				$persona["C4P83A_THSV"] = $row->C4P83A_THSV;
				$persona["C4P83B_HSVH"] = $row->C4P83B_HSVH;
				$persona["C4P83C_HSVM"] = $row->C4P83C_HSVM;
				$persona["C4P84_HFC"] = $row->C4P84_HFC;
				$persona["C4P84A_THFC"] = $row->C4P84A_THFC;
				$persona["C4P84B_HFCH"] = $row->C4P84B_HFCH;
				$persona["C4P84C_HFCM"] = $row->C4P84C_HFCM;
				$persona["C4P85_UHVA"] = $row->C4P85_UHVA;
				$persona["C4P86A_DIA_UHVA"] = $row->C4P86A_DIA_UHVA;
				$persona["C4P86B_MES_UHVA"] = $row->C4P86B_MES_UHVA;
				$persona["C4P86C_ANO_UHVA"] = $row->C4P86C_ANO_UHVA;
				$persona["CAP87_ORI_SEX"] = $row->CAP87_ORI_SEX;
				$persona["CAP88_REC_GENERO"] = $row->CAP88_REC_GENERO;
				$persona["C4P89_FUE_CENS"] = $row->C4P89_FUE_CENS;
				$persona["C4P90_LUG_CENS"] = $row->C4P90_LUG_CENS;
				$persona["C4P90A_DPTO_CENS"] = $row->C4P90A_DPTO_CENS;
				$persona["C4P90B_MPIO_CENS"] = $row->C4P90B_MPIO_CENS;
				$persona["C4P91_MES_CENS"] = $row->C4P91_MES_CENS;
				$persona["PERSONA_HOGAR_CCNTROL"] = $row->PERSONA_HOGAR_CCNTROL;
				$persona["DESHABILITA_EDAD"] = ($row->PERSONA_HOGAR_CCNTROL!=0)?' disabled="disabled" ':''; ;
			}
		}
		$this->db->close();
		return $persona;
	}

	/***
	 * Funci&oacute;n para consultar la informaci&oacute;n de las personas por Hogar
	 * @author rfhuertast - Roberto Fernando Huertas Torres
	 * @param $nro_form
	 * @return $personaHogar - array con la informaci&oacute;n de las personas por Hogar
	 * @since 04/11/2015
	 */
	
	public function consultarPersonasHogar()
	{
		$personaHogar = array();
		$nro_form = $this->session->userdata("numform");
		//$nro_form = '900000034';
		$sql="SELECT * FROM CNPV_PERSONA_HOGAR WHERE C0I1_ENCUESTA = ".$nro_form;
		$sql.=" AND C3P24_NROHOG=1"; 
		$query = $this->db->query($sql);
		if($query->num_rows() > 0)
		{
			$i=0;
			foreach($query->result() as $row)
			{
				$personaHogar[$i]["C0I1_ENCUESTA"] = $row->C0I1_ENCUESTA;
				$personaHogar[$i]["C3P24_NROHOG"] = $row->C3P24_NROHOG;
				$personaHogar[$i]["C4P41_NRO_PER"] = $row->C4P41_NRO_PER;
				$personaHogar[$i]["C4P42A_1ER_NOMBRE"] = $row->C4P42A_1ER_NOMBRE;
				$personaHogar[$i]["C4P42B_1ER_APELLIDO"] = $row->C4P42B_1ER_APELLIDO;
				$personaHogar[$i]["C4P43_TIPO_DOC"] = $row->C4P43_TIPO_DOC;
				$personaHogar[$i]["C4P44_SABE_DOC"] = $row->C4P44_SABE_DOC;
				$personaHogar[$i]["C4P44_NRO_DOC"] = $row->C4P44_NRO_DOC;
				$personaHogar[$i]["PERSONA_HOGAR_CCNTROL"] = $row->PERSONA_HOGAR_CCNTROL;
				$i++;
			}
		}
		$this->db->close();
		return $personaHogar;
	}
	
	/***
	 * Funci&oacute;n para consultar la informaci&oacute;n de la Persona a Actualizar
	 * @author rfhuertast - Roberto Fernando Huertas Torres
	 * @return $personaActualizar - variable con el n&uacute;mero de la Persona a Actualizar
	 * @param $origen: Indica el proceso desde el cual se est&aacute; realizando la consulta de la persona a actualizar (persona, personashogar) 
	 * @since 05/11/2015
	 */
	
	public function consultarPersonaActualizar($origen)
	{
		$nro_form = $this->session->userdata("numform");
		//$nro_form = '900000034';
		$sql="SELECT PERSONA_HOGAR_CCNTROL FROM CNPV_PERSONA_HOGAR WHERE C0I1_ENCUESTA = ".$nro_form;
		$sql.=" AND C3P24_NROHOG=1 AND PERSONA_HOGAR_CCNTROL<>'99' AND PERSONA_HOGAR_CCNTROL";
		if($origen=="persona") $sql.="<>";
		else $sql.="=";
		$sql.="'0'"; 
		$query = $this->db->query($sql);
		if($query->num_rows() > 0)
		{
			foreach($query->result() as $row)
			{
				$personaActualizar["PERSONA_HOGAR_CCNTROL"] = $row->PERSONA_HOGAR_CCNTROL;
			}
		}
		else
			$personaActualizar="";
		$this->db->close();
		return $personaActualizar;
	}
	
	/***
	 * Funci&oacute;n para calcular la semana anterior respecto de la fecha de realizaci&oacute;n del e-censo
	 * @author rfhuertast - Roberto Fernando Huertas Torres
	 * @return $semanaAnterior - variable con el rango de fechas de la semana anterior respecto de la fecha de realizaci&oacute;n del e-censo
	 * @since 05/11/2015
	 */
	
	public function consultarSemanaAnterior()
	{
		date_default_timezone_set('America/Bogota');
		$fechaAnterior = date('Y-m-j');
		$fechaAnterior = strtotime ( '-7 day' , strtotime ( $fechaAnterior ) ) ;
		$fechaAnterior = date ( 'Y-m-j' , $fechaAnterior );

		$i=7;
		$queryDia="SELECT TO_NUMBER(TO_CHAR ((TO_DATE((SYSDATE - ".$i."), 'DD/MM/YY')) , 'D')) AS DIA FROM DUAL";
		$queryDia = $this->db->query($queryDia);
		$diaAnterior = $queryDia->row()->DIA;
		while($diaAnterior > 1)
		{
			$fechaAnterior=strtotime('-1 day' , strtotime ($fechaAnterior));
			$fechaAnterior=date('Y-m-j' , $fechaAnterior );
			$i++;
			$queryDia="SELECT TO_NUMBER(TO_CHAR ((TO_DATE((SYSDATE - ".$i."), 'DD/MM/YY')) , 'D')) AS DIA FROM DUAL";
			$queryDia = $this->db->query($queryDia);
			$diaAnterior = $queryDia->row()->DIA;
		}
		$fechaAnterior=strtotime('+1 day' , strtotime ($fechaAnterior));
		$fechaAnterior=date('j-m-Y' , $fechaAnterior );
		$fechaFinal=strtotime('+6 day' , strtotime ($fechaAnterior));
		$fechaFinal=date('j-m-Y' , $fechaFinal );
		setlocale(LC_TIME, "es_CO");// Idioma espanol para el mes, de funcion strftime
		$semanaAnterior='Del '.strftime("%e %b %Y", strtotime($fechaAnterior)).' al '.strftime("%e %b %Y", strtotime($fechaFinal));
		$this->db->close();
		
		return $semanaAnterior;
	}
	
	/***
	 * Funci&oacute;n para consultar la informaci&oacute;n de pa&iacute;ses
	 * @author rfhuertast - Roberto Fernando Huertas Torres
	 * @return $pais - array con la informaci&oacute;n de pa&iacute;ses
	 * @since 28/10/2015
	 */
	public function consultarPais()
	{
		$pais = array();
		$sql="SELECT VALOR_MINIMO, DESCRIPCION FROM CNP_RESPUESTA_DOMINIO WHERE ID_DOMINIO=38 AND VALOR_MINIMO<>'169' ORDER BY DESCRIPCION ASC";
		$query = $this->db->query($sql);
		if($query->num_rows() > 0)
		{
			$i=0;
			foreach($query->result() as $row)
			{
				$pais[$i]["VALOR_MINIMO"] = $row->VALOR_MINIMO;
				$pais[$i]["DESCRIPCION"] = $row->DESCRIPCION;
				$i++;
			}
		}
		$this->db->close();
		return $pais;
	}

	/***
	 * Funci&oacute;n para consultar la informaci&oacute;n de departamentos
	 * @author rfhuertast - Roberto Fernando Huertas Torres
	 * @return $dpto - array con la informaci&oacute;n de departamentos
	 * @since 28/10/2015
	 */
	public function consultarDpto()
	{
		$dpto = array();
		$sql="SELECT VALOR_MINIMO, DESCRIPCION FROM CNP_RESPUESTA_DOMINIO WHERE ID_DOMINIO=1 ORDER BY DESCRIPCION ASC";
		$query = $this->db->query($sql);
		if($query->num_rows() > 0)
		{
			$i=0;
			foreach($query->result() as $row)
			{
				$dpto[$i]["VALOR_MINIMO"] = $row->VALOR_MINIMO;
				$dpto[$i]["DESCRIPCION"] = $row->DESCRIPCION;
				$i++;
			}
		}
		$this->db->close();
		return $dpto;
	}

	/***
	 * Funci&oacute;n para consultar la informaci&oacute;n de municipios
	 * @author rfhuertast - Roberto Fernando Huertas Torres
	 * @return $mpio - array con la informaci&oacute;n de municipios
	 * @param $dpto: valor del departamento del cual se van a consultar los municipios dependientes
	 * @since 01/11/2015
	 */
	public function consultarMpio($dpto)
	{
		$mpio = array();
		$MpioResidenciaGral = $this->modpersona->consultarMpioResidenciaGral();
		$sql="SELECT RD.VALOR_MINIMO, RD.DESCRIPCION FROM CNP_RESPUESTA_DOMINIO RD WHERE RD.ID_DOMINIO=2 "; 
		if($dpto!="" && $dpto!="0")
			$sql.="AND RD.ID_RESPUESTA_DOMINIO_PADRE=(SELECT RDP.ID_RESPUESTA_DOMINIO FROM CNP_RESPUESTA_DOMINIO RDP WHERE RDP.ID_DOMINIO=1 AND RDP.VALOR_MINIMO=".$dpto.")";
		
		$sql.=" AND RD.VALOR_MINIMO<>'".$MpioResidenciaGral."'";
		
		$sql.=" ORDER BY RD.DESCRIPCION ASC";
		$query = $this->db->query($sql);
		if($query->num_rows() > 0)
		{
			$i=0;
			foreach($query->result() as $row)
			{
				$mpio[$i]["VALOR_MINIMO"] = $row->VALOR_MINIMO;
				$mpio[$i]["DESCRIPCION"] = $row->DESCRIPCION;
				$i++;
			}
		}
		else
		{
			$mpio[0]["VALOR_MINIMO"] = "";
			//$mpio[0]["DESCRIPCION"] = $sql;
			$mpio[0]["DESCRIPCION"] = "";
		}
	
		$this->db->close();
		return $mpio;
	}
	
	/***
	 * Consultar los municipios de un departamento especifico
	 * @author hhchavezv 
	 * @return $mpio - array con la informaci&oacute;n de municipios
	 * @param $dpto: valor del departamento del cual se van a consultar los municipios dependientes
	 * @since 2016feb01
	 */
	public function consultarTodosMpios($dpto)
	{
		$mpio = array();
		
		$sql="SELECT RD.VALOR_MINIMO, RD.DESCRIPCION FROM CNP_RESPUESTA_DOMINIO RD WHERE RD.ID_DOMINIO=2 "; 
		if($dpto!="" && $dpto!="0")
			$sql.="AND RD.ID_RESPUESTA_DOMINIO_PADRE=(SELECT RDP.ID_RESPUESTA_DOMINIO FROM CNP_RESPUESTA_DOMINIO RDP WHERE RDP.ID_DOMINIO=1 AND RDP.VALOR_MINIMO=".$dpto.")";
		
		$sql.=" ORDER BY RD.DESCRIPCION ASC";
		$query = $this->db->query($sql);
		if($query->num_rows() > 0)
		{
			$i=0;
			foreach($query->result() as $row)
			{
				$mpio[$i]["VALOR_MINIMO"] = $row->VALOR_MINIMO;
				$mpio[$i]["DESCRIPCION"] = $row->DESCRIPCION;
				$i++;
			}
		}
		else
		{
			$mpio[0]["VALOR_MINIMO"] = "";
			$mpio[0]["DESCRIPCION"] = "";
		}
		//$mpio[0]["DESCRIPCION"] = $sql;
		$this->db->close();
		return $mpio;
	}

	/***
	 * Funci&oacute;n para consultar la informaci&oacute;n del mpio de residencia/ubicaci&oacute;n general de la vivienda
	 * @author rfhuertast - Roberto Fernando Huertas Torres
	 * @return $codMpio - variable con el c&oacute; del mpio de residencia/ubicaci&oacute;n general de la vivienda
	 * @since 12/11/2015
	 */
	public function consultarMpioResidenciaGral()
	{
		$nro_form = $this->session->userdata("numform");
		$sqlCodMpio="SELECT V.C1I1_DPTO, V.C1I2_MPIO FROM CNPV_VIVIENDA V WHERE C0I1_ENCUESTA='".$nro_form."'";
		$queryCodMpio = $this->db->query($sqlCodMpio);
		if($queryCodMpio->num_rows() > 0)
		{
			foreach($queryCodMpio->result() as $rowCodMpio)
			{
				$codDpto = $rowCodMpio->C1I1_DPTO;
				$codMpio = $rowCodMpio->C1I2_MPIO;
			}
			//2016ene28 - hhchavezv - se elimina, ya que los codigos de mpio ya tienen el coddpto
			/*
			$codMpio=($codMpio<10) ? '00'.$codMpio : (($codMpio<100) ? '0'.$codMpio : $codMpio);
			$codMpio=$codDpto.$codMpio;
			*/
			
		}
		return $codMpio;
	}
	
	/***
	 * Funci&oacute;n para consultar la informaci&oacute;n del mpio de residencia/ubicaci&oacute;n de la vivienda seg�n persona
	 * @author rfhuertast - Roberto Fernando Huertas Torres
	 * @return $nombreMpioRes - array con la informaci&oacute;n de mpio de residencia/ubicaci&oacute;n de la vivienda seg�n persona
	 * @param $nro_form: variable que indica la encuesta que est&aacute; en proceso, $nro_pers: variable con el n&uacute;mero de la persona que se est&aacute; procesando 
	 * @since 30/10/2015
	 */
	public function consultarMpioResidencia($nro_form, $nro_pers)
	{
		$nombreMpioRes = array();
		
		$sqlCodMpio="SELECT V.C1I1_DPTO, V.C1I2_MPIO FROM CNPV_VIVIENDA V WHERE C0I1_ENCUESTA='".$nro_form."'";
		$queryCodMpio = $this->db->query($sqlCodMpio);
		if($queryCodMpio->num_rows() > 0)
		{
			foreach($queryCodMpio->result() as $rowCodMpio)
			{
				$codDpto = $rowCodMpio->C1I1_DPTO;
				$codMpio = $rowCodMpio->C1I2_MPIO;
			}
			
			//2016ene28 - hhchavezv - se elimina, ya que los codigos de mpio ya tienen el coddpto
			/*
			$codMpio=($codMpio<10) ? '00'.$codMpio : (($codMpio<100) ? '0'.$codMpio : $codMpio);
			$codMpio=$codDpto.$codMpio;
			*/
			$sql="SELECT RD.VALOR_MINIMO, RD.DESCRIPCION
			FROM CNPV_PERSONA_HOGAR PH, CNPV_HOGAR H, CNPV_VIVIENDA V, CNP_RESPUESTA_DOMINIO RD
			WHERE PH.C0I1_ENCUESTA='".$nro_form."' AND PH.C3P24_NROHOG=1 AND PH.C4P41_NRO_PER=".$nro_pers."
			AND H.C0I1_ENCUESTA=PH.C0I1_ENCUESTA AND H.C3H24_NROHOG=PH.C3P24_NROHOG
			AND V.C0I1_ENCUESTA=H.C0I1_ENCUESTA AND RD.VALOR_MINIMO='".$codMpio."' AND RD.ID_DOMINIO=2";
			$query = $this->db->query($sql);
			if($query->num_rows() > 0)
			{
				$i=0;
				foreach($query->result() as $row)
				{
					$nombreMpioRes[$i]["VALOR_MINIMO"] = $row->VALOR_MINIMO;
					$nombreMpioRes[$i]["DESCRIPCION"] = $row->DESCRIPCION;
					$nombreMpioRes[$i]["COD_DPTO"] = $codDpto;
					$i++;
				}
			}
			else
				$nombreMpioRes="";
			$this->db->close();
		}
		else
			$nombreMpioRes="";
		$nombreMpioRes[0]["OTRO"]="-".$sqlCodMpio."   -".$sql;
		return $nombreMpioRes;
	}

	/***
	 * Funci&oacute;n para consultar la informaci&oacute;n del jefe del hogar
	 * @author rfhuertast - Roberto Fernando Huertas Torres
	 * @return $jefeHogar - array con la informaci&oacute;n del jefe del hogar
	 * @param $nro_form: variable quee indica la encuesta que est&aacute; en proceso
	 * @since 31/10/2015
	 */
	public function consultarJefeHogar($nro_form)
	{
		$jefeHogar = array();
		
		$sqljefeHogar="SELECT PH.C4P42A_1ER_NOMBRE, PH.C4P42B_1ER_APELLIDO FROM CNPV_PERSONA_HOGAR PH 
			WHERE PH.C0I1_ENCUESTA='".$nro_form."' AND PH.C3P24_NROHOG=1 AND PH.C4P49_PARENTESCO=1";
		$queryjefeHogar = $this->db->query($sqljefeHogar);
		if($queryjefeHogar->num_rows() > 0)
		{
			foreach($queryjefeHogar->result() as $rowjefeHogar)
			{
				$jefeHogar["C4P42A_1ER_NOMBRE"] = $rowjefeHogar->C4P42A_1ER_NOMBRE;
				$jefeHogar["C4P42B_1ER_APELLIDO"] = $rowjefeHogar->C4P42B_1ER_APELLIDO;
			}
			$this->db->close();
		}
		else
		{
			$jefeHogar["C4P42A_1ER_NOMBRE"] = "";
			$jefeHogar["C4P42B_1ER_APELLIDO"] = "";
		}
		return $jefeHogar;
	}
	
	/***
	 * Funci&oacute;n para consultar la informaci&oacute;n de Pueblos Indigenas
	 * @author rfhuertast - Roberto Fernando Huertas Torres
	 * @return $pIndigena - array con la informaci&oacute;n de Pueblos Indigenas
	 * @since 29/10/2015
	 */
	public function consultarPuebloIndigena()
	{
		$pIndigena = array();
		$sql="SELECT VALOR_MINIMO, SUBSTR(DESCRIPCION, 5) AS DESCRIPCION FROM CNP_RESPUESTA_DOMINIO WHERE ID_DOMINIO=45 ORDER BY DESCRIPCION ASC";
		$query = $this->db->query($sql);
		if($query->num_rows() > 0)
		{
			$i=0;
			foreach($query->result() as $row)
			{
				$pIndigena[$i]["VALOR_MINIMO"] = $row->VALOR_MINIMO;
				$pIndigena[$i]["DESCRIPCION"] = $row->DESCRIPCION;
				$i++;
			}
		}
		$this->db->close();
		return $pIndigena;
	}

	/***
	 * Funci&oacute;n para consultar la informaci&oacute;n de Limitaci&oacute;n principal
	 * @author rfhuertast - Roberto Fernando Huertas Torres
	 * @return $lPpal - array con la informaci&oacute;n de Limitaci&oacute;n principal
	 * @param $nro_pers: variable con el n&uacute;mero de la persona que se est&aacute; procesando
	 * @since 29/10/2015
	 */
	public function consultarLimitacionPpal($nro_pers)
	{
		$nro_form = $this->session->userdata("numform");
		$sqlSel="SELECT C4P64A_OIR||','||C4P64B_HABLAR||','||C4P64C_VER||','||C4P64D_CAMINAR||','||C4P64E_COGER||','||C4P64F_DECIDIR||','||C4P64G_COMER
		||','||C4P64H_RELACION||','||C4P64I_TAREAS AS LSELECCIONADA
		FROM CNPV_PERSONA_HOGAR PH
		WHERE PH.C0I1_ENCUESTA='".$nro_form."' AND PH.C3P24_NROHOG=1 AND PH.C4P41_NRO_PER='".$nro_pers."'";
		$querySel = $this->db->query($sqlSel);
		foreach($querySel->result() as $rowSel)
		{
			$lSeleccionada = $rowSel->LSELECCIONADA;
		}
		$lSeleccionada=explode(",",$lSeleccionada);
		
		$lPpal = array();
		$sql="SELECT VALOR_MINIMO, DESCRIPCION FROM CNP_RESPUESTA_DOMINIO WHERE ID_DOMINIO=49 ORDER BY VALOR_MINIMO ASC";
		$query = $this->db->query($sql);
		if($query->num_rows() > 0)
		{
			$i=0;
			$j=0;
			foreach($query->result() as $row)
			{
				if($lSeleccionada[$i] < 4 && $lSeleccionada[$i]!="")
				{
					$lPpal[$j]["VALOR_MINIMO"] = $row->VALOR_MINIMO;
					$lPpal[$j]["DESCRIPCION"] = $row->DESCRIPCION;
					$j++;
				}
				$i++;
			}
		}
		$this->db->close();
		return $lPpal;
	}

	/***
	 * Funci&oacute;n para consultar la informaci&oacute;n de Limitaci&oacute;n principal actual
	 * @author rfhuertast - Roberto Fernando Huertas Torres
	 * @return $lActual - variable con la informaci&oacute;n de Limitaci&oacute;n principal actual
	 * @param $idLPpal: variable que identifica la limitaci&oacute;n principal seleccionada
	 * @since 03/11/2015
	 */
	public function consultarLimitacionPpalActual($nro_pers, $idLPpal)
	{
		$nro_form = $this->session->userdata("numform");
		$sqlSel="SELECT VALOR_MINIMO, DESCRIPCION AS LACTUAL 
		FROM CNP_RESPUESTA_DOMINIO, CNPV_PERSONA_HOGAR PH
		WHERE ID_DOMINIO=49 AND PH.C0I1_ENCUESTA='".$nro_form."' AND PH.C3P24_NROHOG=1 AND PH.C4P41_NRO_PER='".$nro_pers."' ";
		if($idLPpal=="")
			$sqlSel.=" AND VALOR_MINIMO=C4P65_LIM_PPAL ";
		else
			$sqlSel.=" AND VALOR_MINIMO='".$idLPpal."'";
		$querySel = $this->db->query($sqlSel);
		if($querySel->num_rows() > 0)
		{
			foreach($querySel->result() as $rowSel)
			{
				$lActual["VALOR_MINIMO"] = $rowSel->VALOR_MINIMO;
				$lActual["LACTUAL"] = $rowSel->LACTUAL;
			}
		}
		else
		{
			$lActual["VALOR_MINIMO"] = "";
			$lActual["LACTUAL"] = "";
		}
		$this->db->close();
		return $lActual;
	}

	/***
	 * Funci&oacute;n para consultar la informaci&oacute;n de Actividad realizada la semana pasada
	 * @author rfhuertast - Roberto Fernando Huertas Torres
	 * @return $trabajo - variable con la informaci&oacute;n de Actividad realizada la semana pasada
	 * @param: $trabajoSel: variable que contiene el id de la activiada realizada la semana pasada
	 * @since 04/11/2015
	 */
	public function consultarTrabajo($trabajoSel)
	{
		$sql="SELECT DESCRIPCION FROM CNP_RESPUESTA_DOMINIO WHERE ID_DOMINIO=60 AND VALOR_MINIMO='".$trabajoSel."' ORDER BY DESCRIPCION ASC";
		$query = $this->db->query($sql);
		if($query->num_rows() > 0)
		{
			foreach($query->result() as $row)
			{
				$trabajo = $row->DESCRIPCION;
			}
		}
		$this->db->close();
		return $trabajo;
	}

	/***
	 * Funci&oacute;n para consultar la informaci&oacute;n de Actividad realizada la semana pasada por la persona procesada
	 * @author rfhuertast - Roberto Fernando Huertas Torres
	 * @return $trabajo - variable con la informaci&oacute;n de Actividad realizada la semana pasada por la persona procesada
	 * @param: $nro_form: n&uacute;mero de la encuesta en proceso, $nro_pers: n&uacute;mero de persona procesando
	 * @since 13/11/2015
	 */
	public function consultarTrabajoActual($nro_form, $nro_pers)
	{
		$sql="SELECT DESCRIPCION 
		FROM CNP_RESPUESTA_DOMINIO RD,  CNPV_PERSONA_HOGAR PH WHERE ID_DOMINIO=60 AND RD.VALOR_MINIMO=PH.C4P75_TRABAJO
		AND C0I1_ENCUESTA=".$nro_form." AND C3P24_NROHOG=1 AND C4P41_NRO_PER=".$nro_pers." ORDER BY DESCRIPCION ASC";
		$query = $this->db->query($sql);
		if($query->num_rows() > 0)
		{
			foreach($query->result() as $row)
			{
				$trabajo = $row->DESCRIPCION;
			}
		}
		else
			$trabajo="";
		$this->db->close();
		return $trabajo;
	}

	/***
	 * Funci&oacute;n para consultar la informaci&oacute;n del sexo de la Persona
	 * @author rfhuertast - Roberto Fernando Huertas Torres
	 * @return $sexoPersona - variable con la informaci&oacute;n del sexo de la Persona
	 * @param $nro_form: n&uacute;mero de la encuesta en proceso, $nro_pers: n&uacute;mero de persona procesando
	 * @since 04/11/2015
	 */
	public function consultarSexoPersona($nro_form, $nro_pers)
	{
		$sql="SELECT C4P45_SEXO FROM CNPV_PERSONA_HOGAR WHERE C0I1_ENCUESTA = ".$nro_form." AND C3P24_NROHOG=1  AND C4P41_NRO_PER='".$nro_pers."'"; 
		$query = $this->db->query($sql);
		if($query->num_rows() > 0)
		{
			foreach($query->result() as $row)
			{
				$sexoPersona = $row->C4P45_SEXO;
			}
		}
		else
			$sexoPersona="";
		$this->db->close();
		return $sexoPersona;
	}

	/***
	 * Funci&oacute;n para consultar la edad de la Persona
	 * @author rfhuertast - Roberto Fernando Huertas Torres
	 * @return $edadPersona - variable con la informaci&oacute;n de la edad de la Persona
	 * @param $nro_form: n&uacute;mero de la encuesta en proceso, $nro_pers: n&uacute;mero de persona procesando
	 * @since 04/11/2015
	 */
	public function consultarEdadPersona($nro_form, $nro_pers)
	{
		$sql="SELECT C4P47_EDAD FROM CNPV_PERSONA_HOGAR WHERE C0I1_ENCUESTA = ".$nro_form." AND C3P24_NROHOG=1  AND C4P41_NRO_PER='".$nro_pers."'"; 
		$query = $this->db->query($sql);
		if($query->num_rows() > 0)
		{
			foreach($query->result() as $row)
			{
				$edadPersona = $row->C4P47_EDAD;
			}
		}
		else
			$edadPersona="";
		$this->db->close();
		return $edadPersona;
	}

	/**
	 * Actualiza los datos del módulo de persona para un numero de formulario y persona indicada
	 * @param $nro_form - N&uacute;mero del formulario a actualizar
	 * @param $nro_pers - N&uacute; de persona a actualizar
	 * @param $datos - array con los datos de los campos del formulario
	 * @return boolean
	 */
	public function actualizarPersona($nro_form, $nro_pers, $datos){
		$result = true;
		var_dump ($datos);
		
		$sexoPers=$this->modpersona->consultarSexoPersona($nro_form, $nro_pers);
		$edadPers=$this->modpersona->consultarEdadPersona($nro_form, $nro_pers);
		
		$sql="UPDATE CNPV_PERSONA_HOGAR SET ";
		switch($datos['index'])
		{
			case 1: //Guardar preguntas formulario 1
				
				isset($datos['c4p46_sabe_fecha'] )? $datos['c4p46_sabe_fecha'] : $datos['c4p46_sabe_fecha']=NULL;
				isset($datos['c4p48a_otra'] )? $datos['c4p48a_otra'] : $datos['c4p48a_otra']=NULL;
				
				if ( isset( $datos['c4p46a_dia_nac'] ) )
				{
					$sql.= "C4P46_SABE_FECHA='".$datos['c4p46_sabe_fecha']."', C4P46A_DIA_NAC='".$datos['c4p46a_dia_nac']."', C4P46B_MES_NAC='".$datos['c4p46b_mes_nac']."', C4P46C_ANO_NAC='".$datos['c4p46c_ano_nac']."', C4P47_EDAD='".$datos['c4p47_edad']."', C4P48_COLOMBIA='".$datos['c4p48_colombia']."', C4P48A_OTRA='".$datos['c4p48a_otra']."', C4P48B_CUAL_NAL='".$datos['c4p48b_cual_nal']."'"; 
				}
				else
				{
					$sql.= " C4P48_COLOMBIA='".$datos['c4p48_colombia']."', C4P48A_OTRA='".$datos['c4p48a_otra']."', C4P48B_CUAL_NAL='".$datos['c4p48b_cual_nal']."'"; 
				}
				
				// Cambia estado de persona 
				$estadoPersona=$this->consultarEstadoPersona($nro_form, $nro_pers);
				if($estadoPersona <>99)
					$sql.=" , PERSONA_HOGAR_CCNTROL=".$nro_pers;
				
				//$sql.= "C4P46_SABE_FECHA='".$datos['c4p46_sabe_fecha']."', C4P46A_DIA_NAC='".$datos['c4p46a_dia_nac']."', C4P46B_MES_NAC='".$datos['c4p46b_mes_nac']."', C4P46C_ANO_NAC='".$datos['c4p46c_ano_nac']."', C4P47_EDAD='".$datos['c4p47_edad']."', C4P48_COLOMBIA='".$datos['c4p48_colombia']."', C4P48A_OTRA='".$datos['c4p48a_otra']."', C4P48B_CUAL_NAL='".$datos['c4p48b_cual_nal']."'"; 
				break;
			case 2: //Guardar preguntas formulario 2
				$sql.= "C4P49_PARENTESCO='".$datos['c4p49_parentesco']."'";
				break;
			case 3: //Guardar preguntas formulario 3
				// 2016feb01 - hhchavezv - guarda mpio de residencia como el de nacimiento
				/*
				if ($datos['c4p50_lug_nac'] ==1)// mpio donde reside
					$sql.= " C4P50A_DPTO_NAC='".$datos['c4p50a_dpto_nac_resid']."', C4P50B_MPIO_NAC='".$datos['c4p50b_mpio_nac_resid']."' ";
				else if ($datos['c4p50_lug_nac'] ==2) // otro mpio
					$sql.= " C4P50A_DPTO_NAC='".$datos['c4p50a_dpto_nac']."', C4P50B_MPIO_NAC='".$datos['c4p50b_mpio_nac']."' ";
				else if ($datos['c4p50_lug_nac'] ==3) // otro pais
					$sql.= " C4P50C_PAIS_NAC='".$datos['c4p50c_pais_nac']."', C4P50C1_ANO_LLEGO='".$datos['c4p50c1_ano_llego']."' ";	
					
				$sql.= ", C4P50_LUG_NAC='".$datos['c4p50_lug_nac']."', C4P51_RES_MAMA='".$datos['c4p51_res_mama']."', C4P51A_DPTO_MAMA='".$datos['c4p51a_dpto_mama']."', C4P51B_MPIO_MAMA='".$datos['c4p51b_mpio_mama']."', C4P51C_PAIS_MAMA='".$datos['c4p51c_pais_mama']."'";
				*/
				$sql.= "C4P50_LUG_NAC='".$datos['c4p50_lug_nac']."', C4P50A_DPTO_NAC='".$datos['c4p50a_dpto_nac']."', C4P50B_MPIO_NAC='".$datos['c4p50b_mpio_nac']."', C4P50C_PAIS_NAC='".$datos['c4p50c_pais_nac']."', C4P50C1_ANO_LLEGO='".$datos['c4p50c1_ano_llego']."', C4P51_RES_MAMA='".$datos['c4p51_res_mama']."', C4P51A_DPTO_MAMA='".$datos['c4p51a_dpto_mama']."', C4P51B_MPIO_MAMA='".$datos['c4p51b_mpio_mama']."', C4P51C_PAIS_MAMA='".$datos['c4p51c_pais_mama']."'";
				
				if($datos['edadPersona3']<5)
					$sql.= ", C4P52_VIVIA_5ANOS='1'";
				if($datos['edadPersona3']<1)
					$sql.= ", C4P54_VIVIA_1ANO='1'";
				break;

			case 4: //Guardar preguntas formulario 4
				$sql.= "C4P52_VIVIA_5ANOS='".$datos['c4p52_vivia_5anos']."', C4P52A_DPTO_5ANOS='".$datos['c4p52a_dpto_5anos']."', C4P52B_MPIO_5ANOS='".$datos['c4p52b_mpio_5anos']."', C4P52C_PAIS_5ANO='".$datos['c4p52c_pais_5ano']."', C4P52C1_ANO_LLEGA5='".$datos['c4p52c1_ano_llega5']."', C4P53_CLASE_5ANOS='".$datos['c4p53_clase_5anos']."'";
				break;

			case 5: //Guardar preguntas formulario 5
				$sql.= "C4P54_VIVIA_1ANO='".$datos['c4p54_vivia_1ano']."', C4P54A_DPTO_1ANO='".$datos['c4p54a_dpto_1ano']."', C4P54B_MPIO_1ANO='".$datos['c4p54b_mpio_1ano']."', C4P54C_PAIS_1ANO='".$datos['c4p54c_pais_1ano']."', C4P55_CLASE_1ANO='".$datos['c4p55_clase_1ano']."', C4P56_CAUSA_1ANO='".$datos['c4p56_causa_1ano']."', C4P56A_OTRA_CAUSA='".$datos['c4p56a_otra_causa']."'";
				break;

			case 6: //Guardar preguntas formulario 6
				$sql.= "C4P57_ETNIA='".$datos['c4p57_etnia']."', C4P57A_COD_ETNIA='".$datos['c4p57a_cod_etnia']."', C4P58A_HABLA_LENG='".$datos['c4p58a_habla_leng']."', C4P58B_OTRAS_LENG='".$datos['c4p58b_otras_leng']."', C4P58B1_QOTRAS_LENG='".$datos['c4p58b1_qotras_leng']."', C4P58C_HABLA_ESP='".$datos['c4p58c_habla_esp']."'";
				break;

			case 7: //Guardar preguntas formulario 7
				$sql.= "C4P59_CREENCIA='".$datos['c4p59_creencia']."'";
				break;

			case 8: //Guardar preguntas formulario 8
				// hhchavezv - 2016ene21 - Valida si llegan estos campos que son opcionales
				isset($datos['c4p60a_regimen'])?$c4p60a_regimen=$datos['c4p60a_regimen']:$c4p60a_regimen=NULL;
				isset($datos['c4p62a_hospital'])?$c4p62a_hospital=$datos['c4p62a_hospital']:$c4p62a_hospital=NULL;
				isset($datos['c4p62b_med_trad'])?$c4p62b_med_trad=$datos['c4p62b_med_trad']:$c4p62b_med_trad=NULL;
				isset($datos['c4p63_atendieron'])?$c4p63_atendieron=$datos['c4p63_atendieron']:$c4p63_atendieron=NULL;
				
				$sql.= "C4P60_AFI_SALUD='".$datos['c4p60_afi_salud']."', C4P60A_REGIMEN='".$c4p60a_regimen."', C4P61_ENFERMO='".$datos['c4p61_enfermo']."', C4P62A_HOSPITAL='".$c4p62a_hospital."', C4P62B_MED_TRAD='".$c4p62b_med_trad."', C4P63_ATENDIERON='".$c4p63_atendieron."'";
				break;

			case 9: //Guardar preguntas formulario 9
				$sql.= "C4P64A_OIR='".$datos['c4p64a_oir']."', C4P64B_HABLAR='".$datos['c4p64b_hablar']."', C4P64C_VER='".$datos['c4p64c_ver']."', C4P64D_CAMINAR='".$datos['c4p64d_caminar']."', C4P64E_COGER='".$datos['c4p64e_coger']."', C4P64F_DECIDIR='".$datos['c4p64f_decidir']."', C4P64G_COMER='".$datos['c4p64g_comer']."', C4P64H_RELACION='".$datos['c4p64h_relacion']."', C4P64I_TAREAS='".$datos['c4p64i_tareas']."'";
				if(($datos['c4p64a_oir'] + $datos['c4p64b_hablar'] + $datos['c4p64c_ver'] + $datos['c4p64d_caminar'] + $datos['c4p64e_coger'] + $datos['c4p64f_decidir'] + $datos['c4p64g_comer'] + $datos['c4p64h_relacion'] + $datos['c4p64i_tareas']) == 36)// Todo en 4 ( sin dificultad)
				{
					// hhchavezv - 2015ene25 - Se colocan estos campos en null cuando la persona no tiene dificultad
					$sql.= ", C4P65_LIM_PPAL =null, C4P66_CAUSA =null, C4P66A_OTRACAUSA  =null, C4P67A_AYUDA_TEC =null, C4P67B_AYUDA_PERS =null, C4P67C_AYUDA_MED =null, C4P67D_AYUDA_ANCES =null, C4P67E_AYUDA_ANIM =null, C4P67F_AYUDA_OTRO=null   ";
				}	
				break;

			case 10: //Guardar preguntas formulario 10
				$sql.= "C4P65_LIM_PPAL='".$datos['c4p65_lim_ppal']."', C4P66_CAUSA='".$datos['c4p66_causa']."', C4P66A_OTRACAUSA='".$datos['c4p66a_otracausa']."', C4P67A_AYUDA_TEC='".$datos['c4p67a_ayuda_tec']."', C4P67B_AYUDA_PERS='".$datos['c4p67b_ayuda_pers']."', C4P67C_AYUDA_MED='".$datos['c4p67c_ayuda_med']."', C4P67D_AYUDA_ANCES='".$datos['c4p67d_ayuda_ances']."', C4P67E_AYUDA_ANIM='".$datos['c4p67e_ayuda_anim']."', C4P67F_AYUDA_OTRO='".$datos['c4p67f_ayuda_otro']."'";
				break;

			case 11: //Guardar preguntas formulario 11
				$sql.= "C4P68_CUIDA='".$datos['c4p68_cuida']."', C4P69_ESTAB_ASIS='".$datos['c4p69_estab_asis']."', C4P70_EDU_INTEG='".$datos['c4p70_edu_integ']."'";
				break;

			case 111: //Guardar preguntas formulario 11
				$sql.= "C4P71_ALFABETA='".$datos['c4p71_alfabeta']."'";
				break;

			case 12: //Guardar preguntas formulario 12
				$sql.= "C4P72_ASISTENCIA='".$datos['c4p72_asistencia']."', C4P72A_UBIC_INST='".$datos['c4p72a_ubic_inst']."', C4P72A1_DPTO_INST='".$datos['c4p72a1_dpto_inst']."', C4P72A2_MPIO_INST='".$datos['c4p72a2_mpio_inst']."', C4P72A3_PAIS_INST='".$datos['c4p72a3_pais_inst']."', C4P72B_DEJO_EST='".$datos['c4p72b_dejo_est']."', CAP72C7_OTRA='".$datos['cap72c7_otra']."'";
				if($datos['cap72c7_otra']=="")
				{
					if($datos['cap72_causa']<6) $sql.= ", CAP72C1_FAMILIA='".$datos['cap72_causa']."', CAP72C2_ECONOMIA='', CAP72C3_INSTEDUC='', CAP72C4_EDUCANT='', CAP72C5_ENTORNOEDUC='', CAP72C6_PERSONAL=''";
					else if($datos['cap72_causa']>=6 && $datos['cap72_causa']<10) $sql.= ", CAP72C2_ECONOMIA='".$datos['cap72_causa']."', CAP72C1_FAMILIA='', CAP72C3_INSTEDUC='', CAP72C4_EDUCANT='', CAP72C5_ENTORNOEDUC='', CAP72C6_PERSONAL=''";
					else if($datos['cap72_causa']>=10 && $datos['cap72_causa']<18) $sql.= ", CAP72C3_INSTEDUC='".$datos['cap72_causa']."', CAP72C1_FAMILIA='', CAP72C2_ECONOMIA='', CAP72C4_EDUCANT='', CAP72C5_ENTORNOEDUC='', CAP72C6_PERSONAL=''";
					else if($datos['cap72_causa']>=18 && $datos['cap72_causa']<21) $sql.= ", CAP72C4_EDUCANT='".$datos['cap72_causa']."', CAP72C1_FAMILIA='', CAP72C2_ECONOMIA='', CAP72C3_INSTEDUC='', CAP72C5_ENTORNOEDUC='', CAP72C6_PERSONAL=''";
					else if($datos['cap72_causa']>=21 && $datos['cap72_causa']<23) $sql.= ", CAP72C5_ENTORNOEDUC='".$datos['cap72_causa']."', CAP72C1_FAMILIA='', CAP72C2_ECONOMIA='', CAP72C3_INSTEDUC='', CAP72C4_EDUCANT='', CAP72C6_PERSONAL=''";
					else if($datos['cap72_causa']>=23 && $datos['cap72_causa']<28) $sql.= ", CAP72C6_PERSONAL='".$datos['cap72_causa']."', CAP72C1_FAMILIA='', CAP72C2_ECONOMIA='', CAP72C3_INSTEDUC='', CAP72C4_EDUCANT='', CAP72C5_ENTORNOEDUC=''";
				}
				else
					$sql.= ", CAP72C1_FAMILIA='', CAP72C2_ECONOMIA='', CAP72C3_INSTEDUC='', CAP72C4_EDUCANT='', CAP72C5_ENTORNOEDUC='', CAP72C6_PERSONAL=''";
				break;

			case 13: //Guardar preguntas formulario 13
				$sql.= "C4P73_NIVEL_ANOS='".$datos['c4p73_nivel_anos']."'";
				break;

			case 14: //Guardar preguntas formulario 14
				$sql.= "C4P74A_CEL='".$datos['c4p74a_cel']."', C4P74B_PC='".$datos['c4p74b_pc']."', C4P74C_TABLETA='".$datos['c4p74c_tableta']."', C4P74D_INTERNET='".$datos['c4p74d_internet']."'";
				break;

			case 15: //Guardar preguntas formulario 15
				$sql.= "C4P75_TRABAJO='".$datos['c4p75_trabajo']."', CAP76A_NEG_FLIA='".$datos['cap76a_neg_flia']."', CAP76B_NEG_FLIG='".$datos['cap76b_neg_flig']."', CAP76C_NEG_FLIF='".$datos['cap76c_neg_flif']."', CAP76D_NEG_FLIE='".$datos['cap76d_neg_flie']."', CAP76E_NEG_FLID='".$datos['cap76e_neg_flid']."', CAP76F_NEG_FLIC='".$datos['cap76f_neg_flic']."', CAP76G_NEG_FLIB='".$datos['cap76g_neg_flib']."'";
				
				if( $datos['cap76a_neg_flia'] ==2 && $datos['cap76b_neg_flig'] ==2 && $datos['cap76c_neg_flif'] ==2 && $datos['cap76d_neg_flie'] ==2 && $datos['cap76e_neg_flid'] ==2 && $datos['cap76f_neg_flic'] ==2 && $datos['cap76g_neg_flib'] ==2 )
					{
					$sql.= " ,CAP77_AE_EMPRESA=null, CAP77A_AE_REALIZA=null, C4P78_TIPO_TRAB=null, C4P79_SITIO_TRAB=null, C4P79A_DPTO_TRAB=null, C4P79B_MPIO_TRAB=null, C4P79C_PAIS_TRAB=null ";
					}
				break;

			case 16: //Guardar preguntas formulario 16
				$sql.= "CAP77A_AE_REALIZA='".$datos['cap77a_ae_realiza']."'";
				if($datos['cap77a_ae_realiza']<4) $sql.=", CAP77_AE_EMPRESA='1'";
				else if($datos['cap77a_ae_realiza']>=4 && $datos['cap77a_ae_realiza']<9) $sql.=", CAP77_AE_EMPRESA='2'";
				else if($datos['cap77a_ae_realiza']>=9 && $datos['cap77a_ae_realiza']<11) $sql.=", CAP77_AE_EMPRESA='3'";
				else if($datos['cap77a_ae_realiza']>=11 && $datos['cap77a_ae_realiza']<13) $sql.=", CAP77_AE_EMPRESA='4'";
				else if($datos['cap77a_ae_realiza']>=13 && $datos['cap77a_ae_realiza']<33) $sql.=", CAP77_AE_EMPRESA='5'";
				else if($datos['cap77a_ae_realiza']>=33 && $datos['cap77a_ae_realiza']<36) $sql.=", CAP77_AE_EMPRESA='6'";
				else if($datos['cap77a_ae_realiza']>=36 && $datos['cap77a_ae_realiza']<38) $sql.=", CAP77_AE_EMPRESA='7'";
				else if($datos['cap77a_ae_realiza']==38) $sql.=", CAP77_AE_EMPRESA='8'";
				else if($datos['cap77a_ae_realiza']>=39 && $datos['cap77a_ae_realiza']<44) $sql.=", CAP77_AE_EMPRESA='9'";
				else if($datos['cap77a_ae_realiza']>=44 && $datos['cap77a_ae_realiza']<46) $sql.=", CAP77_AE_EMPRESA='10'";
				else if($datos['cap77a_ae_realiza']>=46 && $datos['cap77a_ae_realiza']<53) $sql.=", CAP77_AE_EMPRESA='11'";
				else if($datos['cap77a_ae_realiza']>=53 && $datos['cap77a_ae_realiza']<56) $sql.=", CAP77_AE_EMPRESA='12'";
				else if($datos['cap77a_ae_realiza']==56) $sql.=", CAP77_AE_EMPRESA='13'";
				else if($datos['cap77a_ae_realiza']==57) $sql.=", CAP77_AE_EMPRESA='14'";
				else if($datos['cap77a_ae_realiza']==58) $sql.=", CAP77_AE_EMPRESA='15'";
				// hhchavezv - valido nuevas opciones con >= // else if($datos['cap77a_ae_realiza']>=58) $sql.=", CAP77_AE_EMPRESA='15'";
				break;

			case 17: //Guardar preguntas formulario 17
				$sql.= "C4P78_TIPO_TRAB='".$datos['c4p78_tipo_trab']."', C4P79_SITIO_TRAB='".$datos['c4p79_sitio_trab']."', C4P79A_DPTO_TRAB='".$datos['c4p79a_dpto_trab']."', C4P79B_MPIO_TRAB='".$datos['c4p79b_mpio_trab']."', C4P79C_PAIS_TRAB='".$datos['c4p79c_pais_trab']."', C4P80_COTIZ_PENS='".$datos['c4p80_cotiz_pens']."'";
				break;

			case 18: //Guardar preguntas formulario 18
				$sql.= "C4P81_EST_CIVIL='".$datos['c4p81_est_civil']."'";
				break;

			case 19: //Guardar preguntas formulario 19
				$sql.= "C4P82_THNV='".$datos['c4p82_thnv']."', C4P82A_HNVH='".$datos['c4p82a_hnvh']."', C4P82B_HNVM='".$datos['c4p82b_hnvm']."', C4P83_HNV='".$datos['c4p83_hnv']."', C4P83A_THSV='".$datos['c4p83a_thsv']."', C4P83B_HSVH='".$datos['c4p83b_hsvh']."', C4P83C_HSVM='".$datos['c4p83c_hsvm']."', C4P84_HFC='".$datos['c4p84_hfc']."', C4P84A_THFC='".$datos['c4p84a_thfc']."', C4P84B_HFCH='".$datos['c4p84b_hfch']."', C4P84C_HFCM='".$datos['c4p84c_hfcm']."', C4P85_UHVA='".$datos['c4p85_uhva']."', C4P86A_DIA_UHVA='".$datos['c4p86a_dia_uhva']."', C4P86B_MES_UHVA='".$datos['c4p86b_mes_uhva']."', C4P86C_ANO_UHVA='".$datos['c4p86c_ano_uhva']."'";
				break;

			case 20: //Guardar preguntas formulario 20
				$sql.= "CAP87_ORI_SEX='".$datos['cap87_ori_sex']."', CAP88_REC_GENERO='".$datos['cap88_rec_genero']."'";
				break;

			case 21: //Guardar preguntas formulario 21
				$sql.= "C4P89_FUE_CENS='".$datos['c4p89_fue_cens']."', C4P90_LUG_CENS='".$datos['c4p90_lug_cens']."', C4P90A_DPTO_CENS='".$datos['c4p90a_dpto_cens']."', C4P90B_MPIO_CENS='".$datos['c4p90b_mpio_cens']."', C4P91_MES_CENS='".$datos['c4p91_mes_cens']."', PERSONA_HOGAR_CCNTROL='99'";
				break;
				
		}
		
		if(($datos['index']==11 && $edadPers<5) || ($datos['index']==14 && $edadPers<10) || ($datos['index']==18 && $sexoPers<>'2')  || $datos['index']==19 || $datos['index']==20)
			$sql.=", C4P89_FUE_CENS='2', PERSONA_HOGAR_CCNTROL='99'";
		 
		$sql.=" WHERE C0I1_ENCUESTA='".$nro_form."' AND C3P24_NROHOG='1' AND C4P41_NRO_PER='".$nro_pers."'";
		$query = $this->db->query($sql);
		if (!$query)
		{
			$result=false;
		}
		return $result;
	}
	
	/**
	 * Actualiza el estado del modulo de persona en la tabla de control cuando se ha terminado de diligenciar el formulario
	 * @author dmdiazf
	 * @since  21/10/2015
	 */
	public function actualizarEstadoModuloPersona($nro_form, $estado){
		$result = false;
		$estadoActual = $this->obtenerEstadoModulo($nro_form,"SEC_PERS");
		if (($estado==1 || $estado==2) && ($estadoActual < 2)){
			$data = array("SEC_PERS" => $estado);
			$this->db->where("NRO_ENCUESTA_FORM", $nro_form);
			if ($this->db->update("CNPV_ADMIN_CONTROL",$data)){
				$result = true;
			}
		}
		return $result;
	}
	
	/**
	 * Actualizar el campor de control con el ID persona como si estuviera diligenciando por primera vez
	 * Se actualiza el campo con el id de la persona para que inicie nuevamente el diligenciamiento de la persona
	 * @author dmdiazf
	 * @since 05/02/2016
	 */
	public function actualizarControlPersona($nro_form, $idpers){
		$data = array("PERSONA_HOGAR_CCNTROL" => $idpers);
		$this->db->where("C0I1_ENCUESTA", $nro_form);
		$this->db->where("C4P41_NRO_PER", $idpers);
		if ($this->db->update("CNPV_PERSONA_HOGAR", $data)){
			return true;
		}
	}
	
	/**
	 * Actualiza el estado general del formulario que se está diligenciando. El estado cambia para indicar que de cada formulario se está diligenciando, o ya se diligenció el módulo de persona
	 * Se crean los estados 6 - Diligenciando Modulo Vivienda
	 *                      7 - Terminó Modulo Vivienda
	 * @author dmdiazf - 
	 * @since  21/10/2015 - 
	 */
	public function actualizarEstadoFormulario($nro_form, $estado){
		$result = false;
		$estadoForm = $this->obtenerEstadoModulo($nro_form,"fk_estado");
		if (($estado==10 || $estado==11) && ($estadoForm < 11)){
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
		$sql = "SELECT $campo FROM CNPV_ADMIN_CONTROL WHERE NRO_ENCUESTA_FORM = $nro_form";
		$query = $this->db->query($sql);
		if ($query->num_rows() > 0){
			$row = $query->row();
			$estado = $row->$campo;
		}
		$this->db->close();
		return $estado;

	}
	
	/**
	 * Funcion para determinar cuantas dificultades fisicas tiene la persona
	 * @author hhchavezv
	 * @since  2015ene22
	 */
	private function variasDificultades($nro_form, $hogar, $persona){
		$res = false;
		$nro=0;
		
		$sql = "SELECT C4P64A_OIR,
				C4P64B_HABLAR,
				C4P64C_VER,
				C4P64D_CAMINAR,
				C4P64E_COGER,
				C4P64F_DECIDIR,
				C4P64G_COMER,
				C4P64H_RELACION,
				C4P64I_TAREAS
				FROM CNPV_PERSONA_HOGAR 
				WHERE C0I1_ENCUESTA =".$nro_form." AND C3P24_NROHOG=".$hogar."	AND C4P41_NRO_PER=".$persona ;
				
		$query = $this->db->query($sql);
		if ($query->num_rows() > 0)
		{	
			foreach($query->result() as $row)
			{
				foreach($row as $val){
					if($val==4)
						$nro=$nro;
					else
						$nro=$nro+1;
				}	
			}
		}
		if($nro >1)
			$res=true;
		else
			$res=false;
			//echo "res=".$res; exit;
		$this->db->close();
		return $res;
	}
	
	/***
	 * Consulta el estado de diligencimiento de la persona
	 * @author hhchavezv
	 * @since 2016feb03
	 */
	
	public function consultarEstadoPersona($nro_form, $nro_pers)
	{
		$res='';
		$sql="SELECT PERSONA_HOGAR_CCNTROL FROM CNPV_PERSONA_HOGAR 
			  WHERE C0I1_ENCUESTA = ".$nro_form."
			  AND C3P24_NROHOG=1 AND C4P41_NRO_PER=".$nro_pers;
		
		$query = $this->db->query($sql);
		if($query->num_rows() > 0)
		{
			$row=$query->row();
			$res = $row->PERSONA_HOGAR_CCNTROL;
		}
		
		$this->db->close();
		return $res;
	}
	
	
	
	
	/***
	 * Determina si ya se termino de diligenciar todas las personas
	 * @author hhchavezv
	 * @since 2016feb03
	 */
	
	public function finalizaTodasPersonas()
	{
		$personaHogar=$this->modpersona->consultarPersonasHogar();
		$res=false;
		$i=0;
		if(count($personaHogar) >0)
		{
			for( $i=0;$i<count($personaHogar);$i++ ){
				if($personaHogar[$i]["PERSONA_HOGAR_CCNTROL"] !=99)//finalizada
				{
					$res= false;
					break;
				}
				else
					$res=true;
			
			}
		}
		return $res;
	}
}//EOC