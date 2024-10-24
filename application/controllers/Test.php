<?php
class Test extends CI_Controller
{

    public function index()
    {
        echo "This is default function.";
    }

    public function hello()
    {

        $this->load->model('Employee_Data_m');
        $caller = $this->Employee_Data_m->call();
        $data['caller'] = $caller;
        $data['title'] = 'Hi! This is from controller';
        $this->load->view("display", $data);
    }

}
?>