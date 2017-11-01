<?php


class user_index extends CI_Controller
{
    public function index() {

        $this->load->view('GUI/index');

    }

    public function post ( $record_id ) {
        $this->load->model('database');
        $record = $this->database->getAllRecords( $record_id );
        $query = $this->db->get_where('news', array('id'=> $record_id));
        if($query->num_rows() > 0) {
            $this->load->view('GUI/post', ['record'=>$record]);
        }else {
            $this->load->view('GUI/404');
        }
    }

    public function category( $record_cat ) {
        $this->load->model('database');
        $record = $this->database->getCategory( $record_cat );

        $query = $this->db->get_where('news', array('category'=> $record_cat));
        if($query->num_rows() > 0) {
            $this->load->view('GUI/category', ['record'=>$record]);
        }else {
            $this->load->view('GUI/404');
        }

    }

    public function unknown_page() {
        $this->load->view('GUI/404');
    }


}