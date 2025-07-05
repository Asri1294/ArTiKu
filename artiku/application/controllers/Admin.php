<?php 
defined ('BASEPATH') OR exit('No direct script acsess allowed');
/**
 * @property Artikel_model $Artikel_model
 * @property Feedback_model $Feedback_model
 * @property CI_Form_validation $form_validation
 * @property CI_Input $input
 * @property CI_Session $session
 * @property object $db
 */

class Admin extends CI_Controller {

    public function __construct() {
        parent::__construct();
        if (!$this->session->userdata('logged_in')) {
            redirect('login');
        }
        $this->load->model('Artikel_model');
        $this->load->model('Feedback_model'); 
        $this->load->library('form_validation');
        $this->load->helper('text'); // untuk character_limiter
    }

    // Dashboard
    public function dashboard() {
        $data['artikel_count'] = $this->Artikel_model->count_all();
        $data['feedback_count'] = $this->Feedback_model->count_all();
        $data['latest_artikel'] = $this->Artikel_model->get_latest(5);
        $this->load->view('admin/dashboard', $data);
    }

    // Artikel - List
    public function artikel() {
        $data['artikels'] = $this->Artikel_model->get_all();
        $this->load->view('admin/artikel_list', $data);
    }

    // Artikel - Create Form
    public function create() {
        $this->load->view('admin/artikel_form');
    }

    // Artikel - Store
    public function store() {
        $this->form_validation->set_rules('judul', 'Judul', 'required|min_length[5]');
        $this->form_validation->set_rules('konten', 'Konten', 'required');

        if ($this->form_validation->run() == FALSE) {
        // menampilkan error validasi
        $this->session->set_flashdata('error', validation_errors());
        $this->load->view('admin/artikel_form');
        } else {
        $data = [
            'judul' => $this->input->post('judul'),
            'konten' => $this->input->post('konten'),
            'draft' => $this->input->post('draft') ? 1 : 0,
            'created_at' => date('Y-m-d H:i:s') // menambahkan timestamp
        ];

        if ($this->Artikel_model->create($data)) {
            $this->session->set_flashdata('success', 'Artikel berhasil ditambahkan!');
        } else {
            $this->session->set_flashdata('error', 'Gagal menambahkan artikel!');
        }
        redirect('admin/artikel');
        }
    }

    public function update($id) {
        $artikel = $this->Artikel_model->get_by_id($id);
        if (!$artikel) {
            show_404();
        }

        $this->form_validation->set_rules('judul', 'Judul', 'required|min_length[5]');
        $this->form_validation->set_rules('konten', 'Konten', 'required');

         if ($this->form_validation->run() == FALSE) {
        $this->session->set_flashdata('error', validation_errors());
        $data['artikel'] = $artikel;
        $this->load->view('admin/artikel_form', $data);
        } else {
        $data = [
            'judul' => $this->input->post('judul'),
            'konten' => $this->input->post('konten'),
            'draft' => $this->input->post('draft') ? 1 : 0
        ];

        if ($this->Artikel_model->update($id, $data)) {
            $this->session->set_flashdata('success', 'Artikel berhasil diperbarui!');
        } else {
            $this->session->set_flashdata('error', 'Gagal memperbarui artikel!');
        }
        redirect('admin/artikel');
        }
    }

    public function delete($id) {
        if ($_SERVER['REQUEST_METHOD']!== 'POST') {
            show_404();
        }

        $artikel = $this->Artikel_model->get_by_id($id);
        if (!$artikel) {
            show_404();
        }

        if ($this->Artikel_model->delete($id)) {
            $this->session->set_flashdata('success', 'Artikel berhasil dihapus!');
        } else {
            $this->session->set_flashdata('error', 'Gagal menghapus artikel!');
        }
         redirect('admin/artikel');
    }

    // Feedback List
    public function feedback() {
        $data['feedbacks'] = $this->Feedback_model->get_all();
        $this->load->view('admin/feedback_list', $data);
    }
}