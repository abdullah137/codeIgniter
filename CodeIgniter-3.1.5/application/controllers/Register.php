<?php

class Register extends CI_Controller{

    public function index() {
        $this->load->view('admin/register');
    }

    public function save() {
         $this->form_validation->set_rules('name', 'Name', 'required');
      $this->form_validation->set_rules('username', 'UserName', 'required');
    $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
       $this->form_validation->set_rules('password', 'Password', 'trim|required');
         $this->form_validation->set_rules('pass2', 'Confirm Password', 'trim|required|matches[password]');

      $user =  $this->input->post('username');
        $name =  $this->input->post('name');
        $email =  $this->input->post('email');
        $pass =  $this->input->post('password');

        if ($this->form_validation->run())
        {

            $data = array(
                'username' =>   $user ,
                'name' =>  $name,
                'email' => $email,
                'password' =>  $pass
            );

            $this->load->model('database');

            if( $this->database->saveRecord( $data ) ){

                $this->session->set_flashdata('response', 'Record saved Successfully');

            } else {
                $this->session->set_flashdata('response', 'Record Failed to Save');
            }

            return redirect('register');

        } else  {
            $this->load->view('admin/register');
        }
    }
}