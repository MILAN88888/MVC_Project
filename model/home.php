<?php
class homeModel
{
    function __construct()
    {
        include('connection.php');
        $this->db=new db();
        $this->conn=$this->db->getConnection();
    }
    function home()
    {   $qry="SELECT * FROM data WHERE id='1'";
        $result=mysqli_query($this->conn,$qry);
        $num=mysqli_num_rows($result);
        if($num>0)
        {
            $arr=mysqli_fetch_assoc($result);
            return $arr;
        }
    }
    function about()
    {
        $qry="SELECT * FROM data WHERE id='2'";
        $result=mysqli_query($this->conn,$qry);
        $num=mysqli_num_rows($result);
        if($num>0)
        {
            $arr=mysqli_fetch_assoc($result);
            return $arr;
        }
    }

    function contact()
    {
        $qry="SELECT * FROM data WHERE id='3'";
        $result=mysqli_query($this->conn,$qry);
        $num=mysqli_num_rows($result);
        if($num>0)
        {
            $arr=mysqli_fetch_assoc($result);
            return $arr;
        }
    }

}


?>