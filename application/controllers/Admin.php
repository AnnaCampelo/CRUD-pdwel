<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct(){
		parent::__construct();
		$this->load->model('Admin_model');
	}

	public function receber_dados()
	{
		if($this->input->post("tipo_busca") == "cep"){
			$query = $this->Admin_model->select_cep(str_replace('-', '', $this->input->post("termo")));
			$this->load->view('index', array('infos' => $query->result_array()));
		} else if($this->input->post("tipo_busca") == "logradouro"){
			$query = $this->Admin_model->select_logradouro(str_replace('-', '', $this->input->post("termo")));
			$this->load->view('index', array('infos' => $query->result_array()));
		}

	}

	public function atualizar_endereco()
	{
		$id = $this->input->post("id_aprov");
	    $cep = str_replace("-", "", $this->input->post("cep"));
        $dataInsert = array("uf" => $this->input->post("estado"), "cidade" => $this->input->post("cidade"), "bairro" => $this->input->post("bairro"), "logradouro" => $this->input->post("logradouro"), "cep" => $cep);


    	$return = $this->Admin_model->atualizar_endereco($dataInsert, $id);

        if (!empty($return)) {
            $data = array('resposta_atualizacao' => "sucesso");
        }

        $data['solicitacoes'] = $this->Admin_model->get_solicitacao_by_user($this->session->userdata('id'));
        $this->load->view('cadastro-endereco', $data);
	}

	public function solicitacoes()
    {
    	$data = array('solicitacoes' => $this->Admin_model->get_todas_solicitacoes());
    	$this->load->view('solicitacoes', $data);
    }

    public function usuarios()
    {
    	$data = array('usuarios' => $this->Admin_model->select_users());
    	$this->load->view('usuarios', $data);
    }

    public function alterar_solicitacao($id, $acao){
    	$retorno = $this->Admin_model->alterar_solicitacao($id, $acao);

    	if($retorno){
    		$data = array("status" => "sucesso");
    	} else{
    		$data = array("status" => "erro");
    	}

    	$data['solicitacoes'] = $this->Admin_model->get_solicitacao_by_user($this->session->userdata('id'));
    	$this->Admin_model->migrar_registros();
    	$this->load->view('solicitacoes', $data);
    }

    public function alterar_admin($id, $acao){
    	$retorno = $this->Admin_model->alterar_admin($id, $acao);
    	
    	if($retorno){
    		$data = array("status" => "sucesso");
    	} else{
    		$data = array("status" => "erro");
    	}
    	$data['usuarios'] = $this->Admin_model->select_users();

    	$this->load->view('usuarios', $data);
    }

    public function atualizar($id_aprov){
    	$data = array("atualizar" => $this->Admin_model->select_proposta_by_id($id_aprov));
    	$data['solicitacoes'] = $this->Admin_model->get_solicitacao_by_user($this->session->userdata('id'));
    	$data['flag'] = 1;
    	$this->load->view('cadastro-endereco', $data);
    }
}