<?php
    class Main_model extends CI_Model{
        function __construct() {
            parent::__construct();
        }
        public function get($user_id=null){
            if($user_id===null){
                $data=$this->db->get('user');
            }else if(is_array($user_id)){
                $data= $this->db->get_where('user',$user_id);
            }else{
                $data= $this->db->get_where('user',['user_id'=>$user_id]);
            }
            return $data->result_array();
        }
        public function insert($data){
            $this->db->insert('user',$data);
        }
        public function delete($user_id=null){
			if($user_id===null){
				$this->db->delete('user');
			}else if(is_array($user_id)){
				$this->db->where($user_id);
				$this->db->delete('user');
			}else{
				$this->db->where('user_id', $user_id);
				$this->db->delete('user');
			}
        }
        public function update(){
            
        }
    }
