<?php

class InscripView
{
    public function mostrar($equipos)
    {
        $count = count($equipos);

        // mostrar el template
        require 'templates/table.phtml';
    }

    public function Error($error)
    {
        require 'templates/error.phtml';
    }
}
