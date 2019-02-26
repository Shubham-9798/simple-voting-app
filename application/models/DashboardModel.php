<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

 
class DashboardModel extends CI_Model {

   function __construct() {
        parent::__construct();
   }



       public function check($num){
        $query = $this->db->get_where('amin', array('number' => $num));
        if($query->result())
            return array('bool'=>true, "all_data"=>$query->result());
        else 
          return array('bool'=> false, 'all_data'=>' ');
      }

      function getAll(){
        $query = $this->db->get('condidate');
        return array("all_data"=>$query->result());
      }

      function insert($data) {
        if($this->db->insert('voters',$data))
          return true;
        else
          return false;
      }

     function update($id){
            //$query = $this->db->get_where('condidate', array('condidate_id' => $num));
          $this->db->set('count', 'count+1', FALSE);
          $this->db->where('condidate_id', $id);
          if($this->db->update('condidate'))
            return true;
          else
            return fasle;

     }







}