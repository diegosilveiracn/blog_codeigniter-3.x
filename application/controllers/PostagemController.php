<?php
    class PostagemController extends CI_Controller {
        
        public function index(){
            $parametros['titulo'] = 'Postagens';
            $parametros['postagens'] =  $this->Postagem->get();
            $this->load->view('cabecalho',$parametros);
            $this->load->view('postagem/index',$parametros);
            $this->load->view('rodape');
        }

        public function novo(){
            $parametros['titulo'] = 'Nova Postagem';
            $this->load->view('cabecalho',$parametros);
            $this->load->view('postagem/novo');
            $this->load->view('rodape');
        }

        public function salvar(){
            $postagem = $this->input->post();
            $this->Postagem->inserir($postagem);
            redirect();
        }

        public function edicao($id){
            $parametros['titulo'] = 'Edição de Postagem';
            $parametros['postagem'] =  $this->Postagem->get($id);
            $this->load->view('cabecalho',$parametros);
            $this->load->view('postagem/edicao',$parametros);
            $this->load->view('rodape');
        }

        public function atualizar(){
            $postagem = $this->input->post();
            $this->Postagem->atualizar($postagem);
            redirect();
        }

        public function excluir($id){
            $this->Postagem->deletar($id);
            redirect();
        }
    }
?>