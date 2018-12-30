<?php

/**
 * Created by PhpStorm.
 * User: jenwi
 * Date: 29-Oct-18
 * Time: 16:51
 */
class Template extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index($data=NULL)
    {
        $this->load->view('template',$data);
    }

    public function navbar()
    {
        $this->load->view('navbar');
    }
}