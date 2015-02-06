<?php

/**
 * Description of kelas
 *  File For Manage Menu Kelas
 * @author Arif Manggala Putra
 */
class kelas extends CI_Controller {

    //put your code here
    public function __construct() {
        parent::__construct();
        if (!$this->session->userdata('username')) {
            redirect("login/");
        }
        $this->load->model('app_model');
    }

    public function index() {
        
        $data['data_kelas'] = $this->load->model('app_model');
        $this->template->display('kelas/index');
    }

}
