<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class TestHowardGardner_M extends CI_Model {
    /**
     * Modelo para manejo del test de Howard Gardner.
     * @author josego
     */
    public function __construct(){
        parent::__construct();
    }

    /**
     *
     * @param Array $p_datos
     * @return boolean
     */
    public function insertarHowardGardner($p_datos){
    	if($this->db->insert('mdl_user_multiple_intelligence', $p_datos)){
    		return $this->db->insert_id();
    	}
    	return false;

    }

    /**
     * Recupera la cantidad de filas (reales si se uso sql_calc_found_rows) de la ultima consulta que se haya ejecutado
     * @return integer
     */
    public function get_cantidad_resultados(){
    	return $this->db->query('select FOUND_ROWS() as found_rows')->row()->found_rows;
    }
}
/* End of TestHowardGardner_M.php */
