<?php
class Index_model extends CI_Model {

	function __construct(){
		parent::__construct();
    }
    
	public function dbdate($userId, $passwd){
		//dbからデータの読み込み
		$passwd = sha1($passwd); 
        $dbresult = $this->db->query('select userId, name from users where userId =? and password =?',array($userId, $passwd)); 
        return $dbresult->result_array();

	}

	//二次元配列分解
	public function disassembly($dbdata){
		//foreach(配列 as 入れる変数)
		foreach($dbdata as $val){
			echo $val;
		}//foreach
	}

}