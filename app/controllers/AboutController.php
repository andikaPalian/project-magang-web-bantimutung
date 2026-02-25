<?php
// app/controllers/AboutController.php

class AboutController extends Controller
{
  public function index()
  {
    $data['judul'] = 'Tentang Bantimurung';
    $data['page'] = 'about';

    $this->view('templates/header', $data);
    $this->view('templates/navbar', $data);
    $this->view('home/about', $data);
    $this->view('templates/footer');
  }
}
