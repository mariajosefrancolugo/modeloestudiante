<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TestFelder extends CI_Controller {
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
			'p1' => $this->input->post('p1', true),
			'p2' => $this->input->post('p2', true),
			'p3' => $this->input->post('p3', true),
			'p4' => $this->input->post('p4', true),
			'p5' => $this->input->post('p5', true),
			'p6' => $this->input->post('p6', true),
			'p7' => $this->input->post('p7', true),
			'p8' => $this->input->post('p8', true),
			'p9' => $this->input->post('p9', true),
			'p10' => $this->input->post('p10', true),
			'p11' => $this->input->post('p11', true),
			'p12' => $this->input->post('p12', true),
			'p13' => $this->input->post('p13', true),
			'p14' => $this->input->post('p14', true),
			'p15' => $this->input->post('p15', true),
			'p16' => $this->input->post('p16', true),
			'p17' => $this->input->post('p17', true),
			'p18' => $this->input->post('p18', true),
			'p19' => $this->input->post('p19', true),
			'p20' => $this->input->post('p20', true),
			'p21' => $this->input->post('p21', true),
			'p22' => $this->input->post('p22', true),
		);

		// Insertar la encuenta test felder en la base de datos.
		if($this->testFelder->insertarTestFelder($datos)){
			echo "Inserto correctamente.";
		}else{
			 echo "No inserto correctamente.";
		}
	}
}
