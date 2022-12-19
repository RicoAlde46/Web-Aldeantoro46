<?php

class About extends Controller
{
    public function index($nama = 'Alde', $pelajar = 'Mahasiswa', $umur = 21)
    {
        // echo 'About/index';
        // echo "Hallo,nama saya $nama,saya adalah seseorang anak $pelajar.Saya berusia $umur tahun.";
        $data['nama'] = $nama;
        $data['pelajar'] = $pelajar;
        $data['umur'] = $umur;
        $data['judul'] = 'About Me';
        $this->view('templates/header', $data);
        $this->view('about/index', $data);
        $this->view('templates/footer');
    }
    public function page()
    {
        // echo 'About/page';
        $data['judul'] = 'Pages ';
        $this->view('templates/header', $data);
        $this->view('about/page');
        $this->view('templates/footer');
    }
}
