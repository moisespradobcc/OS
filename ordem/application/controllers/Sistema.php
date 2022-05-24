<?php

defined('BASEPATH') OR exit('Ação não permitida');

class Sistema extends CI_Controller {

    public function __construct() {
        parent::__construct();

        if (!$this->ion_auth->logged_in()) {
            $this->session->set_flashdata('info', 'Sua sessão expirou!');
            redirect('login');
        }
    }

    public function index() {
        $data = array(
            'titulo' => 'Editar informações do sistema',
            'sistema' => $this->core_model->get_by_id('sistema', array('sistema_id' => 1)),
        );

        /*
          [sistema_id] => 1
          [sistema_razao_social] => System Ordem inc
          [sistema_nome_fantasia] => Sistema ordem now
          [sistema_cnpj] => 97.712.023/0001-60
          [sistema_ie] => [sistema_telefone_fixo] =>
          [sistema_telefone_movel] =>
          [sistema_email] =>
          [sistema_site_url] => odemnow@contato.com.br
          [sistema_cep] => 66030115
          [sistema_endereco] => Rua da programação
          [sistema_numero] => 10
          [sistema_cidade] => Belém
          [sistema_estado] => PA
          [sistema_txt_ordem_servico] =>
          [sistema_data_alteracao] => 2022-05-23 10:24:33
         *          */

//        echo '<prev>';
//        print_r($data['sistema']);
//        exit();

        $this->load->view('layout/header', $data);
        $this->load->view('sistema/index');
        $this->load->view('layout/footer');
    }

}
