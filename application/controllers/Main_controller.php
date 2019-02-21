<?php
    class Main_controller extends CI_Controller{
        function __construct() {
            parent::__construct();
            $this->load->database();
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
        
    }