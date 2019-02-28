<?php
    class Login extends CI_Controller{
        function __construct() {
            parent::__construct();
            $this->load->model('Main_model');
        }
        public function login(){
            $Email=$this->input->post('Email');
            $password=$this->input->post('Password');
            $result=$this->Main_model->get([
                'email' => $Email,
                'password' => hash('sha256',$password)
            ]);
            $this->output->set_content_type('application_json');
            if($result){
                $this->session->set_userdata(['user_id' => $result[0]['user_id']]);
                $this->session->set_userdata(['user_type' => $result[0]['type']]);
                $this->session->set_userdata(['isLogin'=>true]);
				$per=$this->checkPermession($result[0]['type']);
				$this->output->set_output(json_encode(['result' =>$per]));
            }else {
				$this->session->set_userdata(['isLogin'=>false]);
				$this->output->set_output(json_encode(['result' => 0]));
			}
        }
		private function checkPermession($type){
			if($type==1){
				return 1;
			}else{
				return 2;
			}
		}

    }
