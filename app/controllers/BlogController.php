<?php
// app/controllers/BlogController.php

class BlogController extends Controller
{
  public function index()
  {
    $data['judul'] = 'Blog & Artikel - Bantimurung';
    $data['page']  = 'blog';

    $this->view('templates/header', $data);
    $this->view('templates/navbar', $data);
    $this->view('home/blog', $data);
    $this->view('templates/footer');
  }
}
