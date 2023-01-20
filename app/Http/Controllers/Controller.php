<?php


use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Http;



        $response = Http::get('https://thesimpsonsquoteapi.glitch.me/quotes?count=50');
        $cont = 0;
        $objetos = json_decode($response);
        foreach($objetos as $objeto){
            $imagen = $objeto->image;
            echo $objeto->character;
            echo "<div class = 'imagenes' > <img src= '$imagen'  > </div> ";
            $cont++;
            if($cont == 3){
                $cont = 0;
                echo "<br>";
            }
        }
