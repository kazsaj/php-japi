<?php

class ProtectedFunctions extends \Docnet\SAC\Controller
{

    public function dispatch(){
        $this->setResponse(true);
    }


    public function getIsPost() {
        return $this->isPost();
    }
}