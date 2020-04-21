<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Guru extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Guru_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'guru/index?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'guru/index?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'guru/index';
            $config['first_url'] = base_url() . 'guru/index';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Guru_model->total_rows($q);
        $guru = $this->Guru_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'guru_data' => $guru,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->template->display('admin/guru/tbl_guru_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Guru_model->get_by_id($id);
        if ($row) {
            $data = array(
              'guru_id' => $row->guru_id,
              'guru_nip' => $row->guru_nip,
              'guru_nama' => $row->guru_nama,
              'guru_jenkel' => $row->guru_jenkel,
              'guru_tmp_lahir' => $row->guru_tmp_lahir,
              'guru_tgl_lahir' => $row->guru_tgl_lahir,
              'guru_mapel' => $row->guru_mapel,
              'guru_photo' => $row->guru_photo,
              'guru_tgl_input' => $row->guru_tgl_input,
          );
            $this->template->display('admin/guru/tbl_guru_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('guru'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('guru/create_action'),
            'guru_id' => set_value('guru_id'),
            'guru_nip' => set_value('guru_nip'),
            'guru_nama' => set_value('guru_nama'),
            'guru_jenkel' => set_value('guru_jenkel'),
            'guru_tmp_lahir' => set_value('guru_tmp_lahir'),
            'guru_tgl_lahir' => set_value('guru_tgl_lahir'),
            'guru_mapel' => set_value('guru_mapel'),
            'guru_photo' => set_value('guru_photo'),
            'guru_tgl_input' => set_value('guru_tgl_input'),
        );
        $this->template->display('admin/guru/tbl_guru_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
              'guru_nip' => $this->input->post('guru_nip',TRUE),
              'guru_nama' => $this->input->post('guru_nama',TRUE),
              'guru_jenkel' => $this->input->post('guru_jenkel',TRUE),
              'guru_tmp_lahir' => $this->input->post('guru_tmp_lahir',TRUE),
              'guru_tgl_lahir' => $this->input->post('guru_tgl_lahir',TRUE),
              'guru_mapel' => $this->input->post('guru_mapel',TRUE),
              'guru_photo' => $this->input->post('guru_photo',TRUE),
              'guru_tgl_input' => $this->input->post('guru_tgl_input',TRUE),
          );

            $this->Guru_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('guru'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Guru_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('guru/update_action'),
                'guru_id' => set_value('guru_id', $row->guru_id),
                'guru_nip' => set_value('guru_nip', $row->guru_nip),
                'guru_nama' => set_value('guru_nama', $row->guru_nama),
                'guru_jenkel' => set_value('guru_jenkel', $row->guru_jenkel),
                'guru_tmp_lahir' => set_value('guru_tmp_lahir', $row->guru_tmp_lahir),
                'guru_tgl_lahir' => set_value('guru_tgl_lahir', $row->guru_tgl_lahir),
                'guru_mapel' => set_value('guru_mapel', $row->guru_mapel),
                'guru_photo' => set_value('guru_photo', $row->guru_photo),
                'guru_tgl_input' => set_value('guru_tgl_input', $row->guru_tgl_input),
            );
            $this->template->display('admin/guru/tbl_guru_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('guru'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('guru_id', TRUE));
        } else {
            $data = array(
              'guru_nip' => $this->input->post('guru_nip',TRUE),
              'guru_nama' => $this->input->post('guru_nama',TRUE),
              'guru_jenkel' => $this->input->post('guru_jenkel',TRUE),
              'guru_tmp_lahir' => $this->input->post('guru_tmp_lahir',TRUE),
              'guru_tgl_lahir' => $this->input->post('guru_tgl_lahir',TRUE),
              'guru_mapel' => $this->input->post('guru_mapel',TRUE),
              'guru_photo' => $this->input->post('guru_photo',TRUE),
              'guru_tgl_input' => $this->input->post('guru_tgl_input',TRUE),
          );

            $this->Guru_model->update($this->input->post('guru_id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('guru'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Guru_model->get_by_id($id);

        if ($row) {
            $this->Guru_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('guru'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('guru'));
        }
    }

    public function _rules() 
    {
       $this->form_validation->set_rules('guru_nip', 'guru nip', 'trim|required');
       $this->form_validation->set_rules('guru_nama', 'guru nama', 'trim|required');
       $this->form_validation->set_rules('guru_jenkel', 'guru jenkel', 'trim|required');
       $this->form_validation->set_rules('guru_tmp_lahir', 'guru tmp lahir', 'trim|required');
       $this->form_validation->set_rules('guru_tgl_lahir', 'guru tgl lahir', 'trim|required');
       $this->form_validation->set_rules('guru_mapel', 'guru mapel', 'trim|required');
       $this->form_validation->set_rules('guru_photo', 'guru photo', 'trim|required');
       $this->form_validation->set_rules('guru_tgl_input', 'guru tgl input', 'trim|required');

       $this->form_validation->set_rules('guru_id', 'guru_id', 'trim');
       $this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
   }

}

/* End of file Guru.php */
/* Location: ./application/controllers/Guru.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2020-04-03 07:12:52 */
/* http://harviacode.com */