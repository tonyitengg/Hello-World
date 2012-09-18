<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index()
	{   $data['base']='admin';
        $data['main_container']='create';
        $this->load->view('includes/template',$data);

    }
    public function create()
    {
        echo "Create !";
    }
}
