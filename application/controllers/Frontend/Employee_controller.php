<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Employee_controller extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function check()
    {

        $this->load->view('template/header');

        $this->load->model('Employee_m');
        $data['all_data'] = $this->Employee_m->read();
        $this->load->view('Frontend/employee', $data);
        $this->load->view('template/footer');
    }

    public function front()
    {
        $this->load->view('template/header');
        $this->load->view('Frontend/create');
        $this->load->view('template/footer');
    }

    public function store()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('first_name', 'First name', 'required');
        $this->form_validation->set_rules('last_name', 'Last name', 'required');
        $this->form_validation->set_rules('job', 'Job', 'required');
        $this->form_validation->set_rules('gender', 'Gender', 'required');


        if ($this->form_validation->run()) {
            $data = [
                "first_name" => $this->input->post('first_name'),
                "last_name" => $this->input->post('last_name'),
                "job" => $this->input->post('job'),
                "gender" => $this->input->post('gender'),
            ];
            $this->load->model('Employee_m');
            $this->Employee_m->insert($data);
            redirect(base_url('employee'));

            // } else {
            //     $this->front();
            //     //redirect(base_url('employee/add'));


            // }

            //  var_dump($data);

        }
    }

    function edit($id)
    {
        $this->load->view('template/header');
        $this->load->model('Employee_m');
        $data['all_data'] = $this->Employee_m->edit($id);

        $this->load->view('Frontend/edit', $data);
        $this->load->view('template/footer');

    }

    function update($id)
    {

        $data = [
            "first_name" => $this->input->post('first_name'),
            "last_name" => $this->input->post('last_name'),
            "job" => $this->input->post('job'),
            "gender" => $this->input->post('gender'),
        ];
        $this->load->model('Employee_m');
        $this->Employee_m->update($data, $id);
        redirect(base_url('employee'));
    }


    function delete($id)
    {
        $this->load->model('Employee_m');
        $this->Employee_m->delete($id);
        redirect(base_url('employee'));
    }

    function readdb()
    {
        $this->load->model('Employee_m');
        $this->Employee_m->dis();

    }
}