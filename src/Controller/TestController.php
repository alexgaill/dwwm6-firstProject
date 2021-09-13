<?php
namespace App\Controller;

class TestController {

    public function hello()
    {
        $text = "<h1>Hello World!</h1>";
        return $text;
    }
}