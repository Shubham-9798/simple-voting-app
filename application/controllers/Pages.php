 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {


	public function register()
	{
        
        
        
        $this->load->view('Template/header');
        $this->load->view('HomeComponents/navbar');
        $this->load->view('Pages/register'); 
        $this->load->view('Template/footer');
        
    }


    public function vote()
	{  
        echo "Login";
        $data = array() ;


        $this->load->view('Template/header');
        $this->load->view('HomeComponents/navbar'); 
        $this->load->view('Template/footer');
        
	}

    public function login()
      {  
        $this->load->model('PageModel');
        $data = array();
        $notification = "";
       
        //$this->session->set_flashdata('notification', $notification);

        if ($this->input->post('submit')==true) {
            $data['condidate_email']=$this->input->post('email');
            $data['password']=$this->input->post('password');
             
            var_dump($data);
            if($this->PageModel->checkLogin($data['condidate_email'], $data['password'])){
                $notification = "Login succesfully";
                $this->session->set_flashdata('notification', $notification);
                $this->session->set_userdata('userId', $data['condidate_email']);
                redirect('Dashboard');
             } else {
                  $notification = "Invalid mail/password";
                  $this->session->set_flashdata('notification', $notification);
             }    

        }
         

        if($this->session->userdata('userId') != ''){
            $notification = "Login succesfully";
            $this->session->set_flashdata('notification', $notification);
            echo "redirect i";
            redirect('Dashboard');
           
        }else{
        
                $this->load->view('Template/header');
                $this->load->view('HomeComponents/navbar'); 
                $this->load->view('Pages/login', $data); 
                $this->load->view('Template/footer');
        }

     $this->session->sess_destroy();
        
        
      }


//registration
        public function registerDb() //this is registration db
       {
        $data = array('t'=>false);
       
        $err['1'] = "You are successfully registered";
        $err['0'] = "You are already registered";
        $err['-1'] = "Some error occured";

        if ($this->input->post('submit')==true) {
            $data['condidate_email']=$this->input->post('email');
            $data['condidate_number']=$this->input->post('phone');
            $data['condidate_nm']=$this->input->post('name');
            
            if(self::checkExist($data)){ //existing
                echo "already registered";
                $data['notify'] = $err['0'];
            }else{
                 $this->load->model('PageModel');
                 $data['t']=$this->PageModel->registeredCondidate($data);
                 if($data['t'])
                 $data['notify']  = $err['1'];
                 else
                 $data['notify']  = $err['-1'];
                 
            }
            
     

        }
        $this->load->view('Template/header');
        $this->load->view('HomeComponents/navbar'); 
        $this->load->view('Template/notify',$data); 
        $this->load->view('Pages/register');     
        $this->load->view('Template/footer');   
        
       }

    ///other functions
    private function checkExist($data) {
        $this->load->model('PageModel');
        $t=$this->PageModel->getOne($data['condidate_number'], $data['condidate_email']);
        return $t;

        //var_dump($data);
    }

}
