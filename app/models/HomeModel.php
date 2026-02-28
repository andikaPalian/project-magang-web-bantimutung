<?php
class HomeModel
{
  private $db;

  public function __construct()
  {
    $this->db = new Database;
  }

  public function updateTextData($data)
  {
    $this->db->query("UPDATE home SET paragraph_1 = :paragraph_1, paragraph_2 = :paragraph_2, paragraph_3 = :paragraph_3 WHERE id = 1");

    $this->db->bind('paragraph_1', $data['paragraph_1']);
    $this->db->bind('paragraph_2', $data['paragraph_2']);
    $this->db->bind('paragraph_3', $data['paragraph_3']);
    $this->db->execute();

    return $this->db->rowCount();
  }

  public function updateImage($kolom, $fileName)
  {
    $this->db->query("UPDATE home SET $kolom = :fileName WHERE id = 1");

    $this->db->bind('fileName', $fileName);
    $this->db->execute();

    return $this->db->rowCount();
  }

  public function getHomeContent()
  {
    $this->db->query("SELECT * FROM home WHERE id = 1");

    return $this->db->single();
  }

  public function getLastBlogs()
  {
    $this->db->query("SELECT blog.*, blog_categories.nama_kategori FROM blog LEFT JOIN blog_categories ON blog.category_id = blog_categories.id WHERE blog.status = 'published' ORDER BY blog.tanggal_rilis DESC LIMIT 3");

    return $this->db->resultSet();
  }

  public function recordVisitor($ip_address, $user_agent)
  {
    $visit_date = date('Y-m-d');

    $this->db->query("INSERT IGNORE INTO visitor_counter (ip_address, visit_date, user_agent) VALUES (:ip_address, :visit_date, :user_agent)");
    $this->db->bind('ip_address', $ip_address);
    $this->db->bind('visit_date', $visit_date);
    $this->db->bind('user_agent', $user_agent);
    $this->db->execute();
  }

  public function getTotalVisitor()
  {
    $this->db->query("SELECT COUNT(id) AS total FROM visitor_counter");
    $result = $this->db->single();

    return 15852 + $result['total'];
  }
}
