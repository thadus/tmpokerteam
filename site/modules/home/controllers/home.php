<?php 

if (!defined('BASEPATH')) { exit('No direct script access allowed'); }

class Home extends MX_Controller {
    
    private $data;
    
    public function __construct() {
        parent::__construct();
        $model = $this->router->class . '_model';
        $this->load->model($model, 'model');
        $this->data['carregar']['modulo'] = $this->router->class;
    }
    
    public function index() {        
        // Dados de listagem de torneios finalizados
        $this->data['interna']['torneios_finalizados'] = $this->model->listar_torneios_finalizados();
        
        // Carrega view
        $this->data['carregar']['interna'] = 'inicial';
        $this->templates->padrao($this->data);
    }
    
}