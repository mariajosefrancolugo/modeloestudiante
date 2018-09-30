<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TestPersonalidadEysenck extends SMG_Controller {
	/**
	 *
	 * @author josego
	 */
	public function __construct(){
		parent::__construct();
		$this->load->model('TestPersonalidadEysenck_m', 'testPersonalidadEysenck');
	}

	public function index()
	{
		$this->load->view('test_personalidad_eysenck');
	}

	public function encuesta()
	{
		$datos = array(
			'courseid' => 1,
			'userid' => 1,
			'personalitydatetime' => $this->fecha_hora_actual,
		);
		$limite_preguntas = 57;
		for($indice = 1; $indice <= $limite_preguntas; $indice++){
			$preg = "p" . $indice;
			$datos[$preg] = $this->input->post($preg, true);
		}

		// Insertar la encuenta test personalidad Eysenck en la base de datos.
		if($this->testPersonalidadEysenck->insertar_personalidad_eyenck($datos)){
			echo "Inserto correctamente.";
		}else{
			 echo "No inserto correctamente.";
		}
		$this->load->view('test_personalidad_eysenck');
	}
}
