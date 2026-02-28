<?php
class BlogModel
{
  private $db;

  public function __construct()
  {
    $this->db = new Database;
  }

  public function getAllBlogs()
  {
    $this->db->query("SELECT blog.*, blog_categories.nama_kategori FROM blog LEFT JOIN blog_categories ON blog.category_id = blog_categories.id ORDER BY blog.tanggal_rilis DESC, blog.id DESC");

    return $this->db->resultSet();
  }

  public function getBlogById($id)
  {
    $this->db->query("SELECT * FROM blog WHERE id = :id");
    $this->db->bind('id', $id);

    return $this->db->single();
  }

  public function getAllCategories()
  {
    $this->db->query("SELECT * FROM blog_categories ORDER BY nama_kategori ASC");

    return $this->db->resultSet();
  }

  public function addBlogData($data, $fileName = null)
  {
    $this->db->query("INSERT INTO blog (category_id, judul_artikel, slug, konten_artikel, penulis, tanggal_rilis, lokasi_penulis, status, gambar_thumbnail) VALUES (:category_id, :judul_artikel, :slug, :konten_artikel, :penulis, :tanggal_rilis, :lokasi_penulis, :status, :gambar_thumbnail)");

    $this->db->bind('category_id', $data['category_id']);
    $this->db->bind('judul_artikel', $data['judul_artikel']);
    $this->db->bind('slug', $data['slug']);
    $this->db->bind('konten_artikel', $data['konten_artikel']);
    $this->db->bind('penulis', $data['penulis']);
    $this->db->bind('tanggal_rilis', $data['tanggal_rilis']);
    $this->db->bind('lokasi_penulis', $data['lokasi_penulis']);
    $this->db->bind('status', $data['status'] ?? 'published');
    $this->db->bind('gambar_thumbnail', $fileName);

    $this->db->execute();
    return $this->db->rowCount();
  }

  public function editBlogData($data, $fileName = null)
  {
    if ($fileName == null) {
      $query = "UPDATE blog SET category_id = :category_id, judul_artikel = :judul_artikel, slug = :slug, konten_artikel = :konten_artikel, penulis = :penulis, tanggal_rilis = :tanggal_rilis, lokasi_penulis = :lokasi_penulis, status = :status WHERE id = :id";
    } else {
      $query = "UPDATE blog SET category_id = :category_id, judul_artikel = :judul_artikel, slug = :slug, konten_artikel = :konten_artikel, penulis = :penulis, tanggal_rilis = :tanggal_rilis, lokasi_penulis = :lokasi_penulis, status = :status, gambar_thumbnail = :gambar_thumbnail WHERE id = :id";
    }

    $this->db->query($query);

    $this->db->bind('category_id', $data['category_id']);
    $this->db->bind('judul_artikel', $data['judul_artikel']);
    $this->db->bind('slug', $data['slug']);
    $this->db->bind('konten_artikel', $data['konten_artikel']);
    $this->db->bind('penulis', $data['penulis']);
    $this->db->bind('tanggal_rilis', $data['tanggal_rilis']);
    $this->db->bind('lokasi_penulis', $data['lokasi_penulis']);
    $this->db->bind('status', $data['status']);
    $this->db->bind('id', $data['id']);

    if ($fileName != null) {
      $this->db->bind('gambar_thumbnail', $fileName);
    }

    $this->db->execute();
    return $this->db->rowCount();
  }

  public function deleteBlogData($id)
  {
    $this->db->query("DELETE FROM blog WHERE id = :id");
    $this->db->bind('id', $id);
    $this->db->execute();

    return $this->db->rowCount();
  }

  public function getPublishedBlogs()
  {
    $this->db->query("SELECT blog.*, blog_categories.nama_kategori FROM blog LEFT JOIN blog_categories ON blog.category_id = blog_categories.id WHERE blog.status = 'published' ORDER BY blog.tanggal_rilis DESC");

    return $this->db->resultSet();
  }

  public function getBlogBySlug($slug)
  {
    $this->db->query("SELECT blog.*, blog_categories.nama_kategori FROM blog LEFT JOIN blog_categories ON blog.category_id = blog_categories.id WHERE blog.slug = :slug AND blog.status = 'published'");

    $this->db->bind('slug', $slug);

    return  $this->db->single();
  }
}
