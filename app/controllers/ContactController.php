<?php
// app/controllers/ContactController.php

class ContactController extends Controller
{
  public function index()
  {
    $data['judul'] = 'Hubungi Kami - Bantimurung';
    $data['page']  = 'contact';

    $data['contact_info'] = $this->model('ContactModel')->getContactInfo();

    $this->view('templates/header', $data);
    $this->view('templates/navbar', $data);
    $this->view('home/contact', $data);
    $this->view('templates/footer');
  }

  public function sendMessage()
  {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      if ($this->model('ContactModel')->addMessage($_POST) > 0) {
        $_SESSION['pesan_sukses'] = "Pesan Anda berhasil dikirim! Kami akan segera membalasnya melalui email.";
      } else {
        $_SESSION['pesan_error'] = "Terjadi kesalahan. Pesan gagal dikirim.";
      }

      header('Location: ' . BASEURL . '/contact');
      exit;
    }
  }
}
