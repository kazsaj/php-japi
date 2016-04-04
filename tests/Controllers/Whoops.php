<?php

class Whoops extends \Docnet\SAC\Controller
{
    public function dispatch(){
        throw new Exception;
    }
}