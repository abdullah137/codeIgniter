<?php


class database extends  CI_Model {

    public function saveRecord( $data ) {
        return $this->db->insert('admin', $data);
    }

    public function login() {

        $email =  $this->input->post('email');
        $pass =  $this->input->post('password');

      $query = $this->db->get_where('admin', array('email' => $email, 'password'=>$pass));


        if($query->num_rows() == 1) {

            foreach ($query->result() as $row)
            {
                $id = $row->id;
            }
            return true;
        }else {
            return false;
        }
    }

    public function category( $data ) {
        return $this->db->insert('category', $data);
    }

    public function news_ins( $data ) {
        return $this->db->insert('news', $data);
    }

    public function getAllRecords( $record_id ) {
        $query = $this->db->get_where('news', array('id'=> $record_id));

        if($query->num_rows() > 0) {
            return $query->row();
        }
    }

    public function updateRecords($record_id, $data ){

     $this->db->where(array('id' => $record_id, 'admin_id' => $this->session->userdata('id')));

     return  $this->db->update('news',$data);
    }

    public function deleteRecords( $record_id ) {
        return $this->db->delete('news', array('id'=>$record_id, 'admin_id'=>$this->session->userdata('id')));
    }

    public function getCategory( $record_cat ) {
        $query = $this->db->get_where('news', array('category'=> $record_cat));

        if($query->num_rows() > 0) {
            return $query->row();
        }
    }
}