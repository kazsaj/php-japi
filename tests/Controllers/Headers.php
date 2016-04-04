<?php

class Headers extends \Docnet\SAC\Controller
{
    public function dispatch(){
        $this->setResponse($this->getHeaders());
    }
}