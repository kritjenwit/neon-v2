<?php

/**
 * Created by PhpStorm.
 * User: jenwi
 * Date: 29-Oct-18
 * Time: 23:00
 */
class Home extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->module = 'home';
        if(!$this->validate->is_login())
        {
            redirect('/');
        }
    }

    public function index()
    {
        $this->template();
    }

    public function about()
    {
        $this->template();
    }

    public function template()
    {
        $data['module'] = $this->module;
        $data['title'] = 'Neon | Music Streaming';
        $data['view_file'] = 'index';
        echo Modules::run('template/index',$data);
    }
}