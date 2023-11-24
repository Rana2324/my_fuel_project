<?php

use Fuel\Core\Controller;

class Controller_ModuleC extends Controller
{
    public function action_index()
    {
        return Response::forge('Module 1 Home');
    }

    public function action_route1()
    {
        return Response::forge('Route 1 of Module 1');
    }
}