<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Agenda extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Agenda_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'agenda/index?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'agenda/index?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'agenda/index';
            $config['first_url'] = base_url() . 'agenda/index';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Agenda_model->total_rows($q);
        $agenda = $this->Agenda_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'agenda_data' => $agenda,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->template->display('admin/agenda/tbl_agenda_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Agenda_model->get_by_id($id);
        if ($row) {
            $data = array(
              'agenda_id' => $row->agenda_id,
              'agenda_nama' => $row->agenda_nama,
              'agenda_tanggal' => $row->agenda_tanggal,
              'agenda_deskripsi' => $row->agenda_deskripsi,
              'agenda_author' => $row->agenda_author,
          );
            $this->template->display('admin/agenda/tbl_agenda_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('agenda'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('agenda/create_action'),
            'agenda_id' => set_value('agenda_id'),
            'agenda_nama' => set_value('agenda_nama'),
            'agenda_tanggal' => set_value('agenda_tanggal'),
            'agenda_deskripsi' => set_value('agenda_deskripsi'),
            'agenda_author' => set_value('agenda_author'),
        );
        $this->template->display('admin/agenda/tbl_agenda_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
              'agenda_nama' => $this->input->post('agenda_nama',TRUE),
              'agenda_tanggal' => $this->input->post('agenda_tanggal',TRUE),
              'agenda_deskripsi' => $this->input->post('agenda_deskripsi',TRUE),
              'agenda_author' => $this->input->post('agenda_author',TRUE),
          );

            $this->Agenda_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('agenda'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Agenda_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('agenda/update_action'),
                'agenda_id' => set_value('agenda_id', $row->agenda_id),
                'agenda_nama' => set_value('agenda_nama', $row->agenda_nama),
                'agenda_tanggal' => set_value('agenda_tanggal', $row->agenda_tanggal),
                'agenda_deskripsi' => set_value('agenda_deskripsi', $row->agenda_deskripsi),
                'agenda_author' => set_value('agenda_author', $row->agenda_author),
            );
            $this->template->display('admin/agenda/tbl_agenda_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('agenda'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('agenda_id', TRUE));
        } else {
            $data = array(
              'agenda_nama' => $this->input->post('agenda_nama',TRUE),
              'agenda_tanggal' => $this->input->post('agenda_tanggal',TRUE),
              'agenda_deskripsi' => $this->input->post('agenda_deskripsi',TRUE),
              'agenda_author' => $this->input->post('agenda_author',TRUE),
          );

            $this->Agenda_model->update($this->input->post('agenda_id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('agenda'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Agenda_model->get_by_id($id);

        if ($row) {
            $this->Agenda_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('agenda'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('agenda'));
        }
    }

    public function _rules() 
    {
       $this->form_validation->set_rules('agenda_nama', 'agenda nama', 'trim|required');
       $this->form_validation->set_rules('agenda_tanggal', 'agenda tanggal', 'trim|required');
       $this->form_validation->set_rules('agenda_deskripsi', 'agenda deskripsi', 'trim|required');

       $this->form_validation->set_rules('agenda_id', 'agenda_id', 'trim');
       $this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
   }

}

/* End of file Agenda.php */
/* Location: ./application/controllers/Agenda.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2020-04-14 18:02:33 */
/* http://harviacode.com */