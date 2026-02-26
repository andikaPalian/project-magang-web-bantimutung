<?php
class AdminAboutController extends Controller
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
    $data['judul'] = 'Kelola Halaman About - Bantimurung';
    $data['menu_aktif'] = 'about';

    $data['about'] = $this->model('AboutModel')->getAboutData();

    $this->view('admin/templates/header', $data);
    $this->view('admin/dashboard/about', $data);
    $this->view('admin/templates/footer');
  }

  public function saveAbout()
  {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      $this->model('AboutModel')->updateTextData($_POST);

      $images = ['hero_image', 'sejarah_image', 'keindahan_image', 'konservasi_image'];
      $newImages = false;

      foreach ($images as $image) {
        if (isset($_FILES[$image]) && $_FILES[$image]['error'] === 0) {
          $filename = $_FILES[$image]['name'];
          $tmpName = $_FILES[$image]['tmp_name'];
          $fileSize = $_FILES[$image]['size'];
          $ext = ['jpg', 'jpeg', 'png'];

          $imageExt = explode('.', $filename);
          $imageExt = strtolower(end($imageExt));

          if (in_array($imageExt, $ext)) {
            if ($fileSize < 2000000) {
              $newFileName = $image . '_' . uniqid() . '.' . $imageExt;
              $path = '../public/img/about/' . $newFileName;

              if (move_uploaded_file($tmpName, $path)) {
                $this->model('AboutModel')->updateImage($image, $newFileName);
              }
            } else {
              $_SESSION['pesan_info'] = "Peringatan: Ada gambar yang gagal diupload karena ukurannya lebih dari 2MB.";
            }
          } else {
            $_SESSION['pesan_info'] = "Peringatan: Format gambar harus JPG atau PNG.";
          }
        }
      }

      if ($newImages) {
        $_SESSION['pesan_sukses'] = "Teks dan Gambar berhasil diperbarui.";
      } else {
        $_SESSION['pesan_sukses'] = "Halaman About berhasi diperbarui.";
      }

      header('Location: ' . BASEURL . '/adminabout');
      exit;
    }
  }
}
