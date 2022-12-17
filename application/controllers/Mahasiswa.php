<?php

class Mahasiswa extends IC_controller{
    public function index()
    {
        $this->load->view('templates/header', $data);
       $this->load->view('home/index', $data);
       $this->load->view('templates/footer');
    }
}