<?php
class homeController
{
    function __construct()
    {   include('model/home.php');
       $this->obj=new homeModel();
    }
    function home()
    {
    $arr=$this->obj->home();
    include('view/header.php');
    include('view/page.php');
    include('view/footer.php');

    }
    function about()
    {   $arr=$this->obj->about();
        include('view/header.php');
        include('view/page.php');
        include('view/footer.php');

    }
    function contact()
    {   $arr=$this->obj->contact();
        include('view/header.php');
        include('view/page.php');
        include('view/footer.php');
    }

}



?>