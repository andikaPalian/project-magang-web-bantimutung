<?php
// app/controllers/HomeController.php
class HomeController extends Controller
{
  public function index()
  {
    $data['judul'] = 'Bantimurung - Kingdom of Butterflies';
    $data['page'] = 'home';

    // Ini akan memanggil file-file yang sudah kamu buat sebelumnya!
    $this->view('templates/header', $data);
    $this->view('templates/navbar', $data);
    $this->view('home/index', $data);
    $this->view('templates/footer');
  }
}
