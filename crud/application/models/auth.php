<?php
class Auth extends CI_Model {


    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
   
    function get_permission($id=null)
   {
      $this->db->select('permission');  	   

      $this->db->where('group_id',$id);	   
      
     $query=$this->db->get('auth');
      
     return $query; 
   }
   
    
   
}