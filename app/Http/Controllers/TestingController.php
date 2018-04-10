<?php

namespace App\Http\Controllers;

class TestingController extends Controller
{
    public function __construct($name)
    {
        $this->name = $name;
    }

    public function index($id)
    {
        return 'hello';
    }

    public function hello(){
        return 'asd';
    }
}
