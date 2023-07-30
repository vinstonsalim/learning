<?php

namespace Inspekturapink\PhpMvc\Controller;

class HomeController
{
    public function index(): void
    {
        echo "HomeController.index()";
    }

    function hello(): void
    {
        echo "HomeController.hello()";
    }

    function world(): void
    {
        echo "HomeController.world()";
    }

    function about(): void
    {
        echo "Hallo, mein Name ist Inspekturapink und PHP ist meine beliebteste Programmiersprache.";
    }

}