<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @property Artikel_model $Artikel_model
 * @property Feedback_model $Feedback_model
 * @property CI_Form_validation $form_validation
 * @property CI_Input $input
 * @property CI_Session $session
 */
class Welcome extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('text'); 
        $this->load->model('Artikel_model'); 
        $this->load->model('Feedback_model'); 
        $this->load->library('form_validation');
    }

    // Beranda
    public function index() {
        $data['artikels'] = $this->Artikel_model->get_all_published();
        $data['feedbacks'] = $this->Feedback_model->get_all();
        $this->load->view('welcome_message', $data);
    }

    // Daftar Artikel
    public function artikel_list() {
        $data['artikels'] = $this->Artikel_model->get_all_published();
        $this->load->view('artikel_list_user', $data);
    }

    // Detail Artikel
    public function artikel($id) {
        $data['artikel'] = $this->Artikel_model->get_by_id($id);
        if (!$data['artikel'] || $data['artikel']->draft) {
            show_404();
        }
        $this->load->view('artikel_detail_user', $data);
    }

    // Form Kontak
    public function kontak() {
        $this->load->view('kontak');
    }

    // Kirim Feedback
    public function send_feedback() {
        $this->form_validation->set_rules('nama', 'Nama', 'required|min_length[3]');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('pesan', 'Pesan', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('kontak');
        } else {
            $data = [
                'nama' => $this->input->post('nama'),
                'email' => $this->input->post('email'),
                'pesan' => $this->input->post('pesan')
            ];
            $this->Feedback_model->create($data);
            $this->session->set_flashdata('success', 'Terima kasih atas feedback Anda!');
            redirect('kontak');
        }
    }
}
