<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Pengaturan extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Pengaturan_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'pengaturan/index?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'pengaturan/index?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'pengaturan/index';
            $config['first_url'] = base_url() . 'pengaturan/index';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Pengaturan_model->total_rows($q);
        $pengaturan = $this->Pengaturan_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'pengaturan_data' => $pengaturan,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->template->display('admin/pengaturan/tbl_pengaturan_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Pengaturan_model->get_by_id($id);
        if ($row) {
            $data = array(
              'id' => $row->id,
              'nama_sekolah' => $row->nama_sekolah,
              'npsn' => $row->npsn,
              'alamat' => $row->alamat,
              'provinsi' => $row->provinsi,
              'kabupaten' => $row->kabupaten,
              'kecamatan' => $row->kecamatan,
              'koordinat' => $row->koordinat,
              'apykeymap' => $row->apykeymap,
              'kodepos' => $row->kodepos,
              'telepon' => $row->telepon,
              'faks' => $row->faks,
              'email' => $row->email,
              'facebook' => $row->facebook,
              'youtube' => $row->youtube,
              'twitter' => $row->twitter,
              'googleplus' => $row->googleplus,
          );
            $this->template->display('admin/pengaturan/tbl_pengaturan_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('pengaturan'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('pengaturan/create_action'),
            'id' => set_value('id'),
            'nama_sekolah' => set_value('nama_sekolah'),
            'npsn' => set_value('npsn'),
            'alamat' => set_value('alamat'),
            'provinsi' => set_value('provinsi'),
            'kabupaten' => set_value('kabupaten'),
            'kecamatan' => set_value('kecamatan'),
            'koordinat' => set_value('koordinat'),
            'apykeymap' => set_value('apykeymap'),
            'kodepos' => set_value('kodepos'),
            'telepon' => set_value('telepon'),
            'faks' => set_value('faks'),
            'email' => set_value('email'),
            'facebook' => set_value('facebook'),
            'youtube' => set_value('youtube'),
            'twitter' => set_value('twitter'),
            'googleplus' => set_value('googleplus'),
        );
        $this->template->display('admin/pengaturan/tbl_pengaturan_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
              'nama_sekolah' => $this->input->post('nama_sekolah',TRUE),
              'npsn' => $this->input->post('npsn',TRUE),
              'alamat' => $this->input->post('alamat',TRUE),
              'provinsi' => $this->input->post('provinsi',TRUE),
              'kabupaten' => $this->input->post('kabupaten',TRUE),
              'kecamatan' => $this->input->post('kecamatan',TRUE),
              'koordinat' => $this->input->post('koordinat',TRUE),
              'apykeymap' => $this->input->post('apykeymap',TRUE),
              'kodepos' => $this->input->post('kodepos',TRUE),
              'telepon' => $this->input->post('telepon',TRUE),
              'faks' => $this->input->post('faks',TRUE),
              'email' => $this->input->post('email',TRUE),
              'facebook' => $this->input->post('facebook',TRUE),
              'youtube' => $this->input->post('youtube',TRUE),
              'twitter' => $this->input->post('twitter',TRUE),
              'googleplus' => $this->input->post('googleplus',TRUE),
          );

            $this->Pengaturan_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('pengaturan'));
        }
    }
    
    // public function update($id) 
    public function update() 
    {
        $id = 1;

        $row = $this->Pengaturan_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('pengaturan/update_action'),
                'id' => set_value('id', $row->id),
                'nama_sekolah' => set_value('nama_sekolah', $row->nama_sekolah),
                'npsn' => set_value('npsn', $row->npsn),
                'alamat' => set_value('alamat', $row->alamat),
                'provinsi' => set_value('provinsi', $row->provinsi),
                'kabupaten' => set_value('kabupaten', $row->kabupaten),
                'kecamatan' => set_value('kecamatan', $row->kecamatan),
                'koordinat' => set_value('koordinat', $row->koordinat),
                'apykeymap' => set_value('apykeymap', $row->apykeymap),
                'kodepos' => set_value('kodepos', $row->kodepos),
                'telepon' => set_value('telepon', $row->telepon),
                'faks' => set_value('faks', $row->faks),
                'email' => set_value('email', $row->email),
                'facebook' => set_value('facebook', $row->facebook),
                'youtube' => set_value('youtube', $row->youtube),
                'twitter' => set_value('twitter', $row->twitter),
                'googleplus' => set_value('googleplus', $row->googleplus),
            );
            $this->template->display('admin/pengaturan/tbl_pengaturan_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('pengaturan'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id', TRUE));
        } else {
            $data = array(
              'nama_sekolah' => $this->input->post('nama_sekolah',TRUE),
              'npsn' => $this->input->post('npsn',TRUE),
              'alamat' => $this->input->post('alamat',TRUE),
              'provinsi' => $this->input->post('provinsi',TRUE),
              'kabupaten' => $this->input->post('kabupaten',TRUE),
              'kecamatan' => $this->input->post('kecamatan',TRUE),
              'koordinat' => $this->input->post('koordinat',TRUE),
              'apykeymap' => $this->input->post('apykeymap',TRUE),
              'kodepos' => $this->input->post('kodepos',TRUE),
              'telepon' => $this->input->post('telepon',TRUE),
              'faks' => $this->input->post('faks',TRUE),
              'email' => $this->input->post('email',TRUE),
              'facebook' => $this->input->post('facebook',TRUE),
              'youtube' => $this->input->post('youtube',TRUE),
              'twitter' => $this->input->post('twitter',TRUE),
              'googleplus' => $this->input->post('googleplus',TRUE),
          );

            $this->Pengaturan_model->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('pengaturan'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Pengaturan_model->get_by_id($id);

        if ($row) {
            $this->Pengaturan_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('pengaturan'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('pengaturan'));
        }
    }

    public function _rules() 
    {
       $this->form_validation->set_rules('nama_sekolah', 'nama sekolah', 'trim|required');
       $this->form_validation->set_rules('npsn', 'npsn', 'trim|required');
       $this->form_validation->set_rules('alamat', 'alamat', 'trim|required');
       $this->form_validation->set_rules('provinsi', 'provinsi', 'trim|required');
       $this->form_validation->set_rules('kabupaten', 'kabupaten', 'trim|required');
       $this->form_validation->set_rules('kecamatan', 'kecamatan', 'trim|required');
       $this->form_validation->set_rules('koordinat', 'koordinat', 'trim|required');
       $this->form_validation->set_rules('apykeymap', 'apykeymap', 'trim|required');
       $this->form_validation->set_rules('kodepos', 'kodepos', 'trim|required');
       $this->form_validation->set_rules('telepon', 'telepon', 'trim|required');
       $this->form_validation->set_rules('faks', 'faks', 'trim|required');
       $this->form_validation->set_rules('email', 'email', 'trim|required');
       $this->form_validation->set_rules('facebook', 'facebook', 'trim|required');
       $this->form_validation->set_rules('youtube', 'youtube', 'trim|required');
       $this->form_validation->set_rules('twitter', 'twitter', 'trim|required');
       $this->form_validation->set_rules('googleplus', 'googleplus', 'trim|required');

       $this->form_validation->set_rules('id', 'id', 'trim');
       $this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
   }

}

/* End of file Pengaturan.php */
/* Location: ./application/controllers/Pengaturan.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2020-04-13 07:10:35 */
/* http://harviacode.com */