<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class main extends CI_Controller{
		public function index()
		{
			$this->load->model('article_model');

			$data['articles'] = $this->article_model->get_three();

			$this->load->view('main/mainview',$data);	
		}
	}	