<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TestHowardGardner extends SMG_Controller {
	/**
	 *
	 * @author josego
	 */
	public function __construct(){
		parent::__construct();
		$this->load->model('testHowardGardner_m', 'testHowardGardner');
	}

	public function index()
	{
		$this->load->view('test_howard_gardner');
	}

	public function encuesta()
	{
		$datos = array(
			'courseid' => 1,
			'userid' => 1,
			'multipleintelligencedatetime' => $this->fecha_hora_actual,
		);
		$limite_preguntas = 35;
		for($indice = 1; $indice <= $limite_preguntas; $indice++){
			$preg = "p" . $indice;
			$datos[$preg] = $this->input->post($preg, true);
		}

		// Insertar la encuenta test Howard Gardner en la base de datos.
		if($this->testHowardGardner->insertarHowardGardner($datos)){
			echo "Inserto correctamente.";
		}else{
			 echo "No inserto correctamente.";
		}
		$this->load->view('test_howard_gardner');
	}
}
