<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Takaki extends CI_Controller {
 
	function __construct(){
		parent::__construct();
	}

	public function main(){
		
		//モデルの呼び出し
		$this->load->model('Ride','',true);

		//モデルのメソッド利用
		//$data['dbdata'] = $this->Ride->index();
		//$data = $this->Ride->dbdate();
		//$title['t0'] = $this->Ride->title();
		$data = $this->Ride->dataSet();
		//viewの呼び出し
		$this->load->view('oruga',$data);
	}	
	
}
