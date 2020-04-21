<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Slider extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Slider_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'slider/index?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'slider/index?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'slider/index';
            $config['first_url'] = base_url() . 'slider/index';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Slider_model->total_rows($q);
        $slider = $this->Slider_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'slider_data' => $slider,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->template->display('admin/slider/tbl_slider_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Slider_model->get_by_id($id);
        if ($row) {
            $data = array(
		'slider_id' => $row->slider_id,
		'slider_gambar' => $row->slider_gambar,
		'slider_judul' => $row->slider_judul,
	    );
            $this->template->display('admin/slider/tbl_slider_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('slider'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('slider/create_action'),
	    'slider_id' => set_value('slider_id'),
	    'slider_gambar' => set_value('slider_gambar'),
	    'slider_judul' => set_value('slider_judul'),
	);
        $this->template->display('admin/slider/tbl_slider_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'slider_gambar' => $this->input->post('slider_gambar',TRUE),
		'slider_judul' => $this->input->post('slider_judul',TRUE),
	    );

            $this->Slider_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('slider'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Slider_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('slider/update_action'),
		'slider_id' => set_value('slider_id', $row->slider_id),
		'slider_gambar' => set_value('slider_gambar', $row->slider_gambar),
		'slider_judul' => set_value('slider_judul', $row->slider_judul),
	    );
            $this->template->display('admin/slider/tbl_slider_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('slider'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('slider_id', TRUE));
        } else {
            $data = array(
		'slider_gambar' => $this->input->post('slider_gambar',TRUE),
		'slider_judul' => $this->input->post('slider_judul',TRUE),
	    );

            $this->Slider_model->update($this->input->post('slider_id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('slider'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Slider_model->get_by_id($id);

        if ($row) {
            $this->Slider_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('slider'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('slider'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('slider_gambar', 'slider gambar', 'trim|required');
	$this->form_validation->set_rules('slider_judul', 'slider judul', 'trim|required');

	$this->form_validation->set_rules('slider_id', 'slider_id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Slider.php */
/* Location: ./application/controllers/Slider.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2020-04-14 13:14:37 */
/* http://harviacode.com */