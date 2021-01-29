<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Board extends CI_Controller {
/*
    간단한 crud 생성
*/
	function __construct(){
		parent::__construct();
		$this->load->database();
		$this->load->model('board_model');
		$this->load->library('curl');
	}
	public function index()
	{
		$datas = $this->board_model->get(); // model 
		$this->load->view('header');
		$this->load->view('simple_board', array('boards'=>$datas));
		$this->load->view('footer');
	}

	public function insert(){
		$this->load->view('header');
		$this->load->view('insert_board');
		$this->load->view('footer');
	}

	public function create(){
		$this->board_model->post(array(
			'title' => $this->input->post('title'),
			'content' => $this->input->post('content'),
		));  // create 실행
		redirect('/');
	}
}
