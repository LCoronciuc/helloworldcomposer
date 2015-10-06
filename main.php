<?php

require __DIR__ . "hello.php";

require __DIR__ . "vendor/autoload.php";

$greetings = new hello();

$greetings->say_hello();