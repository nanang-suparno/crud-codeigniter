<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Biodata extends CI_Controller {

	public function __construct() {

	  parent::__construct(); 
	
		$this->load->model('mbiodata');
	}

	public function index()
	{
		
		$this->load->view('form_add');
	}

	public function insert()
	{
		$this->mbiodata->do_insert();
		$data = array('info'=>'Selamat Anda Berhasil Melakukan Insert Data');
		$this->session->set_flashdata($data);
		redirect('biodata/read');
	}

	public function read()
	{
		
		$data['query'] = $this->mbiodata->get();
		$this->load->view('browse',$data);
	}
	
	public function edit($id)
	{
		$data['query'] = $this->mbiodata->get_edit($id);
		$this->load->view('form_edit',$data);
	}
	
	public function update()
	{
		$this->mbiodata->do_update();
		$data = array('info'=>'Selamat Anda Berhasil Melakukan Update Data');
		$this->session->set_flashdata($data);
		redirect('biodata/read');
	}

	public function delete($id)
	{
		$data['query'] = $this->mbiodata->do_delete($id);
		$data = array('info'=>'Selamat Anda Berhasil Melakukan Delete Data');
		$this->session->set_flashdata($data);
		redirect('biodata/read');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */