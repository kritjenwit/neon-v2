<?php

/**
 * Created by PhpStorm.
 * User: jenwi
 * Date: 30-Oct-18
 * Time: 14:05
 */
class Admin extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->module = 'admin';
        $this->cover_url = 'http://neon.me/resources/covers/';
        $this->music_url = 'http://neon.me/resources/musics/';
    }

    public function index()
    {
        $data['module'] = $this->module;
        $data['title'] = 'Neon Admin';
        $data['view_file'] = 'index';
        echo Modules::run('template/index',$data);
    }

    public function music()
    {
        $data['module'] = $this->module;
        $data['title'] = 'Neon Admin | Music Management';
        $data['view_file'] = 'music';
        echo Modules::run('template/index',$data);
    }

    public function nav()
    {
        $this->load->view('nav');
    }

    public function add_music()
    {
        $post = $this->input->post();
        # Cover Image
        $uploaded_cover = $this->upload_cover($post);
        # Music
        $uploaded_music = $this->upload_music($post);
        if($uploaded_cover === true && $uploaded_music === true) {
            $cover_name = $_FILES['userfile1']['name'];
            $music_name = $_FILES['userfile2']['name'];
            $data['music_name'] = $post['music_name'];
            $data['album_name'] = $post['album_name'];
            $data['artist'] = $post['artist'];
            $data['music_type'] = $post['music_type'];
            $data['cover_url'] = $post['album_name'] === '' ? url_title(strtolower($post['artist'])).'/'.$cover_name : $this->cover_url.url_title(strtolower($post['album_name'])).'/'.url_title(strtolower($post['artist'])).'/'.$cover_name;
            $data['music_url'] = $post['album_name'] === '' ? url_title(strtolower($post['artist'])).'/'.$music_name : $this->music_url.url_title(strtolower($post['album_name'])).'/'.url_title(strtolower($post['artist'])).'/'.$music_name;
            alert($this->api->post(API . 'musics', $data));

        }

    }

    private function upload_cover($post)
    {
        $config['upload_path'] = $post['album_name'] === '' ? './resources/covers/'.url_title(strtolower($post['artist'])) : './resources/covers/'.url_title(strtolower($post['album_name'])).'/'.url_title(strtolower($post['artist']));
        if(!is_dir($config['upload_path']))
        {
            echo $config['upload_path'];
            mkdir($config['upload_path'],0777,true);
        }
//        $config['upload_path'] = './resources/covers/'.$post['artist'];
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 100;
        $config['max_width']            = 1024;
        $config['max_height']           = 768;
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        if ( ! $this->upload->do_upload('userfile1'))
        {
            $error = array('error' => $this->upload->display_errors());
            alert($error);
            return false;
        }
        else
        {
            $data = array('upload_data' => $this->upload->data());
            return true;
        }
    }

    private function upload_music($post)
    {
        $config['upload_path'] = $post['album_name'] === '' ? './resources/musics/'.url_title(strtolower($post['artist'])) : './resources/musics/'.url_title(strtolower($post['album_name'])).'/'.url_title(strtolower($post['artist']));
        if(!is_dir($config['upload_path']))
        {
            echo $config['upload_path'];
            mkdir($config['upload_path'],0777,true);
        }
//        $config['upload_path'] = './resources/musics/'.$post['artist'];
        $config['allowed_types']        = 'mp3|mp4';
        $config['max_size']             = 100000;
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        if ( ! $this->upload->do_upload('userfile2'))
        {
            $error = array('error' => $this->upload->display_errors());
            alert($error);
            return false;
        }
        else
        {
            $data = array('upload_data' => $this->upload->data());
            return true;
        }
    }
}