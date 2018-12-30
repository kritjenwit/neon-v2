<?php

/**
 * Created by PhpStorm.
 * User: jenwi
 * Date: 29-Oct-18
 * Time: 16:49
 */
class Auth extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->module = 'auth';
        if($this->validate->is_login())
        {
            redirect('home');
        }
    }

    public function login()
    {
        $data['module'] = $this->module;
        $data['title'] = 'Neon | Login';
        $data['view_file'] = 'login';
        echo Modules::run('template/index',$data);
    }

    public function register()
    {
        $data['module'] = $this->module;
        $data['title'] = 'Neon | Register';
        $data['view_file'] = 'register';
        echo Modules::run('template/index',$data);
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('/');
    }


    public function verify_register()
    {
        if(!$this->validate->is_post())
        {
            redirect('auth/register');
        }
        $post = $this->input->post();

        if($post['password'] !== $post['re-password'])
        {
            $this->session->set_flashdata('reg_error','Password and repassword should be equal');
            redirect('auth/register');
        }
        $url = API.'user';
        $response = $this->api->post($url,$post);
        if($response['status'] === 400)
        {
            $this->session->set_flashdata('reg_error',$response['msg']);
            redirect('auth/register');
        }
        $this->session->set_flashdata('reg_pass','Register Successfully');
        redirect('auth/login');
    }

    public function verify_login()
    {
        $post = $this->input->post();
        if(!$this->validate->is_post())
        {
            redirect('auth/login');
        }
        $url = API.'v_user';
        $response = $this->api->post($url,$post);
        if($response['status'] === 200)
        {
            $this->session->set_flashdata('login_success',$response['msg']);
            $this->session->set_userdata('users',$response['data'][0]);
            redirect('home');
        }
        $this->session->set_flashdata('login_error',$response['msg']);
        redirect('auth/login');
    }
}