<?php
// app/controllers/BlogController.php

class BlogController extends Controller
{
  public function index()
  {
    $data['judul'] = 'Blog & Artikel - Bantimurung';
    $data['page']  = 'blog';

    $data['blogs'] = $this->model('BlogModel')->getPublishedBlogs();
    $data['total_blogs'] = count($data['blogs']);
    $data['categories'] = $this->model('BlogModel')->getAllCategories();

    $this->view('templates/header', $data);
    $this->view('templates/navbar', $data);
    $this->view('home/blog', $data);
    $this->view('templates/footer');
  }

  public function read($slug)
  {
    $data['blog'] = $this->model('BlogModel')->getBlogBySlug($slug);

    if (!$data['blog']) {
      header('Location: ' . BASEURL . '/blog');
      exit;
    }

    $data['judul'] = $data['blog']['judul_artikel'] . ' - Bantimurung';
    $data['page'] = 'blog';

    $this->view('templates/header', $data);
    $this->view('templates/navbar', $data);
    $this->view('home/read', $data);
    $this->view('templates/footer');
  }
}
