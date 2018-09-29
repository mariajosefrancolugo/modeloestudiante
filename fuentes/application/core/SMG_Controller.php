<?php
/**
 * Super controlador
 * Todos los controladores que tienen funcionalidades en comun haran un extends de este controlador
 * @author josego
 * @package
 */
class SMG_Controller extends CI_Controller{
	 /**
       * Instancia del Singleton Pattern del CI
       * @var CI_Base
       */
     var $ci;

	 /**
      * @var $fecha_hora_actual
      */
     var $fecha_hora_actual;

	/**
	 * Consutructor.
	 */
    public function __construct(){
    	parent::__construct();
    	$this->ci =& get_instance();
    	$this->db = $this->ci->db;

    	$this->fecha_hora_actual = $this->db->query('select now() as fecha;')->row()->fecha;
    }
}
