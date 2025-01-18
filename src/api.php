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
    public function getFlightsInJson(){
        $fileContents = file_get_contents(__DIR__."/data/flights.json");
        $flights = json_decode($fileContents,true);
        return $flights;
    }

}