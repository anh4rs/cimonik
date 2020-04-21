<?php

if (!defined('BASEPATH'))
  exit('No direct script access allowed');

class Berita extends CI_Controller
{
  function __construct()
  {
    parent::__construct();
    $this->load->model('Berita_model');
    $this->load->model('Kategori_model','kategori');
    $this->load->library('form_validation');
  }

  public function index()
  {
    $q = urldecode($this->input->get('q', TRUE));
    $start = intval($this->input->get('start'));

    if ($q <> '') {
      $config['base_url'] = base_url() . 'berita/index?q=' . urlencode($q);
      $config['first_url'] = base_url() . 'berita/index?q=' . urlencode($q);
    } else {
      $config['base_url'] = base_url() . 'berita/index';
      $config['first_url'] = base_url() . 'berita/index';
    }

    $config['per_page'] = 10;
    $config['page_query_string'] = TRUE;
    $config['total_rows'] = $this->Berita_model->total_rows($q);
    $berita = $this->Berita_model->get_limit_data($config['per_page'], $start, $q);

    $this->load->library('pagination');
    $this->pagination->initialize($config);

    $data = array(
      'berita_data' => $berita,
      'q' => $q,
      'pagination' => $this->pagination->create_links(),
      'total_rows' => $config['total_rows'],
      'start' => $start,
    );
    $this->template->display('admin/berita/tbl_berita_list', $data);
  }

  public function read($id) 
  {
    $row = $this->Berita_model->get_by_id($id);
    if ($row) {
      $data = array(
        'berita_id' => $row->berita_id,
        'berita_judul' => $row->berita_judul,
        'berita_isi' => $row->berita_isi,
        'berita_tanggal' => $row->berita_tanggal,
        'berita_kategori_id' => $row->berita_kategori_id,
        'berita_gambar' => $row->berita_gambar,
        'berita_pengguna_id' => $row->berita_pengguna_id,
        'berita_slug' => $row->berita_slug,
      );
      $this->template->display('admin/berita/tbl_berita_read', $data);
    } else {
      $this->session->set_flashdata('message', 'Record Not Found');
      redirect(site_url('berita'));
    }
  }

  public function create() 
  {
    $kategori = $this->kategori->get_all_asc()->result();

    $data = array(
      'button' => 'Create',
      'action' => site_url('berita/create_action'),
      'berita_id' => set_value('berita_id'),
      'berita_judul' => set_value('berita_judul'),
      'berita_isi' => set_value('berita_isi'),
      'berita_tanggal' => set_value('berita_tanggal'),
      'berita_kategori_id' => set_value('berita_kategori_id'),
      'berita_gambar' => set_value('berita_gambar'),
      'berita_pengguna_id' => set_value('berita_pengguna_id'),
      'berita_slug' => set_value('berita_slug'),
      'kategori_id' => set_value('kategori_id'),
      'kategoris' => $kategori,

    );
    $this->template->display('admin/berita/tbl_berita_form', $data);
  }

  public function create_action() 
  {
    $this->_rules();

    if ($this->form_validation->run() == FALSE) {
      $this->create();
    } else {
      $data = array(
        'berita_judul' => $this->input->post('berita_judul',TRUE),
        'berita_isi' => $this->input->post('berita_isi',TRUE),
        'berita_tanggal' => $this->input->post('berita_tanggal',TRUE),
        'berita_kategori_id' => $this->input->post('berita_kategori_id',TRUE),
        'berita_gambar' => $this->input->post('berita_gambar',TRUE),
        'berita_slug' => url_title(strtolower($this->input->post('berita_judul',TRUE))),
      );

      $this->Berita_model->insert($data);
      $this->session->set_flashdata('message', 'Create Record Success');
      redirect(site_url('berita'));
    }
  }

  public function update($id) 
  {
    $row = $this->Berita_model->get_by_id($id);

    if ($row) {
      $data = array(
        'button' => 'Update',
        'action' => site_url('berita/update_action'),
        'berita_id' => set_value('berita_id', $row->berita_id),
        'berita_judul' => set_value('berita_judul', $row->berita_judul),
        'berita_isi' => set_value('berita_isi', $row->berita_isi),
        'berita_tanggal' => set_value('berita_tanggal', $row->berita_tanggal),
        'berita_kategori_id' => set_value('berita_kategori_id', $row->berita_kategori_id),
        'berita_gambar' => set_value('berita_gambar', $row->berita_gambar),
        'berita_pengguna_id' => set_value('berita_pengguna_id', $row->berita_pengguna_id),
        'berita_slug' => url_title(strtolower($this->input->post('berita_judul',TRUE))),
      );
      $this->template->display('admin/berita/tbl_berita_form', $data);
    } else {
      $this->session->set_flashdata('message', 'Record Not Found');
      redirect(site_url('berita'));
    }
  }

  public function update_action() 
  {
    $this->_rules();

    if ($this->form_validation->run() == FALSE) {
      $this->update($this->input->post('berita_id', TRUE));
    } else {
      $data = array(
        'berita_judul' => $this->input->post('berita_judul',TRUE),
        'berita_isi' => $this->input->post('berita_isi',TRUE),
        'berita_tanggal' => $this->input->post('berita_tanggal',TRUE),
        'berita_kategori_id' => $this->input->post('berita_kategori_id',TRUE),
        'berita_gambar' => $this->input->post('berita_gambar',TRUE),
        'berita_pengguna_id' => $this->input->post('berita_pengguna_id',TRUE),
        'berita_slug' => $this->input->post('berita_slug',TRUE),
      );

      $this->Berita_model->update($this->input->post('berita_id', TRUE), $data);
      $this->session->set_flashdata('message', 'Update Record Success');
      redirect(site_url('berita'));
    }
  }

  public function delete($id) 
  {
    $row = $this->Berita_model->get_by_id($id);

    if ($row) {
      $this->Berita_model->delete($id);
      $this->session->set_flashdata('message', 'Delete Record Success');
      redirect(site_url('berita'));
    } else {
      $this->session->set_flashdata('message', 'Record Not Found');
      redirect(site_url('berita'));
    }
  }

  public function _rules() 
  {
   $this->form_validation->set_rules('berita_judul', 'berita judul', 'trim|required');
   $this->form_validation->set_rules('berita_isi', 'berita isi', 'trim|required');
   $this->form_validation->set_rules('berita_tanggal', 'berita tanggal', 'trim|required');
   $this->form_validation->set_rules('berita_kategori_id', 'berita kategori id', 'trim|required');
   $this->form_validation->set_rules('berita_gambar', 'berita gambar', 'trim|required');
       // $this->form_validation->set_rules('berita_pengguna_id', 'berita pengguna id', 'trim|required');
       // $this->form_validation->set_rules('berita_slug', 'berita slug', 'trim|required');

   $this->form_validation->set_rules('berita_id', 'berita_id', 'trim');
   $this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
 }

}

/* End of file Berita.php */
/* Location: ./application/controllers/Berita.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2020-04-14 06:57:01 */
/* http://harviacode.com */