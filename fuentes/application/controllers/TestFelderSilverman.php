<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TestFelderSilverman extends SMG_Controller {
	/**
	 *
	 * @author josego
	 */
	public function __construct(){
		parent::__construct();
		$this->load->model('testFelderSilverman_m', 'testFelderSilverman');
	}

	public function index()
	{
		$this->load->view('test_felder_silverman');
	}

	public function encuesta()
	{
		$datos = array();

		// Se agrega en el array los valores de las preguntas.
		$limite_preguntas = 44;
		for($indice = 1; $indice <= $limite_preguntas; $indice++){
			$preg = "p" . $indice;
			$datos[$preg] = $this->input->post($preg, true);
		}

		// Obtener el array de las evaluaciones de los test.
		$array_evaluaciones_test = $this->evaluar_test($datos, $limite_preguntas);

		$datos['courseid'] = 1;
		$datos['userid'] = 1;
		$datos['learningstyledatetime'] = $this->fecha_hora_actual;

		// Se unen los array de las preguntas con el array de las evaluaciones test.
		$datos = array_merge($datos, $array_evaluaciones_test);

		// Obtener el array de las dimensiones del test.
		$array_dimensiones_test = $this->calcularDimesionesTest($array_evaluaciones_test);

		// Se unen los array de las preguntas, evaluaciones test con el array de dimensiones test.
		$datos = array_merge($datos, $array_dimensiones_test);

		// Insertar la encuenta test Felder Silverman en la base de datos.
		if($this->testFelderSilverman->insertar_test_felder_silverman($datos)){
			$datos_resultado = array(
				'dimension1activoreflexivo'		=> $datos['dimension1activoreflexivo'],
				'dimension2sensitivointuitivo' 	=> $datos['dimension2sensitivointuitivo'],
				'dimension3visualverbal' 		=> $datos['dimension3visualverbal'],
				'dimension4globalsecuencial' 	=> $datos['dimension4globalsecuencial']
			);
		}else{
	         $datos_resultado = array();
		}

		$this->load->view('resultado', 
			array(
				'datos' => $datos_resultado
			)
		);
	}

	/**
	 * @method evaluar_test
	 */
	private function evaluar_test($p_datos, $p_limite_preguntas){
		$array_calculos = array(
			'activo' => 0,
			'reflexivo' => 0,
			'sensitivo' => 0,
			'intuitivo' => 0,
			'visual' => 0,
			'verbal' => 0,
			'secuencial' => 0,
			'global' => 0,
		);

		for($pregunta = 1; $pregunta <= $p_limite_preguntas; $pregunta++){
			$preg = "p" . ($pregunta);

			// Activo = a
			// Reflexivo = b
			if($pregunta == 1 || $pregunta == 5 || $pregunta == 9 || $pregunta == 13
		      || $pregunta == 17 || $pregunta == 21 || $pregunta == 25 || $pregunta == 29
		      || $pregunta == 33 || $pregunta == 37 || $pregunta == 41){
				  if($p_datos[$preg] === 'a'){
  					$array_calculos['activo'] += 1;
  				}else if($p_datos[$preg] === 'b'){
  					 $array_calculos['reflexivo'] += 1;
  				}
			}

			// Sensitivo = a
			// Intuitivo = b
			if($pregunta == 2 || $pregunta == 6 || $pregunta == 10 || $pregunta == 14
		      || $pregunta == 18 || $pregunta == 22 || $pregunta == 26 || $pregunta == 30
		      || $pregunta == 34 || $pregunta == 38 || $pregunta == 42){
				  if($p_datos[$preg] === 'a'){
  					$array_calculos['sensitivo'] += 1;
  				}else if($p_datos[$preg] === 'b'){
  					 $array_calculos['intuitivo'] += 1;
  				}
			}

			// Visual = a
			// Verbal = b
			if($pregunta == 3 || $pregunta == 7 || $pregunta == 11 || $pregunta == 15
		      || $pregunta == 19 || $pregunta == 23 || $pregunta == 27 || $pregunta == 31
		      || $pregunta == 35 || $pregunta == 39 || $pregunta == 43){
				  if($p_datos[$preg] === 'a'){
  					$array_calculos['visual'] += 1;
  				}else if($p_datos[$preg] === 'b'){
  					 $array_calculos['verbal'] += 1;
  				}
			}

			// Secuencial = a
			// Global = b
			if($pregunta == 4 || $pregunta == 8 || $pregunta == 12 || $pregunta == 16
		      || $pregunta == 20 || $pregunta == 24 || $pregunta == 28 || $pregunta == 32
		      || $pregunta == 36 || $pregunta == 40 || $pregunta == 44){
				  if($p_datos[$preg] === 'a'){
  					$array_calculos['secuencial'] += 1;
  				}else if($p_datos[$preg] === 'b'){
  					 $array_calculos['global'] += 1;
  				}
			}
		}
		return $array_calculos;
	}

   /**
	* @method calcularDimesionesTest
	*/
	private function calcularDimesionesTest($p_evaluaciones_test){
		$array_dimesiones_test = array(
			'dimension1activoreflexivo' => (($p_evaluaciones_test['activo'] - $p_evaluaciones_test['reflexivo']) > 0)? 'activo': 'reflexivo',
			'dimension2sensitivointuitivo' => (($p_evaluaciones_test['sensitivo'] - $p_evaluaciones_test['intuitivo']) > 0)? 'sensitivo': 'intuitivo',
			'dimension3visualverbal' => (($p_evaluaciones_test['visual'] - $p_evaluaciones_test['verbal']) > 0)? 'visual': 'verbal',
			'dimension4globalsecuencial' => (($p_evaluaciones_test['secuencial'] - $p_evaluaciones_test['global']) > 0)? 'secuencial': 'global'
		);
		return $array_dimesiones_test;
	}
}
