<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Pengumuman extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Pengumuman_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'pengumuman/index?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'pengumuman/index?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'pengumuman/index';
            $config['first_url'] = base_url() . 'pengumuman/index';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Pengumuman_model->total_rows($q);
        $pengumuman = $this->Pengumuman_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'pengumuman_data' => $pengumuman,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->template->display('admin/pengumuman/tbl_pengumuman_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Pengumuman_model->get_by_id($id);
        if ($row) {
            $data = array(
		'pengumuman_id' => $row->pengumuman_id,
		'pengumuman_judul' => $row->pengumuman_judul,
		'pengumuman_deskripsi' => $row->pengumuman_deskripsi,
		'pengumuman_tanggal' => $row->pengumuman_tanggal,
		'pengumuman_author' => $row->pengumuman_author,
	    );
            $this->template->display('admin/pengumuman/tbl_pengumuman_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('pengumuman'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('pengumuman/create_action'),
	    'pengumuman_id' => set_value('pengumuman_id'),
	    'pengumuman_judul' => set_value('pengumuman_judul'),
	    'pengumuman_deskripsi' => set_value('pengumuman_deskripsi'),
	    'pengumuman_tanggal' => set_value('pengumuman_tanggal'),
	    'pengumuman_author' => set_value('pengumuman_author'),
	);
        $this->template->display('admin/pengumuman/tbl_pengumuman_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'pengumuman_judul' => $this->input->post('pengumuman_judul',TRUE),
		'pengumuman_deskripsi' => $this->input->post('pengumuman_deskripsi',TRUE),
		'pengumuman_tanggal' => $this->input->post('pengumuman_tanggal',TRUE),
		'pengumuman_author' => $this->input->post('pengumuman_author',TRUE),
	    );

            $this->Pengumuman_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('pengumuman'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Pengumuman_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('pengumuman/update_action'),
		'pengumuman_id' => set_value('pengumuman_id', $row->pengumuman_id),
		'pengumuman_judul' => set_value('pengumuman_judul', $row->pengumuman_judul),
		'pengumuman_deskripsi' => set_value('pengumuman_deskripsi', $row->pengumuman_deskripsi),
		'pengumuman_tanggal' => set_value('pengumuman_tanggal', $row->pengumuman_tanggal),
		'pengumuman_author' => set_value('pengumuman_author', $row->pengumuman_author),
	    );
            $this->template->display('admin/pengumuman/tbl_pengumuman_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('pengumuman'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('pengumuman_id', TRUE));
        } else {
            $data = array(
		'pengumuman_judul' => $this->input->post('pengumuman_judul',TRUE),
		'pengumuman_deskripsi' => $this->input->post('pengumuman_deskripsi',TRUE),
		'pengumuman_tanggal' => $this->input->post('pengumuman_tanggal',TRUE),
		'pengumuman_author' => $this->input->post('pengumuman_author',TRUE),
	    );

            $this->Pengumuman_model->update($this->input->post('pengumuman_id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('pengumuman'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Pengumuman_model->get_by_id($id);

        if ($row) {
            $this->Pengumuman_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('pengumuman'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('pengumuman'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('pengumuman_judul', 'pengumuman judul', 'trim|required');
	$this->form_validation->set_rules('pengumuman_deskripsi', 'pengumuman deskripsi', 'trim|required');
	$this->form_validation->set_rules('pengumuman_tanggal', 'pengumuman tanggal', 'trim|required');
	$this->form_validation->set_rules('pengumuman_author', 'pengumuman author', 'trim|required');

	$this->form_validation->set_rules('pengumuman_id', 'pengumuman_id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Pengumuman.php */
/* Location: ./application/controllers/Pengumuman.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2020-04-03 14:30:08 */
/* http://harviacode.com */