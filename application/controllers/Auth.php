<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @property CI_Form_validation $form_validation
 * @property CI_Input $input
 * @property CI_Session $session
 * @property User_model $User_model
 */
class Auth extends CI_Controller {

    public function __construct() {
    parent::__construct();
    $this->load->model('User_model'); 
    $this->load->library('form_validation');
    $this->load->library('session');
    }

     public function index() {
        if ($this->session->userdata('logged_in')) {
            redirect('admin/dashboard');
        } else {
            redirect('login'); 
        }
    }

    public function login() {
        if ($this->session->userdata('logged_in')) {
            redirect('admin/dashboard');
        }

        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('login');
        } else {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $user = $this->User_model->get_user($username);

        // Perbaikan pengecekan password
        if ($user && password_verify($password, $user->password)) {
            $session_data = [
                'user_id' => $user->id,
                'username' => $user->username,
                'logged_in' => TRUE
            ];
            $this->session->set_userdata($session_data);
            redirect('admin/dashboard');
        } else {
            $this->session->set_flashdata('error', 'Username atau password salah');
            redirect('login');
        }
    }
}

    public function logout() {
        $this->session->unset_userdata(['user_id', 'username', 'logged_in']);
        $this->session->set_flashdata('success', 'Anda berhasil logout');
        redirect('login');
    }
}