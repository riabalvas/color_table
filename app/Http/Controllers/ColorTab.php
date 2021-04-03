<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;


class ColorTab extends Controller
{
  
    public function color_tab()
  {
        
    $arr_tab = [];
    $fin_arr_tab = [];
    $tab = [];
    $painted_tab = [];
    $pt = [];
    $pr = "";

    $i = 1;
    for($x = 1;$x<11;$x++)
       {
        for($y=1;$y<11;$y++)
                {
                    $gen_tab = strval($x).' * '.strval($y).' = '.strval($x*$y);

                    $tab[$i] = $gen_tab ;
                   
            
            
                
                     $pt[$x][$y] = $i;
                        
                     $i++;
                     $painted_tab[$x][$y] = $gen_tab;
                } 
                
               
                
        }
        return view('welcome', ['painted_tab' => $painted_tab, 'pt' => $pt]);
    }

         
      

   } 

