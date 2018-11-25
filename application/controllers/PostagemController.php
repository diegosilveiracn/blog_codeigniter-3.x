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
            $this->session->set_flashdata('success', 'Postagem cadastrada com sucesso!');
            redirect();
        }

        public function editar($id){
            $parametros['titulo'] = 'Edição de Postagem';
            $parametros['postagem'] =  $this->Postagem->get($id);
            $this->load->view('cabecalho',$parametros);
            $this->load->view('postagem/edicao',$parametros);
            $this->load->view('rodape');
        }

        public function atualizar(){
            $postagem = $this->input->post();
            $this->Postagem->atualizar($postagem);
            $this->session->set_flashdata('success', 'Postagem atualizada com sucesso!');
            redirect();
        }

        public function excluir($id){
            $this->Postagem->deletar($id);
            $this->session->set_flashdata('success', 'Postagem excluída com sucesso!');
            redirect();
        }

        public function visualizar($id){
            $parametros['titulo'] = 'Postagem';
            $parametros['postagem'] =  $this->Postagem->get($id);
            $this->load->view('cabecalho',$parametros);
            $this->load->view('postagem/visualizacao',$parametros);
            $this->load->view('rodape');
        }
    }