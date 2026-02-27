<?php
class AdminSettingsController extends Controller
{
  public function __construct()
  {
    // if (!isset($_SESSION['admin_logged_in'])) {
    //   header('Location: ' . BASEURL . '/login');
    //   exit;
    // }
  }

  public function index()
  {
    $data['judul'] = "System Settings - Bantimurung";
    $data['menu_aktif'] = 'settings';

    $data['contact'] = $this->model('ContactModel')->getContactInfo();

    $this->view('admin/templates/header', $data);
    $this->view('admin/dashboard/settings', $data);
    $this->view('admin/templates/footer');
  }

  public function update()
  {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      if ($this->model('ContactModel')->updateContactInfo($_POST) > 0) {
        $_SESSION['pesan_sukses'] = 'Pengaturan informasi kontak berhasil diperbarui!';
      } else {
        $_SESSION['pesan_info'] = 'Tidak ada perubahan pada data pengaturan.';
      }

      header('Location: ' . BASEURL . '/adminsettings');
      exit;
    }
  }
}
