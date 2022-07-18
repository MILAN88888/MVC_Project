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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>S-mart</title>
</head>
<body>
    
</body>
</html>