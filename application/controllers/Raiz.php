<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Raiz extends CI_Controller {
	public function index(){
		if (isset($_SESSION['login'])) {
			$this->load->model("Operacoes");
			$usuario = $this->session->userdata('usuario');
			$contaContrato = $this->Operacoes->contaContrato($usuario);
			$this->load->model("Consumo_model");
			$consumo['meta'] = $this->Consumo_model->SelecionarMeta($contaContrato);
			if($consumo['meta']!=0){
				$valor_tarifa = 0.7;
				$valor_dia = ($consumo['meta']/30)/$valor_tarifa;
				$consumo['consumo'] = $this->Consumo_model->SelecionarConsumo($contaContrato);
				$consumo['gasto'] = $consumo['consumo']*100/$valor_dia;
				$porcentagem = $consumo['gasto'];
				$this->load->helper('cookie');
				if ($porcentagem>=100) {
					$mensagem = "Baixa esse consumo aí fion.";
				}else{
					$mensagem = "Tá top o consumo.";
				}
				set_cookie('mensagem_meta', $mensagem, (86400));
				$titulo ="home";
			}
			$this->load->view('header_sidebar');
			$this->load->view('index', $consumo);
			$this->load->view('footer');
		}else{
			redirect('login'); 
		}	
	}

	public function consumo(){
		if (isset($_SESSION['login'])) {
			//Criar uma array q implementa o consumo de hora em hora e ao final do dia é destruido
			$agendamento = 13; // Não vou usar minutos aqui
			$horaAtual   = 13; // Obtenha a hora via JS
			if ($consumoPorHora=array()) {
				date_default_timezone_set('America/Sao_Paulo');
				if(date('H')==0) {
					unset($consumoPorHora);
					$agendamento = 0;
				}if ($agendamento==$horaAtual) {//Mudar isso aqui
					$this->load->model("Operacoes");
					$usuario = $this->session->userdata('usuario');
					$contaContrato = $this->Operacoes->contaContrato($usuario);
					$this->load->model("Consumo_model");
					$consumoPorHora = [$this->Consumo_model->SelecionarConsumo($contaContrato)];	
					//echo date('H');
				    print_r($consumoPorHora);
				}
			}else{
				$consumoPorHora=array();
			}
			$this->load->view('header_sidebar');
			$this->load->view('consumo');
			$this->load->view('footer');
		}else{
			redirect('login?error=2'); 
		}
	}

	public function metas(){
		if (isset($_SESSION['login'])) {
			$this->load->view('header_sidebar');
			$this->load->view('metas');
			$this->load->view('footer');
		}else{
			redirect('login?error=2'); 
		}
	}

	public function idealdeconsumo(){
		if (isset($_SESSION['login'])) {
			$this->load->helper('cookie');
			if (!isset($_GET['questao'])) {
				delete_cookie("a"); delete_cookie("b"); delete_cookie("c");
			}
			$this->load->view('header_sidebar');
			$this->load->view('idealdeconsumo');
			$this->load->view('footer');
		}else{
			redirect('login?error=2'); 
		}
	}

	public function resultado(){
		if (isset($_SESSION['login'])) {
			$this->load->view('header_sidebar');
			$this->load->view('resultado');
			$this->load->view('footer');
		}else{
			redirect('login?error=2'); 
		}
	}

	public function dicas(){
		if (isset($_SESSION['login'])) {
			$this->load->model("Dicas_model");
			$dicas['dica1'] = $this->Dicas_model->exibir('a');
			$dicas['dica2'] = $this->Dicas_model->exibir('a');
			$dicas['dica3'] = $this->Dicas_model->exibir('a');
			$dicas['dica4'] = $this->Dicas_model->exibir('a');
			$dicas['dica5'] = $this->Dicas_model->exibir('b');
			$dicas['dica6'] = $this->Dicas_model->exibir('c');
			$this->load->view('header_sidebar');
			$this->load->view('dicas', $dicas);
			$this->load->view('footer');
		}else{
			redirect('login?error=2'); 
		}
	}

	public function login(){
		if (isset($_SESSION['login'])) {
			redirect('index'); 
		}else{
			$this->load->view('login');
		}
	}

	public function usuario(){
		if (isset($_SESSION['login'])) {
			$usuario = $this->session->userdata('usuario');
			$this->load->model("Operacoes");
			$dados['nome'] = $this->Operacoes->nomeCompleto($usuario);
			$dados['email'] = $this->Operacoes->email($usuario);
			$dados['contaContrato'] = $this->Operacoes->contaContrato($usuario);
			$this->load->view('header_sidebar');
			$this->load->view('usuario', $dados);
			$this->load->view('footer');
		}else{
			$this->load->view('login');
		}
	}
	public function salvarimg(){
		$config['upload_path'] = '<?= base_url()?>assets/fotos/';
		$config['allowed_types'] = '*';
		$config['max_size']     = '512000';
		$config['max_width']  = '2440';
		$config['max_height']  = '1600';
		$this->load->library('upload', $config);
		$this->upload->initialize($config);
		$this->upload->do_upload('foto');
		$imagem = $this->upload->data();
		$file_url = base_url("assets/fotos/{$imagem['file_name']}");
	}

	public function cadastro(){
		$this->load->view('cadastro');
	}

	public function recuperarsenha(){
		$this->load->view('recuperarsenha');
	}

	public function editar_senha(){
		if (isset($_SESSION['login'])) {
			$this->load->view('header_sidebar');
			$this->load->view('editar_senha');
			$this->load->view('footer');
		}else{
			redirect('login?error=2'); 
		}
	}

	public function quemsomos(){
		if (isset($_SESSION['login'])) {
			$this->load->view('header_sidebar');
			$this->load->view('quemsomos');
		}else{
			redirect('login?error=2'); 
		}
	}

	public function simulador(){
		$this->load->view('simulador');
	}

	public function consumir(){
		if ($consumo=[]){
			foreach ($potencia as $aparelho) {
				$potencia=$this->input->post("potencia");
				$horas=$this->input->post("horas");
				$consumo[] =$potencia*$horas;
				array_sum($consumo);
			}
			echo array_sum($consumo);
		}else{
			$consumo=[];
		}
	}
}
