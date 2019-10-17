<?php
namespace App\Utils;

class ConvertisseurTexte{

  public function convertion($nombre, $basedepart, $basearriver){
    if($basedepart == '2')
    {
      $result= 0;
      $tableau = strrev($nombre);
      for($i = 0; $i<strlen($tableau); $i++)
      {
        $result = $result + $tableau[$i]*pow(2, $i);
      }
    return $result;
    }
    
    else{
      $result= 0;
      if($basedepart == '10')
      {
        if ($nombre == 0)
        {
          return '0';
        }
      }
      $result='';
      while($nombre > 0)
      {
        $result.=$nombre%2;
        $nombre = floor($nombre/2);
      }
      return strrev($result);
    }
  }


}

?>