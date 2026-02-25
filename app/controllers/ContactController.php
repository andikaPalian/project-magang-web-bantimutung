<?php
// app/controllers/ContactController.php

class ContactController extends Controller
{
  public function index()
  {
    $data['judul'] = 'Hubungi Kami - Bantimurung';
    $data['page']  = 'contact';

    $this->view('templates/header', $data);
    $this->view('templates/navbar', $data);
    $this->view('home/contact', $data);
    $this->view('templates/footer');
  }
}
