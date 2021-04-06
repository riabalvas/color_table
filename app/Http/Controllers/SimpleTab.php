<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;


class SimpleTab extends Controller
{
    
   
    public function simple_tab()
    {
        
    
    $tab = [];
    $i = 1;
    for($x = 1;$x<11;$x++){
        for($y=1;$y<11;$y++){
            $gen_tab = strval($x).' * '.strval($y).' = '.strval($x*$y);
            $tab[$i] = $gen_tab ;
            $sq_tab[$x][$y] = $gen_tab ;
            $i++;

        }
    }

    // var_dump($tab);
  return view('welcome', ['tab' => $tab, 'sq_tab' => $sq_tab,'print_form' => "false"]);

}
}