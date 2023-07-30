<?php

namespace PhpComposer\Data;

class People
{

    public function  __construct(private string $name)
    {
    }

    public function sayHello(string $name): void
    {
        echo "Hello $name, My Name is $this->name";
    }

}