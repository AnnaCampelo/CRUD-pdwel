<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
		 $this->load->helper('url');
	}

	public function index()
	{
		$this->load->view('index');
	}

	public function exemplo()
	{
		$this->load->view('exemplo');
	}

	public function inicial()
	{
		$this->load->view('inicial');
	}

	public function cadastroEndereco(){
		$this->load->view('cadastro-endereco');
	}

	public function cadastroUsuario(){
		$this->load->view('cadastro-usuario');
	}

	public function solicitacoes(){
		$this->load->view('solicitacoes');
	}

	public function usuarios(){
		$this->load->view('usuarios');
	}
}
