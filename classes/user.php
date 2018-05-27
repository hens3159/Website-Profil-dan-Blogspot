<?php
/**
 *
 */
class user
{
private $db;
  function __construct()
  {
    $this->db = database::getInstance();
  }

public function tampil_profil()
{
$profil = $this->db->get_pengaturan('profil');
return $profil;
}

public function pendidikan()
{
$pendidikan = $this->db->get_pengaturan('sekolah');
return $pendidikan;
}

public function pekerjaan()
{
$pekerjaan = $this->db->get_all_limit('pekerjaan', 'id_pekerjaan');
return $pekerjaan;
}

public function skill()
{
$skill = $this->db->get_all('skill', 'id_skill');
return $skill;
}

public function sosmed()
{
$data = $this->db->get_pengaturan('sosial_media');
return $data;
}

public function input_pengalaman($fields = array())
{
if ($this->db->insert('pekerjaan', $fields)) return true;
else return false;
}

public function input_skill($fields = array())
{
if ($this->db->insert('skill', $fields)) return true;
else return false;
}
public function input_pendidikan($fields = array())
{
if ($this->db->insert('sekolah', $fields)) return true;
else return false;
}

public function input_profil($fields = array())
{
  // print_r ($fields);
  // die();
  if ($this->db->insert('profil', $fields)) return true;
  else return false;
}
}


?>
