<?php
class Match_model extends CI_Model{
	function __construct() {
		parent::__construct();
	}
	public function get($user_id=null){
		if($user_id===null){
			$data=$this->db->get('match');
		}else if(is_array($user_id)){
			$data= $this->db->get_where('match',$user_id);
		}else{
			$data= $this->db->get_where('match',['ID'=>$user_id]);
		}
		return $data->result_array();
	}
	public function getPlayer($user_id=null){
		if($user_id===null){
			$data=$this->db->get('player_match');
		}else if(is_array($user_id)){
			$data= $this->db->get_where('player_match',$user_id);
		}else{
			$data= $this->db->get_where('player_match',['IDP'=>$user_id]);
		}
		return $data->result_array();
	}
	public function getPlayerInMatch($user_id=null){
		if($user_id===null){
			$data=$this->db->get('player_match');
		}else if(is_array($user_id)){
			$data= $this->db->get_where('player_match',$user_id);
		}else{
			$data= $this->db->get_where('player_match',['IDM'=>$user_id]);
		}
		return $data->result_array();
	}
	public function insert($data){
		$this->db->insert('match',$data);
	}
	public function insertMatch($data){
		return $this->db->insert('match',$data);
	}
	public function insertPlayerInMatch($data){
		return $this->db->insert('player_match',$data);
	}
	public function delete($data){
		if($data===null){
			$this->db->delete('player_match');
		}else if(is_array($data)){
			$this->db->where($data);
			$this->db->delete('player_match');
		}else{
			$this->db->where('IDM', $data);
			$this->db->delete('player_match');
		}
	}
	public function update(){

	}
}
