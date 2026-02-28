<?php
class DashboardModel
{
  private $db;

  public function __construct()
  {
    $this->db = new Database;
  }

  public function getTotalVisitor()
  {
    $this->db->query("SELECT COUNT(id) AS total FROM visitor_counter");
    return $this->db->single()['total'];
  }

  public function getTotalBlogs()
  {
    $this->db->query("SELECT COUNT(id) AS total FROM blog");
    return $this->db->single()['total'];
  }

  public function getRecentVisitors()
  {
    $this->db->query("SELECT ip_address, visit_date FROM visitor_counter ORDER BY visit_date DESC LIMIT 5");
    return $this->db->resultSet();
  }

  public function getNewInquiriesCount()
  {
    $this->db->query("SELECT COUNT(id) AS total FROM messages WHERE status = 'new'");
    return $this->db->single()['total'];
  }

  public function getRecentInquiries()
  {
    $this->db->query("SELECT * FROM messages WHERE status = 'new' ORDER BY created_at DESC LIMIT 5");
    return $this->db->resultSet();
  }

  public function getVisitorGrowth()
  {
    $this->db->query("SELECT COUNT(id) AS total FROM visitor_counter WHERE MONTH(visit_date) = MONTH(CURRENT_DATE()) AND YEAR(visit_date) = YEAR(CURRENT_DATE())");
    $currentMonth = $this->db->single()['total'];

    $this->db->query("SELECT COUNT(id) AS total FROM visitor_counter WHERE MONTH(visit_date) = MONTH(CURRENT_DATE() - INTERVAL 1 MONTH) AND YEAR(visit_date) = YEAR(CURRENT_DATE() - INTERVAL 1 MONTH)");
    $lastMonth = $this->db->single()['total'];

    if ($lastMonth == 0) {
      return $currentMonth > 0 ? "+100%" : "0%";
    }

    $growth = (($currentMonth - $lastMonth) / $lastMonth) * 100;
    $sign = $growth > 0 ? "+" : "";
    return $sign . round($growth);
  }

  public function getLastPostDate()
  {
    $this->db->query("SELECT created_at FROM blog ORDER BY created_at DESC LIMIT 1");
    $result = $this->db->single();

    if (!$result) return "belum ada artikel";

    $lastDate = new DateTime($result['created_at']);
    $now = new DateTime();
    $diff = $now->diff($lastDate);

    if ($diff->days == 0) return "hari ini";
    if ($diff->days == 1) return "kemarin";
    return $diff->days . " hari yang lalu";
  }

  public function getWeeklyVisitorData($days = 7)
  {
    $chartData = [];
    $maxCount = 0;

    for ($i = $days - 1; $i >= 0; $i--) {
      $date = date('Y-m-d', strtotime("-$i days"));
      $dayLabel = ($days <= 7) ? date('D', strtotime("-$i days")) : date('d/m', strtotime("-$i days"));

      $this->db->query("SELECT COUNT(id) AS total FROM visitor_counter WHERE visit_date = :date");
      $this->db->bind('date', $date);
      $count = $this->db->single()['total'];

      $chartData[] = [
        'day' => $dayLabel,
        'count' => $count,
        'percentage' => 0
      ];

      if ($count > $maxCount) $maxCount = $count;
    }

    foreach ($chartData as &$data) {
      if ($maxCount > 0) {
        $percentage = ($data['count'] / $maxCount) * 100;
        $data['percentage'] = max(10, $percentage);
      } else {
        $data['percentage'] = 10;
      }
    }

    return $chartData;
  }
}
