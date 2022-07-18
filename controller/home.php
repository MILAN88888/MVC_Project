<?php
class homeController
{
    function __construct()
    {
       //
    }
    function home()
    {
    include('view/header.php');
    include('view/page.php');
    include('view/footer.php');

    }
    function about()
    {
        include('view/header.php');
        include('view/about.php');
        include('view/footer.php');

    }
    function contact()
    {
        include('view/header.php');
        include('view/contact.php');
        include('view/footer.php');
    }

}



?>