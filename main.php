<?php

require __DIR__ . "/vendor/autoload.php";

use Com\Iesebre\Dam2\liviucoronciuc\helloworldcomposer;

$greetings = new helloworldcomposer\Hello();

$greetings->say_hello();