<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Site extends CI_Controller {

	public function index()
	{  
        $data['base']='site';
        $data['main_container']='product_view';
        $this->load->model('product');
        $this->load->library('pagination');
        $this->load->library('table');


        $config['base_url'] = 'http://localhost/crud/index.php/site/index';
        $config['total_rows']=$this->product->get_number_rows();
        $config['per_page']=4;
        $config['num_links']=100;

        $this->pagination->initialize($config);
        $data['records']=$this->product->get_data_by_limit($config['per_page'],$this->uri->segment(3));

		$this->load->view('includes/template',$data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
