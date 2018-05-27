<?php
/**
 *
 */
class pengaturan
{
private $db;
  function __construct()
  {
    $this->db = Database::getInstance();
  }

public function slide()
{
$slide=$this->db->get_pengaturan('pengaturan');
return $slide;
}

public function input_pengaturan($fields = array())
{
if ($this->db->insert('pengaturan', $fields)) return true;
else return false;
}

public function input_sosmed($fields = array())
{
if ($this->db->insert('sosial_media', $fields)) return true;
else return false;
}

}





?>
