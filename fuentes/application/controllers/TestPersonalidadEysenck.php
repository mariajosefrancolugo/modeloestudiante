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

		// Se agrega en el array los valores de las preguntas.
		$limite_preguntas = 57;
		for($indice = 1; $indice <= $limite_preguntas; $indice++){
			$preg = "p" . $indice;
			$datos[$preg] = $this->input->post($preg, true);
		}

		// Obtener el array de las evaluaciones de los test.
		$array_evaluaciones_test = $this->evaluar_test($datos, $limite_preguntas);

		$datos['courseid'] = 1;
		$datos['userid'] = 1;
		$datos['personalitydatetime'] = $this->fecha_hora_actual;

		// Se unen los array de las preguntas con el array de las evaluaciones test.
		$datos = array_merge($datos, $array_evaluaciones_test);

		// Insertar la encuenta test personalidad Eysenck en la base de datos.
		if($this->testPersonalidadEysenck->insertar_personalidad_eyenck($datos)){
			echo "Inserto correctamente.";
		}else{
			 echo "No inserto correctamente.";
		}
		$this->load->view('test_personalidad_eysenck');
	}

	/**
	 * @method evaluar_test
	 */
	private function evaluar_test($p_datos, $p_limite_preguntas){
		$array_calculos = array(
			'e' => 0,
			'n' => 0,
			'l' => 0
		);

		for($pregunta = 1; $pregunta <= $p_limite_preguntas; $pregunta++){
			$preg = "p" . ($pregunta);

			// E. Si.
			if(($pregunta == 1 || $pregunta == 3 || $pregunta == 8
			  || $pregunta == 10 || $pregunta == 13 || $pregunta == 17 || $pregunta == 22 
			  || $pregunta == 25 || $pregunta == 27 || $pregunta == 39 || $pregunta == 44 
			  || $pregunta == 46 || $pregunta == 49 || $pregunta == 53 || $pregunta == 56)
			  && $p_datos[$preg] === 'si'){
				  $array_calculos['e'] += +1;
			}else if(($pregunta == 5 || $pregunta == 15 || $pregunta == 20 || $pregunta == 29
			   || $pregunta == 32 || $pregunta == 34 || $pregunta == 37 || $pregunta == 41 
			   || $pregunta == 51)
			   && $p_datos[$preg] === 'no'){
				  // E. No.
				  $array_calculos['e'] += +1;
			}else if(($pregunta == 2 || $pregunta == 4 || $pregunta == 7 || $pregunta == 9
			   || $pregunta == 11 || $pregunta == 14 || $pregunta == 16 || $pregunta == 19 
			   || $pregunta == 21 || $pregunta == 23 || $pregunta == 26 || $pregunta == 28
			   || $pregunta == 31 || $pregunta == 33 || $pregunta == 35 || $pregunta == 38
			   || $pregunta == 40 || $pregunta == 43 || $pregunta == 45 || $pregunta == 47
			   || $pregunta == 50 || $pregunta == 52 || $pregunta == 55 || $pregunta == 57)
			   && $p_datos[$preg] === 'si'){ 
			   // N. Si.
			   $array_calculos['n'] += +1;
		    }else if(($pregunta == 6 || $pregunta == 24 || $pregunta == 36)
			   && $p_datos[$preg] === 'si'){ 
			   // L. Si.
			   $array_calculos['l'] += +1;
			}else if(($pregunta == 12 || $pregunta == 18 || $pregunta == 30 || $pregunta == 42
			   || $pregunta == 48 || $pregunta == 54)
			   && $p_datos[$preg] === 'no'){ 
			   // L. No.
			   $array_calculos['l'] += +1;
		    }
		}

		$array_calculos_1 = array(
			'extroversion' => 0,
			'introversion' => 0,
			'estabilidad' => 0,
			'inestabilidad' => 0,
			'escaladementiras' => $array_calculos['l'],
			'melancolico' => 0,
			'colerico' => 0,
			'flematico' => 0,
			'sanguineo' => 0
		);
		
		if($array_calculos['e'] >= 0 && $array_calculos['e'] <= 12){
			$array_calculos_1['introversion'] = $array_calculos['e'];
		}else if($array_calculos['e'] >= 14 && $array_calculos['e'] <= 24){
			 $array_calculos_1['extroversion'] = $array_calculos['e'];
		}else if($array_calculos['n'] >= 0 && $array_calculos['n'] <= 11){
			$array_calculos_1['estabilidad'] = $array_calculos['n'];
	    }else if($array_calculos['n'] >= 13 && $array_calculos['n'] <= 24){
		    $array_calculos_1['inestabilidad'] = $array_calculos['n'];
        }
		return $array_calculos_1;
	}
}