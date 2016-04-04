<?php

class Example extends \Docnet\SAC\Controller
{
    public function dispatch(){
        $this->setResponse(['test' => TRUE]);
    }
}