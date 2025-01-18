<?php
namespace Mhshuvo\Hello;
use Mhshuvo\Hello\Interface\ApiInterface;

class Api implements ApiInterface{

    private function getData(){
        return "Hello World";
    }
    public function render(){
        return $this->getData();
    }

}