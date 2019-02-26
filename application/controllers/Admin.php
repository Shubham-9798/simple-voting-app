
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

   private $options = [
     'cost' => 12
   ];
   // private $max = mt_rand();
   // private $min = mt_rand();

	public function index()
	{
        // $this->load->model('dashboardModel');
         if(!$this->session->userdata('userId') == '') 
		 { 
            redirect('admin/dashBoard');
		 }
     echo $this->session->flashdata('status');
		$this->load->view('template/header');
		$this->load->view('pages/navbar');
		$this->load->view('pages/login');
		$this->load->view('template/footer');

	}

		public function login()
	{
   
    $msg = '';
    
		$this->load->model('dashboardModel');
        if ($this->input->post('submit')==true) {

            
            $data['number']=$this->input->post('number');
            $data['password']=$this->input->post('password');

             
             var_dump($data);  
            $check = $this->dashboardModel->check($data['number']);
            //var_dump($check);
            //var_dump($check['all_data'][0]->password);

            if($check['bool'])
                {

                    echo password_hash($data['password'], PASSWORD_DEFAULT, $this->options);
                	if(password_verify ( $data['password'] , $check['all_data'][0]->password ))
                		{
                			echo "Matched";
                			$this->session->set_userdata('userId', $data['number'].mt_rand());
                      // Set flash data 
                      $msg = 'Successfully-logedIn success';
                      $this->session->set_flashdata('status', $msg);
                      redirect('admin/dashboard');
                		}
                	else
                		{ $msg = 'Password Not Match'; $this->session->set_flashdata('status', $msg); redirect('admin/index');}

                }
            else{
            	$msg = 'Login Information is wrong';
              echo $msg;
              $this->session->set_flashdata('status', $msg);
              echo $this->session->flashdata('status');
              redirect('admin/index');
            }

         // $this->session->set_flashdata('message_name', $err);
        

        }



	}
public function dashboard() {
    if($this->session->userdata('userId')=='')
       {
        die('not authorized');
       }


		$this->load->model('AdminModel');
		//echo $this->AdminModel->get();
        
        $result = $this->AdminModel->get();
        $this->load->view('template/header'); 
        

		$this->load->view('pages/navbar');
		$this->load->view('admin/adminDashboard',$result);
	

		$this->load->view('template/footer');

	}



    public function create() {
    	if ($this->input->post('submit')==true) {
            $this->load->model('AdminModel');
             $data['cond_nm']=$this->input->post('name');
            $data['party_nm']=$this->input->post('id');
             $data['count']=0;
             

            $config['upload_path'] = "./uploads/images/";
             $config['allowed_types'] = 'jpg|gif|png|jpeg|JPG|PNG';
              $config['max_size'] = '2048';
               $config['max_width'] = '200';
                $config['max_height'] = '200';


                $this->load->library('upload', $config);

                if(!$this->upload->do_upload()){
                	$errors = array('error'=>$this->upload->display_errors());
                	$data['image'] = '1.png';
                	echo $errors['error'];

                }else{
                	$dat['upload_data'] = $this->upload->data();
                	$data['image'] = $_FILES['userfile']['name'];
                    
                	$filename = './uploads/images/'.$data['image'];
}
              //$data['image'] = $_FILES['userfile']['name'];
              //var_dump($data);
              //var_dump($_FILES);
              
              $this->AdminModel->insertCondidate($data);
              redirect('admin');
              
    	}
    }




    public function updateCond() {
      echo "condidates updated"; 
    }



	public function logout() {
		unset($_SESSION['userId']);
		redirect('home');
	}



	
}

