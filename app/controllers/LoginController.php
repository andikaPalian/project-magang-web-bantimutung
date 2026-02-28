<?php
class LoginController extends Controller
{
  public function index()
  {
    if (isset($_SESSION['admin_logged_in'])) {
      header('Location: ' . BASEURL . '/admin');
      exit;
    }

    $data['judul'] = 'Admin Login - Bantimurung';
    $this->view('admin/login', $data);
  }

  public function authenticate()
  {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      $username = $_POST['username'];
      $password = $_POST['password'];

      $user = $this->model('UserModel')->getUserByUsername($username);

      if ($user && password_verify($password, $user['password'])) {
        $_SESSION['admin_logged_in'] = true;
        $_SESSION['admin_id'] = $user['id'];
        $_SESSION['admin_username'] = $user['username'];
        $_SESSION['admin_nama'] = $user['nama_lengkap'];

        header('Location: ' . BASEURL . '/admin');
        exit;
      } else {
        $_SESSION['login_error'] = 'Username atau password salah!';
        header('Location: ' . BASEURL . '/login');
        exit;
      }
    }
  }

  public function logout()
  {
    session_unset();
    session_destroy();
    header('Location: ' . BASEURL . '/login');
    exit;
  }
}
