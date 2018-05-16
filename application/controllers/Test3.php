<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test2 extends CI_Controller {

	function __construct(){
		parent::__construct();
		//db接続
		$this->load->database();
	}

	public function index(){
		//データ作成　連想配列
		$data['title1'] ="複数ページの表示Test";
		$data['title2'] ="users表";
		//array('表名' => 条件の値)
		$where = array('positionId' => 1, 'userId' => 2);

		//dbからデータの読み込み
		$dbresult = $this->db->get_where('users',$where);
		$data['dbdata'] = $dbresult->result_array();
		

		//viewの呼び出し
		$this->load->view('oruga',$data);
		$this->load->view('index',$data);


	}
}
