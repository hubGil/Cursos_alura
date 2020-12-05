<?php

namespace Alura\Solid\Service;

use Alura\Solid\Model\AluraMais;
use Alura\Solid\Model\Curso;

class Assistidor
{
    public function assiteCurso(Curso $curso)
    {
        foreach ($curso->recuperarVideo() as $video){
            $video->assistir();
        }
    }

    public function assiteAluraMais(AluraMais $aluraMais)
    {
        $aluraMais->assistir();
    }
}