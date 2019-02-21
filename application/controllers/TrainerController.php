<?php
    class TrainerController extends CI_Controller{
        function __construct()
        {
            parent::__construct();
            $data=$this->session->userdata('user_id');
            $type=$this->session->userdata('type');
            if(!$data && $type != 2){
                $this->logOut();
            }
        }
        function index(){
            $this->load->view('Trainer/include/header_view');
            $this->load->view('Trainer/Trainer');
            $this->load->view('Trainer/include/footer_view');
        }
        public function players(){
			$this->load->model('Main_model');
			$result=$this->Main_model->get();
			$data['match']=array();
			$i=0;
			foreach ($result as $value){
				$data['match'][$i++]=array(
					'user_id' => $value['user_id'],
					'Name' => $value['firstName']." ".$value['lastName'],
					'email' => $value['email'],
					'type' => $value['type']
				);
			}

			$this->load->view('Trainer/include/header_view');
			$this->load->view('Trainer/Players',$data);
			$this->load->view('Trainer/include/footer_view');
		}
        public function matches(){
			$this->load->model('Match_model');
			$result['match']=$this->Match_model->get();
			$this->load->view('Trainer/include/header_view');
			$this->load->view('Trainer/matches',$result);
			$this->load->view('Trainer/include/footer_view');
		}
		public function addPlayer(){
        	$data['his']=1;
        	$this->load->view('Trainer/include/header_view');
        	$this->load->view('Main_page/signup_view',$data);
        	$this->load->view('Trainer/include/footer_view');
		}
		public function AddPlayerToMatch(){
        	$data['his']=1;
        	$data['ID']=$this->input->post('ID');
			$this->load->model('Match_model');
			$data['match']=$this->Match_model->get();
			$this->load->view('Trainer/include/header_view');
			$this->load->view('Trainer/matches',$data);
			$this->load->view('Trainer/include/footer_view');
		}
		public function InsertPlayerToMatch(){
			$IDM= $this->input->post('IDMatch');
			$IDP= $this->input->post('IDPlayer');
			$this->load->model('Match_model');
			$this->Match_model->insertPlayerInMatch(array('IDP' => $IDP,'IDM' => $IDM));
			$this->players();
		}
		public function createMatch(){
			$this->load->view('Trainer/include/header_view');
        	$this->load->view('Trainer/createMatch');
        	$this->load->view('Trainer/include/footer_view');
		}
		public function insertMatch(){
			$this->load->library('form_validation');
			$this->output->set_content_type('application_json');
			$this->form_validation->set_rules('MatchName','Match Name','required|min_length[3]|max_length[20]');
			$this->form_validation->set_rules('DateTime','Date & Time','required');
			$this->load->model('Match_model');
			$Name=$this->input->post('MatchName');
			$Time=$this->input->post('DateTime');
			if ($this->form_validation->run() == FALSE)
			{
				$this->output->set_output(json_encode(['result' => 0, 'error'=>$this->form_validation->error_array()]));
				return false;
			}
			$data=array(
				'Name' => $Name,
				'Time' => $Time,
			);
			$result=$this->Match_model->insertMatch($data);
			$this->output->set_output(json_encode(['result' => 1]));
			return $result;
		}
		public function deletePlayer(){
        	$ID=$this->input->post('ID');
        	$this->load->model('Main_model');
        	$this->load->model('Match_model');
			$result=$this->Match_model->getPlayer($ID);
			if($result){
				for($i=0;$i<count($result);$i++){
					$this->Match_model->delete($result[$i]['IDM']);
				}
			}
        	$this->Main_model->delete($ID);
        	$this->players();
		}
        public function logOut(){
            $this->session->sess_destroy();
            redirect('/');
        }
    }
