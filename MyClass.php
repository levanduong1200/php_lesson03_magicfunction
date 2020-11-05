<?php
class MyClass{
    public function __construct(...$args) 
{
    var_dump($args);
}
public function __destruct()
{
    echo 'khi doi tuong bi huy';
}
public function __set($key, $value){

    echo "key: $key - value: $value"; 
}
}



?>