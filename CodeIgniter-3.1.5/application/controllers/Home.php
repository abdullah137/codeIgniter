<?php

class Home extends CI_Controller {


    // Home Page
    public function index() {

        $this->load->view('admin/index');

    }


    public function product() {
        $this->load->view('admin/products');
    }


    // Inserting of Records form
    public function form() {

        $this->load->view('admin/form');
    }

    // Category Controller
    public function category() {

        $this->load->view('admin/category');
    }

    // Inserting of Category form
    public function cat_ins() {

        $this->form_validation->set_rules('category', 'Category', 'trim|required|is_unique[category.category]');
        $email = $this->session->userdata('email');

        $query = $this->db->query("SELECT id FROM admin WHERE email = '$email' LIMIT 1");
        $row = $query->row();
        $id = $row->id;

        $name =  $this->input->post('category');

        if ($this->form_validation->run())
        {
            $data = array(
                'admin_id' => $id,
                'category' => $name
            );

            $this->load->model('database');

            if($this->database->category($data)) {

                $this->session->set_flashdata('response', 'Record saved Successfully');

            } else {

                $this->session->set_flashdata('response', 'Record Failed to Save');

            }

           return redirect('home/category');

        }else {
            $this->load->view('admin/category');
        }
    }

    public function form_ins() {

        $this->form_validation->set_rules('title', 'News Title', 'required');
        $this->form_validation->set_rules('date',  'News Date', 'required');
        $this->form_validation->set_rules('desc', 'Description', 'trim|required');

        $title =  $this->input->post('title');
        $category =  $this->input->post('category');
        @$image =  $_FILES['image']['name'];
        @$tmp_image = $_FILES['image']['tmp_name'];
        $date =  $this->input->post('date');
        $desc = $this->input->post('desc');

        @$image_type = $_FILES['image']['type'];



        $allowed_v = array('video/3gpp', 'video/mp4');

        $allowed = array ('image/pjpeg', 'image/jpeg', 'image/jpeg', 'image/JPG', 'image/X-PNG', 'image/PNG', 'image/png', 'image/x-png');

        if (in_array($image_type, $allowed)) {
            $config['upload_path'] = './admin_resources/uploads/pictures/';
            $type = "image";
        }else if(in_array($image_type, $allowed_v)) {
            $config['upload_path'] = './application/views/GUI/uploads/';
            $type = "video";
        }else {
            $config['upload_path'] = './admin_resources/uploads/';
            $type = "other";
        }
        $config['allowed_types'] = 'gif|jpg|png|mp4|3gp|pdf';
        $config['max_size'] = 0;
        $config['min_width'] = 0;
        $config['min_height'] = 0;

        $this->load->library('upload', $config);


       $this->upload->do_upload('image');
       $data = array('upload_data' => $this->upload->data());

        if(! $this->upload->do_upload('image')) {
            $error = array('error'=>$this->upload->display_errors());
            $this->load->view('admin/form', $error);
        } else {
            if ($this->form_validation->run())
            {

                $data = array(
                    'admin_id' => $this->session->userdata('id'),
                    'title' =>   $title,
                    'category' =>  $category,
                    'image' => $image,
                    'file_type' => $type,
                    'date' =>  $date,
                    'description' => $desc
                );



                $this->load->model('database');

                if( $this->database->news_ins( $data ) ){



                    $this->session->set_flashdata('response', 'Record saved Successfully');



                } else {
                    $this->session->set_flashdata('response', 'Record Failed to Save');
                }

                return redirect('home/form');


            } else  {
                $this->load->view('admin/form');
            }
        }

    }

    public function edit($record_id) {
        $this->load->model('database');
        $record = $this->database->getAllRecords( $record_id );
        $this->load->view('admin/update', ['record'=>$record]);
    }

    public function update( $record_id ) {
        $this->form_validation->set_rules('title', 'News Title', 'required');
        $this->form_validation->set_rules('date',  'News Date', 'required');
        $this->form_validation->set_rules('desc', 'Description', 'trim|required');

        $title =  $this->input->post('title');
        $category =  $this->input->post('category');
        @$image =  $_FILES['image']['name'];
        @$tmp_image = $_FILES['image']['tmp_name'];
        $date =  $this->input->post('date');
        $desc = $this->input->post('desc');

        @$image_type = $_FILES['image']['type'];



        $allowed_v = array('video/3gpp', 'video/mp4');

        $allowed = array ('image/pjpeg', 'image/jpeg', 'image/jpeg', 'image/JPG', 'image/X-PNG', 'image/PNG', 'image/png', 'image/x-png');

        if (in_array($image_type, $allowed)) {
            $config['upload_path'] = './admin_resources/uploads/pictures/';
            $type = "image";
        }else if(in_array($image_type, $allowed_v)) {
            $config['upload_path'] = './admin_resources/uploads/video/';
            $type = "video";
        }else {
            $config['upload_path'] = './admin_resources/uploads/';
            $type = "other";
        }
        $config['allowed_types'] = 'gif|jpg|png|mp4|3gp|pdf';
        $config['max_size'] = 0;
        $config['min_width'] = 0;
        $config['min_height'] = 0;

        $this->load->library('upload', $config);


        $this->upload->do_upload('image');
        $data = array('upload_data' => $this->upload->data());

        if(! $this->upload->do_upload('image')) {
            $error = array('error'=>$this->upload->display_errors());
            $this->load->view('admin/form', $error);
        } else {
            if ($this->form_validation->run())
            {

                $data = array(
                    'admin_id' => $this->session->userdata('id'),
                    'title' =>   $title,
                    'category' =>  $category,
                    'image' => $image,
                    'file_type' => $type,
                    'date' =>  $date,
                    'description' => $desc
                );


                $this->load->model('database');

                if( $this->database->updateRecords( $record_id , $data ) ){


                    $this->session->set_flashdata('response', 'Record updated Successfully');



                } else {
                    $this->session->set_flashdata('response', 'Record Failed to Save');
                }

                return redirect("home/edit/$record_id");


            } else  {
                $this->load->view('admin/form');
            }
        }
    }

    public function delete ( $record_id ) {
        $this->load->model('database');
        if($this->database->deleteRecords( $record_id )) {
            $this->session->set_flashdata('response', 'Record Deleted Successfully');
        } else {
            $this->session->set_flashdata('response', 'Record Failed to Delete');
        }
        return redirect ('home/product');
    }
}

?>