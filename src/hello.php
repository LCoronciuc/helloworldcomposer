<?php

namespace Com\Iesebre\Dam2\liviucoronciuc\helloworldcomposer;

use Faker\Factory;

class Hello
{
    public $faker;

    /**
     * Hello constructor.
     */
    public function __construct()
    {
        $this->faker = Factory::create();
    }

    public function say_hello()
    {
        echo "Hola " .$this->faker->name . "!\n";
    }
}