<?php
class HomeController extends Controller
{
  public function index()
  {
    $data['judul'] = 'Bantimurung - Kingdom of Butterflies';
    $data['page'] = 'home';

    $ip_address = $_SERVER['REMOTE_ADDR'];
    $user_agent = $_SERVER['HTTP_USER_AGENT'] ?? 'Unknown';
    $this->model('HomeModel')->recordVisitor($ip_address, $user_agent);

    $data['home_content'] = $this->model('HomeModel')->getHomeContent();
    $data['latest_blogs'] = $this->model('HomeModel')->getLastBlogs();
    $data['total_visitor'] = $this->model('HomeModel')->getTotalVisitor();

    $this->view('templates/header', $data);
    $this->view('templates/navbar', $data);
    $this->view('home/index', $data);
    $this->view('templates/footer');
  }
}
