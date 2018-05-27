<?php
/**
 *
 */
class redirect
{

  public static function to ($lokasi)
  {
   header ('Location:'.$lokasi.'.php');
  }
}



 ?>
