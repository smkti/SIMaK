<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * Description of login
 *  this file for login ... 
 * @author Arif Manggala Putra
 */
class login extends CI_Controller {

    //put your code here
    public function __construct() {
        parent::__construct();

        $this->load->library('template');
        if ($this->session->userdata('username')) {
            redirect("login/");
        }
    }

    public function index() {
        $this->load->view('login/login');
    }

    public function do_login() {
        $username = $this->security->xss_clean($this->input->post('username'));
        $user = $this->security->xss_clean($this->input->post('user'));
        $password = md5($this->security->xss_clean($this->input->post('password')));

        $q_cek = $this->db->query("SELECT * FROM user_admin WHERE username = '" . $username . "' AND password = '" . $password . "' and rule ='" . $user . "' ");
        $j_cek = $q_cek->num_rows();
        $d_cek = $q_cek->row();
        //echo $this->db->last_query();

        if ($j_cek == 1) {
            $this->session->set_userdata('username',$d_cek->username);
            redirect('dashboard');
        } else {
            $this->session->set_flashdata("k", "<div id=\"alert\" class=\"alert alert-error\">username or password is not valid</div>");
            redirect('login');
        }
    }

    public function logout() {
        $this->session->sess_destroy();
        redirect('login');
    }

}

