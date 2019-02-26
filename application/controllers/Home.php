<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {


	public function index()
	{
		$err = "";
		$this->load->model('dashboardModel');
		//var_dump( $this->dashboardModel->getAll());
		$condidates = $this->dashboardModel->getAll();

        if ($this->input->post('submit')==true) {
        	echo "subited";
        	

            $data['voter_nm']=$this->input->post('name');
            $data['voter_number']=$this->input->post('number');
            $data['feedback']=$this->input->post('feedback');
            $data['vote_to']=$this->input->post('select');
             
            var_dump($data);  
            $check = $this->dashboardModel->check($data['voter_number']);
            if(!$check['bool'])
                {
                	if($this->dashboardModel->insert($data))
                		if(!$this->dashboardModel->update($data['vote_to']))
                			$err = "Not updated";
                		else
                		    $err = "Voting Done";
                	else
                		$err = "Something Wrong";

                }
            else{
            	$err =  "Alresdy registerd";
            }

         $this->session->set_flashdata('message_name', $err);
         redirect('index.php/home/index');

        }

		$this->load->view('template/header');
		$this->load->view('pages/navbar');

		$this->load->view('pages/dashboard',$condidates,$err);
		$this->load->view('template/footer');

	}

	public function submit(){
		echo "submit";
		
       if ($this->input->post('submit')==true) {
	    echo "string";}
	}
    

	
}
