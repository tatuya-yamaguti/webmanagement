<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Index_cnt extends CI_Controller {

	

	function __construct(){
		parent::__construct();
	}

	

	public function index(){

		$data = [];
		//ユーザIDが送られてきたとき
		if( isset($_GET['userId'])){
			if( isset($_GET['passwd'])){
				$userId = $_GET['userId'];
				$passwd = $_GET['passwd'];
				$this->load->model('Index_model','',true);
				//モデルにユーザIDとパスを送る	
				$data = $this->Index_model->dbdate($userId, $passwd);
			
				//dataが帰ってきたか判定
				if( $data != null){
					//dataを表示
					$this->load->view('top',$data);
					$this->load->view('main', $data);
				}else{
					$data['text'] = '再度入力';
					$this->load->view('index', $data);
			}//if
		}//if			
		}else{
			$this->load->view('index');
		}
	}
}


/**
 * 1.veiwからuserIdとpasswd取得
 * 2.cnt→model(userId,passwd)から照合--dbdata()
 * 3.model→cnt→view 一致していたなら次のstep　違うなら再度ログイン
 */