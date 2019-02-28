<?php
    class Main_controller extends CI_Controller{
        function __construct() {
            parent::__construct();
            $this->load->database();
			$this->load->model('Main_model');
        }
        public function index(){
            $this->load->view('Main_page/include/header_view');
            $this->load->view('MAin_page/mainview');
            $this->load->view('Main_page/include/footer_view');
        }
        public function signIn() {
            $this->load->view('Main_page/include/header_view');
            $this->load->view('Main_page/login_view');
            $this->load->view('Main_page/include/footer_view');
        }
        
        public function signUp(){
            $this->load->view('Main_page/include/header_view');
            $this->load->view('Main_page/signup_view');
            $this->load->view('Main_page/include/footer_view');
        }
		public function get($param=null){
			return $this->Main_model->get($param);
		}

		public function insert(){
			$this->load->library('form_validation');
			$this->output->set_content_type('application_json');
			$this->form_validation->set_rules('first_Name','First Name','required|min_length[3]|max_length[20]');
			$this->form_validation->set_rules('last_Name','Last Name','required|min_length[3]|max_length[20]');
			$this->form_validation->set_rules('Email','Email','required|valid_email|is_unique[user.email]');
			$this->form_validation->set_rules('Password','password','required|min_length[6]|max_length[40]');
			$this->form_validation->set_rules('Confirm_Password','confirm password','matches[Password]');

			if ($this->form_validation->run() == FALSE)
			{
				$this->output->set_output(json_encode(['result' => 0, 'error'=>$this->form_validation->error_array()]));
				return false;
			}
			$fName=$this->input->post('first_Name');
			$lName=$this->input->post('last_Name');
			$email=$this->input->post('Email');
			$password=$this->input->post('Password');
			$type=$this->input->post('choose');
			$result=$this->Main_model->insert([
				'firstName' => $fName,
				'lastName' => $lName,
				'email' => $email,
				'password' => hash('sha256',$password),
				'type' => $type
			]);
			$this->output->set_output(json_encode(['result' => 1]));
			return $result;
		}
		public function delete($user_id){
			$this->db->delete('user',['user_id'=>$user_id]);
		}
		public function update($data,$user_id){
			$this->db->where(['user_id'=>$user_id]);
			$this->db->update('user',$data);

		}
    }
