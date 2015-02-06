<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of dashboard
 * file for dashboard
 * @author Arif Manggala Putra
 */
class dashboard extends CI_Controller {

    //put your code here

    public function __construct() {
        parent::__construct();
        $this->load->library('template');
        if (!$this->session->userdata('username')) {
            redirect("akademik/login");
        }
    }

    public function index() {


        $data['title'] = "Dashboard";
        $this->template->display('akademik/dashboard/dashboard', $data);
    }

}

