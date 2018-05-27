<?php
class portofolio
{
  private $db;
    function __construct()
    {
      $this->db = database::getInstance();
    }

  public function input_kategori($fields = array())
  {
  if ($this->db->insert('kategori_portofolio', $fields)) return true;
  else return false;
  }

  public function input_portofolio($fields = array())
  {
  if ($this->db->insert('portofolio', $fields)) return true;
  else return false;
  }

  public function list_kategori()
  {
  $skill = $this->db->get_all('kategori_portofolio');
  return $skill;
  }

  public function get_edit_kategori()
  {
  $port = $this->db->get_all('kategori_portofolio');
  return $port;
  }

  public function edit_kategori_id($id)
  {
  $port = $this->db->get_port_id('kategori_portofolio', 'id_kategori', $id);
  return $port;
  }

  public function update_kategori($fields=array(), $id_kategori)
  {
  if ($this->db->update('kategori_portofolio', $fields, 'id_kategori', $id_kategori)) return true;
  return false;
  }

  public function delete_kategori($file)
  {
    if ($this->db->delete('kategori_portofolio', 'id_kategori', $file)) return true;
    else return false;
  }

  public function portofolio()
  {
  $port = $this->db->get_port('portofolio', 'kategori_portofolio', 'id_portofolio', 'kategori', 'id_kategori',
  $value =array ('portofolio.id_portofolio', 'portofolio.judul_port', 'portofolio.gambar', 'portofolio.deskripsi', 'kategori_portofolio.judul'));
  return $port;
  }

  public function delete($file)
  {
    if ($this->db->delete('portofolio', 'id_portofolio', $file)) return true;
    else return false;
  }

  public function get_edit_portofolio($file)
  {
  $port = $this->db->get_port_id('portofolio', 'id_portofolio', $file);
  return $port;
  }

  public function edit_portofolio($fields=array(), $id_port)
  {
  if ($this->db->update('portofolio', $fields, 'id_portofolio', $id_port))return true;
  return false;
  }

  public function edit_portofolio1($fields=array(), $id_port)
  {
  if ($this->db->update('portofolio', $fields, 'id_portofolio', $id_port))return true;
  return false;
  }

  public function get_count_portofolio()
  {
  $skill = $this->db->get_count('portofolio');
  return $skill;
  }
}
?>
