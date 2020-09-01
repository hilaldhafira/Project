<?php if (!defined('BASEPATH')) exit('No direct script access allowed');


class Simple_login
{
    protected $CI;
    public function __construct()
    {
        $this->CI = &get_instance();
        $this->CI->load->model('M_login');
    }
    public function login($username, $password)
    {
        $check = $this->CI->m_login->login($username, $password);

        if ($check) {
            $id = $check->id;
            $nama = $check->nama;
            $username = $check->username;

            $this->CI->session->set_userdata('id', $id);
            $this->CI->session->set_userdata('nama', $nama);
            $this->CI->session->set_userdata('username', $username);
        }
    }
}
