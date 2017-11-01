<?php

class Login extends CI_Controller{

    public function index() {

        $this->load->view('admin/login');

    }

    public function validate()
    {
        $this->load->model('database');
        $query = $this->database->login();

        $email = $this->input->post('email');

        // geting all the querys
        $get = $this->db->query("SELECT id FROM admin WHERE email = '$email' LIMIT 1");
        $row = $get->row();
        @$id = $row->id;


        if($query) {
            $data = array(
                'email' => $this->input->post('email'),
                'id' => $id,
                'is_logged_in' => true
            );
            $this->session->set_userdata($data);
            redirect('home/index');
        } else { // incoret user name and password
            $data = array(
                'title' => 'Invalid Login',
                'heading' => 'My Heading',
                'message' => '<br /><div class="alert alert-danger"> Invalid Username or Password </div>'
            );
            $this->load->view('admin/login', $data);
        }


    }

    public function logout() {

        $this->session->sess_destroy();
        $this->session->unset_userdata('name');
        $this->load->view('admin/login');

    }
}