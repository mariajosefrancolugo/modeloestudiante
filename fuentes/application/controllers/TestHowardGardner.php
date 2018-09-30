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
		$datos = array();

		// Se agrega en el array los valores de las preguntas.
		$limite_preguntas = 35;
		for($indice = 1; $indice <= $limite_preguntas; $indice++){
			$preg = "p" . $indice;
			$datos[$preg] = $this->input->post($preg, true);
		}

		// Obtener el array de las evaluaciones de los test.
		$array_evaluaciones_test = $this->evaluar_test($datos, $limite_preguntas);

		$datos['courseid'] = 1;
		$datos['userid'] = 1;
		$datos['multipleintelligencedatetime'] = $this->fecha_hora_actual;

		// Se unen los array de las preguntas con el array de las evaluaciones test.
		$datos = array_merge($datos, $array_evaluaciones_test);

		// Insertar la encuenta test Howard Gardner en la base de datos.
		if($this->testHowardGardner->insertar_howard_gardner($datos)){
			echo "Inserto correctamente.";
		}else{
			 echo "No inserto correctamente.";
		}
		$this->load->view('test_howard_gardner');
	}

	/**
	 * @method evaluar_test
	 */
	private function evaluar_test($p_datos, $p_limite_preguntas){
		$array_calculos = array(
			'linguisticaverbal' => 0,
			'logicamatematica' => 0,
			'visualespacial' => 0,
			'kinestesicacorporal' => 0,
			'musicalritmica' => 0,
			'intrapersonal' => 0,
			'interpersonal' => 0
		);

		for($pregunta = 1; $pregunta <= $p_limite_preguntas; $pregunta++){
			$preg = "p" . ($pregunta);

			// linguisticaverbal
			if($pregunta == 9 || $pregunta == 10 || $pregunta == 17 || $pregunta == 22
		      || $pregunta == 30){
				  $array_calculos['linguisticaverbal'] += $p_datos[$preg];
			}else if($pregunta == 5 || $pregunta == 7 || $pregunta == 15 || $pregunta == 20
		      || $pregunta == 25){
				  // logicamatematica
				  $array_calculos['logicamatematica'] += $p_datos[$preg];
			}else if($pregunta == 1 || $pregunta == 11 || $pregunta == 14 || $pregunta == 23
		      || $pregunta == 27){
				  // visualespacial
				  $array_calculos['visualespacial'] += $p_datos[$preg];
			}else if($pregunta == 8 || $pregunta == 16 || $pregunta == 19 || $pregunta == 21
		      || $pregunta == 29){
				  // kinestesicacorporal
				  $array_calculos['kinestesicacorporal'] += $p_datos[$preg];
			}else if($pregunta == 3 || $pregunta == 4 || $pregunta == 13 || $pregunta == 24
		      || $pregunta == 28){
				  // musicalritmica
				  $array_calculos['musicalritmica'] += $p_datos[$preg];
			}else if($pregunta == 2 || $pregunta == 6 || $pregunta == 26 || $pregunta == 31
		      || $pregunta == 33){
				  // intrapersonal
				  $array_calculos['intrapersonal'] += $p_datos[$preg];
			}else if($pregunta == 12 || $pregunta == 18 || $pregunta == 32 || $pregunta == 34
		      || $pregunta == 35){
				  // interpersonal
				  $array_calculos['interpersonal'] += $p_datos[$preg];
			}
		}
		return $array_calculos;
	}
}
