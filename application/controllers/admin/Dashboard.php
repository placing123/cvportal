<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller

{

	public function __construct()

	{

			parent::__construct();

			// $this->lib->session_check();

	}

	

	public function page()

	{


		$data['title'] = 'Dashboard';

		$data['css'] = '';

		$data['script'] = '';

		$data['page'] = 'admin/include/main_content';
		$todaysrecords  = $this->db->get('tbl_register');
		$data['total_records'] = $todaysrecords->num_rows();

		$this->db->where('is_agreement','2');
		$todaysrecords1  = $this->db->get('tbl_register');
		$data['total_activate'] = $todaysrecords1->num_rows();
		$this->load->view('admin/dashboard',$data);

	}


	public function cronjob(){
		$today = date('Y-m-d');

		// $today =  '2022-03-10';
		$where = array('submission_status'=>'0');
		// $this->model->hdm_update_where('tbl_register',$set,$where);
		$this->db->where('end_date<',$today);
		// $this->db->where('end_date<',$today);
		$rec =$this->model->hdm_get_where('tbl_register',$where);

		// print_r($this->db->last_query());

		// print_r($rec);
		foreach($rec as $r){
			// echo $r->id.'<br>';
			// echo $r->end_date.'<br>';
			$set['submission_status']='2';
			$set['cron_at']=date('Y-m-d h:i:s');
			$where = array('id'=>$r->id);
			$this->model->hdm_update_where('tbl_register',$set,$where);
 
		}
	 
	}
	

	

}

?>