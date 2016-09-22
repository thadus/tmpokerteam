<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

    /*
     * Biblioteca de templates
     * Autor: Mateus Siqueira
     * Data: 24/07/2013
     */

    class Templates {
        
        private $ci;
        
        public function __construct() {
            $this->ci =& get_instance();
        }

        public function padrao($data) {
            $this->ci->load->view('template/cabecalho');
            $this->ci->load->view($data['carregar']['modulo'] . '/' . $data['carregar']['interna'], $data['interna']);
            $this->ci->load->view('template/rodape');
        }

    }
/*
 * Fim do arquivo templates.php
 * Location: ./application/libraries
 */