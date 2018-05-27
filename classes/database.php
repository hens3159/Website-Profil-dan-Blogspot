<?php
class database{

private static $INSTANCE = null;
private $Mysqli,
        $HOST ='localhost',
        $USER ='root',
        $PASS = '',
        $DBNAME ='co';

public function  __construct()
{
  $this->mysqli = new mysqli ($this->HOST, $this->USER, $this->PASS, $this->DBNAME);
  if(mysqli_connect_error()) {
    die ('gagal koneksinya');
  }
}

/*
singleton pattern,
menguji koneksi agar tidak double pada class
*/
  public static function getInstance(){
  if (!isset(self::$INSTANCE)){
    self::$INSTANCE = new database();
  }
  return self::$INSTANCE;
}

public function get_pengaturan($table){
$query = "SELECT * FROM $table";
$result = $this->mysqli->query($query);
$row = $result->fetch_assoc();
return $row;
}

public function get_all($table){
$query = "SELECT * FROM $table";
$result = $this->mysqli->query($query);
while ($row = $result->fetch_assoc()){
$results[] = $row;
}
return $results;
}

public function get_all_limit($table, $id){
$query = "SELECT * FROM $table ORDER BY $id DESC LIMIT 5";
$result = $this->mysqli->query($query);
     while ($row = $result->fetch_assoc()){
$results[] = $row;
}
return $results;
}

public function get_count($table){
$query = "SELECT * FROM $table";
$result = $this->mysqli->query($query);

$row = $result->num_rows;
return $row;
}

public function get_port($table, $table2, $_id, $file1, $file2, $fields=array() )
{

  $keys = array_values($fields);
  $nilai = implode(", ",$keys);
  $query = "SELECT $nilai
            FROM $table
            INNER JOIN $table2 ON $table.$file1 = $table2.$file2
            ORDER BY $_id DESC";

// print_r($query);
// die();
$result = $this->mysqli->query($query);
$num = $result->num_rows;

if ($num!=0){
while ($row = $result->fetch_assoc()){
$results[] = $row;
}
return $results;
}
else {echo "database kosong";}

}

public function get_blog($table, $table2, $_id, $file1, $file2, $limit, $fields=array() )
{
  $keys = array_values($fields);
  $nilai = implode(", ",$keys);
  $query = "SELECT $nilai
            FROM $table
            INNER JOIN $table2 ON $table.$file1 = $table2.$file2
            ORDER BY $_id DESC LIMIT $limit";
//die($query);
$result = $this->mysqli->query($query);
$num = $result->num_rows;

if ($num!=0){
while ($row = $result->fetch_assoc()){
$results[] = $row;
}
return $results;
}
else {echo "database kosong";}
}


public function get_port_id($table, $id, $_id){
$query = "SELECT * FROM $table WHERE $id = $_id";
$result = $this->mysqli->query($query);
while ($row = $result->fetch_assoc()){
$results[] = $row;
}
return $results;
}


public function insert ($table, $fields = array())
{
$kolom = implode(", ", array_keys($fields));
$keys = array_values($fields);
$nilai = implode(", ",$keys);
$nilai=json_encode($keys);
$nilai=str_replace(array('[', ']'), '', htmlspecialchars(json_encode($keys), ENT_NOQUOTES));

$query = "INSERT INTO $table ($kolom) values ($nilai)";
//die($query);
return $this->run_query($query, 'masalah memasukan data');

}


public function update($table, $fields=array(), $id, $id_port )
{
$i=0;
  foreach ($fields as $key=>$value) {
   $nilai[$i] = $key. "="."'".$value."'";
  $i++;
  }
  $values = implode(", ", $nilai);

$query = "UPDATE $table SET $values WHERE $id = $id_port";
//die($query);
return $this->run_query($query, 'masalah memasukan data');

//$query = "UPDATE tags SET judul_tag='$judul_kategori' WHERE id_tag=$id";
}

public function delete($table, $value , $file)
{
$query = "DELETE FROM $table WHERE $value = $file";
return $this->run_query($query, 'masalah memasukan data');
}

public function run_query($query, $msg)
{
  if ($this->mysqli->query($query)) return true;
  else die($msg);
}


public function escape($name) {
  return $this->mysqli->real_escape_string($name);
}



}



?>
