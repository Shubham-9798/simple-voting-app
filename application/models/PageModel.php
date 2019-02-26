<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 


class PageModel extends CI_Model {

   function __construct() {
        parent::__construct();
   }

       function getOne($num, $mail){
        $query = $this->db->get_where('condidate', array('condidate_number' => $num, 'condidate_email' => $mail));
        return $query->result();
      }

     function checkLogin($mail, $pass){

        $query = $this->db->get_where('condidate', array('condidate_email' => $mail, 'password' => $pass));
        return $query->result();
      }

      function registeredCondidate($data) {
      	  return $this->db->insert('condidate',$data);
      }




}