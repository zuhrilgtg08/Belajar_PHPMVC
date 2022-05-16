<?php
class About extends Controller{

    public function index()
    {
        $data['judul'] = 'About';

        $this->view('templates/header', $data);
        $this->view('about/index');
        $this->view('templates/footer');
    }

    public function detail($nama = 'Ahmad Zuhril', $pekerjaan = 'Freelancer', $umur = 17, $email = 'zuhrilfahrizal22@gmail.com')
    {
        $data['nama'] = $nama;
        $data['pekerjaan'] = $pekerjaan;
        $data['umur'] = $umur;
        $data['email'] = $email;
        $data['judul'] = 'Detail';

        $this->view('templates/header', $data);
        $this->view('about/detail', $data);
        $this->view('templates/footer');
    }
}