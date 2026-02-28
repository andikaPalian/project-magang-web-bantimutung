<?php
class AdminHomeController extends Controller
{
  public function __construct()
  {
    if (!isset($_SESSION['admin_logged_in'])) {
      header('Location: ' . BASEURL . '/login');
      exit;
    }
  }

  public function index()
  {
    $data['judul'] = 'Edit Home - Bantimurung';
    $data['menu_aktif'] = 'home';

    $data['home'] = $this->model('HomeModel')->getHomeContent();

    $this->view('admin/templates/header', $data);
    $this->view('admin/dashboard/home', $data);
    $this->view('admin/templates/footer');
  }

  public function saveHome()
  {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      $this->model('HomeModel')->updateTextData($_POST);

      $images = ['image_1', 'image_2', 'image_3'];
      $newImages = false;

      foreach ($images as $image) {
        if (isset($_FILES[$image]) && $_FILES[$image]['error'] === 0) {
          $filename = $_FILES[$image]['name'];
          $tmpName = $_FILES[$image]['tmp_name'];
          $fileSize = $_FILES[$image]['size'];
          $ext = ['jpg', 'jpeg', 'png', 'webp'];

          $imageExt = explode('.', $filename);
          $imageExt = strtolower(end($imageExt));

          if (in_array($imageExt, $ext)) {
            if ($fileSize < 2000000) {
              $newFileName = $image . '_' . uniqid() . '.' . $imageExt;
              $path = '../public/uploads/img/home/' . $newFileName;

              if (move_uploaded_file($tmpName, $path)) {
                $this->model('HomeModel')->updateImage($image, $newFileName);
                $newImages = true;
              }
            } else {
              $_SESSION['pesan_info'] = "Peringatan: Ada gambar yang gagal diupload karena ukurannya lebih dari 2MB.";
            }
          } else {
            $_SESSION['pesan_info'] = "Peringatan: Format gambar harus JPG, PNG, atau WEBP.";
          }
        }
      }
    }
  }
}
