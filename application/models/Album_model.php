<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Album_model extends CI_Model {

//Вывод всех записей альбомов на странице пользователя
    public function get_index($limit, $start){
        $dannie= $this->db->query('SELECT * FROM images INNER JOIN album ON album.id = images.album_id GROUP BY images.album_id  LIMIT '.$start.','.$limit);
        return $dannie->result_array();
    }
    
 //Вывод всех записей картин альбомов в пользовательской части
    public function image($id){
        $dannie= $this->db->query('SELECT name_image,descr_image,data,path FROM images  left join album  on images.album_id=album.id WHERE album.id ='.$id );
        return $dannie->result_array();
    }

//  добавление новых альбомов  
    public function add_album($album_name, $album_descr,$date){
        $album_name = $this->input->post('album_name');
        $album_descr = $this->input->post('album_descr');
        $date = $this->input->post('date');
        $query = $this->db->query ("INSERT INTO album(name_image,descr_image,data) VALUES ('$album_name','$album_descr','$date')");
    }

 //Вывод всех записей картин альбомов в админки
    public function images($id){
        $query = $this->db->get_where('images', array('album_id' => $id));
        return $query->result_array();
    }

    //Вывод всех записей альбомов в админке
    public function get_albums(){
        $query=$this->db->query(' SELECT * FROM album ORDER BY data DESC');
        return $query->result_array();
    }
    
    // вывод записей по дате в обратом порядке (сначало новые)
    public function get_albums_sort(){
        $query=$this->db->query(' SELECT * FROM album ORDER BY data  ASC');
        return $query->result_array();
    }
    
    // вывод записей по дате (сначало старые)
    public function sort_old(){
        $query=$this->db->query(' SELECT * FROM album ORDER BY data');
        return $query->result_array();
    }

	
    public function images_user($id){
        $query = $this->db->get_where('images', array('album_id' => $id));
        return $query->result_array();
    }

//  добавление новых фоток  
    public function add_img($title,$img,$id){
        $query = $this->db->query ("INSERT INTO images(title,path,album_id) VALUES ('$name','$img','$id')");
    }

    //считалка всех фоток
    public function total_img(){
         $result = $this->db->query("select count(*) as total from images");
          return $result->row()->total;
    }
    
    //считалка всех альбомов
    public function get_total_albums(){
        $result = $this->db->query("select count(*) as total from album");
        return $result->row()->total;


    }
    
    //Вывод всех записей альбомов (для пагинации))
     public function record_count() {
        return $this->db->count_all("album");
    }
    
    
    public function fetch_countries($limit, $start) {
        $this->db->limit($limit, $start);
        $query = $this->db->get("album");

        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
        return false;
   }
    
    
//редактирование альбома 
function update_album($id,$data){
    $this->db->where('id', $id);
    $this->db->update('album', $data);
    }

}
    
    
    


