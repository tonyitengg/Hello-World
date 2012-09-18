<?php
class Product extends CI_Model {


    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }

    function get_data()
    {
        return $this->db->get('membership');

    }
    function get_number_rows()
    {
       return $this->db->get('membership')->num_rows();
    }

    function get_data_by_limit($limit,$offset)
    {
        return $this->db->get('membership',$limit,$offset);
    }


}
