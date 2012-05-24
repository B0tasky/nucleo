<?php
	
	class Video extends CI_Controller{

		function __construct(){
			parent::__construct();
		}

		function index(){
			$this->load->view('video_view');
		}
	}
?>