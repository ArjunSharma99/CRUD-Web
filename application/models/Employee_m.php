<?php

class Employee_m extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    function read()
    {
        $query = $this->db->get("emp_tb");
        return $query->result();
    }
    function insert($data)
    {
        return $this->db->insert("emp_tb", $data);
        // return $query->row_array();
    }

    function edit($id)
    {
        $query = $this->db->get_where("emp_tb", ['id' => $id]);
        return $query->row();
    }

    function update($data, $id)
    {
        return $this->db->update('emp_tb', $data, ['id' => $id]);

    }

    function delete($id)
    {
        return $this->db->delete('emp_tb', ['id' => $id]);
    }


    function dis()
    {

        // $query = $this->db->query("select * from emp_tb");
        $query = $this->db->get('emp_tb');

        foreach ($query->result() as $row) {
            echo $row->first_name;
            echo $row->last_name;
            // echo $row['body'];

        }
        // $row = $query->row();

        // if (isset($row)) {
        //     echo $row->first_name;
        //     echo $row->last_name;
        //     // echo $row->body;
        // }
    }
}