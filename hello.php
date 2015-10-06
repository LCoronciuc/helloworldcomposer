<?php

require 'vendor/autoload.php';

class Hello
{
    public $faker;


    /**
     * Hello constructor.
     */
    public function __construct()
    {
        $this->faker = Faker\Factory::create();
    }

    public function say_hello()
    {
        echo "Hola " .$this->faker->name . "!\n";
    }
}