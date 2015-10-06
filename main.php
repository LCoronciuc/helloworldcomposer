<?php

require "hello.php";

require "vendor/autoload.php";

$greetings = new hello();

$greetings->say_hello();