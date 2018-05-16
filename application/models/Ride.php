<?php
class Ride extends CI_Model {

	function __construct(){
		parent::__construct();
    }
    

	public function dbdate(){
		//array('表名' => 条件の値)
		$where = array('positionId' => 1, 'userId' => 2);
		$data['d1'] ="SQL Where句Test";
		$data['d2'] ="users表";
		//dbからデータの読み込み
        $dbresult = $this->db->get_where('users',$where); 
        $data['dbdata'] = $dbresult->result_array();     
        return $data;
	}
	public function title(){
		//データ作成　連想配列
		$title['t1'] ="php test";
		$title['t2'] ="タイトル2";
		return $title;
	}
	public function dataSet(){
		$arr0 = array('title' => 'Test(h1)');
		$arr1 = array('title' => '表示(h2)');
		$arr2 = array($arr0, $arr1);
		return $arr2;	
	}
}