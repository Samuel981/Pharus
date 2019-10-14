<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios_model extends CI_Model {
	public function salvar($dados=NULL, $usuario){
		if ($dados != NULL) {
			$this->db->select('usuario');
			$this->db->where('usuario', $dados['usuario']);
			$query = $this->db->get('usuario');
			$nome_de_usuario = $query->num_rows(); //Obtem o número de linhas
			if ($nome_de_usuario>0) {//Se for >0, o nome de usuário já existe
				return $nome_de_usuario_existente=TRUE;
			}else{
				$this->db->insert("usuario", $dados);//Insere os dados na tabela usuario
				$this->db->insert("consumo", $usuario);
				$this->db->insert("meta", $usuario);
			}
		}
	}

	public function logarUsuarios($usuario,$senha){
		$this->db->where("usuario", $usuario); 
		$this->db->where("senha", $senha);
		$login = $this->db->get("usuario")->row_array();
		return $login;
	}

	public function logarAdmin($usuario,$senha){
		$this->db->where("usuario", $usuario); 
		$this->db->where("senha", $senha);
		$this->db->where("admin", 1);
		$loginAdmin = $this->db->get("usuario")->row_array();
		return $loginAdmin;
	}

	public function atualizarDados($dadosUpdate=NULL, $usuarioAtual){
		if ($dadosUpdate != NULL) {
			$this->db->select('usuario');
			$this->db->where('usuario', $dadosUpdate['usuario']);
			$query = $this->db->get('usuario');
			$nome_de_usuario = $query->num_rows(); //Obtem o número de linhas
			if ($nome_de_usuario>0) {//Se for >0, o nome de usuário já existe
				return $nome_de_usuario_existente=TRUE;
			}else{
				$this->db->where('usuario', $usuarioAtual);
				$this->db->update('usuario', $dadosUpdate);
			}
		}
	}

	public function senhaAtual($usuario,$senha_atual){
		$this->db->where("usuario", $usuario); 
		$this->db->where("senha", $senha_atual);
		$senha = $this->db->get("usuario")->row_array();
		return $senha;
	}

	public function atualizarSenha($usuario,$nova_senha){
		$this->db->set('senha', $nova_senha);
		$this->db->where('usuario', $usuario);
		$this->db->update('usuario');
	}

}
