<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	/**
	 * Modelo para validación de datos de cedulas a través de Web Services
	 * Se realiza conexión con Web Service en registraduria en la direccion: http://172.20.60.90:8080/aniws/WSConsultas?wsdl   
	 * @author Daniel M. Díaz
	 * @since  15/02/2016	 
	 **/

	class WSModel extends CI_Model {
		
		var $proxyhost;
		var $proxyport;
		var $proxyusername;
		var $proxypassword;
		var $wsdl;
	
		/**
		 * Funcion que carga las librerias necesarias para el consumo del web service
		 * @author dmdiazf
		 * @since  15/02/2016 
		 */
		function __construct(){
			parent::__construct();
			$this->load->library("Nusoap");
			$this->proxyhost = isset($_POST['proxyhost']) ? $_POST['proxyhost'] : NULL;
			$this->proxyport = isset($_POST['proxyport']) ? $_POST['proxyport'] : NULL;
			$this->proxyusername = isset($_POST['proxyusername']) ? $_POST['proxyusername'] : NULL;
			$this->proxypassword = isset($_POST['proxypassword']) ? $_POST['proxypassword'] : NULL;			
			$this->wsdl = "http://172.20.60.90:8080/aniws/WSConsultas?wsdl";
		}
		
		/**
		 * Funcion que valida si una cedula es valida o no valida con la registraduria.
		 * se obtiene un valor de retorno booleano que indica si la cedula es valida o no lo es.
		 * @author dmdiazf
		 * @since  15/02/2016
		 **/
		public function validarCedulaWS($cedula){
			//0 - Valida
			//1 - No valida
			//2 - No se pudo conectar
			$retorno = false;
			$result = false;
			$arrayXML = array();
			$client = new nusoap_client($this->wsdl, 'wsdl', $this->proxyhost, $this->proxyport, $this->proxyusername, $this->proxypassword);
			$param = array("cedulas" => '<?xml version="1.0" encoding="utf-8"?><solicitudConsultaEstadoCedula><NUIP>'.$cedula.'</NUIP></solicitudConsultaEstadoCedula>',
					       "contrasena" => 'password',
					       "entidad" => '9418',
					       "usuario" => 'DANE');
			$result = $client->call("consultarCedulas", $param, '', '', false, true);
			if (!$result){
				$estado = 2;
			}
			else{	
				$arrayXML = json_decode(json_encode((array) simplexml_load_string($result["return"])), 1);
				$estado = ($arrayXML["datosCedulas"]["datos"]["codError"] == 0)?0:1;
			}
			return $estado;
		}
		
		
		/**
		 * Funcion que valida si una cedula es valida o no valida con la registraduria a través de un WS
		 * Se obtiene un array con todos los datos recibidos de la registraduria.
		 * @author dmdiazf
		 * @since  15/02/2016
		 */
		public function validaCedulaWSData($cedula){
			$retorno = array();
			$arrayXML = array();
			$client = new nusoap_client($this->wsdl, 'wsdl', $this->proxyhost, $this->proxyport, $this->proxyusername, $this->proxypassword);
			$param = array("cedulas" => '<?xml version="1.0" encoding="utf-8"?><solicitudConsultaEstadoCedula><NUIP>'.$cedula.'</NUIP></solicitudConsultaEstadoCedula>',
					       "contrasena" => 'password',
					       "entidad" => '9418',
					       "usuario" => 'DANE');
			$result = $client->call("consultarCedulas", $param, '', '', false, true);
			$arrayXML = json_decode(json_encode((array) simplexml_load_string($result["return"])), 1);
			$retorno = $arrayXML["datosCedulas"]["datos"];
			return $retorno;
		}
		
		
		
		
	}//EOC