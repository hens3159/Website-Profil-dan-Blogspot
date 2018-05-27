<?php class blog
{
  private $db;
    function __construct()
    {
      $this->db = database::getInstance();
    }

  public function kat()
  {
  $skill = $this->db->get_all('kategori_portofolio');
  return $skill;
  }

  public function get_blog1()
  {
  $blog = $this->db->get_blog('artikel', 'tags', 'id_artikel', 'id_kategori', 'id_tag', 3,
  $value =array ('artikel.id_artikel, artikel.judul, artikel.isi, artikel.gambar, artikel.waktu, tags.judul_tag'));
  return $blog;
  }

  public function get_blog2()
  {
  $blog = $this->db->get_blog('artikel', 'tags', 'id_artikel', 'id_kategori', 'id_tag', '3 offset 3',
  $value =array ('artikel.id_artikel, artikel.judul, artikel.isi, artikel.gambar, artikel.waktu, tags.judul_tag'));
  return $blog;
  }

  public function get_blog3()
  {
  $blog = $this->db->get_blog('artikel', 'tags', 'id_artikel', 'id_kategori', 'id_tag', '3 offset 6',
  $value =array ('artikel.id_artikel, artikel.judul, artikel.isi, artikel.gambar, artikel.waktu, tags.judul_tag'));
  return $blog;
  }

    public static function excerpt ($string) {
    $string = substr($string, 0, 146);
    return $string .'...';
  }

  public static function excerpt_judul ($string) {
  $string = substr($string, 0, 45);
  return $string .'...';
}

public function blog_count()
{
$skill = $this->db->get_count('artikel');
return $skill;
}

}
?>
