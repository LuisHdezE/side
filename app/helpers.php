<?php

    function avatar(){
        return auth()->user()->profile->avatar;
    }

function miNombre(){
  $nombre = "Luisito";
  return $nombre;
}
