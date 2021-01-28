<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Board extends CI_Controller {
/*
    간단한 crud 생성
*/
public function index()
	{
        // echo '테스트1';
		$this->load->view('header');
		$this->load->view('simple_board');
		$this->load->view('footer');
	}

public function get($id){
		$data = array('id' => $id);
		$this->load->view('header');
		$this->load->view('simple_board', $data);
		$this->load->view('footer');
	}
}
