<?php
class AdminContactController extends Controller
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
    $data['judul'] = 'Contact Inquiries - Bantimurung';
    $data['menu_aktif'] = 'contact';

    $data['messages'] = $this->model('ContactModel')->getAllMessages();

    $this->view('admin/templates/header', $data);
    $this->view('admin/dashboard/contact', $data);
    $this->view('admin/templates/footer');
  }

  public function show($id)
  {
    $data['judul'] = 'Detail Pesan - Bantimurung';
    $data['menu_aktif'] = 'contact';

    $this->model('ContactModel')->markAsRead($id);

    $data['message'] = $this->model('ContactModel')->getMessageById($id);

    if (empty($data['message'])) {
      header('Location: ' . BASEURL . '/admincontact');
      exit;
    }

    $this->view('admin/templates/header', $data);
    $this->view('admin/dashboard/message_read', $data);
    $this->view('admin/templates/footer');
  }

  public function deleteMessage($id)
  {
    if ($this->model('ContactModel')->deleteMessage($id) > 0) {
      $_SESSION['pesan_sukses'] = 'Pesan berhasil dihapus dari Inbox!';
    } else {
      $_SESSION['pesan_info'] = 'Gagal menghapus pesan.';
    }

    header('Location: ' . BASEURL . '/admincontact');
    exit;
  }

  public function sendReply()
  {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      $id = $_POST['id'];
      $emailDestination = $_POST['email_pengirim'];
      $subject = $_POST['subject_asli'];
      $message = $_POST['pesan_balasan'];

      // Todo: Nanti buat fungsi phpMailer di sini. Untuk sekarang, kita anggap email berhasil terkirim
      $email_sent = true;

      if ($email_sent) {
        $this->model('ContactModel')->markAsReplied($id);
        $_SESSION['pesan_sukses'] = 'Balasan email berhasil dikirim ke ' . $emailDestination;
      } else {
        $_SESSION['pesan_info'] = 'Gagal mengirim email. Silakan coba lagi.';
      }

      header('Location: ' . BASEURL . '/admincontact/show/' . $id);
      exit;
    }
  }
}
