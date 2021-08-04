<?php

class Localizacao_model extends CI_Model
{
	var $cep;
	var $estado;
	var $cidade; 
	var $bairro;
	var $logradouro;

	public function pegar_infos($inputs){
		$cep = $inputs->post('cep');
		$estado = $inputs->post('estado');
		$cidade = $inputs->post('cidade');
		$bairro = $inputs->post('bairro');
		$logradouro = $inputs->post('logradouro');
		return $cep." ".$estado." ".$cidade." ".$bairro." ".$logradouro;
	}
}