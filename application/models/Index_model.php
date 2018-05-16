<?php
class Index_model extends CI_Model {

	function __construct(){
		parent::__construct();
    }
    
	public function dbdate(){
		//dbからデータの読み込み
        $dbresult = $this->db->query('select userId, name from users where userId =?, password =?'); 
        $data['dbdata'] = $dbresult->result_array();     
        return $data;
	}

	//二次元配列分解
	public function disassembly($dbdata){
		//foreach(配列 as 入れる変数)
		foreach($dbdata as $val){
			echo $val;
		}//foreach
	}

}