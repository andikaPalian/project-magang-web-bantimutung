<?php
class ContactModel
{
  private $db;

  public function __construct()
  {
    $this->db = new Database;
  }

  public function getAllMessages()
  {
    $this->db->query("SELECT * FROM messages ORDER BY created_at DESC");

    return $this->db->resultSet();
  }

  public function getMessageById($id)
  {
    $this->db->query("SELECT * FROM messages WHERE id = :id");
    $this->db->bind('id', $id);
    $this->db->execute();

    return $this->db->single();
  }

  public function markAsRead($id)
  {
    $this->db->query("UPDATE messages SET status = 'read' WHERE id = :id AND status = 'new'");
    $this->db->bind('id', $id);
    $this->db->execute();

    return $this->db->rowCount();
  }

  public function deleteMessage($id)
  {
    $this->db->query("DELETE FROM messages WHERE id = :id");

    $this->db->bind('id', $id);
    $this->db->execute();

    return $this->db->rowCount();
  }

  public function markAsReplied($id)
  {
    $this->db->query("UPDATE messages SET status = 'replied' WHERE id = :id AND status IN ('new', 'read')");
    $this->db->bind('id', $id);
    $this->db->execute();

    return $this->db->rowCount();
  }

  public function getContactInfo()
  {
    $this->db->query("SELECT * FROM contact WHERE id = :id");

    return $this->db->single();
  }

  public function updateContactInfo($data)
  {
    $this->db->query("UPDATE contact SET alamat = :alamat, email = :email, no_telepon = :no_telepon link_gmaps = :link_gmaps WHERE id - 1");

    $this->db->bind('alamat', $data['alamat']);
    $this->db->bind('email', $data['email']);
    $this->db->bind('no_telepon', $data['no_telepon']);
    $this->db->bind('link_gmaps', $data['link_gmaps']);

    $this->db->execute();
    return $this->db->rowCount();
  }
}
