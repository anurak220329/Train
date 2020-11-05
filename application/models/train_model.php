<?php defined('BASEPATH') OR exit('No direct script access allowed');
class train_model extends CI_Model {
		function __construct(){
            parent::__construct();
        }
        function insert_train_type($data){
			$this->db->insert('train_type',$data);
        }
        function insert_departure_station($data1){
            $this->db->insert('departure_station',$data1);
        }
        function insert_current_station($data2){
            $this->db->insert('current_station',$data2);
        }
        function insert_terminal($data3){
            $this->db->insert('terminal',$data3);
        }
      
        
        function showtable(){
			$this->db->select('*');
            $this->db->from('train_type');
            $this->db->join('departure_station','departure_station.id = train_type.id','left');
            $this->db->join('current_station','current_station.id = train_type.id','left');
            $this->db->join('terminal','terminal.id = train_type.id','left');
            

            $query = $this->db->get();
			return $query->result();
        }
       
           
            function Search_t_id($id){
           
                $this->db->select('*');
            $this->db->from('train_type');
            $this->db->join('departure_station','departure_station.id = train_type.id','left');
            $this->db->join('current_station','current_station.id = train_type.id','left');
            $this->db->join('terminal','terminal.id = train_type.id','left');
            $this->db->where('train_type.id = $id');

            $query = $this->db->get();
			return $query->result();
                
            }
            
        
       
       
       
       
}