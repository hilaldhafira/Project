<?php


class Crud extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_data');
        $this->load->helper('url');
    }
    public function index()
    {
        $data['bangunan'] = $this->M_data->ambil_data()->result();
        $this->load->view('v_user.php', $data);
    }
    function tambah()
    {
        $this->load->view('v_input');
    }
    function tambah_aksi()
    {
        $nama = $this->input->post('bangunan_nama');
        $bangunan_long = $this->input->post('bangunan_long');
        $bangunan_lat = $this->input->post('bangunan_lat');

        $data = array(
            'bangunan_nama' => $nama,
            'bangunan_long' => $bangunan_long,
            'bangunan_lat' => $bangunan_lat
        );
        $this->M_data->input_data($data, 'bangunan');
        redirect('admin');
    }
    function hapus($id)
    {
        $where = array('bangunan_id' => $id);
        $this->M_data->hapus_data($where, 'bangunan');
        redirect('admin');
    }
    function edit($id)
    {
        $where = array('bangunan_id' => $id);
        $data['bangunan'] = $this->M_data->edit_data($where, 'bangunan')->row();
        $this->load->view('v_edit', $data);
    }
    function update()
    {
        $id = $this->input->post('bangunan_id');
        $nama = $this->input->post('bangunan_nama');
        $bangunan_long = $this->input->post('bangunan_long');
        $bangunan_lat = $this->input->post('bangunan_lat');

        $data = array(
            'bangunan_nama' => $nama,
            'bangunan_long' => $bangunan_long,
            'bangunan_lat' => $bangunan_lat
        );

        $where = array(
            'bangunan_id' => $id
        );

        $this->M_data->update_data($where, $data, 'bangunan');
        redirect('admin');
    }
}
