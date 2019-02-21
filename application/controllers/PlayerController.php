<?php
    /**
     * Created by PhpStorm.
     * User: Obada
     * Date: 2/19/2019
     * Time: 10:16 AM
     */
    class PlayerController extends CI_Controller
    {
        function __construct()
        {
            parent::__construct();
            $data=$this->session->userdata('user_id');
            $type=$this->session->userdata('type');
            if(!$data && $type!= 1){
                $this->logOut();
            }
        }
        function index(){
			$this->load->model('Main_model');
			$result = $this->Main_model->get($_SESSION['user_id']);
			$data['data']=array(
				'Number' => $result[0]['user_id'],
				'user_name' => $result[0]['firstName']." ".$result[0]['lastName'],
				'Email' => $result[0]['email'],
				'type' =>$result[0]['type']
			);
            $this->load->view('Player/include/header_view');
            $this->load->view('Player/Player',$data);
            $this->load->view('Player/include/footer_view');
        }
        public function logOut(){
            $this->session->sess_destroy();
            redirect('/');
        }
        public function matches(){
			$this->load->model('Match_model');
        	$result=$this->Match_model->getPlayer($_SESSION['user_id']);
        	$data['match']=array();
        	$i=0;
        	foreach($result as $value){
				$data['match'][$i++]=$this->Match_model->get($value['IDM']);
			}
            $this->load->view('Player/include/header_view');
            $this->load->view('Player/matches',$data);
            $this->load->view('Player/include/footer_view');
        }
    }
