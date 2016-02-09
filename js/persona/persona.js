/**
 * Funciones JavaScript Para el Modulo de Persona
 * @author Angela Rodriguez Mahecha - Roberto Fernando Huertas Torres
 * @since  28/09/2015 - 14/10/2015
 */



$(function(){
	
	redirectBrowser();
	//$("#div_desempeno").hide();

	//Oculta div para mensaje de error de la p&aacute;gina 1
	//$("#page1").hide();
	$("#hint_nacionalidad").hintOpen("Nacionalidad","Si tiene doble nacionalidad y una de ellas es la colombiana, marque las dos opciones. Si tiene doble nacionalidad y ninguna es la colombiana, escriba una de esas nacionalidades.");
	$("#alerta1").hide(); //d&iacute;a de nacimiento
	$("#alerta2").hide(); //mes de nacimiento
	$("#alerta3").hide(); //a&ntilde;o de nacimiento
	$("#alert_c4p47_edad").hide(); //edad
	$("#alerta5").hide(); //otra nacionalidad
	if($("#c4p48a_otra:checked").val()=='1')
		$("#div_otra_nal").show(); //cual otra nacionalidad
	else
		$("#div_otra_nal").hide();

	//Oculta div para mensaje de error de la p&aacute;gina 2
	$("#page2").hide();
	$("#alerta6").hide(); //parentesco

	//Oculta div para mensaje de error de la p&aacute;gina 3
	$("#page3").hide();
	$("#c4p50a_dpto_nac").cargarCombo("c4p50b_mpio_nac", base_url + "persona/persona/actualizarMunicipios");//Carga combo mpio de nacimiento
	$("#c4p51a_dpto_mama").cargarCombo("c4p51b_mpio_mama", base_url + "persona/persona/actualizarMunicipiosTodos");//Carga combo mpio residencia mam&aacute; - Se cargan todos los mpios incluyendo el de residencia, por si se requiere seleccionar por la mam&aacute;
	$("#alert_c4p50_lug_nac").hide();//lugar nacimiento
	if($("#c4p50_lug_nac:checked").val()=='2')
		$("#div_c4p50_lug_nac_otro_mpio").show();//div otro mpio nacimiento
	else
		$("#div_c4p50_lug_nac_otro_mpio").hide();
	$("#alert_c4p50a_dpto_nac").hide();//dpto nacimiento
	$("#alert_c4p50b_mpio_nac").hide();//mpio nacimiento
	if($("#c4p50_lug_nac:checked").val()=='3')
		$("#div_c4p50_lug_nac_otro_pais").show();//div otro país nacimiento
	else
		$("#div_c4p50_lug_nac_otro_pais").hide();//div otro país nacimiento
	$("#alert_c4p50c_pais_nac").hide();//pa&iacute;s nacimiento
	$("#alert_c4p50c1_ano_llego").hide();//a&ntilde;o lleg&oacute; a Colombia
	$("#alert_c4p51_res_mama").hide();//residencia mam&aacute;
	if($("#c4p51_res_mama:checked").val()=='2')
		$("#div_c4p51_res_mama_otro_mpio").show();//div otro mpio residencia mam&aacute;
	else
		$("#div_c4p51_res_mama_otro_mpio").hide();//div otro mpio residencia mam&aacute;
	$("#alert_c4p51a_dpto_mama").hide();//dpto residencia mam&aacute;
	$("#alert_c4p51b_mpio_mama").hide();//mpio residencia mam&aacute;
	if($("#c4p51_res_mama:checked").val()=='3')
		$("#div_c4p51_res_mama_otro_pais").show();//div otro país residencia mam&aacute;
	else
		$("#div_c4p51_res_mama_otro_pais").hide();//div otro país residencia mam&aacute;
	$("#alert_c4p51c_pais_mama").hide();//pa&iacute;s residencia mam&aacute;

	
	//Oculta div para mensaje de error de la p&aacute;gina 4
	$("#page4").hide();
	$("#c4p52a_dpto_5anos").cargarCombo("c4p52b_mpio_5anos", base_url + "persona/persona/actualizarMunicipios");//Carga combo mpio vivienda 5 a&ntilde;os
	$("#alert_c4p52_vivia_5anos").hide();//residencia hace 5 a&ntilde;os
	if($("#c4p52_vivia_5anos:checked").val()=='3')
		$("#div_c4p52_vivia_5anos_otro_mpio").show();//div otro mpio
	else
		$("#div_c4p52_vivia_5anos_otro_mpio").hide();//div otro mpio
	$("#alert_c4p52a_dpto_5anos").hide();//dpto hace 5 a&ntilde;os
	$("#alert_c4p52b_mpio_5anos").hide();//mpio hace 5 a&ntilde;os
	if($("#c4p52_vivia_5anos:checked").val()=='4')
	{
		$("#div_c4p52_vivia_5anos_otro_pais").show();//div otro país
		$("#div_c4p53_clase_5anos").hide();
	}
	else
	{
		$("#div_c4p52_vivia_5anos_otro_pais").hide();//div otro país
		$("#div_c4p53_clase_5anos").show();
	}
	$("#alert_c4p52c_pais_5ano").hide();//pais hace 5 a&ntilde;os
	$("#alert_c4p52c1_ano_llega5").hide();//a&ntilde;o lleg&oacute; a Colombia
	$("#alert_c4p53_clase_5anos").hide();//clase hace 5 a&ntilde;os

	//Oculta div para mensaje de error de la p&aacute;gina 5
	$("#page5").hide();
	$("#c4p56a_otra_causa").bloquearTexto2().largo(30);
	$("#c4p54a_dpto_1ano").cargarCombo("c4p54b_mpio_1ano", base_url + "persona/persona/actualizarMunicipios");//Carga combo mpio vivienda 1 a&ntilde;o
	$("#alert_c4p54_vivia_1ano").hide();//residencia hace 1 a&ntilde;o

	if($("#c4p54_vivia_1ano:checked").val()=='2')
		$("#div_c4p56_causa_1ano").hide();
	else
		$("#div_c4p56_causa_1ano").show();
	
	if($("#c4p54_vivia_1ano:checked").val()=='3')
		$("#div_c4p54_vivia_1ano_otro_mpio").show();//div otro mpio
	else
		$("#div_c4p54_vivia_1ano_otro_mpio").hide();//div otro mpio
	$("#alert_c4p54a_dpto_1ano").hide();//dpto hace 1 a&ntilde;o
	$("#alert_c4p54b_mpio_1ano").hide();//mpio hace 1 a&ntilde;o
	if($("#c4p54_vivia_1ano:checked").val()=='4')
	{
		$("#div_c4p54_vivia_1ano_otro_pais").show();//div otro país
		$("#div_c4p55_clase_1ano").hide();
	}
	else
	{
		$("#div_c4p54_vivia_1ano_otro_pais").hide();//div otro país
		$("#div_c4p55_clase_1ano").show();
	}
	$("#alert_c4p54c_pais_1ano").hide();//pais hace 1 a&ntilde;o
	$("#alert_c4p55_clase_1ano").hide();//clase hace 1 a&ntilde;o
	if($("#c4p56_causa_1ano:checked").val()=='10')
		$("#div_c4p56a_otra_causa").show();//div otra causa
	else
		$("#div_c4p56a_otra_causa").hide();//div otra causa
	$("#alert_c4p56a_otra_causa").hide();//otra causa
	$("#alert_c4p56_causa_1ano").hide();//causa 1 a&ntilde;o

	//Oculta div para mensaje de error de la p&aacute;gina 6
	$("#page6").hide();
	if($("#c4p57_etnia:checked").val()=='1')
	{
		$("#div_c4p57a_cod_etnia").show();//pueblo indigena
		$("#div_c4p58a_habla_leng").show();//div habla lengua
	}
	else
	{
		$("#div_c4p57a_cod_etnia").hide();//pueblo indigena
		if($("#c4p57_etnia:checked").val()>'4')
			$("#div_c4p58a_habla_leng").hide();//div habla lengua
		else
			$("#div_c4p58a_habla_leng").show();//div habla lengua
	}
	$("#alert_c4p57a_cod_etnia").hide(); //otra etnia
	$("#alert_c4p57_etnia").hide(); //mes de nacimiento
	$("#alert_c4p58a_habla_leng").hide(); //lengua nativa
	$("#alert_c4p58b_otras_leng").hide(); //otra lengua nativa
	$("#alert_c4p58c_habla_esp").hide(); //espa\u00f1ol
	if($("#c4p58b_otras_leng:checked").val()=='1')
		$("#div_c4p58b1_qotras_leng").show(); //cantidad de otras lenguas
	else
		$("#div_c4p58b1_qotras_leng").hide(); //cantidad de otras lenguas

	//Oculta div para mensaje de error de la p&aacute;gina 7
	$("#page7").hide();
	$("#alert_c4p59_creencia").hide(); //creencia

	//Oculta div para mensaje de error de la p&aacute;gina 8
	$("#page8").hide();
	$("#alert_c4p60_afi_salud").hide(); //afiliado a salud
	if($("#c4p60_afi_salud:checked").val()=='1')
		$("#div_c4p60a_regimen").show();//div para a cu&aacute;l r&eacute;gimen
	else
		$("#div_c4p60a_regimen").hide();//div para a cu&aacute;l r&eacute;gimen
	$("#alert_c4p60a_regimen").hide(); //a cu&aacute;l r&eacute;gimen?
	$("#alert_c4p61_enfermo").hide(); //enfermedad &uacute;ltimos 30 d&iacute;as?
	if($("#c4p61_enfermo:checked").val()==1)
	{
		$("#div_c4p62a_hospital").show();
		$("#div_c4p63_atendieron").show();
		if($("#c4p62a_hospital:checked").val()=='2' && $("#c4p62b_med_trad:checked").val()=='2')
			$("#div_c4p63_atendieron").hide();
		else
			$("#div_c4p63_atendieron").show();
	}
	else //if($("#c4p61_enfermo:checked").val()==2)
	{
		/*$("#div_c4p62a_hospital").hide();
		$("#div_c4p63_atendieron").hide();
		*/
		$("#c4p62a_hospital:checked").removeAttr('checked');
		$("#c4p62b_med_trad:checked").removeAttr('checked');
		$("#c4p63_atendieron:checked").removeAttr('checked');
		$("#div_c4p62a_hospital").hide();
		$("#div_c4p63_atendieron").hide();
	}
	$("#alert_c4p62a_hospital").hide(); //acudi&oacute; a servicio de salud?
	$("#alert_c4p62b_med_trad").hide(); //acudi&oacute; a m&eacute;dico tradicional?
	$("#alert_c4p63_atendieron").hide(); //lo atendieron?
	
	//Oculta div para mensaje de error de la p&aacute;gina 9
	$("#page9").hide();
	$("#alert_c4p64a_oir").hide(); //o&iacute;r
	$("#alert_c4p64b_hablar").hide(); //hablar
	$("#alert_c4p64c_ver").hide(); //ver
	$("#alert_c4p64d_caminar").hide(); //caminar
	$("#alert_c4p64e_coger").hide(); //coger
	$("#alert_c4p64f_decidir").hide(); //decidir
	$("#alert_c4p64g_comer").hide(); //comer
	$("#alert_c4p64h_relacion").hide(); //relaci&oacute;n
	$("#alert_c4p64i_tareas").hide(); //tareas

	//Oculta div para mensaje de error de la p&aacute;gina 10
	$("#page10").hide();
	$("#c4p66a_otracausa").bloquearTexto2().largo(30);
	$("#alert_c4p65_lim_ppal").hide(); //dificultad
	$("#alert_c4p66a_otracausa").hide(); //otra causa dificultad
	if($("#c4p66_causa:checked").val()==7)
		$("#div_c4p66a_otracausa").show(); //otra causa dificultad
	else
		$("#div_c4p66a_otracausa").hide(); //otra causa dificultad
	$("#alert_c4p66_causa").hide(); //causa dificultad
	$("#alert_c4p67a_ayuda_tec").hide(); //ayuda t&eacute; tecnol&oacute;gia
	$("#alert_c4p67b_ayuda_pers").hide(); //ayuda otras personas
	$("#alert_c4p67c_ayuda_med").hide(); //ayuda medicamentos o terapias
	$("#alert_c4p67d_ayuda_ances").hide(); //ayuda ancestral
	$("#alert_c4p67e_ayuda_anim").hide(); //perro gu&iacute;a
	$("#alert_c4p67f_ayuda_otro").hide(); //otro tipo de ayuda

	
	//Oculta div para mensaje de error de la p&aacute;gina 11
	$("#page11").hide();
	$("#alert_c4p68_cuida").hide(); //con qui&eacute;n permanece
	/*if($('#c4p68_cuida:checked').val()>1 && $('#c4p68_cuida:checked').val()<7 )
		$("#div_c4p69_estab_asis").hide();
	else
		$("#div_c4p69_estab_asis").show();
	if($('#c4p68_cuida:checked').val()==7 )
	{
		$("#div_c4p69_estab_asis").hide();
		$("#div_c4p70_edu_integ").hide();
	}
	else if($('#c4p68_cuida:checked').val()==1 )
		$("#div_c4p70_edu_integ").hide();
	*/	
	if($('#c4p68_cuida:checked').val()==1 )	
		$("#div_c4p70_edu_integ").hide();
	else if($('#c4p68_cuida:checked').val()>1 && $('#c4p68_cuida:checked').val()<7 )	
		$("#div_c4p69_estab_asis").hide();
	else // opcion 7 o primera vez	
	{
		$("#div_c4p69_estab_asis").hide();
		$("#div_c4p70_edu_integ").hide();
	}
		
	$("#alert_c4p69_estab_asis").hide(); //tipo de establecimiento
	$("#alert_c4p70_edu_integ").hide(); //modalidad familiar integral
	
	//Oculta div para mensaje de error de la p&aacute;gina 111
	$("#page111").hide();
	$("#alert_c4p71_alfabeta").hide(); //sabe leer y escribir
	
	//Oculta div para mensaje de error de la p&aacute;gina 12
	$("#page12").hide();
	$("#c4p72a1_dpto_inst").cargarCombo("c4p72a2_mpio_inst", base_url + "persona/persona/actualizarMunicipios");//Carga combo mpio ubicaci&oacute;n instituci&oacute;n
	$("#cap72c7_otra").bloquearTexto2().largo(45);
	$("#alert_c4p72_asistencia").hide();//asistencia a instituci&oacute;n
	if($("#c4p72_asistencia:checked").val()=='1')
		$("#div_c4p72a_ubic_inst").show();//div ubicaci&oacute;n instituci&oacute;n
	else
		$("#div_c4p72a_ubic_inst").hide();//div ubicaci&oacute;n instituci&oacute;n
	$("#alert_c4p72a_ubic_inst").hide();//ubicaci&oacute;n instituci&oacute;n
	if($("#c4p72a_ubic_inst:checked").val()=='2')
		$("#div_c4p72a_ubic_inst_otro_mpio").show();//div ubicaci&oacute;n instituci&oacute;n - otro mpio
	else
		$("#div_c4p72a_ubic_inst_otro_mpio").hide();//div ubicaci&oacute;n instituci&oacute;n - otro mpio
	$("#alert_c4p72a1_dpto_inst").hide();//dpto instituci&oacute;n
	$("#alert_c4p72a2_mpio_inst").hide();//mpio instituci&oacute;n
	if($("#c4p72a_ubic_inst:checked").val()=='3')
		$("#div_c4p72a_ubic_inst_otro_pais").show();//div ubicaci&oacute;n instituci&oacute;n - otro pa6iacute;s
	else
		$("#div_c4p72a_ubic_inst_otro_pais").hide();//div ubicaci&oacute;n instituci&oacute;n - otro pa6iacute;s
	$("#alert_c4p72a3_pais_inst").hide();//pa&iacute;s instituci&oacute;n
	
	if($("#c4p72_asistencia:checked").val()=='2')
		$("#div_c4p72b_dejo_est").show();//div dej&oacute; de estudiar
	else
		$("#div_c4p72b_dejo_est").hide();//div dej&oacute; de estudiar
	$("#alert_c4p72b_dejo_est").hide();//dej&oacute; de estudiar
	$("#alert_cap72_causa").hide();//causa familia
	$("#alert_cap72c7_otra").hide();//otra causa

	if($("#c4p72_asistencia:checked").val()=='2')
	{
		if($("#cap72_causa:checked").val()<6) { $("#desnoestudioa").show(); $("#masnoestudioa").val('-'); }
		else { $("#desnoestudioa").hide(); $("#masnoestudioa").val('+'); }
		if($("#cap72_causa:checked").val()>=6 && $("#cap72_causa:checked").val()<10) { $("#desnoestudiob").show(); $("#masnoestudiob").val('-'); }
		else { $("#desnoestudiob").hide(); $("#masnoestudiob").val('+'); }
		if($("#cap72_causa:checked").val()>=10 && $("#cap72_causa:checked").val()<18) { $("#desnoestudioc").show(); $("#masnoestudioc").val('-'); }
		else { $("#desnoestudioc").hide(); $("#masnoestudioc").val('+'); }
		if($("#cap72_causa:checked").val()>=18 && $("#cap72_causa:checked").val()<21) { $("#desnoestudiod").show(); $("#masnoestudiod").val('-'); }
		else { $("#desnoestudiod").hide(); $("#masnoestudiod").val('+'); }
		if($("#cap72_causa:checked").val()>=21 && $("#cap72_causa:checked").val()<23) { $("#desnoestudioe").show(); $("#masnoestudioe").val('-'); }
		else { $("#desnoestudioe").hide(); $("#masnoestudioe").val('+'); }
		if($("#cap72_causa:checked").val()>=23 && $("#cap72_causa:checked").val()<28) { $("#desnoestudiof").show(); $("#masnoestudiof").val('-'); }
		else { $("#desnoestudiof").hide(); $("#masnoestudiof").val('+'); }

		if($("#cap72c7_otra").val()=="")
		{
			$("#desnoestudiog").hide();
			$("#masnoestudiog").val('+');
		}
		else
		{
			//$("#desnoestudiog").show();
			$("#masnoestudiog").val('-');
		}
	}
	else
	{
		ocultaDivCausasAsistencia();
	}

	//Oculta los div de las causas
	function ocultaDivCausasAsistencia()
	{
		$("#desnoestudioa").hide();
		$("#masnoestudioa").val('+');
		$("#desnoestudiob").hide();
		$("#masnoestudiob").val('+');
		$("#desnoestudioc").hide();
		$("#masnoestudioc").val('+');
		$("#desnoestudiod").hide();
		$("#masnoestudiod").val('+');
		$("#desnoestudioe").hide();
		$("#masnoestudioe").val('+');
		$("#desnoestudiof").hide();
		$("#masnoestudiof").val('+');
		$("#desnoestudiog").hide();
		$("#masnoestudiog").val('+');
	}
	//Oculta div para mensaje de error de la p&aacute;gina 13
	$("#page13").hide();
	$("#alert_c4p73_nivel_anos").hide(); //¿Cu&aacute;l es el &uacute;ltimo a&ntilde;o o grado de estudios que XXXXXX aprob&oacute;?

	//Oculta div para mensaje de error de la p&aacute;gina 14
	$("#page14").hide();
	$("#alert_c4p74a_cel").hide(); //celular
	$("#alert_c4p74b_pc").hide(); //computador
	$("#alert_c4p74c_tableta").hide(); //tableta
	$("#alert_c4p74d_internet").hide(); //internet
	
	//Oculta div para mensaje de error de la p&aacute;gina 14
	$("#page15").hide();
	$("#alert_c4p75_trabajo").hide(); //ocupaci&oacute;n semana pasada
	if($("#c4p75_trabajo:checked").val()==1 || $("#c4p75_trabajo:checked").val()==2)
		$("#div_cap76a_neg_flia").hide();
	
	ocultaDivAlertaCap76();
	
	//Oculta los div de las alertas de actividad semana pasada
	function ocultaDivAlertaCap76()
	{
		$("#alert_cap76a_neg_flia").hide(); //ayud&oacute; en un negocio familiar o no familiar?
		$("#alert_cap76a_neg_flia").html("");
		$("#alert_cap76b_neg_flig").hide(); //vendi&oacute; por su cuenta alg&uacute;n producto?
		$("#alert_cap76b_neg_flig").html("");
		$("#alert_cap76c_neg_flif").hide(); //elabor&oacute; alg&uacute;n producto para vender?
		$("#alert_cap76c_neg_flif").html("");
		$("#alert_cap76d_neg_flie").hide(); //realiz&oacute; otro tipo de actividad a cambio de alg&uacute;n pago?
		$("#alert_cap76d_neg_flie").html("");
		$("#alert_cap76e_neg_flid").hide(); //realiz&oacute; algun tipo de trabajo colectivo de grupos &eacute;tnicos? (minga, mamuncia, convite, yanama)
		$("#alert_cap76e_neg_flid").html("");
		$("#alert_cap76f_neg_flic").hide(); //ayud&oacute; en las labores del campo o en la cr&iacute;a de animales?
		$("#alert_cap76f_neg_flic").html("");
		$("#alert_cap76g_neg_flib").hide(); //fue pasante o aprendiz, o realiz&oacute; alg&uacute;n trabajo como voluntario?
		$("#alert_cap76g_neg_flib").html("");
	}
	
	//Oculta div para mensaje de error de la p&aacute;gina 16
	$("#page16").hide();
	$("#alert_cap77a_ae_realiza").hide(); //actividad empresa
	if($("#cap77a_ae_realiza:checked").val()<4) { $("#desctempresa1").show(); $("#masactempresa1").val('-'); }
	else { $("#desctempresa1").hide(); $("#masactempresa1").val('+'); }
	if($("#cap77a_ae_realiza:checked").val()>=4 && $("#cap77a_ae_realiza:checked").val()<9) { $("#desctempresa2").show(); $("#masactempresa2").val('-'); }
	else  { $("#desctempresa2").hide(); $("#masactempresa2").val('+'); }
	if($("#cap77a_ae_realiza:checked").val()>=9 && $("#cap77a_ae_realiza:checked").val()<11) { $("#desctempresa3").show(); $("#masactempresa3").val('-'); }
	else { $("#desctempresa3").hide(); $("#masactempresa3").val('+'); }
	if($("#cap77a_ae_realiza:checked").val()>=11 && $("#cap77a_ae_realiza:checked").val()<13) { $("#desctempresa4").show(); $("#masactempresa4").val('-'); }
	else { $("#desctempresa4").hide(); $("#masactempresa4").val('+'); }
	if($("#cap77a_ae_realiza:checked").val()>=13 && $("#cap77a_ae_realiza:checked").val()<33) { $("#desctempresa5").show(); $("#masactempresa5").val('-'); } 
	else { $("#desctempresa5").hide(); $("#masactempresa5").val('+'); }
	if($("#cap77a_ae_realiza:checked").val()>=33 && $("#cap77a_ae_realiza:checked").val()<36) { $("#desctempresa6").show(); $("#masactempresa6").val('-'); } 
	else { $("#desctempresa6").hide(); $("#masactempresa6").val('+'); }
	if($("#cap77a_ae_realiza:checked").val()>=36 && $("#cap77a_ae_realiza:checked").val()<38) { $("#desctempresa7").show(); $("#masactempresa7").val('-'); } 
	else { $("#desctempresa7").hide(); $("#masactempresa7").val('+'); }
	if($("#cap77a_ae_realiza:checked").val()==38 ) { $("#desctempresa8").show(); $("#masactempresa8").val('-'); } 
	else { $("#desctempresa8").hide(); $("#masactempresa8").val('+'); }
	if($("#cap77a_ae_realiza:checked").val()>=39 && $("#cap77a_ae_realiza:checked").val()<44) { $("#desctempresa9").show(); $("#masactempresa9").val('-'); } 
	else { $("#desctempresa9").hide(); $("#masactempresa9").val('+'); }
	if($("#cap77a_ae_realiza:checked").val()>=44 && $("#cap77a_ae_realiza:checked").val()<46) { $("#desctempresa10").show(); $("#masactempresa10").val('-'); } 
	else { $("#desctempresa10").hide(); $("#masactempresa10").val('+'); }
	if($("#cap77a_ae_realiza:checked").val()>=46 && $("#cap77a_ae_realiza:checked").val()<53) { $("#desctempresa11").show(); $("#masactempresa11").val('-'); } 
	else { $("#desctempresa11").hide(); $("#masactempresa11").val('+'); }
	if($("#cap77a_ae_realiza:checked").val()>=53 && $("#cap77a_ae_realiza:checked").val()<56) { $("#desctempresa12").show(); $("#masactempresa12").val('-'); } 
	else { $("#desctempresa12").hide(); $("#masactempresa12").val('+'); }
	if($("#cap77a_ae_realiza:checked").val()==56) { $("#desctempresa13").show(); $("#masactempresa13").val('-'); } 
	else { $("#desctempresa13").hide(); $("#masactempresa13").val('+'); }
	if($("#cap77a_ae_realiza:checked").val()==57) { $("#desctempresa14").show(); $("#masactempresa14").val('-'); } 
	else { $("#desctempresa14").hide(); $("#masactempresa14").val('+'); }
	if($("#cap77a_ae_realiza:checked").val()>=58 ) { $("#desctempresa15").show(); $("#masactempresa15").val('-'); } 
	else { $("#desctempresa15").hide(); $("#masactempresa15").val('+'); }
	
	
	//Oculta div para mensaje de error de la p&aacute;gina 17
	$("#page17").hide();
	$("#c4p79a_dpto_trab").cargarCombo("c4p79b_mpio_trab", base_url + "persona/persona/actualizarMunicipios");//Carga combo mpio sitio trabajo
	$("#alert_c4p78_tipo_trab").hide();//tipo trabajo
	$("#alert_c4p79_sitio_trab").hide();//sitio trabajo
	if($("#c4p79_sitio_trab:checked").val()=='2')
		$("#div_c4p79_sitio_trab").show();//sitio trabajo - en otro mpio colombiano
	else
		$("#div_c4p79_sitio_trab").hide();//sitio trabajo - en otro mpio colombiano
	$("#alert_c4p79a_dpto_trab").hide();//sitio trabajo - dpto
	$("#alert_c4p79b_mpio_trab").hide();//sitio trabajo - mpio
	$("#alert_c4p79c_pais_trab").hide();//sitio trabajo - pais
	if($("#c4p79_sitio_trab:checked").val()=='3')
		$("#div_c4p79c_pais_trab").show();////sitio trabajo - otro pais
	else
		$("#div_c4p79c_pais_trab").hide();////sitio trabajo - otro pais
	$("#alert_c4p80_cotiz_pens").hide();//cotizante
	
	//Oculta div para mensaje de error de la p&aacute;gina 18
	$("#page18").hide();
	$("#alert_c4p81_est_civil").hide(); //estado civil
	
	//Oculta div para mensaje de error de la p&aacute;gina 19
	$("#page19").hide();
	$("#alert_c4p82_thnv").hide(); //total hijos
	$("#alert_c4p82a_hnvh").hide(); //total hijos - hombres
	$("#alert_c4p82_thnv_c4p82a_hnvh").hide(); //total hijos - hombres > total hijos
	$("#alert_c4p82_thnv_c4p82b_hnvm").hide(); //total hijos - mujeres > total hijos
	if($("#c4p82_thnv").val()==0)
	{
		/*$("#c4p82a_hnvh").prop('selectedIndex', 0);
		$("#c4p82b_hnvm").prop('selectedIndex', 0);*/
		$("#div_c4p83_thnv").hide();
		$("#div_c4p83_hnv_0").hide();
		$("#div_uhva").hide();
	}
	else
	{
		if($("#c4p83_hnv:checked").val()=="")
			$("#c4p83_hnv").prop("checked", true); //radio de hijos vivos actualmente? - checked por defecto
		else if($("#c4p83_hnv:checked").val()==2)
			$("#div_c4p83_hnv").hide();
		else if($("#c4p83a_thsv").val()==0)
			$("#div_c4p83_hnv_0").hide();
		
		if($("#c4p84_hfc:checked").val()=="")
			$("#c4p84_hfc").prop("checked", true); //radio de viven fuera de colombia - checked por defecto
		else if($("#c4p84_hfc:checked").val()==2)
			$("#div_c4p84_hfc").hide();
	}
	$("#alert_c4p82b_hnvm").hide(); //total hijos - mujeres
	$("#alert_c4p82_thnv_c4p83a_thsv").hide(); //hijos vivos actualmente - total > total hijos
	$("#alert_c4p82a_hnvh_c4p83b_hsvh").hide(); //hijos vivos actualmente - hombres > total hijos - hombres 
	$("#alert_c4p82b_hnvm_c4p83c_hsvm").hide(); //hijos vivos actualmente - mujeres > total hijos - mujeres 
	
	$("#alert_c4p83_hnv").hide(); //hijos vivos actualmente?
	
	$("#alert_c4p83a_thsv").hide(); //hijos vivos actualmente - total
	$("#alert_c4p83b_hsvh").hide(); //hijos vivos actualmente - hombres
	$("#alert_c4p83c_hsvm").hide(); //hijos vivos actualmente - mujeres
	$("#alert_c4p83a_thsv_c4p84a_thfc").hide(); //viven fuera de colombia - total > hijos vivos actualmente - total 
	$("#alert_c4p83b_hsvh_c4p84b_hfch").hide(); //viven fuera de colombia - hombres > hijos vivos actualmente - hombres 
	$("#alert_c4p83c_hsvm_c4p84c_hfcm").hide(); //viven fuera de colombia - mujeres > hijos vivos actualmente - mujeres 
	
	$("#alert_c4p84_hfc").hide(); //viven fuera de colombia
	$("#alert_c4p84a_thfc").hide(); //viven fuera de colombia - total
	$("#alert_c4p84b_hfch").hide(); //viven fuera de colombia - hombres
	$("#alert_c4p84c_hfcm").hide(); //viven fuera de colombia - mujeres
	
	$("#alert_c4p85_uhva").hide(); //&uacute;ltimo hijo vivo?
	
	$("#alert_c4p86a_dia_uhva").hide(); //d&iacute;a nacimiento &uacute;ltimo hijo nacido vivo
	$("#alert_c4p86b_mes_uhva").hide(); //mes nacimiento &uacute;ltimo hijo nacido vivo
	$("#alert_c4p86c_ano_uhva").hide(); //a&ntilde;o nacimiento &uacute;ltimo hijo nacido vivo
	$("#alert_c4p86_fnuhv").hide();
	
	//Oculta div para mensaje de error de la p&aacute;gina 20
	$("#page20").hide();
	$("#alert_cap87_ori_sex").hide(); //orientaci&oacute;n sexual
	$("#alert_cap88_rec_genero").hide(); //identidad de g&eacute;nero

	//Oculta div para mensaje de error de la p&aacute;gina 21
	$("#page21").hide();
	$("#c4p90a_dpto_cens").cargarCombo("c4p90b_mpio_cens", base_url + "persona/persona/actualizarMunicipios");//Carga combo mpio censo
	$("#alert_c4p89_fue_cens").hide();//fue censado
	if($("#c4p89_fue_cens:checked").val()==2 || $("#c4p89_fue_cens:checked").val()==3)
		$("#div_fue_censado").hide();//div otro municipio
	else
		$("#div_fue_censado").show();//div otro municipio
	$("#alert_c4p90_lug_cens").hide();//lugar censo
	if($("#c4p90_lug_cens:checked").val()=='2')
		$("#div_c4p90_lug_cens_otro_mpio").show();//div otro municipio
	else
		$("#div_c4p90_lug_cens_otro_mpio").hide();//div otro municipio
	$("#alert_c4p90a_dpto_cens").hide();//dpto censo
	$("#alert_c4p90b_mpio_cens").hide();//mpio censo
	$("#alert_c4p91_mes_cens").hide();//mes censo

	
	//***** Inicio - Validaciones de la pagina persona1
	 
	$("#frmPage1").validate({
		rules: {
			c4p46a_dia_nac: { required: true },
			c4p46b_mes_nac: { required: true },
			c4p46c_ano_nac: { required: true },
			c4p47_edad: { required: true },
			c4p48b_cual_nal: { required: true }
		},
		messages: {
			c4p46a_dia_nac: { required: "<b>Debe especificar el d\u00eda de nacimiento.</b>" },
			c4p46b_mes_nac: { required: "<b>Debe especificar el mes de nacimiento.</b>" },
			c4p46c_ano_nac: { required: "<b>Debe especificar el a\u00f1o de nacimiento.</b>" },
			c4p47_edad: { required: "Debe especificar la edad." },
			c4p48b_cual_nal: { required: "Debe seleccionar la otra nacionalidad." }
		},
		errorPlacement: function(error, element) {			
			switch(element.attr("id"))
			{
				case "c4p46a_dia_nac":  $("#alerta1").show();	
										$("#alerta1").html(error);
										break;	
										
				case "c4p46b_mes_nac":  $("#alerta2").show();	
										$("#alerta2").html(error);
										break;						
										
				case "c4p46c_ano_nac":  $("#alerta3").show();	
										$("#alerta3").html(error);
										break;						
	
				case "c4p47_edad":		$("#alert_c4p47_edad").show();	
										$("#alert_c4p47_edad").html(error);
										break;

				case "c4p48b_cual_nal":	$("#alerta5").show();	
										$("#alerta5").html(error);
										break;
			}
		},
		submitHandler: function(form) {			
			if ($("#frmPage1").valid()){
				$("html, body").scrollTop(0);
				$("#page2").show();
				$("#page1").toggle("slide");
			}						
		}
	});
	
	//Cuando el usuario selecciona la opci&oacute;n: No sabe, llama a funci&oacute;n para ocultar el div 
	//que despliega los errores relacionados con la edad
	$("#c4p46_sabe_fecha").bind("click",function(){
		$("#c4p46a_dia_nac").prop('selectedIndex', 0);
		$("#c4p46b_mes_nac").prop('selectedIndex', 0);
		$("#c4p46c_ano_nac").prop('selectedIndex', 0);
		$("#alerta1").hide();
		$("#alerta2").hide();
		$("#alerta3").hide();
		// hch - $("#alert_c4p47_edad").hide();
		//$("#c4p47_edad").val('');
	});

	//Oculta los div que despliegan los errores relacionados con la fecha de nacimiento
	$("#c4p46a_dia_nac").bind("click",function(){
		$("#c4p46_sabe_fecha:checked").removeAttr('checked');
		$("#alerta1").html("");
		$("#alerta1").hide();
		$("#alert_c4p47_edad").hide();
	});

	$("#c4p46a_dia_nac").bind("change",function(){
		$("#c4p46_sabe_fecha:checked").removeAttr('checked');
		$("#alerta1").html("");
		$("#alerta1").hide();
		$("#alert_c4p47_edad").hide();
	});

	$("#c4p46b_mes_nac").bind("click",function(){
		$("#c4p46_sabe_fecha:checked").removeAttr('checked');
		$("#alerta2").html("");
		$("#alerta2").hide();
		$("#alert_c4p47_edad").hide();
	});

	$("#c4p46b_mes_nac").bind("change",function(){
		$("#c4p46_sabe_fecha:checked").removeAttr('checked');
		$("#alerta2").html("");
		$("#alerta2").hide();
		$("#alert_c4p47_edad").hide();
	});

	$("#c4p46c_ano_nac").bind("click",function(){
		$("#c4p46_sabe_fecha:checked").removeAttr('checked');
		$("#alerta3").html("");
		$("#alerta3").hide();
		$("#alert_c4p47_edad").html("");
		$("#alert_c4p47_edad").hide();
	});

	$("#c4p46c_ano_nac").bind("change",function(){
		$("#c4p46_sabe_fecha:checked").removeAttr('checked');
		$("#alerta3").html("");
		$("#alerta3").hide();
		$("#alert_c4p47_edad").html("");
		$("#alert_c4p47_edad").hide();
	});

	//Oculta el div que despliega los errores relacionados con la edad
	$("#c4p47_edad").bind("click",function(){
		// hch - $("#c4p46_sabe_fecha:checked").removeAttr('checked');
		$("#alert_c4p47_edad").html("");
		$("#alert_c4p47_edad").hide();
	});

	$("#c4p47_edad").keypress(function(event){
		$("#alert_c4p47_edad").html("");
		$("#alert_c4p47_edad").hide();
		return soloNumeros(event);
	});
	
	$("#c4p48_colombia").bind("click",function(){
		$("#alerta5").html("");
		$("#alerta5").hide();
	});
	
	//Oculta/Muestra el div que despliega otra nacionalidad y los errores relacionados con otra nacionalidad
	$("#c4p48a_otra").bind("click",function(){
		if($('#c4p48a_otra').is(':checked'))
		{
			$("#div_otra_nal").show();
			$("#c4p48b_cual_nal").focus();
		}
		else
		{
			$("#alerta5").html("");
			$("#alerta5").hide();
			$("#div_otra_nal").hide();
			$("#c4p48b_cual_nal").val('');
		}
	});
	
	//Oculta el div que despliega los errores relacionados con la otra nacionalidad
	$("#c4p48b_cual_nal").bind("click",function(){
		$("#alerta5").html("");
		$("#alerta5").hide();
	});

	$("#btnSiguiente1").bind("click",function()
	{
		if ($("#c4p46_sabe_fecha:checked").val()!='2')
		{
			if ($("#frmPage1").valid())
			{
				/**
				 * Proceso para validar los d&iacute;as y a&ntilde;os respecto a la fecha de nacimiento seleccionada
				 * @author RFHuertasT - Roberto Fernando Huertas Torres
				 * @since 14/10/2015
				 * @param 	fechaActual: Almacena la fecha actual - FechaNacimiento: Almacena la fecha de nacimiento seleccionada
				 * @param 	diferenciaDias: Calcula la diferencia en d&iacute;as entre la fecha actul y la fecha de nacimiento seleccionada
				 * @param 	diferenciaAnos: Calcula los a&ntilde;s seg&uacute;n la fecha de nacimiento seleccionada
				 */
				
				var d = new Date();
				var fechaActual = (d.getMonth()+1) + "/" + d.getDate() + "/" + d.getFullYear();
				var fechaNacimiento = $("#c4p46b_mes_nac").val() + "/" + $("#c4p46a_dia_nac").val() + "/" + $("#c4p46c_ano_nac").val();
				var diferenciaDias =  Math.floor(( Date.parse(fechaActual) - Date.parse(fechaNacimiento) ) / 86400000);
				if(diferenciaDias < 0){
					$("#alert_c4p47_edad").html("<b>La fecha de nacimiento no puede ser superior a la fecha actual.</b>");
					$("#alert_c4p47_edad").show();
					diferenciaDias = diferenciaDias*(-1);
				}
				else
				{
					var diferenciaAnos = calculaEdad($("#c4p46a_dia_nac").val(), $("#c4p46b_mes_nac").val(), $("#c4p46c_ano_nac").val())
					if(diferenciaAnos != $("#c4p47_edad").val())
					{
						$("#alert_c4p47_edad").html("<b>Los a\u00f1os cumplidos no coinciden con la fecha de nacimiento ingresada. Modifique el dato incorrecto.</b>");
						$("#alert_c4p47_edad").show();
					}
					else
					{
						if($("#c4p48_colombia").is(':unchecked') && $('#c4p48a_otra').is(':unchecked'))
						{
							$("#alerta5").html("<b>Debe especificar la nacionalidad.</b>");
							$("#alerta5").show();
						}
						else
						{
							ajaxGuardarPersona(1);
						}
					}
				}
			}
		}
		else
		{
			
			/**
			 * Se obliga a digitar años, ya que no sabe fecha de nacimiento
			 * @autor: hhchavezv
			 * @since 2015ene20
			 */
			var controlEdad = true;
			if($("#c4p47_edad").val() == "")
			{
				$("#alert_c4p47_edad").html("<b>Debe especificar la edad.</b>");
				$("#alert_c4p47_edad").show();
				controlEdad = false;
			}
			
			
			
			/**
			 * controlNacionalidad: Variable de control para obligar a que se especifique la otra nacionalidad.
			 * @autor: Roberto Fernando Huertas Torres
			 * @param: none
			 * @since 19/10/5015
			 */
			var controlNacionalidad = true;
			if($("#c4p48_colombia").is(':unchecked') && $('#c4p48a_otra').is(':unchecked'))
			{
				$("#alerta5").html("<b>Debe especificar la nacionalidad.</b>");
				$("#alerta5").show();
				controlNacionalidad = false;
			}
			else if($('#c4p48a_otra').is(':checked') && $("#c4p48b_cual_nal").val()=='')
			{
				$("#alerta5").html("<b>Debe seleccionar la otra nacionalidad.</b>");
				$("#alerta5").show();
				controlNacionalidad = false;
			}
			if(controlNacionalidad == true && controlEdad == true)
			{
				ajaxGuardarPersona(1);
			}
		}
	});
	
	//***** Fin - Validaciones de la pagina persona1
	
	
	//***** Inicio - Validaciones de la pagina persona2
	
	$("#frmPage2").validate({
		rules: {
			c4p49_parentesco: { required: true }
		},
		messages: {
			c4p49_parentesco: { required: "<b>Debe seleccionar una de las opciones</b>" }
		},
		errorPlacement: function(error, element) {			
			$("#alerta6").show();	
			$("#alerta6").html(error);			
		},
		submitHandler: function(form) {			
			if ($("#frmPage2").valid()){
				$("html, body").scrollTop(0);
				$("#page3").show();
				$("#page2").hide();
			}						
		}
	});

	//Funcion a todos los radiobuttons de persona2 para que oculten el div que despliega los errores
	$("#frmPage2 input[name='c4p49_parentesco']:radio").bind("click",function(){
		if ($(this).is(':checked')){
			$("#alerta6").hide();
		}
	});
	
	$("#btnSiguiente2").bind("click",function(){
		if ($("#frmPage2").valid())
		{
			$("#hint_c4p51_res_mama").hintOpen("Ejemplo","La mam&aacute; de Oscar reside en Bello y va a tener su beb&eacute; en Medell&iacute;n, la capital. Es decir, la mam&aacute; resid&iacute;a en Bello al momento de nacer Oscar.");
			ajaxGuardarPersona(2);
		}
	});
	
	//***** Fin - Validaciones de la pagina persona2


	//***** Inicio - Validaciones de la pagina persona3
	
	$("#frmPage3").validate({
		rules: {
			c4p50_lug_nac: { required: true },
			c4p50a_dpto_nac: { required: true },
			c4p50b_mpio_nac: { required: true },
			c4p50c_pais_nac: { required: true },
			c4p50c1_ano_llego: { required: true },
			c4p51_res_mama: { required: true },
			c4p51a_dpto_mama: { required: true },
			c4p51b_mpio_mama: { required: true },
			c4p51c_pais_mama: { required: true }
		},
		messages: {
			c4p50_lug_nac: { required: "<b>Debe seleccionar una de las opciones.</b>" },
			c4p50a_dpto_nac: { required: "<b>Debe seleccionar un departamento.</b>" },
			c4p50b_mpio_nac: { required: "<b>Debe seleccionar un municipio.</b>" },
			c4p50c_pais_nac: { required: "<b>Debe seleccionar un pa\u00eds.</b>" },
			c4p50c1_ano_llego: { required: "<b>Debe especificar el a\u00f1o de llegada.</b>" },
			c4p51_res_mama: { required: "<b>Debe seleccionar una de las opciones.</b>" },
			c4p51a_dpto_mama: { required: "<b>Debe seleccionar un departamento.</b>" },
			c4p51b_mpio_mama: { required: "<b>Debe seleccionar un municipio.</b>" },
			c4p51c_pais_mama: { required: "<b>Debe seleccionar un pa\u00eds.</b>" }
		},
		errorPlacement: function(error, element) {			
			switch(element.attr("id"))
			{
				case "c4p50_lug_nac":  	$("#alert_c4p50_lug_nac").show();	
										$("#alert_c4p50_lug_nac").html(error);
										break;	
										
				case "c4p50a_dpto_nac":	$("#alert_c4p50a_dpto_nac").show();	
										$("#alert_c4p50a_dpto_nac").html(error);
										break;						
	
				case "c4p50b_mpio_nac": $("#alert_c4p50b_mpio_nac").show();	
										$("#alert_c4p50b_mpio_nac").html(error);
										break;
										
				case "c4p50c_pais_nac":	$("#alert_c4p50c_pais_nac").show();	
										$("#alert_c4p50c_pais_nac").html(error);
										break;
										
				case "c4p50c1_ano_llego":	$("#alert_c4p50c1_ano_llego").show();	
										$("#alert_c4p50c1_ano_llego").html(error);
										break;
										
				case "c4p51_res_mama":	$("#alert_c4p51_res_mama").show();	
										$("#alert_c4p51_res_mama").html(error);
										break;						
				
				case "c4p51a_dpto_mama":	$("#alert_c4p51a_dpto_mama").show();	
										$("#alert_c4p51a_dpto_mama").html(error);
										break;						

				case "c4p51b_mpio_mama":	$("#alert_c4p51b_mpio_mama").show();	
										$("#alert_c4p51b_mpio_mama").html(error);
										break;
				
				case "c4p51c_pais_mama":	$("#alert_c4p51c_pais_mama").show();	
										$("#alert_c4p51c_pais_mama").html(error);
										break;
			}
		},
		submitHandler: function(form) {			
			if ($("#frmPage3").valid()){
				$("#page4").show();
				$("#page3").hide();
				$("html, body").scrollTop(0);
			}						
		}
	});
	
	//Funcion a todos los radiobuttons de persona3 para que oculten el div que despliega los errores para la persona encuestada
	$("#frmPage3 input[name='c4p50_lug_nac']:radio").bind("click",function(){
		if ($(this).is(':checked')){
			$("#alert_c4p50_lug_nac").html("");
			$("#alert_c4p50_lug_nac").hide();
			if($("#c4p50_lug_nac:checked").val()=='2')
			{
				$("#div_c4p50_lug_nac_otro_mpio").show();				
				$("#div_c4p50_lug_nac_otro_pais").hide();
				$("#c4p50c_pais_nac").prop('selectedIndex', 0);
				$("#c4p50c1_ano_llego").val('');
			}
			else if($("#c4p50_lug_nac:checked").val()=='3')
			{
				$("#div_c4p50_lug_nac_otro_pais").show();
				$("#div_c4p50_lug_nac_otro_mpio").hide();
				$("#c4p50a_dpto_nac").prop('selectedIndex', 0);
				$("#c4p50b_mpio_nac").prop('selectedIndex', 0);
			}
			else
			{
				$("#div_c4p50_lug_nac_otro_mpio").hide();
				$("#c4p50a_dpto_nac").prop('selectedIndex', 0);
				$("#c4p50b_mpio_nac").prop('selectedIndex', 0);
				$("#div_c4p50_lug_nac_otro_pais").hide();
				$("#c4p50c_pais_nac").prop('selectedIndex', 0);
				$("#c4p50c1_ano_llego").val('');
			}
		}
	});
	
	$("#c4p50a_dpto_nac").bind("click",function(){
		$("#alert_c4p50a_dpto_nac").html("");
		$("#alert_c4p50a_dpto_nac").hide();
	});
	
	$("#c4p50a_dpto_nac").bind("change",function(){
		$("#alert_c4p50a_dpto_nac").html("");
		$("#alert_c4p50a_dpto_nac").hide();
	});
	
	$("#c4p50b_mpio_nac").bind("click",function(){
		$("#alert_c4p50b_mpio_nac").html("");
		$("#alert_c4p50b_mpio_nac").hide();
	});
	
	$("#c4p50b_mpio_nac").bind("change",function(){
		$("#alert_c4p50b_mpio_nac").html("");
		$("#alert_c4p50b_mpio_nac").hide();
	});
	
	$("#c4p50c_pais_nac").bind("click",function(){
		$("#alert_c4p50c_pais_nac").html("");
		$("#alert_c4p50c_pais_nac").hide();
	});
	
	$("#c4p50c_pais_nac").bind("change",function(){
		$("#alert_c4p50c_pais_nac").html("");
		$("#alert_c4p50c_pais_nac").hide();
	});
	
	$("#c4p50c1_ano_llego").bind("click",function(){
		$("#alert_c4p50c1_ano_llego").html("");
		$("#alert_c4p50c1_ano_llego").hide();
	});

	$("#c4p50c1_ano_llego").bind("change",function(){
		$("#alert_c4p50c1_ano_llego").html("");
		$("#alert_c4p50c1_ano_llego").hide();
	});

	//Funcion a todos los radiobuttons de persona3 para que oculten el div que despliega los errores para la mam&aacute; de la persona encuestada
	$("#frmPage3 input[name='c4p51_res_mama']:radio").bind("click",function(){
		if ($(this).is(':checked')){
			$("#alert_c4p51_res_mama").html("");
			$("#alert_c4p51_res_mama").hide();
			if($("#c4p51_res_mama:checked").val()=='2')
			{
				$("#div_c4p51_res_mama_otro_mpio").show();				
				$("#div_c4p51_res_mama_otro_pais").hide();
				$("#c4p51c_pais_mama").prop('selectedIndex', 0);
			}
			else if($("#c4p51_res_mama:checked").val()=='3')
			{
				$("#div_c4p51_res_mama_otro_pais").show();
				$("#div_c4p51_res_mama_otro_mpio").hide();
				$("#c4p51a_dpto_mama").prop('selectedIndex', 0);
				$("#c4p51b_mpio_mama").prop('selectedIndex', 0);
			}
			else
			{
				$("#div_c4p51_res_mama_otro_mpio").hide();
				$("#c4p51a_dpto_mama").prop('selectedIndex', 0);
				$("#c4p51b_mpio_mama").prop('selectedIndex', 0);
				$("#div_c4p51_res_mama_otro_pais").hide();
				$("#c4p51c_pais_mama").prop('selectedIndex', 0);
			}
		}
	});
	
	$("#c4p51a_dpto_mama").bind("click",function(){
		$("#alert_c4p51a_dpto_mama").html("");
		$("#alert_c4p51a_dpto_mama").hide();
	});
	
	$("#c4p51a_dpto_mama").bind("change",function(){
		$("#alert_c4p51a_dpto_mama").html("");
		$("#alert_c4p51a_dpto_mama").hide();
	});
	
	$("#c4p51b_mpio_mama").bind("click",function(){
		$("#alert_c4p51b_mpio_mama").html("");
		$("#alert_c4p51b_mpio_mama").hide();
	});
	
	$("#c4p51b_mpio_mama").bind("change",function(){
		$("#alert_c4p51b_mpio_mama").html("");
		$("#alert_c4p51b_mpio_mama").hide();
	});
	
	$("#c4p51c_pais_mama").bind("click",function(){
		$("#alert_c4p51c_pais_mama").html("");
		$("#alert_c4p51c_pais_mama").hide();
	});
	
	$("#c4p51c_pais_mama").bind("change",function(){
		$("#alert_c4p51c_pais_mama").html("");
		$("#alert_c4p51c_pais_mama").hide();
	});
	
	$("#btnSiguiente3").bind("click",function(){
		if ($("#frmPage3").valid())
		{
			ajaxGuardarPersona(3);
		}
	});
	//***** Fin - Validaciones de la pagina persona3

	
	//***** Inicio - Validaciones de la pagina persona4

	$("#frmPage4").validate({
		rules: {
			c4p52_vivia_5anos: { required: true },
			c4p53_clase_5anos: { required: true },
			c4p52a_dpto_5anos: { required: true },
			c4p52b_mpio_5anos: { required: true },
			c4p52c_pais_5ano: { required: true },
			c4p52c1_ano_llega5: { required: true }
		},
		messages: {
			c4p52_vivia_5anos: { required: "<b>Debe seleccionar una de las opciones.</b>" },
			c4p53_clase_5anos: { required: "<b>Debe seleccionar una de las opciones.</b>" },
			c4p52a_dpto_5anos: { required: "<b>Debe seleccionar un departamento.</b>" },
			c4p52b_mpio_5anos: { required: "<b>Debe seleccionar un municipio.</b>" },
			c4p52c_pais_5ano: { required: "<b>Debe seleccionar un pa\u00eds.</b>" },
			c4p52c1_ano_llega5: { required: "<b>Debe especificar el a\u00f1o de llegada.</b>" }
		},
		errorPlacement: function(error, element) {			
			switch(element.attr("id"))
			{
				case "c4p52_vivia_5anos":  	$("#alert_c4p52_vivia_5anos").show();	
										$("#alert_c4p52_vivia_5anos").html(error);
										break;	
										
				case "c4p53_clase_5anos":	$("#alert_c4p53_clase_5anos").show();	
										$("#alert_c4p53_clase_5anos").html(error);
										break;						
										
				case "c4p52a_dpto_5anos":	$("#alert_c4p52a_dpto_5anos").show();	
										$("#alert_c4p52a_dpto_5anos").html(error);
										break;						
	
				case "c4p52b_mpio_5anos":	$("#alert_c4p52b_mpio_5anos").show();	
										$("#alert_c4p52b_mpio_5anos").html(error);
										break;
										
				case "c4p52c_pais_5ano":	$("#alert_c4p52c_pais_5ano").show();	
										$("#alert_c4p52c_pais_5ano").html(error);
										break;
										
				case "c4p52c1_ano_llega5":	$("#alert_c4p52c1_ano_llega5").show();	
										$("#alert_c4p52c1_ano_llega5").html(error);
										break;
										
			}
		},
		submitHandler: function(form) {			
			if ($("#frmPage4").valid()){
				$("#page5").show();
				$("#page4").hide();
				$("html, body").scrollTop(0);
			}						
		}
	});
	
	//Funcion a todos los radiobuttons de persona4 para que oculten el div que despliega los errores
	$("#frmPage4 input[name='c4p52_vivia_5anos']:radio").bind("click",function(){
		if ($(this).is(':checked')){
			$("#alert_c4p52_vivia_5anos").html("");
			$("#alert_c4p52_vivia_5anos").hide();
			if($("#c4p52_vivia_5anos:checked").val()=='3')
			{
				$("#div_c4p52_vivia_5anos_otro_mpio").show();				
				$("#div_c4p52_vivia_5anos_otro_pais").hide();
				$("#c4p52c_pais_5ano").prop('selectedIndex', 0);
				$("#c4p52c1_ano_llega5").val('');
				$("#div_c4p53_clase_5anos").show();
			}
			else if($("#c4p52_vivia_5anos:checked").val()=='4')
			{
				$("#div_c4p52_vivia_5anos_otro_pais").show();
				$("#div_c4p52_vivia_5anos_otro_mpio").hide();
				$("#c4p52a_dpto_5anos").prop('selectedIndex', 0);
				$("#c4p52b_mpio_5anos").prop('selectedIndex', 0);
				$("#div_c4p53_clase_5anos").hide();
				$("#c4p53_clase_5anos:checked").removeAttr('checked');
			}
			else
			{
				$("#div_c4p52_vivia_5anos_otro_mpio").hide();
				$("#c4p52a_dpto_5anos").prop('selectedIndex', 0);
				$("#c4p52b_mpio_5anos").prop('selectedIndex', 0);
				$("#div_c4p52_vivia_5anos_otro_pais").hide();
				$("#c4p52c_pais_5ano").prop('selectedIndex', 0);
				$("#c4p52c1_ano_llega5").val('');
				$("#div_c4p53_clase_5anos").show();
				if($("#c4p52_vivia_5anos:checked").val()=='1')
				{
					$("#c4p53_clase_5anos:checked").removeAttr('checked');
					ajaxGuardarPersona(4);
				}
			}
		}
	});
	
	$("#c4p52a_dpto_5anos").bind("click",function(){
		$("#alert_c4p52a_dpto_5anos").html("");
		$("#alert_c4p52a_dpto_5anos").hide();
	});
	
	$("#c4p52a_dpto_5anos").bind("change",function(){
		$("#alert_c4p52a_dpto_5anos").html("");
		$("#alert_c4p52a_dpto_5anos").hide();
	});
	
	$("#c4p52b_mpio_5anos").bind("click",function(){
		$("#alert_c4p52b_mpio_5anos").html("");
		$("#alert_c4p52b_mpio_5anos").hide();
	});
	
	$("#c4p52b_mpio_5anos").bind("change",function(){
		$("#alert_c4p52b_mpio_5anos").html("");
		$("#alert_c4p52b_mpio_5anos").hide();
	});
	
	$("#c4p52c_pais_5ano").bind("click",function(){
		$("#alert_c4p52c_pais_5ano").html("");
		$("#alert_c4p52c_pais_5ano").hide();
	});
	
	$("#c4p52c_pais_5ano").bind("change",function(){
		$("#alert_c4p52c_pais_5ano").html("");
		$("#alert_c4p52c_pais_5ano").hide();
	});
	
	$("#c4p52c1_ano_llega5").bind("click",function(){
		$("#alert_c4p52c1_ano_llega5").html("");
		$("#alert_c4p52c1_ano_llega5").hide();
	});

	$("#c4p52c1_ano_llega5").bind("change",function(){
		$("#alert_c4p52c1_ano_llega5").html("");
		$("#alert_c4p52c1_ano_llega5").hide();
	});

	$("#frmPage4 input[name='c4p53_clase_5anos']:radio").bind("click",function(){
		if ($(this).is(':checked')){
			$("#alert_c4p53_clase_5anos").html("");
			$("#alert_c4p53_clase_5anos").hide();
		}
	});
	
	$("#btnSiguiente4").bind("click",function(){
		if ($("#frmPage4").valid())
		{
			ajaxGuardarPersona(4);
		}
	});
	//***** Fin - Validaciones de la pagina persona4


	//***** Inicio - Validaciones de la pagina persona5
	
	$("#frmPage5").validate({
		rules: {
			c4p54_vivia_1ano: { required: true },
			c4p55_clase_1ano: { required: true },
			c4p54a_dpto_1ano: { required: true },
			c4p54b_mpio_1ano: { required: true },
			c4p54c_pais_1ano: { required: true },
			c4p56a_otra_causa: { required: true },
			c4p56_causa_1ano: { required: true }
		},
		messages: {
			c4p54_vivia_1ano: { required: "<b>Debe seleccionar una de las opciones.</b>" },
			c4p55_clase_1ano: { required: "<b>Debe seleccionar una de las opciones.</b>" },
			c4p54a_dpto_1ano: { required: "<b>Debe seleccionar un departamento.</b>" },
			c4p54b_mpio_1ano: { required: "<b>Debe seleccionar un municipio.</b>" },
			c4p54c_pais_1ano: { required: "<b>Debe seleccionar un pa\u00eds.</b>" },
			c4p56a_otra_causa: { required: "<b>Debe especificar la otra causa.</b>" },
			c4p56_causa_1ano: { required: "<b>Debe seleccionar una de las opciones.</b>" }
		},
		errorPlacement: function(error, element) {			
			switch(element.attr("id"))
			{
				case "c4p54_vivia_1ano":  	$("#alert_c4p54_vivia_1ano").show();	
										$("#alert_c4p54_vivia_1ano").html(error);
										break;	
										
				case "c4p55_clase_1ano":	$("#alert_c4p55_clase_1ano").show();	
										$("#alert_c4p55_clase_1ano").html(error);
										break;						
										
				case "c4p54a_dpto_1ano":	$("#alert_c4p54a_dpto_1ano").show();	
										$("#alert_c4p54a_dpto_1ano").html(error);
										break;						
	
				case "c4p54b_mpio_1ano":	$("#alert_c4p54b_mpio_1ano").show();	
										$("#alert_c4p54b_mpio_1ano").html(error);
										break;
										
				case "c4p54c_pais_1ano":	$("#alert_c4p54c_pais_1ano").show();	
										$("#alert_c4p54c_pais_1ano").html(error);
										break;
										
				case "c4p56a_otra_causa":	$("#alert_c4p56a_otra_causa").show();	
										$("#alert_c4p56a_otra_causa").html(error);
										break;
										
				case "c4p56_causa_1ano":	$("#alert_c4p56_causa_1ano").show();	
										$("#alert_c4p56_causa_1ano").html(error);
										break;
				
			}
		},
		submitHandler: function(form) {			
			if ($("#frmPage5").valid()){
				$("#page6").show();
				$("#page5").hide();
				$("html, body").scrollTop(0);
			}						
		}
	});
	
	//Funcion a todos los radiobuttons de persona5 para que oculten el div que despliega los errores
	$("#frmPage5 input[name='c4p54_vivia_1ano']:radio").bind("click",function(){
		if ($(this).is(':checked')){
			$("#alert_c4p54_vivia_1ano").html("");
			$("#alert_c4p54_vivia_1ano").hide();
			if($("#c4p54_vivia_1ano:checked").val()=='2')
			{
				$("#div_c4p54_vivia_1ano_otro_mpio").hide();
				$("#c4p54a_dpto_1ano").prop('selectedIndex', 0);
				$("#c4p54b_mpio_1ano").prop('selectedIndex', 0);
				$("#div_c4p54_vivia_1ano_otro_pais").hide();
				$("#c4p54c_pais_1ano").prop('selectedIndex', 0);
				$("#div_c4p55_clase_1ano").show();
				$("#div_c4p56_causa_1ano").hide();
				$("#c4p56_causa_1ano:checked").removeAttr('checked');
				$("#c4p56a_otra_causa").val('');
			}
			else if($("#c4p54_vivia_1ano:checked").val()=='3')
			{
				$("#div_c4p54_vivia_1ano_otro_mpio").show();				
				$("#div_c4p54_vivia_1ano_otro_pais").hide();
				$("#c4p54c_pais_1ano").prop('selectedIndex', 0);
				$("#div_c4p55_clase_1ano").show();
				$("#div_c4p56_causa_1ano").show();
			}
			else if($("#c4p54_vivia_1ano:checked").val()=='4')
			{
				$("#div_c4p54_vivia_1ano_otro_pais").show();
				$("#div_c4p54_vivia_1ano_otro_mpio").hide();
				$("#c4p54a_dpto_1ano").prop('selectedIndex', 0);
				$("#c4p54b_mpio_1ano").prop('selectedIndex', 0);
				$("#c4p55_clase_1ano:checked").removeAttr('checked');
				$("#c4p56_causa_1ano:checked").removeAttr('checked');
				$("#div_c4p55_clase_1ano").hide();
				$("#div_c4p56_causa_1ano").show();
			}
			else
			{
				$("#div_c4p54_vivia_1ano_otro_mpio").hide();
				$("#c4p54a_dpto_1ano").prop('selectedIndex', 0);
				$("#c4p54b_mpio_1ano").prop('selectedIndex', 0);
				$("#div_c4p54_vivia_1ano_otro_pais").hide();
				$("#c4p54c_pais_1ano").prop('selectedIndex', 0);
				if($("#c4p54_vivia_1ano:checked").val()=='1')
				{
					$("#c4p55_clase_1ano:checked").removeAttr('checked');
					$("#c4p56_causa_1ano:checked").removeAttr('checked');
					ajaxGuardarPersona(5);
				}
			}
		}
	});
	
	$("#c4p54a_dpto_1ano").bind("click",function(){
		$("#alert_c4p54a_dpto_1ano").html("");
		$("#alert_c4p54a_dpto_1ano").hide();
	});
	
	$("#c4p54a_dpto_1ano").bind("change",function(){
		$("#alert_c4p54a_dpto_1ano").html("");
		$("#alert_c4p54a_dpto_1ano").hide();
	});
	
	$("#c4p54b_mpio_1ano").bind("click",function(){
		$("#alert_c4p54b_mpio_1ano").html("");
		$("#alert_c4p54b_mpio_1ano").hide();
	});
	
	$("#c4p54b_mpio_1ano").bind("change",function(){
		$("#alert_c4p54b_mpio_1ano").html("");
		$("#alert_c4p54b_mpio_1ano").hide();
	});
	
	$("#c4p54c_pais_1ano").bind("click",function(){
		$("#alert_c4p54c_pais_1ano").html("");
		$("#alert_c4p54c_pais_1ano").hide();
	});
	
	$("#c4p54c_pais_1ano").bind("change",function(){
		$("#alert_c4p54c_pais_1ano").html("");
		$("#alert_c4p54c_pais_1ano").hide();
	});
	
	$("#frmPage5 input[name='c4p55_clase_1ano']:radio").bind("click",function(){
		if ($(this).is(':checked')){
			$("#alert_c4p55_clase_1ano").html("");
			$("#alert_c4p55_clase_1ano").hide();
		}
	});
	
	$("#c4p56a_otra_causa").bind("click",function(){
		$("#alert_c4p56a_otra_causa").html("");
		$("#alert_c4p56a_otra_causa").hide();
	});

	$("#frmPage5 input[name='c4p56_causa_1ano']:radio").bind("click",function(){
		if ($(this).is(':checked')){
			$("#alert_c4p56_causa_1ano").html("");
			$("#alert_c4p56_causa_1ano").hide();
			if($("#c4p56_causa_1ano:checked").val()=='10')
			{
				$("#div_c4p56a_otra_causa").show();
			}
			else
			{
				$("#alert_c4p56a_otra_causa").html("");
				$("#alert_c4p56a_otra_causa").hide();
				$("#div_c4p56a_otra_causa").hide();
				$("#c4p56a_otra_causa").val('');
			}
		}
	});
	
	$("#btnSiguiente5").bind("click",function(){
		if ($("#frmPage5").valid())
		{
			ajaxGuardarPersona(5);
		}
	});
	//***** Fin - Validaciones de la pagina persona5


	//***** Inicio - Validaciones de la pagina persona6
	 
	$("#frmPage6").validate({
		rules: {
			c4p57_etnia: { required: true },
			c4p57a_cod_etnia: { required: true },
			c4p58a_habla_leng: { required: true },
			c4p58b_otras_leng: { required: true },
			c4p58b1_qotras_leng: { required: true, number: true },
			c4p58c_habla_esp: { required: true }
		},
		messages: {
			c4p57_etnia: { required: "<b>Debe seleccionar una de las opciones.</b>" },
			c4p57a_cod_etnia: { required: "<b>Debe seleccionar el pueblo ind\u00edgena al que pertenece.</b>" },
			c4p58a_habla_leng: { required: "<b>Debe seleccionar una de las opciones.</b>" },
			c4p58b_otras_leng: { required: "<b>Debe seleccionar una de las opciones.</b>" },
			c4p58b1_qotras_leng: { required: "<b>Debe especificar cu\u00e1ntas lenguas.</b>.", number:"<b>Solo n\u00fameros.</b>" },
			c4p58c_habla_esp: { required: "<b>Debe seleccionar una de las opciones.</b>" },
		},
		errorPlacement: function(error, element) {			
			switch(element.attr("id"))
			{
				case "c4p57_etnia":  	$("#alert_c4p57_etnia").show();	
										$("#alert_c4p57_etnia").html(error);
										break;	
										
				case "c4p57a_cod_etnia":	$("#alert_c4p57a_cod_etnia").show();	
										$("#alert_c4p57a_cod_etnia").html(error);
										break;						
										
				case "c4p58a_habla_leng":	$("#alert_c4p58a_habla_leng").show();	
										$("#alert_c4p58a_habla_leng").html(error);
										break;						
	
				case "c4p58b_otras_leng":	$("#alert_c4p58b_otras_leng").show();	
										$("#alert_c4p58b_otras_leng").html(error);
										break;

				case "c4p58b1_qotras_leng":	$("#alert_c4p58b_otras_leng").show();	
										$("#alert_c4p58b_otras_leng").html(error);
										break;

				case "c4p58c_habla_esp":	$("#alert_c4p58c_habla_esp").show();	
										$("#alert_c4p58c_habla_esp").html(error);
										break;
			}
		},
		submitHandler: function(form) {			
			if ($("#frmPage6").valid()){
				$("#hint_c4p60a_regimen_contri").hint("R&eacute;gimen Contributivo:","Es el sistema de salud mediante el cual todas las personas vinculadas a trav&eacute;s de contrato de trabajo, los servidores p&uacute;blicos, los pensionados, los jubilados y los trabajadores independientes con capacidad de pago, hacen un aporte mensual (cotizaci&oacute;n) al sistema de salud pagando directamente a las EPS. En este r&eacute;gimen entran los afiliados y sus beneficiarios.");
				$("#hint_c4p60a_regimen_subsi").hint("R&eacute;gimen Subsidiado:","En este r&eacute;gimen el Estado subsidia la afiliaci&oacute;n a salud a la poblaci&oacute;n sin empleo, sin contrato de trabajo o con bajos ingresos econ&oacute;micos, es decir considerada pobre y vulnerable, quien no tiene capacidad de pago que le permita cotizar al sistema, por lo tanto quienes ingresan a &eacute;l reciben subsidios totales o parciales.");
				$("#hint_c4p63_atendieron").hintOpen("","Esta pregunta hace referencia a la atenci&oacute;n recibida a trav&eacute;s de consulta con el m&eacute;dico tratante.");
				
				ajaxGuardarPersona(6);
			}						
		}
	});
	
	//Oculta los div que despliegan los errores relacionados con la etnia
	$("#frmPage6 input[name='c4p57_etnia']:radio").bind("click",function(){
		if ($(this).is(':checked')){
			$("#alert_c4p57_etnia").hide();
			$("#alert_c4p57a_cod_etnia").hide();
			if($('#c4p57_etnia:checked').val()==1)
			{
				$("#div_c4p58a_habla_leng").show();
				$("#div_c4p57a_cod_etnia").show();
				$("#c4p57a_cod_etnia").focus();
			}
			else
			{
				$("#div_c4p57a_cod_etnia").hide();
				$("#c4p57a_cod_etnia").prop('selectedIndex', 0);
				if($('#c4p57_etnia:checked').val()>4)
				{
					$("#c4p58a_habla_leng:checked").removeAttr('checked');
					$("#c4p58b_otras_leng:checked").removeAttr('checked');
					$("#c4p58b1_qotras_leng").prop('selectedIndex', 0);
					$("#c4p58c_habla_esp:checked").removeAttr('checked');
					$("#div_c4p58b1_qotras_leng").hide();
					$("#div_c4p58a_habla_leng").hide();
					//ajaxGuardarPersona(6);
				}
				else
					$("#div_c4p58a_habla_leng").show();
			}
		}
	});

	$("#c4p57a_cod_etnia").bind("click",function(){
		$("#alert_c4p57a_cod_etnia").html("");
		$("#alert_c4p57a_cod_etnia").hide();
	});

	$("#c4p57a_cod_etnia").bind("change",function(){
		$("#alert_c4p57a_cod_etnia").html("");
		$("#alert_c4p57a_cod_etnia").hide();
	});

	//Oculta los div que despliegan los errores relacionados con la lengua nativa
	$("#frmPage6 input[name='c4p58a_habla_leng']:radio").bind("click",function(){
		if ($(this).is(':checked')){
			$("#alert_c4p58a_habla_leng").html("");
			$("#alert_c4p58a_habla_leng").hide();
		}
	});
	
	//Oculta/Muestra el div que despliega cantidad de otras lenguas y los errores relacionados con otras lenguas
	$("#frmPage6 input[name='c4p58b_otras_leng']:radio").bind("click",function(){
		if ($(this).is(':checked')){
			$("#alert_c4p58b_otras_leng").html("");
			$("#alert_c4p58b_otras_leng").hide();
			if($('#c4p58b_otras_leng:checked').val()==1)
			{
				$("#div_c4p58b1_qotras_leng").show();
				$("#c4p58b1_qotras_leng").focus();
			}
			else
			{
				$("#div_c4p58b1_qotras_leng").hide();
				$("#c4p58b1_qotras_leng").val('');
			}
		}
	});
	
	//Oculta el div que despliega los errores relacionados con la cantidad de otras lenguas
	$("#c4p58b1_qotras_leng").bind("click",function(){
		$("#alert_c4p58b_otras_leng").html("");
		$("#alert_c4p58b_otras_leng").hide();
	});

	$("#c4p58b1_qotras_leng").bind("change",function(){
		$("#alert_c4p58b_otras_leng").html("");
		$("#alert_c4p58b_otras_leng").hide();
	});

	$("#c4p58b1_qotras_leng").keypress(function(event){
		$("#alert_c4p58b_otras_leng").html("");
		$("#alert_c4p58b_otras_leng").hide();
		return soloNumeros(event);
	});

	//Oculta el div que despliega los errores relacionados con Habla?: español
	$("#frmPage6 input[name='c4p58c_habla_esp']:radio").bind("click",function(){
		if ($(this).is(':checked')){
			$("#alert_c4p58c_habla_esp").html("");
			$("#alert_c4p58c_habla_esp").hide();
		}
	});
	
	$("#btnSiguiente6").bind("click",function(){
		if ($("#frmPage6").valid())
		{
			$("#hint_c4p60a_regimen_contri").hint("R&eacute;gimen Contributivo:","Es el sistema de salud mediante el cual todas las personas vinculadas a trav&eacute;s de contrato de trabajo, los servidores p&uacute;blicos, los pensionados, los jubilados y los trabajadores independientes con capacidad de pago, hacen un aporte mensual (cotizaci&oacute;n) al sistema de salud pagando directamente a las EPS. En este r&eacute;gimen entran los afiliados y sus beneficiarios.");
			$("#hint_c4p60a_regimen_subsi").hint("R&eacute;gimen Subsidiado:","En este r&eacute;gimen el Estado subsidia la afiliaci&oacute;n a salud a la poblaci&oacute;n sin empleo, sin contrato de trabajo o con bajos ingresos econ&oacute;micos, es decir considerada pobre y vulnerable, quien no tiene capacidad de pago que le permita cotizar al sistema, por lo tanto quienes ingresan a &eacute;l reciben subsidios totales o parciales.");
			$("#hint_c4p63_atendieron").hintOpen("","Esta pregunta hace referencia a la atenci&oacute;n recibida a trav&eacute;s de consulta con el m&eacute;dico tratante.");
			
			ajaxGuardarPersona(6);
		}
	});

	//***** Fin - Validaciones de la pagina persona6
	
	
	//***** Inicio - Validaciones de la pagina persona7
	
	$("#frmPage7").validate({
		rules: {
			c4p59_creencia: { required: true }
		},
		messages: {
			c4p59_creencia: { required: "<b>Debe seleccionar una de las opciones</b>" }
		},
		errorPlacement: function(error, element) {			
			$("#alert_c4p59_creencia").show();	
			$("#alert_c4p59_creencia").html(error);			
		},
		submitHandler: function(form) {			
			if ($("#frmPage7").valid()){
				$("#page8").show();
				$("#page7").hide();
				$("html, body").scrollTop(0);
			}						
		}
	});

	//Funcion a todos los radiobuttons de persona2 para que oculten el div que despliega los errores
	$("#frmPage7 input[name='c4p59_creencia']:radio").bind("click",function(){
		if ($(this).is(':checked')){
			$("#alert_c4p59_creencia").hide();
		}
	});
	
	$("#btnSiguiente7").bind("click",function(){
		if ($("#frmPage7").valid())
		{
			$("#hint_c4p60a_regimen_contri").hint("R&eacute;gimen Contributivo:","Es el sistema de salud mediante el cual todas las personas vinculadas a trav&eacute;s de contrato de trabajo, los servidores p&uacute;blicos, los pensionados, los jubilados y los trabajadores independientes con capacidad de pago, hacen un aporte mensual (cotizaci&oacute;n) al sistema de salud pagando directamente a las EPS. En este r&eacute;gimen entran los afiliados y sus beneficiarios.");
			$("#hint_c4p60a_regimen_subsi").hint("R&eacute;gimen Subsidiado:","En este r&eacute;gimen el Estado subsidia la afiliaci&oacute;n a salud a la poblaci&oacute;n sin empleo, sin contrato de trabajo o con bajos ingresos econ&oacute;micos, es decir considerada pobre y vulnerable, quien no tiene capacidad de pago que le permita cotizar al sistema, por lo tanto quienes ingresan a &eacute;l reciben subsidios totales o parciales.");
			$("#hint_c4p63_atendieron").hintOpen("","Esta pregunta hace referencia a la atenci&oacute;n recibida a trav&eacute;s de consulta con el m&eacute;dico tratante.");
			
			ajaxGuardarPersona(7);
		}
	});
		
	//***** Fin - Validaciones de la pagina persona7
	
	
	//***** Inicio - Validaciones de la pagina persona8
	
	$("#frmPage8").validate({
		rules: {
			c4p60_afi_salud: { required: true },
			c4p60a_regimen: { required: true },
			c4p61_enfermo: { required: true },
			c4p62a_hospital: { required: true },
			c4p62b_med_trad: { required: true},
			c4p63_atendieron: { required: true }
		},
		messages: {
			c4p60_afi_salud: { required: "<b>Debe seleccionar una de las opciones.</b>" },
			c4p60a_regimen: { required: "<b>Debe especificar el r\u00e9gimen.</b>" },
			c4p61_enfermo: { required: "<b>Debe seleccionar una de las opciones.</b>" },
			c4p62a_hospital: { required: "<b>Debe seleccionar una de las opciones.</b>" },
			c4p62b_med_trad: { required: "<b>Debe seleccionar una de las opciones.</b>."},
			c4p63_atendieron: { required: "<b>Debe seleccionar una de las opciones.</b>" }
		},
		errorPlacement: function(error, element) {			
			switch(element.attr("id"))
			{
				case "c4p60_afi_salud":  	$("#alert_c4p60_afi_salud").show();	
										$("#alert_c4p60_afi_salud").html(error);
										break;	
										
				case "c4p60a_regimen":	$("#alert_c4p60a_regimen").show();	
										$("#alert_c4p60a_regimen").html(error);
										break;						
										
				case "c4p61_enfermo":	$("#alert_c4p61_enfermo").show();	
										$("#alert_c4p61_enfermo").html(error);
										break;						
	
				case "c4p62a_hospital":	$("#alert_c4p62a_hospital").show();	
										$("#alert_c4p62a_hospital").html(error);
										break;

				case "c4p62b_med_trad":	$("#alert_c4p62b_med_trad").show();	
										$("#alert_c4p62b_med_trad").html(error);
										break;

				case "c4p63_atendieron":	$("#alert_c4p63_atendieron").show();	
										$("#alert_c4p63_atendieron").html(error);
										break;
			}
		},
		submitHandler: function(form) {			
			if ($("#frmPage8").valid()){
				$("#page9").show();
				$("#page8").hide();
				$("html, body").scrollTop(0);
			}						
		}
	});
	
	//Oculta los div que despliegan los errores relacionados con la afiliaci&oacute;n a salud
	$("#frmPage8 input[name='c4p60_afi_salud']:radio").bind("click",function(){
		if ($(this).is(':checked')){
			$("#alert_c4p60_afi_salud").hide();
			$("#alert_c4p60a_regimen").hide();
			if($('#c4p60_afi_salud:checked').val()==1)
			{
				$("#div_c4p60a_regimen").show();
				$("#c4p60a_regimen").focus();
			}
			else
			{
				$("#c4p60a_regimen:checked").removeAttr('checked');
				$("#div_c4p60a_regimen").hide();
				$("#c4p60a_regimen").val('');
			}
		}
	});

	//Oculta los div que despliegan los errores relacionados con el r&eacute;gimen
	$("#frmPage8 input[name='c4p60a_regimen']:radio").bind("click",function(){
		if ($(this).is(':checked')){
			$("#alert_c4p60a_regimen").html("");
			$("#alert_c4p60a_regimen").hide();
		}
	});

	//Oculta los div que despliegan los errores relacionados con enfermedad &uacute;ltimos 30 d&iacutes
	$("#frmPage8 input[name='c4p61_enfermo']:radio").bind("click",function(){
		if ($(this).is(':checked')){
			$("#alert_c4p61_enfermo").html("");
			$("#alert_c4p61_enfermo").hide();
			if($('#c4p61_enfermo:checked').val()==2)
			{
				$("#c4p62a_hospital:checked").removeAttr('checked');
				$("#c4p62b_med_trad:checked").removeAttr('checked');
				$("#c4p63_atendieron:checked").removeAttr('checked');
				$("#div_c4p62a_hospital").hide();
				$("#div_c4p63_atendieron").hide();
				
				//$("#hint_page9").hint("","<b>T&eacute;cnica o tecnol&oacute;gicas:</b> gafas, lentes, lupas, aud&iacute;fonos, implantes cocleares, bastones, sillas de ruedas, protesis, muletas, entre otras.<br /><b>De personas:</b> familiares, amigos, enfermeras, interpretes entre otras.<br /><b>Medicamentos:</b> sustancias naturales o fabricadas por el hombre, bien sea convencionales, homeop&aacute;ticas o tradicionales de grupos &eacute;tnicos.");
				
				//ajaxGuardarPersona(8);
			}
			else
			{
				$("#div_c4p62a_hospital").show();
				$("#div_c4p63_atendieron").show();
			}
		}
	});
	
	//Oculta el div que despliega los errores relacionados con servicio de salud
	$("#frmPage8 input[name='c4p62a_hospital']:radio").bind("click",function(){
		if ($(this).is(':checked')){
			$("#alert_c4p62a_hospital").html("");
			$("#alert_c4p62a_hospital").hide();
			if($("#c4p62a_hospital:checked").val() && $("#c4p62b_med_trad:checked").val())
			{
				if((parseInt($("#c4p62a_hospital:checked").val()) + parseInt($("#c4p62b_med_trad:checked").val())) == 4)
				{
					$("#c4p63_atendieron:checked").removeAttr('checked');
					//$("#hint_page9").hint("","<b>T&eacute;cnica o tecnol&oacute;gicas:</b> gafas, lentes, lupas, aud&iacute;fonos, implantes cocleares, bastones, sillas de ruedas, protesis, muletas, entre otras.<br /><b>De personas:</b> familiares, amigos, enfermeras, interpretes entre otras.<br /><b>Medicamentos:</b> sustancias naturales o fabricadas por el hombre, bien sea convencionales, homeop&aacute;ticas o tradicionales de grupos &eacute;tnicos.");
					$("#div_c4p63_atendieron").hide();

					//ajaxGuardarPersona(8);
				}
				else
					$("#div_c4p63_atendieron").show();
			}
		}
	});
	
	//Oculta el div que despliega los errores relacionados con m&eacute;dico tradicional
	$("#frmPage8 input[name='c4p62b_med_trad']:radio").bind("click",function(){
		if ($(this).is(':checked')){
			$("#alert_c4p62b_med_trad").html("");
			$("#alert_c4p62b_med_trad").hide();
			if($("#c4p62a_hospital:checked").val() && $("#c4p62b_med_trad:checked").val())
			{
				if((parseInt($("#c4p62a_hospital:checked").val()) + parseInt($("#c4p62b_med_trad:checked").val())) == 4)
				{
					$("#c4p63_atendieron:checked").removeAttr('checked');
					//$("#hint_page9").hint("","<b>T&eacute;cnica o tecnol&oacute;gicas:</b> gafas, lentes, lupas, aud&iacute;fonos, implantes cocleares, bastones, sillas de ruedas, protesis, muletas, entre otras.<br /><b>De personas:</b> familiares, amigos, enfermeras, interpretes entre otras.<br /><b>Medicamentos:</b> sustancias naturales o fabricadas por el hombre, bien sea convencionales, homeop&aacute;ticas o tradicionales de grupos &eacute;tnicos.");
					$("#div_c4p63_atendieron").hide();

					//ajaxGuardarPersona(8);
				}
				else
					$("#div_c4p63_atendieron").show();
			}
		}
	});

	//Oculta el div que despliega los errores relacionados con lo atendieron?
	$("#frmPage8 input[name='c4p63_atendieron']:radio").bind("click",function(){
		if ($(this).is(':checked')){
			$("#alert_c4p63_atendieron").html("");
			$("#alert_c4p63_atendieron").hide();
		}
	});
	
	$("#btnSiguiente8").bind("click",function(){
		if ($("#frmPage8").valid() )
		{
			$("#hint_page9").hint("","<b>T&eacute;cnica o tecnol&oacute;gicas:</b> gafas, lentes, lupas, aud&iacute;fonos, implantes cocleares, bastones, sillas de ruedas, protesis, muletas, entre otras.<br /><b>De personas:</b> familiares, amigos, enfermeras, interpretes entre otras.<br /><b>Medicamentos:</b> sustancias naturales o fabricadas por el hombre, bien sea convencionales, homeop&aacute;ticas o tradicionales de grupos &eacute;tnicos.");
			
			ajaxGuardarPersona(8);
		}
	});
	
	//***** Fin - Validaciones de la pagina persona8
	
	
	//***** Inicio - Validaciones de la pagina persona9
	
	$("#frmPage9").validate({
		rules: {
			c4p64a_oir: { required: true },
			c4p64b_hablar: { required: true },
			c4p64c_ver: { required: true },
			c4p64d_caminar: { required: true },
			c4p64e_coger: { required: true },
			c4p64f_decidir: { required: true },
			c4p64g_comer: { required: true },
			c4p64h_relacion: { required: true },
			c4p64i_tareas: { required: true }
		},
		messages: {
			c4p64a_oir: { required: "<b>Debe seleccionar una de las opciones.</b>" },
			c4p64b_hablar: { required: "<b>Debe seleccionar una de las opciones.</b>" },
			c4p64c_ver: { required: "<b>Debe seleccionar una de las opciones.</b>" },
			c4p64d_caminar: { required: "<b>Debe seleccionar una de las opciones.</b>" },
			c4p64e_coger: { required: "<b>Debe seleccionar una de las opciones.</b>" },
			c4p64f_decidir: { required: "<b>Debe seleccionar una de las opciones.</b>" },
			c4p64g_comer: { required: "<b>Debe seleccionar una de las opciones.</b>" },
			c4p64h_relacion: { required: "<b>Debe seleccionar una de las opciones.</b>" },
			c4p64i_tareas: { required: "<b>Debe seleccionar una de las opciones.</b>" }
		},
		errorPlacement: function(error, element) {			
			switch(element.attr("id"))
			{
				case "c4p64a_oir":  	$("#alert_c4p64a_oir").show();	
										$("#alert_c4p64a_oir").html(error);
										break;	
										
				case "c4p64b_hablar":	$("#alert_c4p64b_hablar").show();	
										$("#alert_c4p64b_hablar").html(error);
										break;						
										
				case "c4p64c_ver":	$("#alert_c4p64c_ver").show();	
										$("#alert_c4p64c_ver").html(error);
										break;						
	
				case "c4p64d_caminar":	$("#alert_c4p64d_caminar").show();	
										$("#alert_c4p64d_caminar").html(error);
										break;
										
				case "c4p64e_coger":	$("#alert_c4p64e_coger").show();	
										$("#alert_c4p64e_coger").html(error);
										break;
										
				case "c4p64f_decidir":	$("#alert_c4p64f_decidir").show();	
										$("#alert_c4p64f_decidir").html(error);
										break;
										
				case "c4p64g_comer":	$("#alert_c4p64g_comer").show();	
										$("#alert_c4p64g_comer").html(error);
										break;
										
				case "c4p64h_relacion":	$("#alert_c4p64h_relacion").show();	
										$("#alert_c4p64h_relacion").html(error);
										break;
										
				case "c4p64i_tareas":	$("#alert_c4p64i_tareas").show();	
										$("#alert_c4p64i_tareas").html(error);
										break;
			}
		},
		submitHandler: function(form) {			
			if ($("#frmPage9").valid()){
				$("#page10").show();
				$("#page9").hide();
				$("html, body").scrollTop(0);
			}						
		}
	});
	
	//Funcion a todos los radiobuttons de persona9 para que oculten el div que despliega los errores
	$("#frmPage9 input[name='c4p64a_oir']:radio").bind("click",function(){
		if ($(this).is(':checked')){
			$("#alert_c4p64a_oir").html("");
			$("#alert_c4p64a_oir").hide();
		}
	});
	
	$("#frmPage9 input[name='c4p64b_hablar']:radio").bind("click",function(){
		if ($(this).is(':checked')){
			$("#alert_c4p64b_hablar").html("");
			$("#alert_c4p64b_hablar").hide();
		}
	});
	
	$("#frmPage9 input[name='c4p64c_ver']:radio").bind("click",function(){
		if ($(this).is(':checked')){
			$("#alert_c4p64c_ver").html("");
			$("#alert_c4p64c_ver").hide();
		}
	});
	
	$("#frmPage9 input[name='c4p64d_caminar']:radio").bind("click",function(){
		if ($(this).is(':checked')){
			$("#alert_c4p64d_caminar").html("");
			$("#alert_c4p64d_caminar").hide();
		}
	});
	
	$("#frmPage9 input[name='c4p64e_coger']:radio").bind("click",function(){
		if ($(this).is(':checked')){
			$("#alert_c4p64e_coger").html("");
			$("#alert_c4p64e_coger").hide();
		}
	});
	
	$("#frmPage9 input[name='c4p64f_decidir']:radio").bind("click",function(){
		if ($(this).is(':checked')){
			$("#alert_c4p64f_decidir").html("");
			$("#alert_c4p64f_decidir").hide();
		}
	});
	
	$("#frmPage9 input[name='c4p64g_comer']:radio").bind("click",function(){
		if ($(this).is(':checked')){
			$("#alert_c4p64g_comer").html("");
			$("#alert_c4p64g_comer").hide();
		}
	});
	
	$("#frmPage9 input[name='c4p64h_relacion']:radio").bind("click",function(){
		if ($(this).is(':checked')){
			$("#alert_c4p64h_relacion").html("");
			$("#alert_c4p64h_relacion").hide();
		}
	});
	
	$("#frmPage9 input[name='c4p64i_tareas']:radio").bind("click",function(){
		if ($(this).is(':checked')){
			$("#alert_c4p64i_tareas").html("");
			$("#alert_c4p64i_tareas").hide();
		}
	});
	
	$("#btnSiguiente9").bind("click",function(){
		if ($("#frmPage9").valid())
		{
			ajaxGuardarPersona(9);
		}
	});
	
	//***** Fin - Validaciones de la pagina persona9
	

	//***** Inicio - Validaciones de la pagina persona10
	
	$("#frmPage10").validate({
		rules: {
			c4p65_lim_ppal: { required: true },
			c4p66a_otracausa: { required: true },
			c4p66_causa: { required: true },
			c4p67a_ayuda_tec: { required: true },
			c4p67b_ayuda_pers: { required: true },
			c4p67c_ayuda_med: { required: true },
			c4p67d_ayuda_ances: { required: true },
			c4p67e_ayuda_anim: { required: true },
			c4p67f_ayuda_otro: { required: true }
		},
		messages: {
			c4p65_lim_ppal: { required: "<b>Debe seleccionar una de las opciones.</b>" },
			c4p66a_otracausa: { required: "<b>Debe especificar la otra causa.</b>" },
			c4p66_causa: { required: "<b>Debe seleccionar una de las opciones.</b>" },
			c4p67a_ayuda_tec: { required: "<b>Debe seleccionar una de las opciones.</b>" },
			c4p67b_ayuda_pers: { required: "<b>Debe seleccionar una de las opciones.</b>" },
			c4p67c_ayuda_med: { required: "<b>Debe seleccionar una de las opciones.</b>" },
			c4p67d_ayuda_ances: { required: "<b>Debe seleccionar una de las opciones.</b>" },
			c4p67e_ayuda_anim: { required: "<b>Debe seleccionar una de las opciones.</b>" },
			c4p67f_ayuda_otro: { required: "<b>Debe seleccionar una de las opciones.</b>" }
		},
		errorPlacement: function(error, element) {			
			switch(element.attr("id"))
			{
				case "c4p65_lim_ppal":  	$("#alert_c4p65_lim_ppal").show();	
										$("#alert_c4p65_lim_ppal").html(error);
										break;	
										
				case "c4p66a_otracausa":	$("#alert_c4p66a_otracausa").show();	
										$("#alert_c4p66a_otracausa").html(error);
										break;						
										
				case "c4p66_causa":	$("#alert_c4p66_causa").show();	
										$("#alert_c4p66_causa").html(error);
										break;						
	
				case "c4p67a_ayuda_tec":	$("#alert_c4p67a_ayuda_tec").show();	
										$("#alert_c4p67a_ayuda_tec").html(error);
										break;
										
				case "c4p67b_ayuda_pers":	$("#alert_c4p67b_ayuda_pers").show();	
										$("#alert_c4p67b_ayuda_pers").html(error);
										break;
										
				case "c4p67c_ayuda_med":	$("#alert_c4p67c_ayuda_med").show();	
										$("#alert_c4p67c_ayuda_med").html(error);
										break;
										
				case "c4p67d_ayuda_ances":	$("#alert_c4p67d_ayuda_ances").show();	
										$("#alert_c4p67d_ayuda_ances").html(error);
										break;
										
				case "c4p67e_ayuda_anim":	$("#alert_c4p67e_ayuda_anim").show();	
										$("#alert_c4p67e_ayuda_anim").html(error);
										break;
										
				case "c4p67f_ayuda_otro":	$("#alert_c4p67f_ayuda_otro").show();	
										$("#alert_c4p67f_ayuda_otro").html(error);
										break;
			}
		},
		submitHandler: function(form) {			
			if ($("#frmPage10").valid()){
				$("#page11").show();
				$("#page10").hide();
				$("html, body").scrollTop(0);
			}						
		}
	});
	
	//Funcion a todos los radiobuttons y select de persona10 para que oculten el div que despliega los errores
	$("#c4p65_lim_ppal").bind("click",function(){
		$("#alert_c4p65_lim_ppal").html("");
		$("#alert_c4p65_lim_ppal").hide();
	});
	
	$("#c4p65_lim_ppal").bind("change",function(){
		$.ajax({
			type: "GET",
			url: base_url + "persona/persona/actualizarLPpalActual",
			
			data: "lPpalSel="+$("#c4p65_lim_ppal").val(),		
			dataType: "html",
			contentType: "application/x-www-form-urlencoded;charset=UTF-8",
			cache: false,
			success: function(data){
				$("#div_LPpal").html(data);
				$("#div_LPpal1").html(data);
			},
			error: function(data)
			{
				if (data!="")
				{
					alert("ERROR: " + data.status + "\n" + data.statusText + "\n" + data.responseText.trim());						
				}
			}				
		});
	});

	$("#c4p66a_otracausa").bind("click",function(){
		$("#alert_c4p66a_otracausa").html("");
		$("#alert_c4p66a_otracausa").hide();
	});
	
	$("#frmPage10 input[name='c4p66_causa']:radio").bind("click",function(){
		if ($(this).is(':checked')){
			$("#alert_c4p66_causa").html("");
			$("#alert_c4p66_causa").hide();
			if($('#c4p66_causa:checked').val()==7)
			{
				$("#div_c4p66a_otracausa").show();
				$("#c4p66a_otracausa").focus();
			}
			else
			{
				$("#c4p66a_otracausa").val('');
				$("#div_c4p66a_otracausa").hide();
			}
		}
	});
	
	$("#frmPage10 input[name='c4p67a_ayuda_tec']:radio").bind("click",function(){
		if ($(this).is(':checked')){
			$("#alert_c4p67a_ayuda_tec").html("");
			$("#alert_c4p67a_ayuda_tec").hide();
		}
	});
	
	$("#frmPage10 input[name='c4p67b_ayuda_pers']:radio").bind("click",function(){
		if ($(this).is(':checked')){
			$("#alert_c4p67b_ayuda_pers").html("");
			$("#alert_c4p67b_ayuda_pers").hide();
		}
	});
	
	$("#frmPage10 input[name='c4p67c_ayuda_med']:radio").bind("click",function(){
		if ($(this).is(':checked')){
			$("#alert_c4p67c_ayuda_med").html("");
			$("#alert_c4p67c_ayuda_med").hide();
		}
	});
	
	$("#frmPage10 input[name='c4p67d_ayuda_ances']:radio").bind("click",function(){
		if ($(this).is(':checked')){
			$("#alert_c4p67d_ayuda_ances").html("");
			$("#alert_c4p67d_ayuda_ances").hide();
		}
	});
	
	$("#frmPage10 input[name='c4p67e_ayuda_anim']:radio").bind("click",function(){
		if ($(this).is(':checked')){
			$("#alert_c4p67e_ayuda_anim").html("");
			$("#alert_c4p67e_ayuda_anim").hide();
		}
	});
	
	$("#frmPage10 input[name='c4p67f_ayuda_otro']:radio").bind("click",function(){
		if ($(this).is(':checked')){
			$("#alert_c4p67f_ayuda_otro").html("");
			$("#alert_c4p67f_ayuda_otro").hide();
		}
	});

	$("#btnSiguiente10").bind("click",function(){
		if ($("#frmPage10").valid())
		{
			ajaxGuardarPersona(10);
		}
	});
	
	//***** Fin - Validaciones de la pagina persona10
	

	//***** Inicio - Validaciones de la pagina persona11
	
	$("#frmPage11").validate({
		rules: {
			c4p68_cuida: { required: true },
			c4p69_estab_asis: { required: true },
			c4p70_edu_integ: { required: true }
		},
		messages: {
			c4p68_cuida: { required: "<b>Debe seleccionar una de las opciones.</b>" },
			c4p69_estab_asis: { required: "<b>Debe seleccionar una de las opciones.</b>" },
			c4p70_edu_integ: { required: "<b>Debe seleccionar una de las opciones.</b>" }
		},
		errorPlacement: function(error, element) {			
			switch(element.attr("id"))
			{
				case "c4p68_cuida":  	$("#alert_c4p68_cuida").show();	
										$("#alert_c4p68_cuida").html(error);
										break;	
										
				case "c4p69_estab_asis":	$("#alert_c4p69_estab_asis").show();	
											$("#alert_c4p69_estab_asis").html(error);
											break;						
										
				case "c4p70_edu_integ":	$("#alert_c4p70_edu_integ").show();	
										$("#alert_c4p70_edu_integ").html(error);
										break;						
			}
		},
		submitHandler: function(form) {			
			if ($("#frmPage11").valid()){
				$("#page12").show();
				$("#page11").hide();
				$("html, body").scrollTop(0);
			}						
		}
	});
	
	//Funcion a todos los radiobuttons de persona11 para que oculten el div que despliega los errores
	$("#frmPage11 input[name='c4p68_cuida']:radio").bind("click",function(){
		if ($(this).is(':checked')){
			$("#alert_c4p68_cuida").html("");
			$("#alert_c4p68_cuida").hide();
			if($('#c4p68_cuida:checked').val()>1 && $('#c4p68_cuida:checked').val()<7 )
			{
				$("#alert_c4p69_estab_asis").html("");
				$("#alert_c4p69_estab_asis").hide();
				$("#c4p69_estab_asis:checked").removeAttr('checked');
				$("#div_c4p69_estab_asis").hide();
				
				$("#div_c4p70_edu_integ").show();
			}
			else if($('#c4p68_cuida:checked').val()==7)
			{
				$("#c4p69_estab_asis:checked").removeAttr('checked');
				$("#c4p70_edu_integ:checked").removeAttr('checked');
				
				$("#div_c4p69_estab_asis").hide();
				$("#div_c4p70_edu_integ").hide();
				
				/*$("#alert_c4p69_estab_asis").html("");
				$("#alert_c4p69_estab_asis").hide();				
				$("#alert_c4p70_edu_integ").html("");
				$("#alert_c4p70_edu_integ").hide();*/
				
				//hch ajaxGuardarPersona(11);
			}
			else if($('#c4p68_cuida:checked').val()==1)
			{
				$("#div_c4p69_estab_asis").show();
				
				$("#c4p70_edu_integ:checked").removeAttr('checked');
				$("#div_c4p70_edu_integ").hide();
			}
		}
	});
	
	$("#frmPage11 input[name='c4p69_estab_asis']:radio").bind("click",function(){
		if ($(this).is(':checked')){
			$("#alert_c4p69_estab_asis").html("");
			$("#alert_c4p69_estab_asis").hide();
			$("#c4p70_edu_integ:checked").removeAttr('checked');
			
			//hch ajaxGuardarPersona(11);
		}
	});
	
	$("#frmPage11 input[name='c4p70_edu_integ']:radio").bind("click",function(){
		if ($(this).is(':checked')){
			$("#alert_c4p70_edu_integ").html("");
			$("#alert_c4p70_edu_integ").hide();
			
			//hch ajaxGuardarPersona(11);
		}
	});
	
	$("#btnSiguiente11").bind("click",function(){
		if ($("#frmPage11").valid())
		{
			ajaxGuardarPersona(11);
		}
	});

	//***** Fin - Validaciones de la pagina persona11
	
	
	//***** Inicio - Validaciones de la pagina persona111
	
	$("#frmPage111").validate({
		rules: {
			c4p71_alfabeta: { required: true }
		},
		messages: {
			c4p71_alfabeta: { required: "<b>Debe seleccionar una de las opciones</b>" }
		},
		errorPlacement: function(error, element) {			
			$("#alert_c4p71_alfabeta").show();	
			$("#alert_c4p71_alfabeta").html(error);			
		},
		submitHandler: function(form) {			
			if ($("#frmPage111").valid()){
				$("#page12").show();
				$("#page111").hide();
				$("html, body").scrollTop(0);
			}						
		}
	});

	//Funcion a todos los radiobuttons de persona111 para que oculten el div que despliega los errores
	$("#frmPage111 input[name='c4p71_alfabeta']:radio").bind("click",function(){
		if ($(this).is(':checked')){
			$("#alert_c4p71_alfabeta").html("");
			$("#alert_c4p71_alfabeta").hide();
		}
	});
	
	$("#btnSiguiente111").bind("click",function(){
		if ($("#frmPage111").valid())
		{
			ajaxGuardarPersona(111);
		}
	});
	
	//***** Fin - Validaciones de la pagina persona111

	
	//***** Inicio - Validaciones de la pagina persona12
	
	$("#frmPage12").validate({
		rules: {
			c4p72_asistencia: { required: true },
			c4p72a_ubic_inst: { required: true },
			c4p72a1_dpto_inst: { required: true },
			c4p72a2_mpio_inst: { required: true },
			c4p72a3_pais_inst: { required: true },
			c4p72b_dejo_est: { required: true },
			cap72c7_otra: { required: true }
		},
		messages: {
			c4p72_asistencia: { required: "<b>Debe seleccionar una de las opciones.</b>" },
			c4p72a_ubic_inst: { required: "<b>Debe seleccionar una de las opciones.</b>" },
			c4p72a1_dpto_inst: { required: "<b>Debe seleccionar un departamento.</b>" },
			c4p72a2_mpio_inst: { required: "<b>Debe seleccionar un municipio.</b>" },
			c4p72a3_pais_inst: { required: "<b>Debe seleccionar un pa\u00eds.</b>" },
			c4p72b_dejo_est: { required: "<b>Debe seleccionar una de las opciones.</b>" },
			cap72c7_otra: { required: "<b>Debe especificar la otra causa.</b>" }
		},
		errorPlacement: function(error, element) {			
			switch(element.attr("id"))
			{
				case "c4p72_asistencia":  	$("#alert_c4p72_asistencia").show();	
										$("#alert_c4p72_asistencia").html(error);
										break;	
										
				case "c4p72a_ubic_inst":	$("#alert_c4p72a_ubic_inst").show();	
										$("#alert_c4p72a_ubic_inst").html(error);
										break;						
				
				case "c4p72a1_dpto_inst":	$("#alert_c4p72a1_dpto_inst").show();	
										$("#alert_c4p72a1_dpto_inst").html(error);
										break;						
				
				case "c4p72a2_mpio_inst":	$("#alert_c4p72a2_mpio_inst").show();	
										$("#alert_c4p72a2_mpio_inst").html(error);
										break;
				
				case "c4p72a3_pais_inst":	$("#alert_c4p72a3_pais_inst").show();	
										$("#alert_c4p72a3_pais_inst").html(error);
										break;
				
				case "c4p72b_dejo_est":	$("#alert_c4p72b_dejo_est").show();	
										$("#alert_c4p72b_dejo_est").html(error);
										break;						
	
				case "cap72c7_otra":	$("#alert_cap72c7_otra").show();	
										$("#alert_cap72c7_otra").html(error);
										break;
										
			}
		},
		submitHandler: function(form) {			
			if ($("#frmPage12").valid()){
				$("#page13").show();
				$("#page12").hide();
				$("html, body").scrollTop(0);
			}						
		}
	});
	
	//Funcion a todos los radiobuttons de persona12 para que oculten el div que despliega los errores
	$("#frmPage12 input[name='c4p72_asistencia']:radio").bind("click",function(){
		if ($(this).is(':checked')){
			$("#alert_c4p72_asistencia").html("");
			$("#alert_c4p72_asistencia").hide();
			$("#alert_cap72c7_otra").html("");
			$("#alert_cap72c7_otra").hide();
			if($("#c4p72_asistencia:checked").val()=='1')
			{
				$("#div_c4p72a_ubic_inst").show();				
				$("#div_c4p72b_dejo_est").hide();
				$("#c4p72b_dejo_est:checked").removeAttr('checked');
				$("#cap72_causa:checked").removeAttr('checked');
				$("#cap72c7_otra").val('');
				$("#desnoestudiog").hide();
				$("#masnoestudiog").val('+');
				ocultaDivCausasAsistencia();				
			}
			else if($("#c4p72_asistencia:checked").val()=='2')
			{
				$("#c4p72a_ubic_inst:checked").removeAttr('checked');
				$("#div_c4p72a_ubic_inst_otro_mpio").hide();
				$("#c4p72a1_dpto_inst").prop('selectedIndex', 0);
				$("#c4p72a2_mpio_inst").prop('selectedIndex', 0);
				$("#div_c4p72a_ubic_inst_otro_pais").hide();
				$("#c4p72a3_pais_inst").prop('selectedIndex', 0);

				$("#div_c4p72a_ubic_inst").hide();				
				$("#div_c4p72b_dejo_est").show();
			}
		}
	});
	
	//Funcion a todos los radiobuttons de persona3 para que oculten el div que despliega los errores para la mam&aacute; de la persona encuestada
	$("#frmPage12 input[name='c4p72a_ubic_inst']:radio").bind("click",function(){
		if ($(this).is(':checked')){
			$("#alert_c4p72a_ubic_inst").html("");
			$("#alert_c4p72a_ubic_inst").hide();
			if($("#c4p72a_ubic_inst:checked").val()=='2')
			{
				$("#div_c4p72a_ubic_inst_otro_mpio").show();				
				$("#div_c4p72a_ubic_inst_otro_pais").hide();
				$("#c4p72a3_pais_inst").prop('selectedIndex', 0);
			}
			else if($("#c4p72a_ubic_inst:checked").val()=='3')
			{
				$("#div_c4p72a_ubic_inst_otro_pais").show();
				$("#div_c4p72a_ubic_inst_otro_mpio").hide();
				$("#c4p72a1_dpto_inst").prop('selectedIndex', 0);
				$("#c4p72a2_mpio_inst").prop('selectedIndex', 0);
			}
			else
			{
				$("#div_c4p72a_ubic_inst_otro_mpio").hide();
				$("#c4p72a1_dpto_inst").prop('selectedIndex', 0);
				$("#c4p72a2_mpio_inst").prop('selectedIndex', 0);
				$("#div_c4p72a_ubic_inst_otro_pais").hide();
				$("#c4p72a3_pais_inst").prop('selectedIndex', 0);
			}
		}
	});
	
	$("#c4p72a1_dpto_inst").bind("click",function(){
		$("#alert_c4p72a1_dpto_inst").html("");
		$("#alert_c4p72a1_dpto_inst").hide();
	});
	
	$("#c4p72a1_dpto_inst").bind("change",function(){
		$("#alert_c4p72a1_dpto_inst").html("");
		$("#alert_c4p72a1_dpto_inst").hide();
	});
	
	$("#c4p72a2_mpio_inst").bind("click",function(){
		$("#alert_c4p72a2_mpio_inst").html("");
		$("#alert_c4p72a2_mpio_inst").hide();
	});
	
	$("#c4p72a2_mpio_inst").bind("change",function(){
		$("#alert_c4p72a2_mpio_inst").html("");
		$("#alert_c4p72a2_mpio_inst").hide();
	});
	
	$("#c4p72a3_pais_inst").bind("click",function(){
		$("#alert_c4p72a3_pais_inst").html("");
		$("#alert_c4p72a3_pais_inst").hide();
	});
	
	$("#c4p72a3_pais_inst").bind("change",function(){
		$("#alert_c4p72a3_pais_inst").html("");
		$("#alert_c4p72a3_pais_inst").hide();
	});
	
	$("#frmPage12 input[name='c4p72b_dejo_est']:radio").bind("click",function(){
		if ($(this).is(':checked')){
			$("#alert_c4p72b_dejo_est").html("");			
			$("#alert_c4p72b_dejo_est").hide();
		}
	});
	
	$("#frmPage12 input[name='cap72_causa']:radio").bind("click",function(){
		if ($(this).is(':checked')){
			$("#alert_cap72_causa").html("");			
			$("#alert_cap72_causa").hide();
			$("#alert_cap72c7_otra").html("");
			$("#alert_cap72c7_otra").hide();
			if($("#cap72_causa:checked").val()!=28)
			{
				$("#desnoestudiog").hide();
				$("#masnoestudiog").val('+');
				
				//2016feb08 - hhchavezv - Limpia campo otra causa
				$("#alert_cap72c7_otra").html("");
				$("#alert_cap72c7_otra").hide();
				$("#cap72c7_otra").val('');
			}
		}
	});
	
	/*$("#masnoestudiog").bind("click",function()
	{
		$("#alert_cap72c7_otra").html("");
		$("#alert_cap72c7_otra").hide();
		$("#cap72c7_otra").val('');
		$radios.filter('[value=Male]').prop('checked', true);
	});*/

	$("#cap72c7_otra").bind("click",function(){
		$("#alert_cap72c7_otra").html("");
		$("#alert_cap72c7_otra").hide();
	});

	$("#btnSiguiente12").bind("click",function(){
		if ($("#frmPage12").valid())
		{
			$error = false;	//Variable de control para obligar a que se seleccione una de las opciones de PRINCIPAL CAUSA por la que no asiste o 
							//por la que dej&oacute; de estudiar definitivamente
			if($("#c4p72_asistencia:checked").val()=='2')
			{
				if(!$("#cap72_causa:checked").val() && $("#cap72c7_otra").val()=="")
				{
					$("#alert_cap72_causa").html("<b>Debe seleccionar una de las opciones.</b>");			
					$("#alert_cap72_causa").show();
					$error = true;
				}
			}
			if($error == false)
			{
				$("#hint_c4p73_nivel_anos").hintOpen("","Marque una sola opci&oacute;n, la que corresponda al &uacute;ltimo grado o a&ntilde;o aprobado.");
				
				ajaxGuardarPersona(12);
			}
		}
	});

	//***** Fin - Validaciones de la pagina persona12
	
	
	//***** Inicio - Validaciones de la pagina persona13
	
	$("#frmPage13").validate({
		rules: {
			c4p73_nivel_anos: { required: true }
		},
		messages: {
			c4p73_nivel_anos: { required: "<b>Debe seleccionar una de las opciones</b>" }
		},
		errorPlacement: function(error, element) {			
			$("#alert_c4p73_nivel_anos").show();	
			$("#alert_c4p73_nivel_anos").html(error);			
		},
		submitHandler: function(form) {			
			if ($("#frmPage13").valid()){
				$("#page14").show();
				$("#page13").hide();
				$("html, body").scrollTop(0);
			}						
		}
	});

	//Funcion a todos los radiobuttons de persona13 para que oculten el div que despliega los errores
	$("#frmPage13 input[name='c4p73_nivel_anos']:radio").bind("click",function(){
		if ($(this).is(':checked')){
			$("#alert_c4p73_nivel_anos").html("");			
			$("#alert_c4p73_nivel_anos").hide();
		}
	});
	
	$("#btnSiguiente13").bind("click",function(){
		if ($("#frmPage13").valid())
		{
			$("#hint_c4p74").hintOpen("","Esta pregunta hace referencia al uso personal de estas herramientas tecnol&oacute;gicas, sin importar su propiedad, el lugar donde las utilice y los motivos para los que las use.");
			ajaxGuardarPersona(13);
		}
	});
	
	//***** Fin - Validaciones de la pagina persona13
	
	
	//***** Inicio - Validaciones de la pagina persona14
	
	$("#frmPage14").validate({
		rules: {
			c4p74a_cel: { required: true },
			c4p74b_pc: { required: true },
			c4p74c_tableta: { required: true },
			c4p74d_internet: { required: true }
		},
		messages: {
			c4p74a_cel: { required: "<b>Debe seleccionar una de las opciones.</b>" },
			c4p74b_pc: { required: "<b>Debe seleccionar una de las opciones.</b>" },
			c4p74c_tableta: { required: "<b>Debe seleccionar una de las opciones.</b>" },
			c4p74d_internet: { required: "<b>Debe seleccionar una de las opciones.</b>" }
		},
		errorPlacement: function(error, element) {			
			switch(element.attr("id"))
			{
				case "c4p74a_cel":  	$("#alert_c4p74a_cel").show();	
										$("#alert_c4p74a_cel").html(error);
										break;	
										
				case "c4p74b_pc":		$("#alert_c4p74b_pc").show();	
										$("#alert_c4p74b_pc").html(error);
										break;						
										
				case "c4p74c_tableta":  $("#alert_c4p74c_tableta").show();	
										$("#alert_c4p74c_tableta").html(error);
										break;						
	
				case "c4p74d_internet":	$("#alert_c4p74d_internet").show();	
										$("#alert_c4p74d_internet").html(error);
										break;
			}
		},
		submitHandler: function(form) {			
			if ($("#frmPage14").valid()){
				$("#page15").show();
				$("#page14").hide();
				$("html, body").scrollTop(0);
			}						
		}
	});
	
	//Funcion a todos los radiobuttons de persona14 para que oculten el div que despliega los errores
	$("#frmPage14 input[name='c4p74a_cel']:radio").bind("click",function(){
		if ($(this).is(':checked')){
			$("#alert_c4p74a_cel").hide();
		}
	});
	
	$("#frmPage14 input[name='c4p74b_pc']:radio").bind("click",function(){
		if ($(this).is(':checked')){
			$("#alert_c4p74b_pc").hide();
		}
	});
	
	$("#frmPage14 input[name='c4p74c_tableta']:radio").bind("click",function(){
		if ($(this).is(':checked')){
			$("#alert_c4p74c_tableta").hide();
		}
	});
	
	$("#frmPage14 input[name='c4p74d_internet']:radio").bind("click",function(){
		if ($(this).is(':checked')){
			$("#alert_c4p74d_internet").hide();
		}
	});
	
	$("#btnSiguiente14").bind("click",function(){
		if ($("#frmPage14").valid())
		{
			$("#hint_c4p75").hint("Semana pasada:","Se considera SEMANA PASADA, la semana calendario completa anterior al d&iacute;a de hoy, que inicia un lunes y termina el domingo.");
			$("#hint_c4p75_trabajo").hint("","Esta opci&oacute;n se marca si la persona trabaj&oacute; una hora o m&aacute;s la semana pasada.");
			
			ajaxGuardarPersona(14);
		}
	});

	//***** Fin - Validaciones de la pagina persona14
	
	
	//***** Inicio - Validaciones de la pagina persona15
	
	$("#frmPage15").validate({
		rules: {
			c4p75_trabajo: { required: true },
			cap76a_neg_flia: { required: true },
			cap76b_neg_flig: { required: true },
			cap76c_neg_flif: { required: true },
			cap76d_neg_flie: { required: true },
			cap76e_neg_flid: { required: true },
			cap76f_neg_flic: { required: true },
			cap76g_neg_flib: { required: true }
		},
		messages: {
			c4p75_trabajo: { required: "<b>Debe seleccionar una de las opciones.</b>" },
			cap76a_neg_flia: { required: "<b>Debe seleccionar una de las opciones.</b>" },
			cap76b_neg_flig: { required: "<b>Debe seleccionar una de las opciones.</b>" },
			cap76c_neg_flif: { required: "<b>Debe seleccionar una de las opciones.</b>" },
			cap76d_neg_flie: { required: "<b>Debe seleccionar una de las opciones.</b>" },
			cap76e_neg_flid: { required: "<b>Debe seleccionar una de las opciones.</b>" },
			cap76f_neg_flic: { required: "<b>Debe seleccionar una de las opciones.</b>" },
			cap76g_neg_flib: { required: "<b>Debe seleccionar una de las opciones.</b>" }
		},
		errorPlacement: function(error, element) {			
			switch(element.attr("id"))
			{
				case "c4p75_trabajo":  	$("#alert_c4p75_trabajo").show();	
										$("#alert_c4p75_trabajo").html(error);
										break;	
										
				case "cap76a_neg_flia":	$("#alert_cap76a_neg_flia").show();	
										$("#alert_cap76a_neg_flia").html(error);
										break;						
										
				case "cap76b_neg_flig":	$("#alert_cap76b_neg_flig").show();	
										$("#alert_cap76b_neg_flig").html(error);
										break;						
	
				case "cap76c_neg_flif":	$("#alert_cap76c_neg_flif").show();	
										$("#alert_cap76c_neg_flif").html(error);
										break;
										
				case "cap76d_neg_flie":	$("#alert_cap76d_neg_flie").show();	
										$("#alert_cap76d_neg_flie").html(error);
										break;
										
				case "cap76e_neg_flid":	$("#alert_cap76e_neg_flid").show();	
										$("#alert_cap76e_neg_flid").html(error);
										break;
										
				case "cap76f_neg_flic":	$("#alert_cap76f_neg_flic").show();	
										$("#alert_cap76f_neg_flic").html(error);
										break;
										
				case "cap76g_neg_flib":	$("#alert_cap76g_neg_flib").show();	
										$("#alert_cap76g_neg_flib").html(error);
										break;
			}
		},
		submitHandler: function(form) {			
			if ($("#frmPage15").valid()){
				$("#page16").show();
				$("#page15").hide();
				$("html, body").scrollTop(0);
			}						
		}
	});
	
	//Funcion a todos los radiobuttons de persona15 para que oculten el div que despliega los errores
	$("#frmPage15 input[name='c4p75_trabajo']:radio").bind("click",function(){
		if ($(this).is(':checked')){
			$("#alert_c4p75_trabajo").html("");
			$("#alert_c4p75_trabajo").hide();
			if($('#c4p75_trabajo:checked').val()==1 || $('#c4p75_trabajo:checked').val()==2 )
			{
				$("#cap76a_neg_flia:checked").removeAttr('checked');
				$("#cap76b_neg_flig:checked").removeAttr('checked');
				$("#cap76c_neg_flif:checked").removeAttr('checked');
				$("#cap76d_neg_flie:checked").removeAttr('checked');
				$("#cap76e_neg_flid:checked").removeAttr('checked');
				$("#cap76f_neg_flic:checked").removeAttr('checked');
				$("#cap76g_neg_flib:checked").removeAttr('checked');

				ocultaDivAlertaCap76();
				$("#div_cap76a_neg_flia").hide();
				//ajaxGuardarPersona(15);
			}
			else
			{
				$("#div_cap76a_neg_flia").show();
				$.ajax({
					type: "GET",
					url: base_url + "persona/persona/actualizarTrabajo",
					
					data: "trabajoSel="+$("#c4p75_trabajo:checked").val(),
					dataType: "html",
					contentType: "application/x-www-form-urlencoded;charset=UTF-8",
					cache: false,
					success: function(data){
						$("#div_c4p75_trabajo").html(data);
					},
					error: function(data)
					{
						if (data!="")
						{
							alert("ERROR: " + data.status + "\n" + data.statusText + "\n" + data.responseText.trim());						
						}
					}				
				});
			}
		}
	});
	
	$("#frmPage15 input[name='cap76a_neg_flia']:radio").bind("click",function(){
		if ($(this).is(':checked')){
			$("#alert_cap76a_neg_flia").html("");
			$("#alert_cap76a_neg_flia").hide();
		}
	});
	
	$("#frmPage15 input[name='cap76b_neg_flig']:radio").bind("click",function(){
		if ($(this).is(':checked')){
			$("#alert_cap76b_neg_flig").html("");
			$("#alert_cap76b_neg_flig").hide();
		}
	});
	
	$("#frmPage15 input[name='cap76c_neg_flif']:radio").bind("click",function(){
		if ($(this).is(':checked')){
			$("#alert_cap76c_neg_flif").html("");
			$("#alert_cap76c_neg_flif").hide();
		}
	});
	
	$("#frmPage15 input[name='cap76d_neg_flie']:radio").bind("click",function(){
		if ($(this).is(':checked')){
			$("#alert_cap76d_neg_flie").html("");
			$("#alert_cap76d_neg_flie").hide();
		}
	});
	
	$("#frmPage15 input[name='cap76e_neg_flid']:radio").bind("click",function(){
		if ($(this).is(':checked')){
			$("#alert_cap76e_neg_flid").html("");
			$("#alert_cap76e_neg_flid").hide();
		}
	});
	
	$("#frmPage15 input[name='cap76f_neg_flic']:radio").bind("click",function(){
		if ($(this).is(':checked')){
			$("#alert_cap76f_neg_flic").html("");
			$("#alert_cap76f_neg_flic").hide();
		}
	});
	
	$("#frmPage15 input[name='cap76g_neg_flib']:radio").bind("click",function(){
		if ($(this).is(':checked')){
			$("#alert_cap76g_neg_flib").html("");
			$("#alert_cap76g_neg_flib").hide();
		}
	});
	
	$("#btnSiguiente15").bind("click",function(){
		if ($("#frmPage15").valid())
		{
			ajaxGuardarPersona(15);
		}
	});

	//***** Fin - Validaciones de la pagina persona15
	
	
	//***** Inicio - Validaciones de la pagina persona16

	//Funcion a todos los radiobuttons de persona16 para que oculten el div que despliega los errores
	$("#frmPage16 input[name='cap77a_ae_realiza']:radio").bind("click",function(){
		if ($(this).is(':checked')){
			$("#alert_cap77a_ae_realiza").hide();
		}
	});
	
	$("#btnSiguiente16").bind("click",function(){
		if ($("#frmPage16").valid())
		{
			if ($("#cap77a_ae_realiza:checked").val())
			{
				$("#hint_c4p78_tipo_trab").hintOpen("","Se refiere a la actividad desarrollada por la persona la semana pasada.");
				$("#hint_c4p78_tipo_trab_ind").hint("Trabajador(a) por cuenta propia o independiente:","Son las personas que explotan su propia empresa econ&oacute;mica o que ejercen por su cuenta una profesi&oacute;n u oficio con ayuda o no de familiares, pero sin utilizar ning&uacute;n trabajador remunerado.");
				
				ajaxGuardarPersona(16);
			}
			else
			{
				$("#alert_cap77a_ae_realiza").show();	
				$("#alert_cap77a_ae_realiza").html("<b>Debe seleccionar una de las opciones.</b>");			
			}
		}
	});

	//***** Fin - Validaciones de la pagina persona16
	
	
	//***** Inicio - Validaciones de la pagina persona17
	
	$("#frmPage17").validate({
		rules: {
			c4p78_tipo_trab: { required: true },
			c4p79_sitio_trab: { required: true },
			c4p79a_dpto_trab: { required: true },
			c4p79b_mpio_trab: { required: true },
			c4p79c_pais_trab: { required: true },
			c4p80_cotiz_pens: { required: true }
		},
		messages: {
			c4p78_tipo_trab: { required: "<b>Debe seleccionar una de las opciones.</b>" },
			c4p79_sitio_trab: { required: "<b>Debe seleccionar una de las opciones.</b>" },
			c4p79a_dpto_trab: { required: "<b>Debe seleccionar un departamento.</b>" },
			c4p79b_mpio_trab: { required: "<b>Debe seleccionar un municipio.</b>" },
			c4p79c_pais_trab: { required: "<b>Debe seleccionar un pa\u00eds.</b>" },
			c4p80_cotiz_pens: { required: "<b>Debe seleccionar una de las opciones.</b>" }
		},
		errorPlacement: function(error, element) {			
			switch(element.attr("id"))
			{
				case "c4p78_tipo_trab":  	$("#alert_c4p78_tipo_trab").show();	
										$("#alert_c4p78_tipo_trab").html(error);
										break;	
										
				case "c4p79_sitio_trab":	$("#alert_c4p79_sitio_trab").show();	
										$("#alert_c4p79_sitio_trab").html(error);
										break;						
										
				case "c4p79a_dpto_trab":	$("#alert_c4p79a_dpto_trab").show();	
										$("#alert_c4p79a_dpto_trab").html(error);
										break;						
	
				case "c4p79b_mpio_trab":	$("#alert_c4p79b_mpio_trab").show();	
										$("#alert_c4p79b_mpio_trab").html(error);
										break;
										
				case "c4p79c_pais_trab":	$("#alert_c4p79c_pais_trab").show();	
										$("#alert_c4p79c_pais_trab").html(error);
										break;
										
				case "c4p80_cotiz_pens":	$("#alert_c4p80_cotiz_pens").show();	
										$("#alert_c4p80_cotiz_pens").html(error);
										break;
										
			}
		},
		submitHandler: function(form) {			
			if ($("#frmPage17").valid()){
				$("#page18").show();
				$("#page17").hide();
				$("html, body").scrollTop(0);
			}						
		}
	});
	
	//Funcion a todos los radiobuttons de persona17 para que oculten el div que despliega los errores
	$("#frmPage17 input[name='c4p78_tipo_trab']:radio").bind("click",function(){
		if ($(this).is(':checked')){
			$("#alert_c4p78_tipo_trab").html("");
			$("#alert_c4p78_tipo_trab").hide();
		}
	});
	
	$("#frmPage17 input[name='c4p79_sitio_trab']:radio").bind("click",function(){
		if ($(this).is(':checked')){
			$("#alert_c4p79_sitio_trab").html("");
			$("#alert_c4p79_sitio_trab").hide();
			$("#alert_c4p79c_pais_trab").html("");
			$("#alert_c4p79c_pais_trab").hide();
			if($("#c4p79_sitio_trab:checked").val()=='2')
			{
				$("#div_c4p79_sitio_trab").show();				
				$("#div_c4p79c_pais_trab").hide();
				$("#c4p79c_pais_trab").prop('selectedIndex', 0);
			}
			else if($("#c4p79_sitio_trab:checked").val()=='3')
			{
				$("#div_c4p79c_pais_trab").show();
				$("#div_c4p79_sitio_trab").hide();
				$("#c4p79a_dpto_trab").prop('selectedIndex', 0);
				$("#c4p79b_mpio_trab").prop('selectedIndex', 0);
			}
			else
			{
				$("#div_c4p79_sitio_trab").hide();
				$("#c4p79a_dpto_trab").prop('selectedIndex', 0);
				$("#c4p79b_mpio_trab").prop('selectedIndex', 0);
				$("#div_c4p79c_pais_trab").hide();
				$("#c4p79c_pais_trab").prop('selectedIndex', 0);
			}
		}
	});
	
	$("#c4p79a_dpto_trab").bind("click",function(){
		$("#alert_c4p79a_dpto_trab").html("");
		$("#alert_c4p79a_dpto_trab").hide();
	});
	
	$("#c4p79a_dpto_trab").bind("change",function(){
		$("#alert_c4p79a_dpto_trab").html("");
		$("#alert_c4p79a_dpto_trab").hide();
	});
	
	$("#c4p79b_mpio_trab").bind("click",function(){
		$("#alert_c4p79b_mpio_trab").html("");
		$("#alert_c4p79b_mpio_trab").hide();
	});

	$("#c4p79b_mpio_trab").bind("change",function(){
		$("#alert_c4p79b_mpio_trab").html("");
		$("#alert_c4p79b_mpio_trab").hide();
	});
	
	$("#c4p79c_pais_trab").bind("click",function(){
		$("#alert_c4p79c_pais_trab").html("");
		$("#alert_c4p79c_pais_trab").hide();
	});
	
	$("#c4p79c_pais_trab").bind("change",function(){
		$("#alert_c4p79c_pais_trab").html("");
		$("#alert_c4p79c_pais_trab").hide();
	});
	
	$("#frmPage17 input[name='c4p80_cotiz_pens']:radio").bind("click",function(){
		if ($(this).is(':checked')){
			$("#alert_c4p80_cotiz_pens").html("");
			$("#alert_c4p80_cotiz_pens").hide();
		}
	});
	
	$("#btnSiguiente17").bind("click",function(){
		if ($("#frmPage17").valid())
		{
			ajaxGuardarPersona(17);
		}
	});

	//***** Fin - Validaciones de la pagina persona17

	
	//***** Inicio - Validaciones de la pagina persona18
	
	$("#frmPage18").validate({
		rules: {
			c4p81_est_civil: { required: true }
		},
		messages: {
			c4p81_est_civil: { required: "<b>Debe seleccionar una de las opciones</b>" }
		},
		errorPlacement: function(error, element) {			
			$("#alert_c4p81_est_civil").show();	
			$("#alert_c4p81_est_civil").html(error);			
		},
		submitHandler: function(form) {			
			if ($("#frmPage18").valid()){
				$("#page19").show();
				$("#page18").hide();
				$("html, body").scrollTop(0);
			}						
		}
	});

	//Funcion a todos los radiobuttons de persona18 para que oculten el div que despliega los errores
	$("#frmPage18 input[name='c4p81_est_civil']:radio").bind("click",function(){
		if ($(this).is(':checked')){
			$("#alert_c4p81_est_civil").hide();
		}
	});
	
	$("#btnSiguiente18").bind("click",function(){
		if ($("#frmPage18").valid())
		{
			$("#hint11").hintOpen("","Considere &uacute;nicamente los hijos(as) tenidos(as) por ella, sin importar si murieron despu&eacute;s de nacidos o que vivan fuera del hogar. No considere a los hijos(as) adoptivos(as)");
			
			ajaxGuardarPersona(18);
		}
	});

	//***** Fin - Validaciones de la pagina persona18
	

	//***** Inicio - Validaciones de la pagina persona19
	
	$("#frmPage19").validate({
		rules: {
			c4p82_thnv: { required: true },
			c4p82a_hnvh: { required: true },
			c4p82b_hnvm: { required: true },
			c4p83_hnv: { required: true },
			c4p83a_thsv: { required: true },
			c4p83b_hsvh: { required: true },
			c4p83c_hsvm: { required: true },
			c4p84_hfc: { required: true },
			c4p84a_thfc: { required: true },
			c4p84b_hfch: { required: true },
			c4p84c_hfcm: { required: true },
			c4p85_uhva: { required: true },
			c4p86a_dia_uhva: { required: true },
			c4p86b_mes_uhva: { required: true },
			c4p86c_ano_uhva: { required: true }
		},
		messages: {
			c4p82_thnv: { required: "<b>Debe seleccionar una de las opciones.</b>" },
			c4p82a_hnvh: { required: "<b>Debe seleccionar una de las opciones.</b>" },
			c4p82b_hnvm: { required: "<b>Debe seleccionar una de las opciones.</b>" },
			c4p83_hnv: { required: "<b>Debe seleccionar una de las opciones.</b>" },
			c4p83a_thsv: { required: "<b>Debe seleccionar una de las opciones.</b>" },
			c4p83b_hsvh: { required: "<b>Debe seleccionar una de las opciones.</b>" },
			c4p83c_hsvm: { required: "<b>Debe seleccionar una de las opciones.</b>" },
			c4p84_hfc: { required: "<b>Debe seleccionar una de las opciones.</b>" },
			c4p84a_thfc: { required: "<b>Debe seleccionar una de las opciones.</b>" },
			c4p84b_hfch: { required: "<b>Debe seleccionar una de las opciones.</b>" },
			c4p84c_hfcm: { required: "<b>Debe seleccionar una de las opciones.</b>" },
			c4p85_uhva: { required: "<b>Debe seleccionar una de las opciones.</b>" },
			c4p86a_dia_uhva: { required: "<b>Debe especificar el d\u00eda de nacimiento.</b>" },
			c4p86b_mes_uhva: { required: "<b>Debe especificar el mes de nacimiento.</b>" },
			c4p86c_ano_uhva: { required: "<b>Debe especificar el a\u00f1o de nacimiento.</b>" }
		},
		errorPlacement: function(error, element) {			
			switch(element.attr("id"))
			{
				case "c4p82_thnv":  	$("#alert_c4p82_thnv").show();	
										$("#alert_c4p82_thnv").html(error);
										break;	
										
				case "c4p82a_hnvh":	$("#alert_c4p82a_hnvh").show();	
										$("#alert_c4p82a_hnvh").html(error);
										break;						
										
				case "c4p82b_hnvm":	$("#alert_c4p82b_hnvm").show();	
										$("#alert_c4p82b_hnvm").html(error);
										break;						
	
				case "c4p83_hnv":	$("#alert_c4p83_hnv").show();	
										$("#alert_c4p83_hnv").html(error);
										break;
										
				case "c4p83a_thsv":	$("#alert_c4p83a_thsv").show();	
										$("#alert_c4p83a_thsv").html(error);
										break;
										
				case "c4p83b_hsvh":	$("#alert_c4p83b_hsvh").show();	
										$("#alert_c4p83b_hsvh").html(error);
										break;
										
				case "c4p83c_hsvm":	$("#alert_c4p83c_hsvm").show();	
										$("#alert_c4p83c_hsvm").html(error);
										break;
										
				case "c4p84_hfc":	$("#alert_c4p84_hfc").show();	
										$("#alert_c4p84_hfc").html(error);
										break;
										
				case "c4p84a_thfc":	$("#alert_c4p84a_thfc").show();	
										$("#alert_c4p84a_thfc").html(error);
										break;
				
				case "c4p84b_hfch":  	$("#alert_c4p84b_hfch").show();	
										$("#alert_c4p84b_hfch").html(error);
										break;	
				
				case "c4p84c_hfcm":	$("#alert_c4p84c_hfcm").show();	
										$("#alert_c4p84c_hfcm").html(error);
										break;						
								
				case "c4p85_uhva":	$("#alert_c4p85_uhva").show();	
										$("#alert_c4p85_uhva").html(error);
										break;						
					
				case "c4p86a_dia_uhva":	$("#alert_c4p86a_dia_uhva").show();	
										$("#alert_c4p86a_dia_uhva").html(error);
										break;
								
				case "c4p86b_mes_uhva":	$("#alert_c4p86b_mes_uhva").show();	
										$("#alert_c4p86b_mes_uhva").html(error);
										break;
								
				case "c4p86c_ano_uhva":	$("#alert_c4p86c_ano_uhva").show();	
										$("#alert_c4p86c_ano_uhva").html(error);
										break;
			}
		},
		submitHandler: function(form) {			
			if ($("#frmPage19").valid()){
				$("#page21").show();
				$("#page19").hide();
				$("html, body").scrollTop(0);
			}						
		}
	});
	
	//Funcion a los select de persona19 para que oculten el div que despliega los errores de hijos nacidos vivos
	$("#c4p82_thnv").bind("click",function(){
		$("#alert_c4p82_thnv").html("");
		$("#alert_c4p82_thnv").hide();
		
		$("#alert_c4p82a_hnvh").html("");
		$("#alert_c4p82a_hnvh").hide();
		
		$("#alert_c4p82b_hnvm").html("");
		$("#alert_c4p82b_hnvm").hide();
		
		$("#alert_c4p82_thnv_c4p82a_hnvh").html("");
		$("#alert_c4p82_thnv_c4p82a_hnvh").hide();
		$("#alert_c4p82_thnv_c4p82b_hnvm").html("");
		$("#alert_c4p82_thnv_c4p82b_hnvm").hide();
		
	});
	
	$("#c4p82_thnv").bind("change",function()
	{
		$("#c4p82a_hnvh").prop('selectedIndex', 0);
		$("#c4p82b_hnvm").prop('selectedIndex', 0);
		$("#alert_c4p82_thnv").html("");
		$("#alert_c4p82_thnv").hide();	
		if($("#c4p82_thnv").val()=="")
		{
			$("#alert_c4p82_thnv").show();	
			$("#alert_c4p82_thnv").html("<b>Debe seleccionar una de las opciones.</b>");
		}
		else if($("#c4p82_thnv").val()==0)
		{
			$("#c4p82a_hnvh").prop('selectedIndex', 1);
			$("#c4p82b_hnvm").prop('selectedIndex', 1);

			/*
			//2016feb05 - hhchavezv - Se limpian preguntas adicionales
			$('input:radio[name=c4p84_hfc]').prop('checked', false);
			$("#c4p84a_thfc").prop('selectedIndex', '');
			$("#c4p84b_hfch").prop('selectedIndex', '');
			$("#c4p84c_hfcm").prop('selectedIndex', '');			
			$('input:radio[name=c4p85_uhva]').prop('checked', false);
			*/
			
			//$("#c4p83_hnv:checked").removeAttr('checked');
			$('input:radio[name=c4p83_hnv]').prop('checked', false);
			$("#c4p83a_thsv").prop('selectedIndex', 0);
			$("#c4p83b_hsvh").prop('selectedIndex', 0);
			$("#c4p83c_hsvm").prop('selectedIndex', 0);
			
			//$("#c4p84_hfc:checked").removeAttr('checked');
			$('input:radio[name=c4p84_hfc]').prop('checked', false);
			$("#c4p84a_thfc").prop('selectedIndex', 0);
			$("#c4p84b_hfch").prop('selectedIndex', 0);
			$("#c4p84c_hfcm").prop('selectedIndex', 0);
			
			//$("#c4p85_uhva:checked").removeAttr('checked');
			$('input:radio[name=c4p85_uhva]').prop('checked', false);
			
			$("#c4p86a_dia_uhva").prop('selectedIndex', 0);
			$("#c4p86b_mes_uhva").prop('selectedIndex', 0);
			$("#c4p86c_ano_uhva").prop('selectedIndex', 0);
				
			$("#div_c4p83_thnv").hide();
			$("#div_c4p83_hnv_0").hide();
			$("#div_uhva").hide();

			//ajaxGuardarPersona(19);
		}
		else if($("#c4p82_thnv").val()>0)
		{
			$("#div_c4p83_thnv").show();
			$("#c4p83_hnv").prop("checked", true);
			$("#div_c4p83_hnv").show();
			$("#div_c4p83_hnv_0").show();
			$("#c4p84_hfc").prop("checked", true);
			$("#div_c4p84_hfc").show();
			$("#div_uhva").show();
		}
	});
	
	//Funcion a los select de persona19 para que oculten el div que despliega los errores de hijos nacidos vivos - hombres
	$("#c4p82a_hnvh").bind("click",function(){
		$("#alert_c4p82a_hnvh").html("");
		$("#alert_c4p82a_hnvh").hide();
	});
	
	$("#c4p82a_hnvh").bind("change",function(){
		$("#alert_c4p82a_hnvh").html("");
		$("#alert_c4p82a_hnvh").hide();
		$("#alert_c4p82_thnv_c4p82a_hnvh").html("");
		$("#alert_c4p82_thnv_c4p82a_hnvh").hide();
		$("#alert_c4p82_thnv_c4p82b_hnvm").html("");
		$("#alert_c4p82_thnv_c4p82b_hnvm").hide();

		if(parseInt($("#c4p82a_hnvh").val()) > parseInt($("#c4p82_thnv").val()))
		{
			$("#alert_c4p82_thnv_c4p82a_hnvh").html("<b>Verificar, el valor seleccionado no puede ser mayor que el valor &iquest;Cu&aacute;ntos? de esta pregunta.</b>");
			$("#alert_c4p82_thnv_c4p82a_hnvh").show();
		}
		else if(parseInt($("#c4p82b_hnvm").val()) + parseInt($("#c4p82a_hnvh").val()) != parseInt($("#c4p82_thnv").val()))
		{
			$("#alert_c4p82_thnv_c4p82a_hnvh").html("<b>Verificar, la suma de &iquest;Cu&aacute;ntos hombres? + &iquest;Cu&aacute;ntas mujeres?, no puede ser diferente que el valor &iquest;Cu&aacute;ntos? de esta pregunta.</b>");
			$("#alert_c4p82_thnv_c4p82a_hnvh").show();
		}
	});
	
	//Funcion a los select de persona19 para que oculten el div que despliega los errores de hijos nacidos vivos - mujeres
	$("#c4p82b_hnvm").bind("click",function(){
		$("#alert_c4p82b_hnvm").html("");
		$("#alert_c4p82b_hnvm").hide();
	});
	
	$("#c4p82b_hnvm").bind("change",function(){
		$("#alert_c4p82b_hnvm").html("");
		$("#alert_c4p82b_hnvm").hide();
		$("#alert_c4p82_thnv_c4p82b_hnvm").html("");
		$("#alert_c4p82_thnv_c4p82b_hnvm").hide();
		$("#alert_c4p82_thnv_c4p82a_hnvh").html("");
		$("#alert_c4p82_thnv_c4p82a_hnvh").hide();

		if(parseInt($("#c4p82b_hnvm").val()) > parseInt($("#c4p82_thnv").val()))
		{
			$("#alert_c4p82_thnv_c4p82b_hnvm").html("<b>Verificar, el valor seleccionado no puede ser mayor que el valor &iquest;Cu&aacute;ntos? de esta pregunta.</b>");
			$("#alert_c4p82_thnv_c4p82b_hnvm").show();
		}
		else if(parseInt($("#c4p82b_hnvm").val()) + parseInt($("#c4p82a_hnvh").val()) != parseInt($("#c4p82_thnv").val()))
		{
			$("#alert_c4p82_thnv_c4p82b_hnvm").html("<b>Verificar, la suma de &iquest;Cu&aacute;ntos hombres? + &iquest;Cu&aacute;ntas mujeres?, no puede ser diferente que el valor &iquest;Cu&aacute;ntos? de esta pregunta.</b>");
			$("#alert_c4p82_thnv_c4p82b_hnvm").show();
		}
	});
	
	//Funcion a radiobutton y select de persona19 para que oculten el div que despliega errores de hijos nacidos vivos y viven actualmente
	$("#frmPage19 input[name='c4p83_hnv']:radio").bind("click",function(){
		if ($(this).is(':checked')){
			$("#alert_c4p83_hnv").html("");
			$("#alert_c4p83_hnv").hide();
			if($("#c4p83_hnv:checked").val()==1)
				$("#div_c4p83_hnv").show();
			else
			{
				$("#c4p83a_thsv").prop('selectedIndex', 0);
				$("#alert_c4p83a_thsv").html("");
				$("#alert_c4p83a_thsv").hide();
				$("#c4p83b_hsvh").prop('selectedIndex', 0);
				$("#alert_c4p83b_hsvh").html("");
				$("#alert_c4p83b_hsvh").hide();
				$("#c4p83c_hsvm").prop('selectedIndex', 0);
				$("#alert_c4p83c_hsvm").html("");
				$("#alert_c4p83c_hsvm").hide();
				$("#div_c4p83_hnv").hide();
				//hhchavezv
				$("#div_c4p83_hnv_0").show();//Muestra preg 84 y 85
				
			}
		}
	});
	
	//Funcion a los select de persona19 para que oculten el div que despliega los errores de hijos vivos actualmente
	$("#c4p83a_thsv").bind("click",function(){
		$("#alert_c4p83a_thsv").html("");
		$("#alert_c4p83a_thsv").hide();
		$("#alert_c4p83b_hsvh").html("");
		$("#alert_c4p83b_hsvh").hide();
		$("#alert_c4p83c_hsvm").html("");
		$("#alert_c4p83c_hsvm").hide();

		$("#alert_c4p84a_thfc").html("");
		$("#alert_c4p84a_thfc").hide();
		$("#alert_c4p84b_hfch").html("");
		$("#alert_c4p84b_hfch").hide();
		$("#alert_c4p84c_hfcm").html("");
		$("#alert_c4p84c_hfcm").hide();
		$("#alert_c4p83c_hsvm_c4p84c_hfcm").html("");
		$("#alert_c4p83c_hsvm_c4p84c_hfcm").hide();
		$("#alert_c4p85_uhva").html("");
		$("#alert_c4p85_uhva").hide();
	});
	
	$("#c4p83a_thsv").bind("change",function(){
		$("#alert_c4p83a_thsv").html("");
		$("#alert_c4p83a_thsv").hide();
		if($("#c4p83a_thsv").val()=='0')
		{
			$("#c4p83b_hsvh").prop('selectedIndex', 1);
			$("#c4p83c_hsvm").prop('selectedIndex', 1);
			$("#div_c4p83_hnv_0").hide();
			
			//2016feb05 - hhchavezv - Se limpian preguntas adicionales
			$('input:radio[name=c4p84_hfc]').prop('checked', false);
			$("#c4p84a_thfc").prop('selectedIndex', '');
			$("#c4p84b_hfch").prop('selectedIndex', '');
			$("#c4p84c_hfcm").prop('selectedIndex', '');			
			$('input:radio[name=c4p85_uhva]').prop('checked', false);
			
		}
		else
		{
			$("#c4p83b_hsvh").prop('selectedIndex', 0);
			$("#c4p83c_hsvm").prop('selectedIndex', 0);
			$("#div_c4p83_hnv_0").show();
			if((parseInt($("#c4p83a_thsv").val()) > parseInt($("#c4p82_thnv").val())) && $("#c4p82_thnv").val()!='')
			{
				$("#alert_c4p82_thnv_c4p83a_thsv").html("<b>Verificar, el valor seleccionado no puede ser mayor que el valor &iquest;Cu&aacute;ntos? de la pregunta anterior.</b>");
				$("#alert_c4p82_thnv_c4p83a_thsv").show();
			}
			else
			{
				$("#alert_c4p82_thnv_c4p83a_thsv").html("");
				$("#alert_c4p82_thnv_c4p83a_thsv").hide();
			}
		}
	});
	
	//Funcion a los select de persona19 para que oculten el div que despliega los errores de hijos vivos actualmente - hombres
	$("#c4p83b_hsvh").bind("click",function(){
		$("#alert_c4p83b_hsvh").html("");
		$("#alert_c4p83b_hsvh").hide();
	});
	
	$("#c4p83b_hsvh").bind("change",function(){
		$("#alert_c4p83b_hsvh").html("");
		$("#alert_c4p83b_hsvh").hide();
		if((parseInt($("#c4p83b_hsvh").val()) > parseInt($("#c4p82a_hnvh").val())) && $("#c4p82a_hnvh").val()!='')
		{
			$("#alert_c4p82a_hnvh_c4p83b_hsvh").html("<b>Verificar, el valor seleccionado no puede ser mayor que el valor &iquest;Cu&aacute;ntos hombres? de la pregunta anterior.</b>");
			$("#alert_c4p82a_hnvh_c4p83b_hsvh").show();
		}
		else
		{
			$("#alert_c4p82a_hnvh_c4p83b_hsvh").html("");
			$("#alert_c4p82a_hnvh_c4p83b_hsvh").hide();
		}
	});
	
	//Funcion a los select de persona19 para que oculten el div que despliega los errores de hijos vivos actualmente - mujeres
	$("#c4p83c_hsvm").bind("click",function(){
		$("#alert_c4p83c_hsvm").html("");
		$("#alert_c4p83c_hsvm").hide();
	});
	
	$("#c4p83c_hsvm").bind("change",function(){
		$("#alert_c4p83c_hsvm").html("");
		$("#alert_c4p83c_hsvm").hide();
		if((parseInt($("#c4p83c_hsvm").val()) > parseInt($("#c4p82b_hnvm").val())) && $("#c4p82b_hnvm").val()!='')
		{
			$("#alert_c4p82b_hnvm_c4p83c_hsvm").html("<b>Verificar, el valor seleccionado no puede ser mayor que el valor &iquest;Cu&aacute;ntas mujeres? de la pregunta anterior.</b>");
			$("#alert_c4p82b_hnvm_c4p83c_hsvm").show();
		}
		else
		{
			$("#alert_c4p82b_hnvm_c4p83c_hsvm").html("");
			$("#alert_c4p82b_hnvm_c4p83c_hsvm").hide();
		}
	});
	
	//Funcion a radiobutton y select de persona19 para que oculten el div que despliega errores de hijos viven fuera de Colombia
	$("#frmPage19 input[name='c4p84_hfc']:radio").bind("click",function(){
		if ($(this).is(':checked')){
			$("#alert_c4p84_hfc").html("");
			$("#alert_c4p84_hfc").hide();
			if($("#c4p84_hfc:checked").val()==1)
				$("#div_c4p84_hfc").show();
			else
			{
				$("#c4p84a_thfc").prop('selectedIndex', 0);
				$("#alert_c4p84a_thfc").html("");
				$("#alert_c4p84a_thfc").hide();
				$("#c4p84b_hfch").prop('selectedIndex', 0);
				$("#alert_c4p84b_hfch").html("");
				$("#alert_c4p84b_hfch").hide();
				$("#c4p84c_hfcm").prop('selectedIndex', 0);
				$("#alert_c4p84c_hfcm").html("");
				$("#alert_c4p84c_hfcm").hide();
				$("#div_c4p84_hfc").hide();
			}
		}
	});
	
	//Funcion a los select de persona19 para que oculten el div que despliega los errores de hijos viven fuera de colombia
	$("#c4p84a_thfc").bind("click",function(){
		$("#alert_c4p84a_thfc").html("");
		$("#alert_c4p84a_thfc").hide();
		$("#alert_c4p84b_hfch").html("");
		$("#alert_c4p84b_hfch").hide();
		$("#alert_c4p84c_hfcm").html("");
		$("#alert_c4p84c_hfcm").hide();
	});
	
	$("#c4p84a_thfc").bind("change",function(){
		$("#alert_c4p84a_thfc").html("");
		$("#alert_c4p84a_thfc").hide();
		if($("#c4p84a_thfc").val()=='0')
		{
			$("#c4p84b_hfch").prop('selectedIndex', 1);
			$("#c4p84c_hfcm").prop('selectedIndex', 1);
		}
		else if((parseInt($("#c4p84a_thfc").val()) > parseInt($("#c4p83a_thsv").val())) && $("#c4p83_hnv:checked").val()=='1'  && $("#c4p83a_thsv").val()!='' )
		{
			$("#alert_c4p83a_thsv_c4p84a_thfc").html("<b>Verificar, el valor seleccionado no puede ser mayor que el valor &iquest;Cu&aacute;ntos? de la pregunta anterior.</b>");
			$("#alert_c4p83a_thsv_c4p84a_thfc").show();
		}
		else
		{
			$("#alert_c4p83a_thsv_c4p84a_thfc").html("");
			$("#alert_c4p83a_thsv_c4p84a_thfc").hide();
			if((parseInt($("#c4p84a_thfc").val()) > parseInt($("#c4p82_thnv").val())) && $("#c4p82_thnv").val()!='')
			{
				$("#alert_c4p83a_thsv_c4p84a_thfc").html("<b>Verificar, el valor seleccionado no puede ser mayor que el valor &iquest;Cu&aacute;ntos? de la pregunta inicial.</b>");
				$("#alert_c4p83a_thsv_c4p84a_thfc").show();
			}
			else
			{
				$("#alert_c4p83a_thsv_c4p84a_thfc").html("");
				$("#alert_c4p83a_thsv_c4p84a_thfc").hide();
			}
		}
	});
	
	//Funcion a los select de persona19 para que oculten el div que despliega los errores de hijos viven fuera de colombia - hombres
	$("#c4p84b_hfch").bind("click",function(){
		$("#alert_c4p84b_hfch").html("");
		$("#alert_c4p84b_hfch").hide();
	});
	
	$("#c4p84b_hfch").bind("change",function(){
		$("#alert_c4p84b_hfch").html("");
		$("#alert_c4p84b_hfch").hide();
		if((parseInt($("#c4p84b_hfch").val()) > parseInt($("#c4p83b_hsvh").val())) && $("#c4p83_hnv:checked").val()=='1'  && $("#c4p83b_hsvh").val()!='' )
		{
			$("#alert_c4p83b_hsvh_c4p84b_hfch").html("<b>Verificar, el valor seleccionado no puede ser mayor que el valor &iquest;Cu&aacute;ntos hombres? de la pregunta anterior.</b>");
			$("#alert_c4p83b_hsvh_c4p84b_hfch").show();
		}
		else
		{
			$("#alert_c4p83b_hsvh_c4p84b_hfch").html("");
			$("#alert_c4p83b_hsvh_c4p84b_hfch").hide();
			if((parseInt($("#c4p84b_hfch").val()) > parseInt($("#c4p82a_hnvh").val())) && $("#c4p82a_hnvh").val()!='')
			{
				$("#alert_c4p83b_hsvh_c4p84b_hfch").html("<b>Verificar, el valor seleccionado no puede ser mayor que el valor &iquest;Cu&aacute;ntos hombres? de la pregunta inicial.</b>");
				$("#alert_c4p83b_hsvh_c4p84b_hfch").show();
			}
			else
			{
				$("#alert_c4p83b_hsvh_c4p84b_hfch").html("");
				$("#alert_c4p83b_hsvh_c4p84b_hfch").hide();
			}
		}
	});
	
	//Funcion a los select de persona19 para que oculten el div que despliega los errores de hijos viven fuera de colombia - mujeres
	$("#c4p84c_hfcm").bind("click",function(){
		$("#alert_c4p84c_hfcm").html("");
		$("#alert_c4p84c_hfcm").hide();
	});
	
	$("#c4p84c_hfcm").bind("change",function(){
		$("#alert_c4p84c_hfcm").html("");
		$("#alert_c4p84c_hfcm").hide();
		if((parseInt($("#c4p84c_hfcm").val()) > parseInt($("#c4p83c_hsvm").val())) && $("#c4p83_hnv:checked").val()=='1'  && $("#c4p83c_hsvm").val()!='' )
		{
			$("#alert_c4p83c_hsvm_c4p84c_hfcm").html("<b>Verificar, el valor seleccionado no puede ser mayor que el valor &iquest;Cu&aacute;ntas mujeres? de la pregunta anterior.</b>");
			$("#alert_c4p83c_hsvm_c4p84c_hfcm").show();
		}
		else
		{
			$("#alert_c4p83c_hsvm_c4p84c_hfcm").html("");
			$("#alert_c4p83c_hsvm_c4p84c_hfcm").hide();
			if((parseInt($("#c4p84c_hfcm").val()) > parseInt($("#c4p82b_hnvm").val())) && $("#c4p82b_hnvm").val()!='')
			{
				$("#alert_c4p83c_hsvm_c4p84c_hfcm").html("<b>Verificar, el valor seleccionado no puede ser mayor que el valor &iquest;Cu&aacute;ntas mujeres? de la pregunta inicial.</b>");
				$("#alert_c4p83c_hsvm_c4p84c_hfcm").show();
			}
			else
			{
				$("#alert_c4p83c_hsvm_c4p84c_hfcm").html("");
				$("#alert_c4p83c_hsvm_c4p84c_hfcm").hide();
			}
		}
	});
	
	//Funcion a radiobutton de persona19 para que oculten el div que despliega errores de &uacute;ltimo hijo vivo actualmente
	$("#frmPage19 input[name='c4p85_uhva']:radio").bind("click",function(){
		if ($(this).is(':checked')){
			$("#alert_c4p85_uhva").html("");
			$("#alert_c4p85_uhva").hide();
		}
	});
	
	//Funcion a select de persona19 para que oculten el div que despliega errores de la fecha de nacimiento
	$("#c4p86a_dia_uhva").bind("click",function(){
		$("#alert_c4p86a_dia_uhva").html("");
		$("#alert_c4p86a_dia_uhva").hide();
		$("#alert_c4p86_fnuhv").html("");
		$("#alert_c4p86_fnuhv").hide();
	});
	
	$("#c4p86a_dia_uhva").bind("change",function(){
		$("#alert_c4p86a_dia_uhva").html("");
		$("#alert_c4p86a_dia_uhva").hide();
		$("#alert_c4p86_fnuhv").html("");
		$("#alert_c4p86_fnuhv").hide();
	});
	
	$("#c4p86b_mes_uhva").bind("click",function(){
		$("#alert_c4p86b_mes_uhva").html("");
		$("#alert_c4p86b_mes_uhva").hide();
		$("#alert_c4p86_fnuhv").html("");
		$("#alert_c4p86_fnuhv").hide();
	});
	
	$("#c4p86b_mes_uhva").bind("change",function(){
		$("#alert_c4p86b_mes_uhva").html("");
		$("#alert_c4p86b_mes_uhva").hide();
		$("#alert_c4p86_fnuhv").html("");
		$("#alert_c4p86_fnuhv").hide();
	});
	
	$("#c4p86c_ano_uhva").bind("click",function(){
		$("#alert_c4p86c_ano_uhva").html("");
		$("#alert_c4p86c_ano_uhva").hide();
		$("#alert_c4p86_fnuhv").html("");
		$("#alert_c4p86_fnuhv").hide();
	});
	
	$("#c4p86c_ano_uhva").bind("change",function(){
		$("#alert_c4p86c_ano_uhva").html("");
		$("#alert_c4p86c_ano_uhva").hide();
		$("#alert_c4p86_fnuhv").html("");
		$("#alert_c4p86_fnuhv").hide();
	});
	
	$("#btnSiguiente19").bind("click",function(){
		if ($("#frmPage19").valid())
		{
			var errorForm = false; //Variable de control de errores adicionales en el formulario
			if(parseInt($("#c4p82_thnv").val()) != (parseInt($("#c4p82a_hnvh").val()) + parseInt($("#c4p82b_hnvm").val())))
			{
				$("#alert_c4p82b_hnvm").html("<b>Verificar no coinciden los datos seleccionados</b>");
				$("#alert_c4p82b_hnvm").show();
				errorForm = true;
			}
			else
			{
				$("#alert_c4p82b_hnvm").html("");
				$("#alert_c4p82b_hnvm").hide();
			}
			
			if(parseInt($("#c4p82_thnv").val())>0)
			{
				if(parseInt($("#c4p83a_thsv").val()) != (parseInt($("#c4p83b_hsvh").val()) + parseInt($("#c4p83c_hsvm").val())) && ($("#c4p83_hnv:checked").val()=='1'))
				{
					$("#alert_c4p83c_hsvm").html("<b>Verificar no coinciden los datos seleccionados</b>");
					$("#alert_c4p83c_hsvm").show();
					errorForm = true;
				}
				else
				{
					$("#alert_c4p83b_hsvm").html("");
					$("#alert_c4p83b_hsvm").hide();
				}
				
				$("#alert_c4p82a_hnvh_c4p83b_hsvh").html("");
				$("#alert_c4p82a_hnvh_c4p83b_hsvh").hide();
				$("#alert_c4p82b_hnvm_c4p83c_hsvm").html("");
				$("#alert_c4p82b_hnvm_c4p83c_hsvm").hide();
				$("#alert_c4p83b_hsvh_c4p84b_hfch").html("");
				$("#alert_c4p83b_hsvh_c4p84b_hfch").hide();
				$("#alert_c4p83c_hsvm_c4p84c_hfcm").html("");
				$("#alert_c4p83c_hsvm_c4p84c_hfcm").hide();
	
				if(parseInt($("#c4p83b_hsvh").val()) > parseInt($("#c4p82a_hnvh").val()))
				{
					$("#alert_c4p82a_hnvh_c4p83b_hsvh").html("<b>Verificar, el valor seleccionado no puede ser mayor que el valor &iquest;Cu&aacute;ntos hombres? de la pregunta anterior.</b>");
					$("#alert_c4p82a_hnvh_c4p83b_hsvh").show();
					errorForm = true;
				}
				else if(parseInt($("#c4p83c_hsvm").val()) > parseInt($("#c4p82b_hnvm").val()))
				{
					$("#alert_c4p82b_hnvm_c4p83c_hsvm").html("<b>Verificar, el valor seleccionado no puede ser mayor que el valor &iquest;Cu&aacute;ntas mujeres? de la pregunta anterior.</b>");
					$("#alert_c4p82b_hnvm_c4p83c_hsvm").show();
					errorForm = true;
				}
	
				if($("#c4p83_hnv:checked").val()=='1' && parseInt($("#c4p83a_thsv").val())>0)
				{
					if(parseInt($("#c4p84a_thfc").val()) != (parseInt($("#c4p84b_hfch").val()) + parseInt($("#c4p84c_hfcm").val())) && $("#c4p84_hfc:checked").val()=='1')
					{
						$("#alert_c4p84c_hfcm").html("<b>Verificar no coinciden los datos seleccionados</b>");
						$("#alert_c4p84c_hfcm").show();
						errorForm = true;
					}
					else
					{
						$("#alert_c4p84c_hfcm").html("");
						$("#alert_c4p84c_hfcm").hide();
					}
		
					if((parseInt($("#c4p84b_hfch").val()) > parseInt($("#c4p83b_hsvh").val())) && $("#c4p83_hnv:checked").val()=='1'  && $("#c4p83b_hsvh").val()!='' )
					{
						$("#alert_c4p83b_hsvh_c4p84b_hfch").html("<b>Verificar, el valor seleccionado no puede ser mayor que el valor &iquest;Cu&aacute;ntos hombres? de la pregunta anterior.</b>");
						$("#alert_c4p83b_hsvh_c4p84b_hfch").show();
						errorForm = true;
					}
					else
					{
						$("#alert_c4p83b_hsvh_c4p84b_hfch").html("");
						$("#alert_c4p83b_hsvh_c4p84b_hfch").hide();
						if((parseInt($("#c4p84b_hfch").val()) > parseInt($("#c4p82a_hnvh").val())) && $("#c4p82a_hnvh").val()!='')
						{
							$("#alert_c4p83b_hsvh_c4p84b_hfch").html("<b>Verificar, el valor seleccionado no puede ser mayor que el valor &iquest;Cu&aacute;ntos hombres? de la pregunta inicial.</b>");
							$("#alert_c4p83b_hsvh_c4p84b_hfch").show();
							errorForm = true;
						}
						else
						{
							$("#alert_c4p83b_hsvh_c4p84b_hfch").html("");
							$("#alert_c4p83b_hsvh_c4p84b_hfch").hide();
						}
					}
	
					if((parseInt($("#c4p84c_hfcm").val()) > parseInt($("#c4p83c_hsvm").val())) && $("#c4p83_hnv:checked").val()=='1'  && $("#c4p83c_hsvm").val()!='' )
					{
						$("#alert_c4p83c_hsvm_c4p84c_hfcm").html("<b>Verificar, el valor seleccionado no puede ser mayor que el valor &iquest;Cu&aacute;ntas mujeres? de la pregunta anterior.</b>");
						$("#alert_c4p83c_hsvm_c4p84c_hfcm").show();
						errorForm = true;
					}
					else
					{
						$("#alert_c4p83c_hsvm_c4p84c_hfcm").html("");
						$("#alert_c4p83c_hsvm_c4p84c_hfcm").hide();
						if((parseInt($("#c4p84c_hfcm").val()) > parseInt($("#c4p82b_hnvm").val())) && $("#c4p82b_hnvm").val()!='')
						{
							$("#alert_c4p83c_hsvm_c4p84c_hfcm").html("<b>Verificar, el valor seleccionado no puede ser mayor que el valor &iquest;Cu&aacute;ntas mujeres? de la pregunta inicial.</b>");
							$("#alert_c4p83c_hsvm_c4p84c_hfcm").show();
							errorForm = true;
						}
						else
						{
							$("#alert_c4p83c_hsvm_c4p84c_hfcm").html("");
							$("#alert_c4p83c_hsvm_c4p84c_hfcm").hide();
						}
					}
				}

				/**
				 * Proceso para validar los d&iacute;as respecto a la fecha de nacimiento seleccionada
				 * @author RFHuertasT - Roberto Fernando Huertas Torres
				 * @since 26/10/2015
				 * @param 	fechaActual: Almacena la fecha actual - FechaNacimiento: Almacena la fecha de nacimiento seleccionada
				 * @param 	diferenciaDias: Calcula la diferencia en d&iacute;as entre la fecha actul y la fecha de nacimiento seleccionada
				 */
				
				var d = new Date();
				var fechaActual = (d.getMonth()+1) + "/" + d.getDate() + "/" + d.getFullYear();
				var fechaNacimiento = $("#c4p86b_mes_uhva").val() + "/" + $("#c4p86a_dia_uhva").val() + "/" + $("#c4p86c_ano_uhva").val();
				var diferenciaDias =  Math.floor(( Date.parse(fechaActual) - Date.parse(fechaNacimiento) ) / 86400000);
				if(diferenciaDias < 0){
					$("#alert_c4p86_fnuhv").html("<b>La fecha de nacimiento especificada debe ser menor o igual que la fecha actual.</b>");
					$("#alert_c4p86_fnuhv").show();
					diferenciaDias = diferenciaDias*(-1);
					errorForm = true;
				}
			}

			if(errorForm == false)
			{
				ajaxGuardarPersona(19);
			}
		}
	});
	
	//***** Fin - Validaciones de la pagina persona19


	//***** Inicio - Validaciones de la pagina persona20
	
	$("#frmPage20").validate({
		rules: {
			cap87_ori_sex: { required: true },
			cap88_rec_genero: { required: true }
		},
		messages: {
			cap87_ori_sex: { required: "<b>Debe seleccionar una de las opciones</b>" },
			cap88_rec_genero: { required: "<b>Debe seleccionar una de las opciones</b>" }
		},
		errorPlacement: function(error, element) {			
			switch(element.attr("id"))
			{
				case "cap87_ori_sex":  		$("#alert_cap87_ori_sex").show();
											$("#alert_cap87_ori_sex").html(error);			
											break;	
										
				case "cap88_rec_genero":	$("#alert_cap88_rec_genero").show();
											$("#alert_cap88_rec_genero").html(error);
											break;						
										
			}
		},
		submitHandler: function(form) {			
			if ($("#frmPage20").valid()){
				$("#page21").show();
				$("#page20").hide();
				$("html, body").scrollTop(0);
			}						
		}
	});

	//Funcion a todos los radiobuttons de persona20 para que oculten el div que despliega los errores
	$("#frmPage20 input[name='cap87_ori_sex']:radio").bind("click",function(){
		if ($(this).is(':checked')){
			$("#alert_cap87_ori_sex").hide();
		}
	});
	
	$("#frmPage20 input[name='cap88_rec_genero']:radio").bind("click",function(){
		if ($(this).is(':checked')){
			$("#alert_cap88_rec_genero").hide();
		}
	});
	
	$("#btnSiguiente20").bind("click",function(){		
		if ($("#frmPage20").valid())
		{
			ajaxGuardarPersona(20);
		}
	});

	//***** Fin - Validaciones de la pagina persona20


	//***** Inicio - Validaciones de la pagina persona21
	
	$("#frmPage21").validate({
		rules: {
			c4p90_lug_cens: { required: true },
			c4p89_fue_cens: { required: true },
			c4p90a_dpto_cens: { required: true },
			c4p90b_mpio_cens: { required: true },
			c4p91_mes_cens: { required: true }
		},
		messages: {
			c4p90_lug_cens: { required: "<b>Debe seleccionar una de las opciones.</b>" },
			c4p89_fue_cens: { required: "<b>Debe seleccionar una de las opciones.</b>" },
			c4p90a_dpto_cens: { required: "<b>Debe seleccionar un departamento.</b>" },
			c4p90b_mpio_cens: { required: "<b>Debe seleccionar un municipio.</b>" },
			c4p91_mes_cens: { required: "<b>Debe seleccionar un pa\u00eds.</b>" }
		},
		errorPlacement: function(error, element) {			
			switch(element.attr("id"))
			{
				case "c4p90_lug_cens":  	$("#alert_c4p90_lug_cens").show();	
										$("#alert_c4p90_lug_cens").html(error);
										break;	
										
				case "c4p89_fue_cens":	$("#alert_c4p89_fue_cens").show();	
										$("#alert_c4p89_fue_cens").html(error);
										break;						
										
				case "c4p90a_dpto_cens":	$("#alert_c4p90a_dpto_cens").show();	
										$("#alert_c4p90a_dpto_cens").html(error);
										break;						
	
				case "c4p90b_mpio_cens":	$("#alert_c4p90b_mpio_cens").show();	
										$("#alert_c4p90b_mpio_cens").html(error);
										break;
										
				case "c4p91_mes_cens":	$("#alert_c4p91_mes_cens").show();	
										$("#alert_c4p91_mes_cens").html(error);
										break;
										
			}
		},
		submitHandler: function(form) {			
			if ($("#frmPage21").valid())
			{
				var url = "http://192.168.1.200/dimpe/cnpv/persona";    
				$(location).attr("href",url);
				$("html, body").scrollTop(0);
			}						
		}
	});
	
	//Funcion a todos los radiobuttons de persona21 para que oculten el div que despliega los errores
	$("#frmPage21 input[name='c4p89_fue_cens']:radio").bind("click",function(){
		if ($(this).is(':checked')){
			$("#alert_c4p89_fue_cens").html("");
			$("#alert_c4p89_fue_cens").hide();
			if($("#c4p89_fue_cens:checked").val()=='2' || $("#c4p89_fue_cens:checked").val()=='3' )
			{
				$("#c4p90_lug_cens:checked").removeAttr('checked');
				$("#div_c4p90_lug_cens_otro_mpio").hide();
				$("#c4p90a_dpto_cens").prop('selectedIndex', 0);
				$("#c4p90b_mpio_cens").prop('selectedIndex', 0);
				$("#c4p91_mes_cens:checked").removeAttr('checked');
				
				ajaxGuardarPersona(21);
			}
		}
	});
	
	$("#frmPage21 input[name='c4p90_lug_cens']:radio").bind("click",function(){
		if ($(this).is(':checked')){
			$("#alert_c4p90_lug_cens").html("");
			$("#alert_c4p90_lug_cens").hide();
			if($("#c4p90_lug_cens:checked").val()=='2')
			{
				$("#div_c4p90_lug_cens_otro_mpio").show();				
			}
			else
			{
				$("#div_c4p90_lug_cens_otro_mpio").hide();
				$("#c4p90a_dpto_cens").prop('selectedIndex', 0);
				$("#c4p90b_mpio_cens").prop('selectedIndex', 0);
			}
		}
	});
	
	$("#c4p90a_dpto_cens").bind("click",function(){
		$("#alert_c4p90a_dpto_cens").html("");
		$("#alert_c4p90a_dpto_cens").hide();
	});
	
	$("#c4p90b_mpio_cens").bind("click",function(){
		$("#alert_c4p90b_mpio_cens").html("");
		$("#alert_c4p90b_mpio_cens").hide();
	});
	
	$("#c4p91_mes_cens").bind("click",function(){
		$("#alert_c4p91_mes_cens").html("");
		$("#alert_c4p91_mes_cens").hide();
	});
	
	$("#btnSiguiente21").bind("click",function(){		
		if ($("#frmPage21").valid())
		{
			ajaxGuardarPersona(21);
		}
	});

	//***** Fin - Validaciones de la pagina persona21


	$("#masnoestudioa").bind("click",function(){
		var contiene=$("#masnoestudioa").val();
		
		if (contiene=="+")
		{
			$("#desnoestudioa").show();
			$("#masnoestudioa").val("-");
		}
		else 
		{
			$("#desnoestudioa").hide();
			$("#masnoestudioa").val("+");
		}
	});
	
	$("#masnoestudiob").bind("click",function(){
		var contiene=$("#masnoestudiob").val();
		
		if (contiene=="+")
		{
			$("#desnoestudiob").show();
			$("#masnoestudiob").val("-");
		}
		else 
		{
			$("#desnoestudiob").hide();
			$("#masnoestudiob").val("+");
		}
	});
	
	$("#masnoestudioc").bind("click",function(){
		var contiene=$("#masnoestudioc").val();
		
		if (contiene=="+")
		{
			$("#desnoestudioc").show();
			$("#masnoestudioc").val("-");
		}
		else 
		{
			$("#desnoestudioc").hide();
			$("#masnoestudioc").val("+");
		}
	});
	
	$("#masnoestudiod").bind("click",function(){
		var contiene=$("#masnoestudiod").val();
		
		if (contiene=="+")
		{
			$("#desnoestudiod").show();
			$("#masnoestudiod").val("-");
		}
		else 
		{
			$("#desnoestudiod").hide();
			$("#masnoestudiod").val("+");
		}
	});
	
	$("#masnoestudioe").bind("click",function(){
		var contiene=$("#masnoestudioe").val();
		
		if (contiene=="+")
		{
			$("#desnoestudioe").show();
			$("#masnoestudioe").val("-");
		}
		else 
		{
			$("#desnoestudioe").hide();
			$("#masnoestudioe").val("+");
		}
	});
	
	$("#masnoestudiof").bind("click",function(){
		var contiene=$("#masnoestudiof").val();
		
		if (contiene=="+")
		{
			$("#desnoestudiof").show();
			$("#masnoestudiof").val("-");
		}
		else 
		{
			$("#desnoestudiof").hide();
			$("#masnoestudiof").val("+");
		}
	});
	
	$("#masnoestudiog").bind("click",function(){
		$("#alert_cap72c7_otra").html("");
		$("#alert_cap72c7_otra").hide();
		$("#cap72c7_otra").val('');
		
		var contiene=$("#masnoestudiog").val();
		
		if (contiene=="+")
		{
			$("#desnoestudiog").show();
			$("#masnoestudiog").val("-");
			var $radios = $('input:radio[name=cap72_causa]');
			$radios.filter('[value=28]').prop('checked', true);
			$("#cap72c7_otra").focus();
		}
		else 
		{
			$("#desnoestudiog").hide();
			$("#masnoestudiog").val("+");
			$("#cap72_causa:checked").removeAttr('checked');
		}
	});
	
	$("#masactempresa1").bind("click",function(){
		var contiene=$("#masactempresa1").val();
		
		if (contiene=="+")
		{
			$("#desctempresa1").show();
			$("#masactempresa1").val("-");
		}
		else 
		{
			$("#desctempresa1").hide();
			$("#masactempresa1").val("+");
		}
	});
	
	$("#masactempresa2").bind("click",function(){
		var contiene=$("#masactempresa2").val();
		
		if (contiene=="+")
		{
			$("#desctempresa2").show();
			$("#masactempresa2").val("-");
		}
		else 
		{
			$("#desctempresa2").hide();
			$("#masactempresa2").val("+");
		}
	});
	
	$("#masactempresa3").bind("click",function(){
		var contiene=$("#masactempresa3").val();
		
		if (contiene=="+")
		{
			$("#desctempresa3").show();
			$("#masactempresa3").val("-");
		}
		else 
		{
			$("#desctempresa3").hide();
			$("#masactempresa3").val("+");
		}
	});
	
	$("#masactempresa4").bind("click",function(){
		var contiene=$("#masactempresa4").val();
		
		if (contiene=="+")
		{
			$("#desctempresa4").show();
			$("#masactempresa4").val("-");
		}
		else 
		{
			$("#desctempresa4").hide();
			$("#masactempresa4").val("+");
		}
	});
	
	$("#masactempresa5").bind("click",function(){
		var contiene=$("#masactempresa5").val();
		
		if (contiene=="+")
		{
			$("#desctempresa5").show();
			$("#masactempresa5").val("-");
		}
		else 
		{
			$("#desctempresa5").hide();
			$("#masactempresa5").val("+");
		}
	});
	
	
	$("#masactempresa6").bind("click",function(){
		var contiene=$("#masactempresa6").val();
		if (contiene=="+")
		{
			$("#desctempresa6").show();
			$("#masactempresa6").val("-");
		}
		else 
		{
			$("#desctempresa6").hide();
			$("#masactempresa6").val("+");
		}
	});
	
	$("#masactempresa7").bind("click",function(){
		var contiene=$("#masactempresa7").val();
		if (contiene=="+")
		{
			$("#desctempresa7").show();
			$("#masactempresa7").val("-");
		}
		else 
		{
			$("#desctempresa7").hide();
			$("#masactempresa7").val("+");
		}
	});
	
	$("#masactempresa8").bind("click",function(){
		var contiene=$("#masactempresa8").val();
		if (contiene=="+")
		{
			$("#desctempresa8").show();
			$("#masactempresa8").val("-");
		}
		else 
		{
			$("#desctempresa8").hide();
			$("#masactempresa8").val("+");
		}
	});
	
	$("#masactempresa9").bind("click",function(){
		var contiene=$("#masactempresa9").val();
		
		if (contiene=="+")
		{
			$("#desctempresa9").show();
			$("#masactempresa9").val("-");
		}
		else 
		{
			$("#desctempresa9").hide();
			$("#masactempresa9").val("+");
		}
	});
	
	$("#masactempresa10").bind("click",function(){
		var contiene=$("#masactempresa10").val();
		
		if (contiene=="+")
		{
			$("#desctempresa10").show();
			$("#masactempresa10").val("-");
		}
		else 
		{
			$("#desctempresa10").hide();
			$("#masactempresa10").val("+");
		}
	});
	
	$("#masactempresa11").bind("click",function(){
		var contiene=$("#masactempresa11").val();
		
		if (contiene=="+")
		{
			$("#desctempresa11").show();
			$("#masactempresa11").val("-");
		}
		else 
		{
			$("#desctempresa11").hide();
			$("#masactempresa11").val("+");
		}
	});
	
	$("#masactempresa12").bind("click",function(){
		var contiene=$("#masactempresa12").val();
		
		if (contiene=="+")
		{
			$("#desctempresa12").show();
			$("#masactempresa12").val("-");
		}
		else 
		{
			$("#desctempresa12").hide();
			$("#masactempresa12").val("+");
		}
	});
	
	$("#masactempresa13").bind("click",function(){
		var contiene=$("#masactempresa13").val();
		
		if (contiene=="+")
		{
			$("#desctempresa13").show();
			$("#masactempresa13").val("-");
		}
		else 
		{
			$("#desctempresa13").hide();
			$("#masactempresa13").val("+");
		}
	});
	
	$("#masactempresa14").bind("click",function(){
		var contiene=$("#masactempresa14").val();
		
		if (contiene=="+")
		{
			$("#desctempresa14").show();
			$("#masactempresa14").val("-");
		}
		else 
		{
			$("#desctempresa14").hide();
			$("#masactempresa14").val("+");
		}
	});
	
	$("#masactempresa15").bind("click",function(){
		var contiene=$("#masactempresa15").val();
		
		if (contiene=="+")
		{
			$("#desctempresa15").show();
			$("#masactempresa15").val("-");
		}
		else 
		{
			$("#desctempresa15").hide();
			$("#masactempresa15").val("+");
		}
	});
	
});//EOC



/**
 * Funci&oacuten para validar la entrada de texto en un textbox. Recibe solo n&uacute;meros
 * @author RFHuertasT - Roberto Fernando Huertas Torres
 * @since 21/10/2015
 * @param evt: c&oacutedigo de la tecla presionada 
 * @return respuesta - variable booleana para aceptar (true) o rechazar (false) la entrada de texto
 */
function soloNumeros(evt)
{  
    //Validar la existencia del objeto event  
    evt = (evt) ? evt : event;  
    //Extraer el codigo del caracter de uno de los diferentes grupos de codigos  
    var charCode = (evt.charCode) ? evt.charCode : ((evt.keyCode) ? evt.keyCode : ((evt.which) ? evt.which : 0));  
    //Predefinir como valido  
    var respuesta = true;  
    //Validar si el codigo corresponde a los NO aceptables  
    if (charCode > 31 && (charCode < 48 || charCode > 57))
    {  
        //Asignar FALSE a la respuesta si es de los NO aceptables  
        respuesta = false;  
    }  
    //Regresar la respuesta  
    return respuesta;  
}

/**
 * Funci&oacuten para validar la entrada de texto en un textbox. Recibe: letras mayusculas, letras minusculas, retroceso, &ntilde;, &Ntilde;,
 * espacio, vocales minusculas con tilde, vocales mayusculas con tilde
 * @author RFHuertasT - Roberto Fernando Huertas Torres
 * @since 06/11/2015
 * @param key: c&oacutedigo de la tecla presionada 
 */

$.fn.bloquearTexto2 = function() {
	return this.keypress(function(event)
	{
	    if ((event.which < 97 || event.which > 122)//letras mayusculas
	        && (event.which < 65 || event.which > 90) //letras minusculas
	        && (event.which != 45) //retroceso
	        && (event.which != 241) //ñ
	         && (event.which != 209) //Ñ
	         && (event.which != 32) //espacio
	         && (event.which != 225) //á
	         && (event.which != 233) //é
	         && (event.which != 237) //í
	         && (event.which != 243) //ó
	         && (event.which != 250) //ú
	         && (event.which != 193) //Á
	         && (event.which != 201) //É
	         && (event.which != 205) //Í
	         && (event.which != 211) //Ó
	         && (event.which != 218) //Ú
	        )
	    	return false;
	    else
	    	return true;
	});     
};

/**
 * Funci&oacuten para validar la edad de la perosna
 * @author RFHuertasT - Roberto Fernando Huertas Torres
 * @since 08/11/2015
 * @param dia: d&iacute;a de nacimiento, mes: mes de nacimiento, ano: a&ntildeo;o de nacimiento
 * @return edad: Variable que almacena la edad calculada 
 */
function calculaEdad(dia, mes, ano)
{
    //tomar los valores actuales
    var fecha_hoy = new Date();
    var ahora_ano = fecha_hoy.getFullYear();
    var ahora_mes = fecha_hoy.getMonth()+1;
    var ahora_dia = fecha_hoy.getDate();
    
    // realizar el calculo
    var edad = (ahora_ano + 1895) - ano;
    if ( ahora_mes < mes )
    	edad--;
    
    if ((mes == ahora_mes) && (ahora_dia < dia))
    	edad--;

    if (edad > 1894)
        edad -= 1895;
    
    return edad;
}

function ajaxGuardarPersona(index){
	$.ajax({
		type: "POST",
		url: base_url + "persona/persona/guardarPersona/" + $("#nroPersona"+index).val(),
		
		data: $("#frmPage"+index).serialize(),			
		dataType: "html",
		contentType: "application/x-www-form-urlencoded;charset=UTF-8",
		cache: false,
		success: function(data){
			switch(index){
				case 1: //Guardar preguntas formulario 1
						$("html, body").scrollTop(0);
						if($("#c4p49_parentesco").val()=='1')
						{
							$("#page3").show();
							$("#edadPersona3").val($("#c4p47_edad").val());
							$("#nroPersona3").val($("#nroPersona1").val());
						}
						else
						{
							$("#page2").show();
							$("#edadPersona2").val($("#c4p47_edad").val());
							$("#nroPersona2").val($("#nroPersona1").val());
						}
						$("#page1").hide();
						break;

				case 2: //Guardar preguntas formulario 2
						$("html, body").scrollTop(0);
						$("#edadPersona3").val($("#edadPersona2").val());
						$("#nroPersona3").val($("#nroPersona2").val());
						$("#page3").show();
						$("#page2").hide();
						break;

				case 3: //Guardar preguntas formulario 3
						$("html, body").scrollTop(0);
						if($("#edadPersona3").val()<5)
							if($("#edadPersona3").val()<1)
							{
								$("#page6").show();
								$("#edadPersona6").val($("#edadPersona3").val());
								$("#nroPersona6").val($("#nroPersona3").val());
							}
							else
							{
								$("#page5").show();
								$("#edadPersona5").val($("#edadPersona3").val());
								$("#nroPersona5").val($("#nroPersona3").val());
							}
						else
						{
							$("#page4").show();
							$("#edadPersona4").val($("#edadPersona3").val());
							$("#nroPersona4").val($("#nroPersona3").val());
						}
						$("#page3").hide();
						break;

				case 4: //Guardar preguntas formulario 4
						$("html, body").scrollTop(0);
						$("#page5").show();
						$("#edadPersona5").val($("#edadPersona4").val());
						$("#nroPersona5").val($("#nroPersona4").val());
						$("#page4").hide();
						break;

				case 5: //Guardar preguntas formulario 5 
						$("html, body").scrollTop(0);
						$("#page6").show();
						$("#edadPersona6").val($("#edadPersona5").val());
						$("#nroPersona6").val($("#nroPersona5").val());
						$("#page5").hide();
						break;

				case 6: //Guardar preguntas formulario 6
						$("html, body").scrollTop(0);
						$("#page8").show();
						$("#edadPersona8").val($("#edadPersona6").val());
						$("#nroPersona8").val($("#nroPersona6").val());
						$("#page6").hide();	
						break;

				case 7: //Guardar preguntas formulario 7
						$("html, body").scrollTop(0);
						$("#page8").show();
						$("#edadPersona8").val($("#edadPersona7").val());
						$("#nroPersona8").val($("#nroPersona7").val());
						$("#page7").hide();
						break;

				case 8: //Guardar preguntas formulario 8
						$("html, body").scrollTop(0);
						$("#page9").show();
						$("#edadPersona9").val($("#edadPersona8").val());
						$("#nroPersona9").val($("#nroPersona8").val());
						$("#page8").hide();
						break;

				case 9: //Guardar preguntas formulario 9
						$("html, body").scrollTop(0);
						if((parseInt($("#c4p64a_oir:checked").val()) + parseInt($("#c4p64b_hablar:checked").val()) + parseInt($("#c4p64c_ver:checked").val()) 
							+ parseInt($("#c4p64d_caminar:checked").val()) + parseInt($("#c4p64e_coger:checked").val()) + parseInt($("#c4p64f_decidir:checked").val()) 
							+ parseInt($("#c4p64g_comer:checked").val()) + parseInt($("#c4p64h_relacion:checked").val()) + parseInt($("#c4p64i_tareas:checked").val()) ) == 36)
						{ // No hay dificultades, entonces no se muestra interfaz siguiente de dificultades
							if($("#edadPersona9").val()<5)
							{
								$("#page11").show();
								$("#edadPersona11").val($("#edadPersona9").val());
								$("#nroPersona11").val($("#nroPersona9").val());
								$("#hint_c4p70_edu_integ").hint("Modalidad familiar para la atenci&oacute;n integral:","Esta modalidad hace referencia al programa de 0 a Siempre que se desarrolla a trav&eacute;s de talleres de formaci&oacute;n y acompa&ntilde;amiento, as&iacute; como de visitas de seguimiento en el hogar a las familias y cuidadores de ni&ntilde;os menores de 5 a&ntilde;os.");
							}
							else
							{
								$("#page111").show();
								$("#edadPersona111").val($("#edadPersona9").val());
								$("#nroPersona111").val($("#nroPersona9").val());
								$("#hint_c4p71_alfabeta").hintOpen("","Tenga en cuenta que una persona sabe leer y escribir si es capaz de leer y escribir un p&aacute;rrafo sencillo al menos en su idioma nativo");
							}
						}
						else // tiene dificultades
						{
							$.ajax({
								type: "POST",
								url: base_url + "persona/persona/actualizarLPpal/" + $("#nroPersona9").val() + "/comboDesempeno",
								
								data: "",			
								//dataType: "html",
								dataType: "json",
								contentType: "application/x-www-form-urlencoded;charset=UTF-8",
								cache: false,
								success: function(data){
									//$("#c4p65_lim_ppal").html(data);
									$("#c4p65_lim_ppal").html(data.opcDif);
									if(data.variasDif ==1)
										$("#div_desempeno").show();
									else
										$("#div_desempeno").hide();
								},
								error: function(data)
								{
									if (data!="")
									{
										alert("ERROR: " + data.status + "\n" + data.statusText + "\n" + data.responseText.trim());						
									}
								}				
							});	
							$.ajax({
								type: "POST",
								url: base_url + "persona/persona/actualizarLPpal/" + $("#nroPersona9").val() + "/dificultad",
								
								data: "",		
								//dataType: "html",
								dataType: "json",
								contentType: "application/x-www-form-urlencoded;charset=UTF-8",
								cache: false,
								success: function(data){
									$("#div_LPpal").html(data.opcDif);
									$("#div_LPpal1").html(data.opcDif);
									
								},
								error: function(data)
								{
									if (data!="")
									{
										alert("ERROR: " + data.status + "\n" + data.statusText + "\n" + data.responseText.trim());						
									}
								}				
							});
							$("#page10").show();
							$("#edadPersona10").val($("#edadPersona9").val());
							$("#nroPersona10").val($("#nroPersona9").val());
						}
						$("#page9").hide();
						break;

				case 10: //Guardar preguntas formulario 10
						$("html, body").scrollTop(0);
						if($("#edadPersona10").val()<5)
						{
							$("#page11").show();
							$("#edadPersona11").val($("#edadPersona10").val());
							$("#nroPersona11").val($("#nroPersona10").val());
							$("#hint_c4p70_edu_integ").hint("Modalidad familiar para la atenci&oacute;n integral:","Esta modalidad hace referencia al programa de 0 a Siempre que se desarrolla a trav&eacute;s de talleres de formaci&oacute;n y acompa&ntilde;amiento, as&iacute; como de visitas de seguimiento en el hogar a las familias y cuidadores de ni&ntilde;os menores de 5 a&ntilde;os.");
						}
						else
						{
							$("#page111").show();
							$("#edadPersona111").val($("#edadPersona10").val());
							$("#nroPersona111").val($("#nroPersona10").val());
							$("#hint_c4p71_alfabeta").hintOpen("","Tenga en cuenta que una persona sabe leer y escribir si es capaz de leer y escribir un p&aacute;rrafo sencillo al menos en su idioma nativo");
						}
						$("#page10").hide();	
						break;

				case 11: //Guardar preguntas formulario 11
						$("html, body").scrollTop(0);
						if(($('#c4p68_cuida:checked').val()==7) || ($("#c4p69_estab_asis:checked").val()>=1 && $("#c4p69_estab_asis:checked").val()<=6 ) || ($("#c4p70_edu_integ").val()>=1 && $("#c4p70_edu_integ").val()<=2 ))
						{
							//$("#page21").show();
							$("#edadPersona21").val($("#edadPersona11").val());
							$("#nroPersona21").val($("#nroPersona11").val());
							var url = base_url + "persona";
							$(location).attr("href",url);
						}
						else
						{
							$("#page12").show();
							$("#edadPersona12").val($("#edadPersona11").val());
							$("#nroPersona12").val($("#nroPersona11").val());
						}
						$("#page11").hide();
						break;

				case 111: //Guardar preguntas formulario 11
						$("html, body").scrollTop(0);
						$("#page12").show();
						$("#edadPersona12").val($("#edadPersona111").val());
						$("#nroPersona12").val($("#nroPersona111").val());
						$("#page111").hide();
						break;

				case 12: //Guardar preguntas formulario 12
						$("html, body").scrollTop(0);
						$("#page13").show();
						$("#edadPersona13").val($("#edadPersona12").val());
						$("#nroPersona13").val($("#nroPersona12").val());
						$("#page12").hide();
						break;

				case 13: //Guardar preguntas formulario 13
						$("html, body").scrollTop(0);
						$("#page14").show();
						$("#edadPersona14").val($("#edadPersona13").val());
						$("#nroPersona14").val($("#nroPersona13").val());
						$("#page13").hide();
						break;

				case 14: //Guardar preguntas formulario 14
						$("html, body").scrollTop(0);
						if($("#edadPersona14").val()>=10)
						{
							$("#page15").show();
							$("#edadPersona15").val($("#edadPersona14").val());
							$("#nroPersona15").val($("#nroPersona14").val());
						}
						else
						{
							$("#edadPersona21").val($("#edadPersona14").val());
							$("#nroPersona21").val($("#nroPersona14").val());
							var url = base_url + "persona";
							$(location).attr("href",url);
						}
						$("#page14").hide();
						break;

				case 15: //Guardar preguntas formulario 15
						$("html, body").scrollTop(0);
						if(($('#c4p75_trabajo:checked').val()==1 || $('#c4p75_trabajo:checked').val()==2 ) || (parseInt($("#cap76a_neg_flia:checked").val()) + parseInt($("#cap76b_neg_flig:checked").val()) + parseInt($("#cap76c_neg_flif:checked").val()) + 
								parseInt($("#cap76d_neg_flie:checked").val()) + parseInt($("#cap76e_neg_flid:checked").val()) + parseInt($("#cap76f_neg_flic:checked").val()) + 
								parseInt($("#cap76g_neg_flib:checked").val()) < 14))
						{
							$("#page16").show();
							$("#edadPersona16").val($("#edadPersona15").val());
							$("#nroPersona16").val($("#nroPersona15").val());
						}
						else
						{
							$("#page17").show();
							$("#edadPersona17").val($("#edadPersona15").val());
							$("#nroPersona17").val($("#nroPersona15").val());
							
							// 2016feb09 - hhchavezv - Limpia preguntas 77, 78 y  79
							$('input:radio[name=c4p78_tipo_trab]').prop('checked', false);
							$('input:radio[name=c4p79_sitio_trab]').prop('checked', false);
							$("#c4p79a_dpto_trab").prop('selectedIndex', '');
							$("#c4p79b_mpio_trab").prop('selectedIndex', '');
							$("#c4p79c_pais_trab").prop('selectedIndex', '');
							
							$("#div_page17").hide();
						}
						$("#page15").hide();
						break;

				case 16: //Guardar preguntas formulario 16
						$("html, body").scrollTop(0);
						$("#page17").show();
						$("#edadPersona17").val($("#edadPersona16").val());
						$("#nroPersona17").val($("#nroPersona16").val());
						$("#page16").hide();
						break;

				case 17: //Guardar preguntas formulario 17
						$("html, body").scrollTop(0);
						$("#page18").show();
						$("#edadPersona18").val($("#edadPersona17").val());
						$("#nroPersona18").val($("#nroPersona17").val());
						$("#page17").hide();
						break;

				case 18: //Guardar preguntas formulario 18
						$("html, body").scrollTop(0);
						if($("#sexoPersona").val()==2)
						{
							$("#page19").show();
							$("#edadPersona19").val($("#edadPersona18").val());
							$("#nroPersona19").val($("#nroPersona18").val());
						}
						else
						{
							$("#edadPersona21").val($("#edadPersona18").val());
							$("#nroPersona21").val($("#nroPersona18").val());
							var url = base_url + "persona";
							$(location).attr("href",url);
						}
						$("#page18").hide();
						break;

				case 19: //Guardar preguntas formulario 19
						$("html, body").scrollTop(0);
						$("#edadPersona21").val($("#edadPersona19").val());
						$("#nroPersona21").val($("#nroPersona19").val());
						$("#page19").hide();
						var url = base_url + "persona";
						$(location).attr("href",url);
						break;

				case 20: //Guardar preguntas formulario 20
						$("html, body").scrollTop(0);
						$("#edadPersona21").val($("#edadPersona20").val());
						$("#nroPersona21").val($("#nroPersona20").val());
						$("#page20").hide();
						var url = base_url + "persona";
						$(location).attr("href",url);
						break;

				case 21: //Guardar preguntas formulario 21
						$("html, body").scrollTop(0);
						//var url = "http://192.168.1.200/dimpe/cnpv/persona";    
						var url = base_url + "persona";
						$(location).attr("href",url);
						break;
			}					
		},
		error: function(data)
		{
			if (data!="")
			{
				//alert("ERROR: " + data.status + "\n" + data.statusText + "\n" + data.responseText.trim());			
				console.log("ERROR: " + data.status + "\n" + data.statusText + "\n" + data.responseText.trim());			
			}
		}				
	});
}

