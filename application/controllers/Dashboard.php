<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {


	public function index()
	{
        $data = array();
        if($this->session->userdata('userId') == ''){
        	die("access denied");
        } else
        {
            $this->load->model('VotingModel');
            $data['lists']=$this->VotingModel->getVoterList();
            var_dump($data['lists']);
	        echo $this->session->flashdata('notification');
	        $this->load->view('Template/header');
	        $this->load->view('HomeComponents/navbar');
	        $this->load->view('Dashboard/1st',$data);
	        $this->load->view('Template/footer');
        }
        
    }

    public function signOut(){
    	//echo $this->session->userdata('userId');
    	$this->session->unset_userdata('userId');
        redirect('home');
    }
    
}
