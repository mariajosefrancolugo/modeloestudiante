<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TestFelder extends SMG_Controller {
	/**
	 *
	 * @author josego
	 */
	public function __construct(){
		parent::__construct();
		$this->load->model('testFelder_m', 'testFelder');
	}

	public function index()
	{
		$this->load->view('test_felder');
	}

	public function encuesta1()
	{
		$datos = array(
			'courseid' => 1,
			'userid' => 1,
			'learningstyledatetime' => $this->fecha_hora_actual,
		);
		$limite_preguntas = 44;
		for($indice = 1; $indice <= $limite_preguntas; $indice++){
			$preg = "p" . $indice;
			$datos[$preg] = $this->input->post($preg, true);
		}

		// Insertar la encuenta test felder en la base de datos.
		if($this->testFelder->insertarTestFelder($datos)){
			echo "Inserto correctamente.";
		}else{
			 echo "No inserto correctamente.";
		}
	}
}
