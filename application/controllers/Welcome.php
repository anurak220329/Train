<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('train_model','tm');
		
	}
	public function index()
	{
		$this->load->view('show');
	}
	public function addData()
	{
		$this->load->view('views_form');
	}

	public function insertData()
	{
		$data = array(
			'id' => $this->input->post("id"),
			'train' => $this->input->post("train"),
			
		);

		$data1 = array(	
			'id'=> $this->input->post("id"),
			'd_station'=> $this->input->post("d_station"),
			'd_timeout'=> $this->input->post("d_timeout"),
		);

		$data2 = array(
			'id'=> $this->input->post("id"),
			'c_timeto'=> $this->input->post("c_timeto"),
			'c_timeout'=> $this->input->post("c_timeout"),
			
		);

		$data3 = array(
			'id' => $this->input->post("id"),
			't_station'=> $this->input->post("t_station"),
			't_timeto'=> $this->input->post("t_timeto"),
			
		);
		
		

		if($this->input->post("train")!= "" && $this->input->post("id")!== ""){
			$this->tm->insert_train_type($data);
			$this->tm->insert_departure_station($data1);
			$this->tm->insert_current_station($data2);
			$this->tm->insert_terminal($data3);
			$result['tm'] = $this->tm->showtable();
			$this->load->view('views_table',$result);
		}else {
			echo "ไม่สามารถเพิ่มข้อมูลได้!";
		}

	}
		public function  show(){
			$result['tm'] = $this->tm->showtable();
			$this->load->view('views_table',$result);
				}

				public function search_id()
				{	
				
					$id = $this->input->get('id');
					
					if($id == "")
					{
						echo"<script language=\"JavaScript\">";
						echo"alert('ไม่พบข้อมูลที่คุณค้นหาค่ะ !')";
						echo	"</script>";
						$this->load->view('views_table');
					}
					else
					{
					$result['tm'] = $this->tm->Search_t_id($id);
					$this->load->view('views_id',$result);
					}
				}
}
