<?php
class AdminController extends Controller
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
    $data['judul'] = 'Dashboard Admin - Bantimurung';
    $data['menu_aktif'] = 'dashboard';

    $data['total_pengunjung'] = $this->model('DashboardModel')->getTotalVisitor();
    $data['total_blog'] = $this->model('DashboardModel')->getTotalBlogs();
    $data['pengunjung_terbaru'] = $this->model('DashboardModel')->getRecentVisitors();
    $data['total_pesan_baru'] = $this->model('DashboardModel')->getNewInquiriesCount();
    $data['pesan_terbaru'] = $this->model('DashboardModel')->getRecentInquiries();
    $data['pertumbuhan_pengunjung'] = $this->model('DashboardModel')->getVisitorGrowth();
    $data['post_terakhir'] = $this->model('DashboardModel')->getLastPostDate();

    $range = isset($_GET['range']) ? (int)$_GET['range'] : 7;
    $allowed_ranges = [7, 14, 30];
    if (!in_array($range, $allowed_ranges)) {
      $range = 7;
    }
    $data['current_range'] = $range;
    $data['chart_data'] = $this->model('DashboardModel')->getWeeklyVisitorData($range);

    $this->view('admin/templates/header', $data);
    $this->view('admin/dashboard/index', $data);
    $this->view('admin/templates/footer');
  }
}
