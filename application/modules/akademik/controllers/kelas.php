<?php

/**
 * Description of kelas
 *  File For Manage Menu Kelas
 * @author Arif Manggala Putra
 */
class kelas extends MX_Controller {

    //put your code here
    public function __construct() {
        parent::__construct();
        if (!$this->session->userdata('username')) {
            redirect("akademik/login");
        }
        $this->load->model('crud_model', 'model');
    }

    public function index() {

        $data['data_kelas'] = $this->model->getAll('setup_kelas')->result();
        $this->template->display('kelas/index', $data);
    }

    public function tambah() {

        $data = array('nama_kelas' => $this->input->post('nama_kelas'));
        $query = $this->model->tambah('setup_kelas', $data);
        $d['data'] = $this->model->getAll('setup_kelas')->row();
    }

}
