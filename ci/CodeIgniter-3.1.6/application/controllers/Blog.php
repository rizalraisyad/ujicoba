<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {


	public function index()
	{

		$this->load->model('blog_model');

		$data['entries'] = $this->blog_model->get_all_entries();
		$this->load->view('header');
		$this->load->view('Blog_index',$data);
		$this->load->view('footer');
	}
}
