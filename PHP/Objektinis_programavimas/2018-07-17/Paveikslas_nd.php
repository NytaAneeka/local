<?php

class Paveikslas_nd
{
    public function getPic ($url,$width,$length){
        $img = "<img src='$url' width='$width' height='$length'>";
        return $img;
    }
}