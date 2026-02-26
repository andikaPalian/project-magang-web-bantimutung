<?php
class AdminBlogController extends Controller
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
    $data['judul'] = 'Blog Management - Bantimurung';
    $data['menu_aktif'] = 'blog';

    $data['blogs'] = $this->model('BlogModel')->getAllBlogs();

    $this->view('admin/templates/header', $data);
    $this->view('admin/dashboard/blog', $data);
    $this->view('admin/templates/footer');
  }

  public function create()
  {
    $data['judul'] = 'Tambah Artikel Baru - Bantimurung';
    $data['menu_aktif'] = 'blog';
    $data['categories'] = $this->model('BlogModel')->getAllCategories();

    $this->view('admin/templates/header', $data);
    $this->view('admin/dashboard/blog_form', $data);
    $this->view('admin/templates/footer');
  }

  public function store()
  {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      $_POST['slug'] = strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $_POST['judul_artikel'])));

      $fileName = null;

      if (isset($_FILES['gambar_thumbnail']) && $_FILES['gambar_thumbnail']['error'] === 0) {
        $fileName = $_FILES['gambar_thumbnail']['name'];
        $tmpName = $_FILES['gambar_thumbnail']['tmp_name'];
        $fileSize = $_FILES['gambar_thumbnail']['size'];
        $ext = ['jpg', 'jpeg', 'png'];

        $imageExt = explode('.', $fileName);
        $imageExt = strtolower(end($imageExt));

        if (in_array($imageExt, $ext) && $fileSize > 2000000) {
          $fileName = 'blog_' . uniqid() . '.' . $imageExt;
          move_uploaded_file($tmpName, '../public/img/blog/' . $fileName);
        } else {
          $_SESSION['pesan_info'] = "Format gambar harus JPG/PNG dan maksimal 2MB.";
          header('Location: ' . BASEURL . '/adminblog/create');
          exit;
        }
      }

      if ($this->model('BlogModel')->addBlogData($_POST, $fileName) > 0) {
        $_SESSION['pesan_sukses'] = "Artikel baru berhasil ditambahkan!";
      } else {
        $_SESSION['pesan_info'] = "Gagal menambahkan artikel.";
      }

      header('Location: ' . BASEURL . '/adminblog');
      exit;
    }
  }

  public function edit($id)
  {
    $data['judul'] = 'Edit Artikel - Bantimurung';
    $data['menu_aktif'] = 'blog';

    $data['blog'] = $this->model('BlogModel')->getBlogById($id);
    $data['categories'] = $this->model('BlogModel')->getAllCategories();

    $this->view('admin/templates/header', $data);
    $this->view('admin/dashboard/blog_form', $data);
    $this->view('admin/templates/footer');
  }

  public function update()
  {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      $_POST['slug'] = strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $_POST['judul_artikel'])));

      $fileName = null;

      if (isset($_FILES['gambar_thumbnail']) && $_FILES['gambar_thumbnail']['error'] === 0) {
        $fileName = $_FILES['gambar_thumbnail']['name'];
        $tmpName = $_FILES['gambar_thumbnail']['tmp_name'];
        $fileSize = $_FILES['gambar_thumbnail']['size'];
        $ext = ['jpg', 'jpeg', 'png'];

        $imageExt = explode('.', $fileName);
        $imageExt = strtolower(end($imageExt));

        if (in_array($imageExt, $ext) && $fileSize > 2000000) {
          $fileName = 'blog_' . uniqid() . '.' . $imageExt;
          move_uploaded_file($tmpName, '../public/img/blog/' . $fileName);
        } else {
          $_SESSION['pesan_info'] = "Format gambar harus JPG/PNG dan maksimal 2MB.";
          header('Location: ' . BASEURL . '/adminblog/edit/' . $_POST['id']);
          exit;
        }
      }

      if ($this->model('BlogModel')->editBlogData($_POST, $fileName) > 0) {
        $_SESSION['pesan_sukses'] = "Artikel berhasil diperbarui!";
      } else {
        $_SESSION['pesan_info'] = "Gagal memperbarui artikel.";
      }

      header('Location: ' . BASEURL . '/adminblog');
      exit;
    }
  }

  public function delete($id)
  {
    $blog = $this->model('BlogModel')->getBlogById($id);

    if ($this->model('BlogModel')->deleteBlogData($id) > 0) {
      if ($blog['gambar_thumbnail'] && file_exists('../public/img/blog/' . $blog['gambar_thumbnail'])) {
        unlink('../public/img/blog/' . $blog['gambar_thumbnail']);
      }
      $_SESSION['pesan_sukses'] = "Artikel berhasil dihapus!";
    } else {
      $_SESSION['pesan_info'] = "Gagal menghapus artikel.";
    }

    header('Location: ' . BASEURL . '/adminblog');
    exit;
  }
}
