<?php

class Crud extends CI_Controller
{
    public function __construct()
        {
            parent::__construct();
            $this->load->database();
            $this->load->model('crud_model');
            $this->load->helper('url');
        }
    public function savedata(){
        $this->load->view('insert');
        // print_r("First_name is ".$this->input->post('first_name')."</br>");
        // print_r("Last name is".$this->input->post('last_name')."</br>");
        // print_r("Email is the".$this->input->post('email'));
        if($this->input->post('email')){
            echo "saved";
            $data['first_name']=$this->input->post('first_name');
            $data['last_name']=$this->input->post('last_name');
            $data['email']=$this->input->post('email');
            $response = $this->crud_model->saverecords($data);
            if($response == true){
                echo "Inserted successfully";
            }
            else{
                echo "Insert failed";
            }
        }
    }
}