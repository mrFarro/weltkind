<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends CI_Controller
{
    
            public function index()
        {
           // $item['id'] = $id;
            $this->load->view('test');
        }
    

        public function imageadd(){
        $save=$this->input->post('saveForm');
        if($save){
        $config['upload_path'] = 'uploads/'; 
        $config['allowed_types'] = 'gif|jpg|jpeg|png'; 
        $config['max_size'] = '1000'; 
        $config['max_width'] = '1920'; 
        $config['max_height'] = '1280'; 

        $this->load->library('upload', $config); 
        if(!$this->upload->do_upload()) 
        $this->upload->display_errors(); 
        else { 
        $fInfo = $this->upload->data(); //uploading
          $this->gallery_path = realpath(APPPATH . '../uploads');//fetching path

        $config1 = array(
              'source_image' => $fInfo['full_path'], //get original image
              'new_image' => $this->gallery_path.'/thumbs', //save as new image //need to create thumbs first
              'maintain_ratio' => true,
              'width' => 150,
              'height' => 100

            );
            $this->load->library('image_lib', $config1); //load library
            $this->image_lib->resize(); //generating thumb
        }

        $imagename=$fInfo['file_name'];// we will get image name here
        }
        }
}