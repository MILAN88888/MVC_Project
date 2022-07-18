<?php
$controller='home';
$function='home';
if(isset($_GET['controller'])&&$_GET['controller']!='')
{
    $controller=$_GET['controller'];

}
if(isset($_GET['function'])&&$_GET['function']!='')
{
    $function=$_GET['function'];

}

include('controller/'.$controller.'.php');
$class=$controller.'Controller';
$obj=new $class();
$obj->$function();


?>