<?php

class Admin extends CI_Controller
{

    function __construct()
    {
        parent::__construct();

        if ($this->session->userdata('status') != "login") {
            redirect(base_url("login"));
        }
        $this->load->model('M_data');
        $this->load->helper('url');
    }

    function index()
    {
        $this->load->view('v_admin');
        $data['bangunan'] = $this->M_data->ambil_data()->result();
        $this->load->view('v_user.php', $data);
    }
}
