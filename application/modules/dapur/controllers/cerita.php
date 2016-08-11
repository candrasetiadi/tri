<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Cerita extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        isLogin();
        $this->load->model('cerita_m');
    }

    public function index()
    {
        $this->_data['title'] = 'Cerita Page - Festival #Ambisiku';
        $this->_data['active'] = 'cerita';
        $this->_data['content'] = 'pages/cerita';
        $this->_data['script_page_plugin'] = 'script/user_plugin';
        $this->_data['script_page'] = 'script/user';
        $this->_data['style_page'] = 'style/user';
        $this->_data['cerita'] = $this->cerita_m->getAllCerita();
        $this->load->view('layout', $this->_data);
    }

    public function action($id = false)
    {
        $this->_data['title'] = 'Cerita Page - Festival #Ambisiku';
        $this->_data['active'] = 'cerita';
        $this->_data['content'] = 'pages/cerita-action';
        $this->_data['script_page_plugin'] = 'script/user_plugin';
        $this->_data['script_page'] = 'script/user';
        $this->_data['style_page'] = 'style/user';
        if ($id) {
            $this->_data['cerita'] = $this->cerita_m->getById($id);
            $this->_data['image'] = $this->cerita_m->getCeritaImages($id);
            $this->_data['script_page_plugin'] = 'script/cerita_plugin';
            $this->_data['style_page'] = 'style/cerita';
        }
        $this->load->view('layout', $this->_data);
    }

    public function save()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('youtube_url', 'Youtube ID', 'trim|required');

        if ($this->form_validation->run() == FALSE) {
            $this->index();
        } else {
            $this->cerita_m->save();
            redirect('dapur/cerita');
        }
    }

    public function upload()
    {
        $options = array(
            'upload_dir' => 'uploads/cerita/',
            'upload_url' => 'uploads/cerita/',
            'correct_image_extensions' => true,
            'param_name' => 'files',
            'image_versions' => array(
                '' => array(
                    'auto_orient' => true
                ),
                'thumbnail' => array(
                    'max_width' => 200,
                    'max_height' => 200
                )
            ),
            'print_response' => false
        );
        $result = $this->load->library('uploader', $options);
        $response = array();
        foreach ($result->response['files'] as $file) {
            $this->db->insert('cerita_images', array(
                'cerita_id' => $this->input->post('cerita_id'),
                'filename' => $file->name,
                'small' => $file->thumbnailUrl,
                'large' => $file->url,
                'status' => 1
            ));
            $idImage = $this->db->insert_id();
            $response['files'][] = array(
                'deleteType' => 'DELETE',
                'size' => $file->size,
                'type' => $file->type,
                'name' => $file->name,
                'url' => base_url($file->url),
                'status' => 1,
                'id' => $idImage,
                'thumbnailUrl' => base_url($file->thumbnailUrl),
                'deleteUrl' => site_url('dapur/cerita/delete/upload/' . $idImage)
            );
        }

        exit(json_encode($response));
    }

    public function deleteUpload($id)
    {
        $this->db->where('id', $id);
        $this->db->update('cerita_images', array(
            'status' => 2
        ));
    }

    public function setStatus($id, $type)
    {
        $status = 0;
        if ($type == 'publish') {
            $status = 1;
        }
        $this->db->where('id', $id);
        $this->db->update('cerita_images', array(
            'status' => $status
        ));

        exit( json_encode(array('status' => $status)) );
    }
}