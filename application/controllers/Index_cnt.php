<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Index_cnt extends CI_Controller {

	function __construct(){
		parent::__construct();
	}

	public function index(){
		//モデル呼び出し
//		$this->load->model('index_model','',true);
//		$data = $this->index_model->dbdate();
//		$this->index_model->disassembl($data);
		//viewの呼び出し
		$userId isset();
		if(isset($_GET($userId)){
			$userId = $_GET($userId);
			$passwd = $_GET($passwd);
			$this->load->model('index_model','',true);
			$data = $this->index_model->dbdate($userId, $passwd);
		}//if
		
		$this->load->view('index');
	}
}
