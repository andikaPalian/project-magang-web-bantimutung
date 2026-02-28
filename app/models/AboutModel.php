<?php
class AboutModel
{
  private $db;

  public function __construct()
  {
    $this->db = new Database;
  }

  public function getAboutData()
  {
    $this->db->query("SELECT * FROM about WHERE id = 1");
    return $this->db->single();
  }

  public function updateTextData($data)
  {
    $this->db->query("UPDATE about SET sejarah_title = :sejarah_title, sejarah_content = :sejarah_content, keindahan_title = :keindahan_title, keindahan_content = :keindahan_content, konservasi_title = :konservasi_title, konservasi_content = :konservasi_content, fakta_1_angka = :fakta_1_angka, fakta_1_teks = :fakta_1_teks, fakta_2_angka = :fakta_2_angka, fakta_2_teks = :fakta_2_teks, fakta_3_angka = :fakta_3_angka, fakta_3_teks = :fakta_3_teks, fakta_4_angka = :fakta_4_angka, fakta_4_teks = :fakta_4_teks WHERE id = 1");

    $this->db->bind('sejarah_title', $data['sejarah_title'] ?? '');
    $this->db->bind('sejarah_content', $data['sejarah_content'] ?? '');
    $this->db->bind('keindahan_title', $data['keindahan_title'] ?? '');
    $this->db->bind('keindahan_content', $data['keindahan_content'] ?? '');
    $this->db->bind('konservasi_title', $data['konservasi_title'] ?? '');
    $this->db->bind('konservasi_content', $data['konservasi_content'] ?? '');
    $this->db->bind('fakta_1_angka', $data['fakta_1_angka'] ?? '');
    $this->db->bind('fakta_1_teks', $data['fakta_1_teks'] ?? '');
    $this->db->bind('fakta_2_angka', $data['fakta_2_angka'] ?? '');
    $this->db->bind('fakta_2_teks', $data['fakta_2_teks'] ?? '');
    $this->db->bind('fakta_3_angka', $data['fakta_3_angka'] ?? '');
    $this->db->bind('fakta_3_teks', $data['fakta_3_teks'] ?? '');
    $this->db->bind('fakta_4_angka', $data['fakta_4_angka'] ?? '');
    $this->db->bind('fakta_4_teks', $data['fakta_4_teks'] ?? '');

    $this->db->execute();

    return $this->db->rowCount();
  }

  public function updateImage($field, $fileName)
  {
    $this->db->query("UPDATE about SET $field = :fileName WHERE id = 1");
    $this->db->bind('fileName', $fileName);
    $this->db->execute();

    return $this->db->rowCount();
  }
}
