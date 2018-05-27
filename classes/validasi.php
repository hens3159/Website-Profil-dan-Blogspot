<?php
class validasi
{
//ini akan berubah menjadi true jika errornya tidak ada
private $_passed = false,
//type data array karena bisa lebih dari satu, jadi errornya bisa bertambah
       $_errors = array();

  public function cek($items = array())
  {
    //foreach dua kali karena untuk mengambil data yang paling dalam
    foreach ($items as $item => $rules) {
      foreach ($rules as $rule => $rule_value) {
//karena ini akan menguji arrary yg di dalam
        switch ($rule){
          case 'required':
          //kenapa ini menggunakan item karena ia ada dikunci yang dibagian sebelah kiri yaitu username
          if ( trim(input::get($item)) == false && $rule_value == true) {
            $this->addError("$item wajib diisi");
          }
          break;
          default:
          break;
        }
      }
    } //end first foreach
    if(empty($this->_errors)){
      $this->_passed = true;
    }
    return $this;
  }
//untuk menambahkan errornya
//private digunakan karena hanya akan dipakai di dalam
  private function addError($error) {
    //penggunaan [] karena array akan ditumpuk didalamnya
    $this->_errors[] = $error;
  }
//fungsi untuk mengemablikan error
public function errors() {
  return $this->_errors;
}
//mengui apakah ada error
public function passed(){
  return $this->_passed;
}

}


 ?>
