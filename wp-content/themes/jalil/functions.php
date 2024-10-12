<?php
// a basic function
function jalil_say_hello()
{
    echo 'Hello World';
}

// a pluggable function
if (!function_exists('jalil_say_hello')) {
    function jalil_say_hello()
    {
        echo "I'm not in a good mood today. I'm not going to say hello.";
    }
}