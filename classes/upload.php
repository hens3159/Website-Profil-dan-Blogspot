<?php
class upload
{

public $nama;
public $namafile;
private $_format = ['image/png','image/jpeg','image/jpg', 'image/gif'];

public function uploadfile($file)
{

  $nama_file = $file['name'];
  $type_file = $file['type'];
  $hen = in_array($type_file, $this->_format);
  $time = time();
  $namafile = $nama_file;

//perhitungan dalam bytes jadi total 5 mb
$_size = round(500000/1024)*100000;

  if (is_array($file)){
//filter size
  if ($file['size'] <= $_size){


    if ($hen) {

      switch ($hen){
        case ($type_file =='image/jpeg'):
        $namafile = str_replace(".jpg", "", $namafile);
        $namafile = $namafile. "_". $time . ".jpg";
        break;

        case ($type_file =='image/jpg'):
        $namafile = str_replace(".jpg", "", $namafile);
        $namafile = $namafile. "_". $time . ".jpg";
        break;

        case ($type_file =='image/png'):
        $namafile = str_replace(".png", "", $namafile);
        $namafile = $namafile. "_". $time . ".png";
        break;

        case ($type_file =='image/gif'):
        $namafile = str_replace(".gif", "", $namafile);
        $namafile = $namafile. "_". $time . ".gif";
        break;
        default:
        break;
      }
      move_uploaded_file($file['tmp_name'],'../asset/image/'. $namafile);
      //cho "masuk";
    }else {echo "file tidak support";}//else is_array
  }else {echo "file tidak di upload";}//else file memasukan file
}else {echo"file anda terlalu besar";}//else file size

$this->nama = $file;
}
//
public function koko(){
$nama_file = $this->nama['name'];
$type_file = $this->nama['type'];
$hen = in_array($type_file, $this->_format);
$time = time();
$namafile = $nama_file;

switch ($hen){
  case ($type_file =='image/jpeg'):
  $namafile = str_replace(".jpg", "", $namafile);
  $namafile = $namafile. "_". $time . ".jpg";
  break;

  case ($type_file =='image/jpg'):
  $namafile = str_replace(".jpg", "", $namafile);
  $namafile = $namafile. "_". $time . ".jpg";
  break;

  case ($type_file =='image/png'):
  $namafile = str_replace(".png", "", $namafile);
  $namafile = $namafile. "_". $time . ".png";
  break;

  case ($type_file =='image/gif'):
  $namafile = str_replace(".gif", "", $namafile);
  $namafile = $namafile. "_". $time . ".gif";
  break;

  default:
  break;
}

// if ($hen){
// if ($type_file == 'image/jpeg')  {
// $namafile = str_replace(".jpg", "", $namafile);
// $namafile = $namafile. "_". $time . ".jpg";
// }elseif ($type_file == 'image/png') {
// $namafile = str_replace(".png", "", $namafile);
// $namafile = $namafile. "_". $time . ".png";
// }elseif ($type_file == 'image/gif') {
// $namafile = str_replace(".gif", "", $namafile);
// $namafile = $namafile. "_". $time . ".gif";
//  }
// }
// $this->namafile=$file;
// return $this ;
// }
return $namafile;
}


}
?>
