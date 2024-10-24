<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Employee_con extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function emplist()
    {
        $this->load->model('Employee_Data_m');
        $emp = $this->Employee_Data_m->employeename();
        echo (" Employee Name : ") . $emp;
    }

    function empshow($id)
    {
        $this->load->model("Employee_Data_m");
        $em = $this->Employee_Data_m->employeeids($id);
        echo $em;
    }


}
