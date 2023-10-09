<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

    // function __construct()
    // {
    //     parent::__construct();
    //     $this->load->model('m_model');
    //     $this->load->database();
    // }

    // LOGIN
    public function index()
    {
        $this->load->view('auth/login');
    }

    // REGISTER
    public function register()
    {
        $this->load->view('auth/register');
    }
}
