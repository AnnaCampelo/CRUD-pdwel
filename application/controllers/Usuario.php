<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Controller {

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
		$this->load->model('Usuario_model');
        $this->load->model('Admin_model');
	}

	public function cadastro_endereco()
	{
	    $data = '';
        $aviso = '';

	    $cep = str_replace("-", "", $this->input->post("cep"));
		$dataInsert = array("fk_usuario" => $this->input->post("id"),"uf" => $this->input->post("estado"), "cidade" => $this->input->post("cidade"), "bairro" => $this->input->post("bairro"), "logradouro" => $this->input->post("logradouro"), "cep" => $cep, "sts_solicitacao" => 2);

        if(!empty($dataInsert['cidade'])) {
        	$data = '';
		    $result = $this->Usuario_model->verifica_duplicata(str_replace("-", "", $this->input->post("cep")));
		    
		    if(!empty($result[0]['CEP']))
		    {
		    	$aviso = 'existe-registro';
		    } else{
		    	$return = $this->Usuario_model->cadastrar_endereco($dataInsert);

		    	$data = array('solicitacoes' => $this->Admin_model->get_solicitacao_by_user($this->session->userdata('id')));

	            if (!empty($return)) {
	                $aviso = 'sucesso';
	            }
		    }
        }
        $data = array('solicitacoes' => $this->Admin_model->get_solicitacao_by_user($this->session->userdata('id')), 'resposta' => $aviso);
        $this->load->view('cadastro-endereco', $data);
	}

	public function logar($login = 0, $senha = 0){
    	if($this->input->post("email")){
    		$user = $this->input->post("email");
    		$pass = $this->input->post("senha");
    	} else{
    		$user = $login;
    		$pass = $senha;
    	}

    	$return = $this->Usuario_model->select_by_email($user);

    	if(md5($pass) == $return[0]['Senha'] && $user == $return[0]['Email'])
    	{
    		$this->session->set_userdata('logado', true);
    		$this->session->set_userdata('nivel', $return[0]['flg_tipocadastro']);
    		$this->session->set_userdata('id', $return[0]['id_usuario']);
    		$data = "sucesso-login";
    	} else{
    		$data = "erro-login";
    		$this->session->set_userdata('logado', false);
    		$this->session->set_userdata('nivel', 0);
    	}

    	$this->load->view('index', array('aviso' => $data));
    }

    public function cadastro_usuario()
    {
	    $data = '';

        $dataInsert = array("nome" => $this->input->post("nome"),
            "cpf" => $this->input->post("cpf"), "email" => $this->input->post("email"),
            "senha" => md5($this->input->post("senha")), "dt_nascimento" => date("Y-m-d", strtotime($this->input->post("data-nascimento"))),
            "flg_tipocadastro" => $this->input->post("tipo-cadastro"));

        if(!empty($dataInsert['nome'])){
            $return = $this->Usuario_model->cadastrar_usuario($dataInsert);

            if(!empty($return)){
            	$this->logar($this->input->post("email"), $this->input->post("senha"));
                $data = array('resposta' => $return);
            }
        }

    }

    public function deslogar(){
    	$data = "deslogado";
    	$this->session->set_userdata('logado', false);
    	$this->session->set_userdata('nivel', 0);

    	$this->load->view('index', array('aviso' => $data));
    }

	public function teste_dados(){
		echo $this->Usuario_model->pegar_infos($this->input->get('teste'));
	}
}
