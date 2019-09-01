<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Consumo_model extends CI_Model {
	public function SelecionarMeta($contaContrato){
		$this->db->select('kw_h'); //Seleciona o consumo
		$this->db->where('usuario', $contaContrato);
    	$query = $this->db->get('meta');
    	$consumo = $query->row()->kw_h; //Pega a consulta
		return $consumo; //retorna o consumo
	}

	public function SelecionarConsumo($contaContrato){ //Selecionar o consumo até o momento
		$this->db->select('kw_h'); //Seleciona o consumo
		$this->db->where('usuario', $contaContrato);
    	$query = $this->db->get('consumo');
    	$consumo = $query->row()->kw_h; //Pega a consulta
		return $consumo; //retorna o consumo
	}
}
