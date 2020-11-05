<?php 
include "MyClass.php";
$hello = new  MyClass(array(
    'username' => 'Van B',
    'email' => 'vanb11@gmail.com',
    'password' => '123456'
));
$hello->name = "MyName";
$hello->name;
 
isset($helle->name);
unset($hello->name);


?>