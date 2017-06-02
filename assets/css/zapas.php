$config['upload_path'] = './assets/uploads/';
$config['allowed_types'] = 'gif|jpg|png';
$config['max_size']     = '1000000';
$config['max_width'] = '1024';
$config['max_height'] = '768';

//  $image_data=$this->upload->data();



$title = $this->input->post('img_name');
$id = $this->input->post('id');

$this->load->model('Album_model');
$this->load->library('upload', $config);
$this->upload->initialize($config);


if (!$this->upload->do_upload('userfile'))
{
echo "<pre>";print_r($_FILES);echo "</pre>";
$error = array('error' => $this->upload->display_errors());
$this->load->view('upload_form', $error);
echo 'noredirct';
print_r($error);
}
else
{
//print_r($this->upload->data());
$img=$this->upload->data('file_name');
echo $img;
$this->Album_model->add_img($title,$img,$id);
echo 'redirct'; redirect(base_url('Gallery/images/'.$id));
//$data = array('upload_data' => $this->upload->data());
//$this->load->view('uplooad_success', $data);
}

}