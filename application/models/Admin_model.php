<?php

class Admin_model extends CI_Model {

    public function select_cep($palavra){
            $this->db->like('cep', $palavra);
            return $this->db->get('tblcep');
    }

    public function select_logradouro($palavra){
            $this->db->like('logradouro', $palavra);
            return $this->db->get('tblcep');
    }

    public function atualizar_endereco($data, $id){

        $this->db->set($data);
        $this->db->where('id_aprov', $id);
        $this->db->update('tbl_aprovacao');
        return $this->db->affected_rows();
    }

    public function get_solicitacao_by_user($id){
         $this->db->where('fk_usuario', $id);
        $q = $this->db->get('tbl_aprovacao');
        return $q->result_array();
    }

    public function get_todas_solicitacoes(){
        $q = $this->db->get('tbl_aprovacao');
        return $q->result_array();
    }

    public function select_users(){
        $this->db->select('*');
        $q = $this->db->get('cad_usuario');
        return $q->result_array();
    } 

     public function alterar_solicitacao($id, $acao){
        $this->db->where('id_aprov', $id);
        $this->db->set('sts_solicitacao', $acao);
        $this->db->update('tbl_aprovacao');
        return $this->db->affected_rows();
    }

    public function alterar_admin($id, $acao){
        $this->db->where('id_usuario', $id);
        $this->db->set('flg_tipocadastro', $acao);
        $this->db->update('cad_usuario');
        return $this->db->affected_rows();
    }

    public function select_proposta_by_id($id){
        $this->db->where('id_aprov', $id);
        $q = $this->db->get('tbl_aprovacao');

        return $q->result_array();
    }

    public function migrar_registros(){
        $q = $this->db->query("INSERT INTO tblcep SELECT CEP, Cidade, UF, Bairro, Logradouro FROM tbl_aprovacao
            WHERE sts_solicitacao = 1 AND CEP NOT IN (SELECT CEP FROM tblcep)");

        $this->db->query("UPDATE tbl_aprovacao SET sts_solicitacao = 4 WHERE sts_solicitacao = 1 AND CEP IN (SELECT CEP FROM tblcep)");

        $this->db->query("UPDATE tbl_aprovacao SET dt_modificacao = CURRENT_TIMESTAMP() WHERE sts_solicitacao = 3 AND dt_modificacao IS NULL;");

        return $q;
    }

}