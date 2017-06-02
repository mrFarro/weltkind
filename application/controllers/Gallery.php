<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gallery extends CI_Controller
{
    public function __construct(){
            
    parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->load->library('pagination');
        }

    //Вывод всех записей альбомов на странице пользователя+пагинация
    public function index(){
            
        $this->load->model('Album_model'); 
        $config = array();
        $config['base_url'] = base_url('/Gallery/index');
        $config["total_rows"] = $this->Album_model->record_count();
        $config["per_page"] = 12;
        $config["uri_segment"] = 3;
        $config['first_link'] = 'First';
        $config['last_link'] = 'Last';
        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>'; 
        $config['cur_tag_open'] = '<li class="active"><a href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['first_link'] = '&lt;&lt;';
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['last_link'] = '&gt;&gt;';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['next_link'] = '&gt;';
        $config['next_tag_open'] = '<li>';
        $config['prev_link'] = '&lt;';
        $config['prev_tag_open'] = '<li>';
        $config['prev_tag_close'] = '</li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $this->pagination->initialize($config);

        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $data["results"] = $this->Album_model->fetch_countries($config["per_page"], $page);
        $data["links"] = $this->pagination->create_links();
   
        $this->load->model('Album_model');
        $data['index'] = $this->Album_model->get_index($config["per_page"], $page);
        $this->load->view('gallery_view', $data);
    }
    
 //Вывод всех записей картин альбомов в админки
    public function album(){
        
        $this->load->model('Album_model');
        $data['albums'] = $this->Album_model->get_albums();
        $data['total'] = $this->Album_model->get_total_albums();
        $this->load->view('admin_dashboard', $data);
    }

    public function select_img($id){
        
        $this->load->model('Album_model');
        $data['img'] = $this->Album_model->select_img($id);
        //	$this->Album_model->select_img();
        $this->load->view('test', $data);
    }

//добавление новых альбомов      
    public function add_album(){
        
        $this->load->view('add_album');
    }

    
    
// вывод записей по дате (сначало старые)
        public function sort_old(){
        
        $this->load->model('Album_model');
        $data['albums'] = $this->Album_model->get_albums_sort();
        $data['total'] = $this->Album_model->get_total_albums();
        $this->load->view('admin_dashboard', $data);
    }

    
//процесс добавление альбомов
    public function process_add_album(){
        
        $album_name = $this->input->post('album_name');
        $album_descr = $this->input->post('album_descr');
        $counter = $this->input->post('counter');
        $id = $this->input->post('id');

        $this->load->model('Album_model');
        $this->Album_model->add_album($album_name, $album_descr, $counter, $id);
        redirect('/Gallery/album');

    }

 //Вывод всех записей картин альбомов в админки
    public function images($id){
        
        $this->load->model('Album_model');
        $data['id'] = $id;
        $data['image'] = $this->Album_model->images($id);
        $this->load->view('images_view', $data);
    }

 //Вывод всех записей картин альбомов на пользовательской части
    public function image($id){

        $this->load->model('Album_model');
        $data['gallery'] = $this->Album_model->image($id);
        $this->load->view('images_user', $data);

    }

// Добавляем фотки
    public function add_images($id){
        $item['id'] = $id;
        $this->load->view('add_image', $item);
    }

//процесс добавление картин
    public function process_add_img(){
        
        $config['upload_path'] = './assets/uploads/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size']     = '10000';
        $config['max_width'] = '1024';
        $config['max_height'] = '768';

        $this->upload->initialize($config);
				
        $name = $this->input->post('name');
        $id = $this->input->post('id');
        $this->load->model('Album_model');
        $this->load->library('upload', $config);
        $this->upload->initialize($config);


            if (!$this->upload->do_upload('userfile'))
            {
                echo 'данный формат не поддерживается, загрузите другую картину';
                 
            }
            else
            {
                //print_r($this->upload->data());
                $img=$this->upload->data('file_name');
                echo $img;
                $this->Album_model->add_img($name,$img,$id);
                redirect(base_url('Gallery/images/'.$id));

            }


    }
    
    
//удаляем альбомы
    public function delete_album($id) {
        $query= $this->db->delete('album', array('id' => $id));
        redirect(base_url('/Gallery/album'));
    }
    
//удаляем фотки  
    public function delete_image($id) {
        $query= $this->db->delete('images', array('id' => $id));
        redirect(base_url('/Gallery/images/'.$id));
    }
    
    
//редактируем альбомы    
    public function edit_album($id) {

        $name=$this->db->query("SELECT name_image FROM album WHERE id=$id");
        $descr = $this->db->query("SELECT descr_image FROM album WHERE id=$id");
        $date = $this->db->query("SELECT data FROM album WHERE id=$id");
        $id = $this->db->query("SELECT id FROM album WHERE id=$id");
                
         $this->load->view('edit_album',array('name'=>$name->result_array(),
                                                    'descr'=>$descr->result_array(),
                                                    'date'=>$date->result_array(),
                                                    'id'=>$id->result_array()
                                                    )
                                 );
            
    }
    
 //редактируем фотки
    public function edit_image($id) {

        $name=$this->db->query("SELECT name_image FROM album WHERE id=$id");
        $descr = $this->db->query("SELECT descr_image FROM album WHERE id=$id");
        $date = $this->db->query("SELECT data FROM album WHERE id=$id");
        $id = $this->db->query("SELECT id FROM album WHERE id=$id");
                
        $this->load->view('edit_image',array('name'=>$name->result_array(),
                                                    'descr'=>$descr->result_array(),
                                                    'date'=>$date->result_array(),
                                                    'id'=>$id->result_array()
                                                    )
                                 );
            
    }
    
    
    
                
 //процесс редактирование альбома               
    public function process_edit_album() {
                       
        $id= $this->input->post('id');
        $data = array(
                    'descr_image' => $this->input->post('album_descr'),
                    'name_image' => $this->input->post('name'),
                    'data' => $this->input->post('date'),
                );
                $this->load->model('Album_model');
                $this->Album_model->update_album($id,$data);
                 redirect(base_url('/Gallery/album/'.$id));
                }

              
    }     
                             
    
    
    
    
    
    
    
                             
  
    

     
    

    
    

                                                                  

                                  


