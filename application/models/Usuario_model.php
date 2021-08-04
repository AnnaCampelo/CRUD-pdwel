<?php

class Usuario_model extends CI_Model {

	public function pegar_infos($inputs){
		return $inputs;
	}

    public function cadastrar_endereco($infos){
    		$this->db->insert('tbl_aprovacao', $infos);
    		return $this->db->insert_id();
    }

    public function cadastrar_usuario($infos){
        $this->db->insert('cad_usuario', $infos);
        return $this->db->insert_id();
    }

    public function select_by_email($email){
        $this->db->where('Email', $email);
        $q = $this->db->get('cad_usuario');

        return $q->result_array();
    }

    public function verifica_duplicata($cep){
        $this->db->like('cep', $cep);
         $q = $this->db->get('tblcep');
         return $q->result_array();
    }
}