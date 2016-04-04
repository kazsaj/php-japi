<?php

class Exceptional extends \Docnet\SAC\Controller
{
    public function dispatch(){
        throw new RuntimeException('Error Message', 400);
    }
}