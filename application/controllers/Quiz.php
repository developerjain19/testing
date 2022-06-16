<?php
defined('BASEPATH') or exit('no direct access allowed');

class Quiz extends CI_Controller
{

    public function start_test()
    {
        $data['title'] = "Home";
        $data['favicon'] = base_url() . 'assets/images/favicon.png';
        $this->load->view('admin/starttest', $data);
    }
}
