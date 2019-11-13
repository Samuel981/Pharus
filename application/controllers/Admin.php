<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	public function loginAdmin(){
			$this->load->model("Admin_model");
			$usuario = $this->input->post("usuario"); //Recebe entrada de usuario
			$senha = $this->input->post("senha"); //Recebe entrada de senha
			$loginAdmin = $this->Admin_model->logarAdmin($usuario,$senha); //Chama a função logar usuário dentro do modelo admin model
		if($loginAdmin){
			//$this->session->set_flashdata('mensagem_login','Logado com secesso!'); 
			$this->session->set_userdata('loginAdmin', 'autenticado');
			//Tentarei salvar user na session
			$this->session->set_userdata('admin', $usuario);
			//Chama a função get meta dentro do modelo metas_model
			redirect('admin'); 
		}else{
			redirect('login-administrador?error=1'); 
		}		
	}

	public function logout(){
		unset($_SESSION['admin']);
		redirect('login-administrador'); 
	}

	public function adicionar(){
		$this->load->model("Admin_model");
		$admin=NULL;
		if ($this->input->post("admin")) {
			$admin=1;
		}
		//Esse array passa os campos a serem inseridos na table admin;
		$dados = array(
			'usuario' => $this->input->post("usuario"),
			'nome' => $this->input->post("nome"),
			'email' => $this->input->post("email"),
			'senha' => $this->input->post("senha"),
			'admin' => $admin
		);

		$usuario = $dados['usuario'];
		$senha = $dados['senha']; //Define a variavel senha
		$ncaracteres = strlen($senha); //Função que conta o número de caracteres de uma variavel
		$confirmar_senha = $this->input->post("confirmar_senha"); 
		//Define a variavel senha, ela não faz parte do nosso vetor, pois serve apenas para verificação e não vai para o Banco de Dados
		if ($ncaracteres>=8) { //Se a senha do usuario for maior ou igual a 8 caracteres podemos prosseguir
			if ($senha===$confirmar_senha) {
				$nome_de_usuario_existente = $this->Admin_model->salvar($dados, $usuario);
				if ($nome_de_usuario_existente) {
					redirect('cadastro?error=3');	
				}else{
					redirect('admin');	
				}
			}else{
				redirect('admin?error=2');	
				//Aqui fica o erro para informar ao usuário que a senha dele não bate com a confirmação
			}
		}else{
			redirect('admin?error=1');	
			//Aqui fica o erro para informar ao usuário que a senha dele deve ter no mínimo 8 caracteres
		}
	}

	public function monitor(){
		$this->load->view('Admin/monitor');
	}
}
