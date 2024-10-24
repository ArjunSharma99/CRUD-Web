<?php

class Employee_Data_m extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    function employeename()
    {
        $emp_job = $this->employeejob();
        return $emp_name = "Arjun. Job:" . $emp_job;

    }

    function employeejob()
    {

        return $emp_job = "  Backend Engineer";
    }

    function employeeids($id)
    {

        if ($id == '1') {
            return $result = "Employee 1";

        } elseif ($id == '2') {
            return $result = 'Employee 2';
        }
    }


    function call()
    {
        return $caller = "Hi this is from the model";
    }
}
