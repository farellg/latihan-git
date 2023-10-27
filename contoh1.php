<?php
class contoh1 extends CI_Controller
{
    public function index()
    {
        $this->load->view('inputform');
    }

    public function process_data()
    {
        $nim = $this->input->post('nim');
        $nama = $this->input->post('nama');
        $alamat = $this->input->post('alamat');
        $hobbi = $this->input->post('hobbi');

        $data = [
            'nim' => $nim,
            'nama' => $nama,
            'alamat' => $alamat,
            'hobbi' => $hobbi,
        ];

        $this->load->view('biodata', $data);
    }
}
